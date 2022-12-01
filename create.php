

<?php
require "config.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $pn= $_POST['pn'];
    $ticket = $_POST['ticket'];

    $result = mysqli_query($db, "INSERT INTO formpembelian (nama, email, dob, pn, ticket) 
    VALUES ('$nama', '$email', '$dob', '$pn', '$ticket')");

    if($result){
        echo " 
            <script> 
            alert('DONE Adding A Data');
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('FAILED');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PINK VENOM</title>
    <link rel="stylesheet" href="styleadminpg.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body>
    <div class="line"></div>
    <div class="logo">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9abc83cd-2de2-4604-aa71-0e16b649f129/dfb7rrf-40a1d3ef-2f25-4306-909a-a1b856f3b6ec.png/v1/fill/w_1280,h_220,strp/blackpink_pink_venom_logo_png_by_dystoca_dfb7rrf-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MjIwIiwicGF0aCI6IlwvZlwvOWFiYzgzY2QtMmRlMi00NjA0LWFhNzEtMGUxNmI2NDlmMTI5XC9kZmI3cnJmLTQwYTFkM2VmLTJmMjUtNDMwNi05MDlhLWExYjg1NmYzYjZlYy5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.jJBV4IM_EgVqzOH1g2CpeJ4xLr7CuAQYf522hOoBGiA" width="350px">
    </div>
    
    <h1 id="header1">YG ENTERTAINMENT | YOURS TICKET CONCERT PARTNER</h1>
    <nav>
        <div>
            <ul>
                <li><a class="active" href="index.php">DASHBOARD</a></li>
                <li><a href="create.php">INPUT</a></li>
                <li><a href="read.php">READ</a></li>
                <li><a href="readup.php">UPDATE</a></li>
                <li><a href="logout.php"><i class="bi bi-box-arrow-right"></i></a></li>
            </ul>
            
        </div>
    </nav>
    
    <div class="bginput">
         <img src="iconticket.png" alt="ya ini" height="500px" weight="500px">
    </div>

    <div class="p_input">
        INPUT DATA PEMBELI TIKET KONSER 
    </div>

    <div class = "formdata">
        <form method="post">
            <div class="input-box">
                Name: <br>
                <input type="text" name="nama" required><br><br>
            </div>
            <div class='input-box'>
                E-mail: <br> 
                <input type="text" name="email" required><br><br>
            </div>
            <div class='input-box'>
                Phone Number : <br>
                <input type="number" name="pn" required><br><br>
            </div>
            <div class='input-box'>
                Date Of Birth : <br>
                <input type="date" name="dob"><br><br>
            </div>
            <!-- <div class='input-box'>
                Gender : <br>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <br><br>
            </div> -->
            <div class='input-box'>
                Ticket(s) : <br>
                <input type="number" name="ticket"><br><br>
                <button class="btn" type="submit" name="submit">SUBMIT</button>
            </div>
        </form>
    </div>

    <br>
    
    <div class="tombol">
        <button class="lightmode" onclick="ubahWarna()"><img src="sun.png" height="25px" height="25px"></button>
        <button class="darkmode" onclick="ubahWarna()"><img src="moon.png" height="25px" height="25px"></button>
    </div>


 
    <footer>
        <br>
        Copyright &copy; 2022
        Designed by Ekleccia
    </footer>


    <script src="javascript.js"></script>
</body>
</html>