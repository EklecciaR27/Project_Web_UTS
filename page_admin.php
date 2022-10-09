<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINK VENOM</title>
    <link rel="stylesheet" href="styleadminpg.css"> 
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
                <li><a class="active" href="page_admin.php">DASHBOARD</a></li>
                <li><a href="create.php">INPUT</a></li>
                <li><a href="concert.html">READ</a></li>
                <li><a href="update.html">UPDATE</a></li>
                <li><a href="delete.html">DELETE</a></li>
            </ul>
            
        </div>
    </nav>
    
    <div class="bg">
         <img src='admin.png' alt="ya ini" height="400px" weight="400px">
    </div>

    <div class="konten2">
        WELCOME TO ADMIN PAGE
    </div>

    <div class="text">
        <p>Hi Admin, Disini kamu bisa melakukan CRUD (Create, Read, Update, dan Delete) <br>
            Menggunakan Menu diatas, Jaga Kepercayaan yang telah diberikan. Terima Kasih 
        </p>
    </div>


    <br>
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

    <!-- <button id="myBtn">Click Here if You're Excited</button>
    <p id="addevent"></p> -->

    <script>
    const element = document.getElementById("myBtn");
    element.addEventListener("click", function() {
    document.getElementById("addevent").innerHTML = "Great";
    addevent.style.color = "#af4c6b";
    });
    </script>

</body>
</html>