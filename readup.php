<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_web");

function query($data){
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while($row = mysqli_fetch_assoc($hasil)){
        $rows[ ] = $row;
    }

return $rows; 

}
?>

<?php
    require 'config.php';
    $result = $db->query("SELECT * FROM formpembelian");

    if(isset($_POST['search'])){
        $keyword = $_POST['keyword'];
        $statistik = query("SELECT * FROM formpembelian where 
        nama LIKE '%$keyword%' OR 
        email LIKE '%$keyword%'");
    }else{
        $statistik = query("SELECT * FROM formpembelian");
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>PINK VENOM</title>
    <link rel="stylesheet"href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="java.js"></script>
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

    <div class="search_form">
    <form method="post">
        <input type="text" name="keyword" id="keyword" class="form-control" autoFocus placeholder = "Search..." autocomplete = "off" > 
                
        <button class = "srcbtn" type="submit" name="search">
            <i class="bi bi-search"></i>
        </button>
    </form>
    </div>

    <table cellpadding=10 cellspacing=0>
        <tr>
            <th>LIST</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DATE OF BIRTH</th>
            <th>TICKET</th>
            <th colspan = 2>ACTION</th>
        </tr>
        <?php $y = 1?>
        <?php foreach($statistik as $data) : ?>
        <tr>
            <td><?php echo $y; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["pn"]; ?></td>
            <td><?php echo $data["dob"]; ?></td>
            <td><?php echo $data["ticket"]; ?></td>
            <td><a class = "iconupdate" href="update.php?id=<?php echo $data["id"];?>">Update</a></td>
            <td><a class = "icondel" href="delete.php?id=<?php echo $data["id"];?> ">Delete</a></td>
        </tr>
        <?php $y++; ?>
        <?php endforeach; ?>
    </table>


    <div class="konten2concert">
        BLACKPINK'S 2023 CONCERT 
    </div>

    <br>

    <div class="konten1concert">
        <b id="yo ">PINK VENOM EUROPE TOUR</b> 
    </div>

    
    <script src="javascript.js"></script>

    
    <div class="tombol">
        <button class="lightmode" onclick="ubahWarna()"><img src="sun.png" height="25px" height="25px"></button>
        <button class="darkmode" onclick="ubahWarna()"><img src="moon.png" height="25px" height="25px"></button>
    </div>
 


    <footer>
        <br>
        Copyright &copy; 2022
        Designed by Ekleccia
    </footer>


</body>
</html>