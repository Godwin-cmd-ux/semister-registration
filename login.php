<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #fcb69f;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            background-color: #fcb69f;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #eea27c;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            text-decoration: none;
            color: #555;
            transition: 0.3s;
        }

        .link a:hover {
            color: #f77b55;
        }

        .alert {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🔐 User Login</h2>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>
        <button type="button" onclick="window.location.href='signup.php'">Create New Account</button>

        <div class="link">
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </form>

    <?php
    include_once("connect.php");

    if (isset($_POST['login'])) {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $food = "";
        $hobby = "";

        $pull = "SELECT food, hobby FROM login WHERE username=? AND password=?";
        $attach = $jacky->prepare($pull);
        $attach->bind_param('ss', $Username, $Password);
        $attach->execute();
        $attach->bind_result($food, $hobby);
        $attach->fetch();
        $attach->close();

        if (empty($food)) {
            echo "<div class='alert'>❌ Username or password is incorrect.</div>";
        } else {
            echo "<script>
                alert('✅ Login successful!');
                window.location.href='Natural01.html';
            </script>";
        }
    }
    ?>
</div>

</body>
</html>
