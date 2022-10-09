<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass =  $_POST['password'];
    if($username == 'user' AND $pass == '54321'){
        session_start();
        $_SESSION['BERHASIL']=TRUE;
        header("Location: page_user.html");
    } else{
        $salah = "<p style='color:red; text-align:center'>Invalid login Masbroo</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN'S SIGN IN</title>
    <link rel="stylesheet" type="text/css"  href="style_login.css">
</head>
<body>
    
    <div class="box">
        <div class = "icon"><img src="iconlogin1.png" width=300px height=300px></div>
            <p class="p">USER'S SIGN IN </p>
            <?php echo $salah;?>
                <form action="" method="post">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter Your Username" name="username"><br>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" placeholder="Enter Your Password" name="password"><br><br>
                        <button class="btn" type="submit" name="login">Log IN</button>
                    </div>
                    
                    
                </form>
                
        </div>
    </div>


</body>
</html>