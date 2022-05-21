<?php 
    $page = (isset($_GET['page']) && $_GET['page'] != '')? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link href="css/css.css" rel="stylesheet" type="text/css">
            <link rel="icon" href="images/icon2.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header">
                <a href="profile.php?page=profile"><?php echo "About Me"; ?></a>
                <a href="#sociallinks"><?php echo "Contact Me ☺"; ?></a>
            </div>
            <?php
                switch($page){
                    case "profile":
                        include "profile.php";
                    break;
                }
            ?>
        <?php
            echo "<h1>Hi! Welcome to My Website, I am Jia Michelle Jimenea ♡</h1>";
            echo "<br>";
            echo "<p>I am a 1st year student from BSIT 1-B in the University of St. La Salle.<br> This website serves as my personal portfolio.</p>";
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <body>
            <center><div id="div1" class="fa"></div></center>
                <script src="js/javaS.js"></script>
            <div class="messagebox">
        <?php echo "Here are my activity works:" ?>
        </div>
        <ul>
           <li> <img src= "images/bowl.png" class="img2"> <a href="LT2/recipes.html?page=LT2" target="_blank"> Learning Task 2 </a></li>
           <li> <img src= "images/takoyaki.png" class="img2"> <a href="LT3/index.html?page=LT3" target="_blank"> Learning Task 3 </a></li>
           <li> <img src= "images/slippers.png" class="img2"> <a href="CLE1MT/index.html?page=CLE1" target="_blank"> CLE1: Culminating Learning Evidence (Midterm) </a></li>
           <li> <img src= "images/paper.png" class="img2"> <a href="LT4/index.html?page=LT4" target="_blank"> Learning Task 4 </a></li>
           <li> <img src= "images/flower.png" class="img2"> <a href="LT5/index.html?page=LT5" target="_blank"> Learning Task 5 </a></li>
        </ul>
            <?php
                switch($page){
                    case "LT2":
                        include "LT2/recipes.html";
                    break;
                    case "LT3":
                        include "LT2/recipes.html";
                    break;
                    case "CLE1":
                        include "LT2/recipes.html";
                    break;
                    case "LT4":
                        include "LT2/recipes.html";
                    break;
                    case "LT5":
                        include "LT2/recipes.html";
                    break;
                }
            ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="sociallinks">
            <?php echo "<p> Social Links: </p>"; ?>
        <ul>
           <li><img src= "images/fb.png" class="img3"> <a href="https://www.facebook.com/jiamichellejimenea" target="_blank"> Facebook </a> <img src= "images/instagram.png" class="img3"> <a href="https://www.instagram.com/elleji._" target="_blank"> Instagram </a> <img src= "images/github.png" class="img3"> <a href="https://github.com/s2120651Jimenea" target="_blank"> GitHub </a> </li>
        </ul>
        </div>
        <br>
        <br>
            <div class="footer">
                <?php echo "© 2022, Jimenea."; ?>
            </div>
    </body>
</html>