<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recovery Code</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #a6c1ee;
            outline: none;
        }

        button {
            background-color: #a6c1ee;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #879ecf;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>🔐 Recovery Code Update</h2>
    <form action="" method="POST">
        <input type="text" name="food" placeholder="Enter your old favourite food"><br>
        <input type="text" name="foody" placeholder="Enter your new favourite food"><br>
        <input type="text" name="hobby" placeholder="Enter your old hobby"><br>
        <input type="text" name="hobbyy" placeholder="Enter your new hobby"><br>
        <button type="submit" name="update">Update</button>
    </form>
</div>

<?php
include_once("connect.php");

if(isset($_POST['update'])){
    $Old_food = $_POST['food'];
    $New_food = $_POST['foody'];
    $Old_hobby = $_POST['hobby'];
    $New_hobby = $_POST['hobbyy'];

    $query = "SELECT count(*) FROM login WHERE food=? AND hobby=?";
    $pin = $jacky->prepare($query);
    $pin->bind_param('ss', $Old_food, $Old_hobby);
    $pin->execute();
    $pin->bind_result($result);
    $pin->fetch();
    $pin->close();

    if($result > 0){
        $frank = "UPDATE login SET food=?, hobby=? WHERE food=? AND hobby=?";
        $chriss = $jacky->prepare($frank);
        $chriss->bind_param('ssss', $New_food, $New_hobby, $Old_food, $Old_hobby);
        $chriss->execute();
        $chriss->close();
        echo "<script>alert('Your recovery code updated successfully!')</script>";
    } else {
        echo "<script>alert('Old food or hobby is incorrect. Please try again!')</script>";
    }
}
?>
</body>
</html>
