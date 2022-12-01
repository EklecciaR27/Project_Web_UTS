<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PINK VENOM</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    
</head>

<body>
<div class="line"></div>
    <div class="logo">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9abc83cd-2de2-4604-aa71-0e16b649f129/dfb7rrf-40a1d3ef-2f25-4306-909a-a1b856f3b6ec.png/v1/fill/w_1280,h_220,strp/blackpink_pink_venom_logo_png_by_dystoca_dfb7rrf-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MjIwIiwicGF0aCI6IlwvZlwvOWFiYzgzY2QtMmRlMi00NjA0LWFhNzEtMGUxNmI2NDlmMTI5XC9kZmI3cnJmLTQwYTFkM2VmLTJmMjUtNDMwNi05MDlhLWExYjg1NmYzYjZlYy5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.jJBV4IM_EgVqzOH1g2CpeJ4xLr7CuAQYf522hOoBGiA" width="350px">
    </div>

    <h1 id="header1">YG ENTERTAINMENT</h1>
    <nav>
        <div>
            <ul>
            <li><a class="active" href="page_user.php">MAIN</a></li>
                <li><a href="buy.php">BUY</a></li>
                <li><a href="navbar_concert.html">CONCERT</a></li>
                <li><a href="navbar_aboutme.html">ABOUT</a></li>
                <li><a href="logout.php"><i class="bi bi-box-arrow-right"></i></a></li>

            </ul>
            
        </div>
    </nav>
    
    <div class="bg">
         <img id = "img" src='' alt="ya ini" height="450px" weight="450px">
    </div>

    <div class="konten2">
        BORN PINK WORLD TOUR
    </div>

    <br>

    <!-- <div class="konten1">
        <b>PINK VENOM EUROPE TOUR</b> 
    </div> -->


    <div class="text">
        <p>
            BLACKPINK has announced the finalized dates and venues for the <br>
            North American and European legs of their upcoming world tour!
            Starting from their countries, South Korea. <br>
            They will come to see all fans around the world. <br> 
            The Biggest Tour of Blackpink this era would start on this year.

        </p>
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

    <button id="myBtn">Click Here if You're Excited</button>
    <p id="addevent"></p>

    <script>
    const element = document.getElementById("myBtn");
    element.addEventListener("click", function() {
    document.getElementById("addevent").innerHTML = "Great";
    addevent.style.color = "#af4c6b";
    });
    </script>

    <script>
        const header1 = document.getElementById('header1');
        header1.style.color = "white";
    </script>

    <script>
        document.getElementById("img").src="flyerBP.png";
    </script>

   

</body>
</html>