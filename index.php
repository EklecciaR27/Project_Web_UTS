<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>SIGN IN</title>
<style>
body{
    background-color: black;
    position: relative;
}

.box{
    position: fixed;
    margin-top: 3%;
    margin-left: 30%;
    border-radius: 30px;
    background-color:rgb(255, 255, 255);
    width : 500px;
    height: 500px;
}

button{
    border-radius: 20px;
	background-color:  #df36b7;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 20px;
    margin-left: 20%;
	letter-spacing: 1px;
	text-transform: uppercase;

}

.icon{
    align-items: center;
    padding-left: 11%;
}

.p{
    position: absolute;
    padding-top:65%;
    padding-left:36%;
    font-size : 20px;
    font-family : Georgia, 'Times New Roman', Times, serif;

}
</style>
</head>

<body>

<div class="box">
    <p class='p'>LOGIN AS A ...</p>
    <div class="icon">
        <img src="whoareu.png" width="400px" height="400px">
    </div>
        <a href='login_admin.php'>
            <button>Admin</button>
        </a>

        <a href='login_user.php'>
            <button>User</button>
        </a>
    </div>
</div>
</body>
</html>