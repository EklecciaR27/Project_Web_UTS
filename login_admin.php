<?php
error_reporting(0);
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass =  $_POST['password'];
    if($username == 'admin' AND $pass == '12345'){
        session_start();
        $_SESSION['BERHASIL']=TRUE;
        header("Location: page_admin.php");
    } else{
        $salah = "<p style='color:red; text-align:center'>Invalid Password or ID!</p>";
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
    <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body>
    
    <div class="box">
        <div class = "icon"><img src="iconlogin1.png" width=300px height=300px></div>
            <p class="p">SIGN IN ADMIN</p>
            
                <form action="" method="post">
                    <div class="input-box">
                        <span class='details'>Username</span>
                        <input type="text" placeholder="Enter Your ID" name="username"><br>
                    </div>
                    <div class="input-box">
                        <span class='details'>Password</span>
                        <input type="text" placeholder="Enter Your Password" name="password"><br>
                        <br>
                    </div>
                    <button class="btn" type="submit" name="login">Log IN</button>
                </form>
                <?php echo $salah;?>    
        </div>
    </div>


</body>
</html>