<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Page</title>
    <style>
        body {
            background: linear-gradient(135deg, #ffe0b2, #ffcc80);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            width: 380px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: 0.2s;
        }

        input:focus {
            border-color: #ff9800;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #e68900;
        }

        .alert {
            text-align: center;
            margin-top: 10px;
            color: red;
        }

        .success {
            text-align: center;
            margin-top: 10px;
            color: green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📝 Sign Up Here</h2>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="user" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="food">Favorite Food</label>
        <input type="text" name="food" required>

        <label for="hobby">Your Hobby</label>
        <input type="text" name="hobby" required>

        <button type="submit" name="signup">Sign Up</button>
    </form>
</div>

<?php
include_once('connect.php');

if (isset($_POST['signup'])) {
    $Username = $_POST['user'];
    $Password = $_POST['password'];
    $Food = $_POST['food'];
    $Hobby = $_POST['hobby'];

    // Check if username exists
    $query = "SELECT count(*) FROM login WHERE username=?";
    $attach = $jacky->prepare($query);
    $attach->bind_param('s', $Username);
    $attach->execute();
    $attach->bind_result($frank);
    $attach->fetch();
    $attach->close();

    if ($frank > 0) {
        echo "<script>alert('This username already exists. Please try another.');</script>";
    } else {
        $query = "INSERT INTO login (username, password, food, hobby) VALUES (?, ?, ?, ?)";
        $attach = $jacky->prepare($query);
        $attach->bind_param('ssss', $Username, $Password, $Food, $Hobby);
        if ($attach->execute()) {
            echo "<script>alert('✅ Signup successful! Redirecting to login...'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";
        }
        $attach->close();
    }
}
?>

</body>
</html>
