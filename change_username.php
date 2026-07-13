<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Username</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f6d365, #fda085);
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
            border-color: #fda085;
            outline: none;
        }

        button {
            background-color: #fda085;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #f08460;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>✏️ Change Username</h2>
    <form action="" method="POST">
        <input type="text" name="pwd" placeholder="Enter old username"><br>
        <input type="text" name="passwd" placeholder="Enter new username"><br>
        <button type="submit" name="creat">Change</button>
    </form>
</div>

<?php  
include_once('connect.php');   
if(isset($_POST['creat'])){  
    $old_username = $_POST['pwd'];  
    $new_username = $_POST['passwd'];  

    $query = "SELECT count(*) FROM login WHERE username=?";  
    $pin = $jacky->prepare($query);  
    $pin->bind_param('s', $old_username);  
    $pin->execute();  
    $pin->bind_result($result);  
    $pin->fetch();  
    $pin->close();  

    $query = "SELECT count(*) FROM login WHERE username=?";  
    $pin = $jacky->prepare($query);  
    $pin->bind_param('s', $new_username);  
    $pin->execute();  
    $pin->bind_result($result2);  
    $pin->fetch();  
    $pin->close();  

    if($result > 0){  
        if($result2 == 0 || $old_username == $new_username){  
            $query = "UPDATE login SET username=? WHERE username=?";  
            $attach = $jacky->prepare($query);  
            $attach->bind_param('ss', $new_username, $old_username);  
            $attach->execute();  
            $attach->close();  
            echo "<script>alert('Username changed successfully!')</script>";  
        } else {  
            echo "<script>alert('This username already exists. Please choose another.')</script>";  
        }  
    } else {  
        echo "<script>alert('Incorrect old username')</script>";  
    }  
}
?> 

</body>
</html>
