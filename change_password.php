<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
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
            width: 350px;
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

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="password"]:focus {
            border-color: #66a6ff;
            outline: none;
        }

        button {
            background-color: #66a6ff;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4e8fd1;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>🔐 Change Password</h2>
    <form action="" method="POST">
        <input type="password" name="pwd" placeholder="Enter old password"><br>
        <input type="password" name="passwd" placeholder="Enter new password"><br>
        <input type="password" name="confirm" placeholder="Confirm new password"><br>
        <button type="submit" name="creat">Change</button>
    </form>
</div>

<?php
    include_once('connect.php');
    if(isset($_POST['creat'])){
        $old_pass = $_POST['pwd'];
        $new_pass = $_POST['passwd'];
        $conf_pass = $_POST['confirm'];

        $query = "SELECT count(*) FROM login WHERE password=?";
        $pin = $jacky->prepare($query);
        $pin->bind_param('s', $old_pass);
        $pin->execute();
        $pin->bind_result($result);
        $pin->fetch();
        $pin->close();

        if($result > 0){
            if($new_pass == $conf_pass){
                $query = "UPDATE login SET password=? WHERE password=?";
                $attach = $jacky->prepare($query);
                $attach->bind_param('ss', $new_pass, $old_pass);
                $attach->execute();
                $attach->close();
                echo "<script>alert('Password changed successfully!')</script>";
            } else {
                echo "<script>alert('New passwords do not match!')</script>";
            }
        } else {
            echo "<script>alert('Old password is incorrect!')</script>";
        }
    }
?>
</body>
</html>
