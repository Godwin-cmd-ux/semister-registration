<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #d4fc79, #96e6a1);
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
            border-color: #96e6a1;
            outline: none;
        }

        button {
            background-color: #96e6a1;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #7acb86;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>🔑 Forgot Password</h2>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="text" name="food" placeholder="Enter favourite food"><br>
        <input type="text" name="hobby" placeholder="Enter hobby"><br>
        <button type="submit" name="confirm">Confirm</button>
    </form>
</div>

<?php
include_once("connect.php");

if(isset($_POST['confirm'])){
    $username = $_POST['username'];
    $food = $_POST['food'];
    $hobby = $_POST['hobby'];

    $query = "SELECT food, hobby FROM login WHERE username=?";
    $pin = $jacky->prepare($query);
    $pin->bind_param('s', $username);
    $pin->execute();
    $pin->bind_result($foody, $hoby);
    $pin->fetch();
    $pin->close();

    if($food == $foody && $hobby == $hoby){
        header('Location: reset_password.php');
        exit();
    } else {
        echo "<script>alert('Hobby or food don\'t match!')</script>";
    }
}
?>

</body>
</html>
