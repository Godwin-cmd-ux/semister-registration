<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hotel_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomId = $_POST["room_id"];

    // Fetch price for the selected room
    $stmt = $conn->prepare("SELECT room_name, room_type, price, hotel_id FROM rooms WHERE room_id = ?");
    $stmt->bind_param("i", $roomId);
    $stmt->execute();
    $result = $stmt->get_result();
    $room = $result->fetch_assoc();

    if ($room) {
        $roomName = $room['room_name'];
        $roomType = $room['room_type'];
        $price = $room['price'];
        $hotelId = $room['hotel_id'];

        if (isset($_POST["calculate"])) {
            echo "<p>Estimated Price for $roomName ($roomType): $" . $price . "</p>";
        }

        if (isset($_POST["book"])) {
            // Insert booking record
            $stmt = $conn->prepare("INSERT INTO bookings (room_id, hotel_id, price) VALUES (?, ?, ?)");
            $stmt->bind_param("iid", $roomId, $hotelId, $price);
            if ($stmt->execute()) {
                echo "<p>Booking confirmed for $roomName ($roomType) at $$price!</p>";
            } else {
                echo "<p>Error: " . $stmt->error . "</p>";
            }
        }
    } else {
        echo "<p>Room not found!</p>";
    }
}

// Fetch all rooms for dropdown
$rooms = $conn->query("SELECT room_id, room_name, room_type FROM rooms ORDER BY room_name");
?>

<form method="POST">
    <label>Select Room:</label>
    <select name="room_id">
        <?php while ($row = $rooms->fetch_assoc()) { ?>
            <option value="<?php echo $row['room_id']; ?>">
                <?php echo $row['room_name'] . " (" . $row['room_type'] . ")"; ?>
            </option>
        <?php } ?>
    </select>

    <br><br>
    <button type="submit" name="calculate">Calculate</button>
    <button type="submit" name="book">Book</button>
</form>
What get_result can do
Yes 😄 — get_result() can fetch all rows, not just one, if your query matches multiple VIP rooms.

The trick is:

Don’t use $stmt->fetch_assoc() directly (that only gets one row)

Instead, loop through $stmt->get_result()


Example:

$stmt = $conn->prepare("SELECT room_id, room_name, room_type, price 
                        FROM rooms 
                        WHERE room_type = 'VIP'");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Room: " . $row['room_name'] . " | Price: $" . $row['price'] . "<br>";
    }
} else {
    echo "No VIP rooms found!";
}


---

So yes — if you have VIP01, VIP02, VIP03 all in the database, the loop will get all of them.
If you want, I can update your booking calculator so when you choose “VIP” it shows all VIP room prices instead of one.

Do you want me to make that version?


