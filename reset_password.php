<!DOCTYPE html>
<html>
    <head><title>reset_password</title></head>
    <body>
        <h2>reset_password</h2>
        <form action="" method="POST">
            Enter new_password:<input type="password" name="pwd">
            Confirm new_password:<input type="passwoed" name="passwd">
            <span <?php echo $conf_error; ?>></span>
            <button type="submit" name="reset">reset</button>
        </form>
        <?php
        include_once('connect.php');
        include_once('forgot_password.php');
        if(isset($_POST['reset'])){
            $new_pass=$_POST['pwd'];
            $conf_pass=$_POST['passwd'];
             $conf_error= "";
            $query="UPDATE login SET password=? WHERE username=?";
            $attach=$jacky->prepare($query);
            if($new_pass==$conf_pass){
                $attach->bind_param('ss',$new_pass,$username);
                $attach->execute();
                $attach->close();
                echo"<script>alert('message reset successfuly')</scrip>";
            }
            else{
                $conf_error='check the confirmed password';
            }

                
            }
        ?>
    </body>
    </html>
