<?php 
    $page = (isset($_GET['page']) && $_GET['page'] != '')? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Me</title>
        <link href="css/css.css" rel="stylesheet" type="text/css">
            <link rel="icon" href="images/icon2.png">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header">
                <a href="index.php?page=home"><?php echo "Home"; ?></a>
                <a href="#sociallinks"><?php echo "Contact Me ☺"; ?></a>
            </div>
            <?php
                switch($page){
                    case "home":
                        include "index.php";
                    break;
                }
            ?>
        <?php 
            print "<h2> - Developer - </h2>";
        ?>
        <div class="layout-box">
                <img src="images/designer.jpg" class="img1">            
            <div class="messagebox1">
        <?php
            echo "Name: Jia Michelle Jimenea";
            echo "<br>";
            echo "Age: 19";
            echo "<br>";
            echo "Course & Section: BSIT 1-B";
            echo "<br>";
            echo "Emails: s2120651@usls.edu.ph & jiamichellejimenea@gmail.com";
            echo "<br>";
            echo "Phone: +639085295040";
        ?>
        </div>
    </div>
        <table class="table">
            <tbody>
        <?php
          echo "<tr>";
            echo "<th>- Education Level -</th>";
            echo "<th>- School -</th>";
            echo "<th>- Year -</th>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>Elementary</td>";
            echo "<td>Education and Training Center School II</td>";
            echo "<td>2010-2015</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>High School</td>";
            echo "<td>NOHS</td>";
            echo "<td>2015-2021</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>College</td>";
            echo "<td>University of St. La Salle</td>";
            echo "<td>2021-2025</td>";
          echo "</tr>";
        ?>
            </tbody>
        </table>
        <table class="table">
            <tbody>
        <?php
          echo "<tr>";
            echo "<th colspan=\"3\">- Skills -</th>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>Soft Skills</td>";
            echo "<td>Teamwork<br> Time management<br> Organizational<br> Resourcefulness</td>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>Hard Skills</td>";
            echo "<td>Computer skills<br> Coding ability<br> Microsoft Office skills<br> Design skills</td>";
          echo "</tr>";
        ?>
            </tbody>
        </table>
        <table class="table">
            <tbody>
        <?php
          echo "<tr>";
            echo "<th colspan=\"3\">- Programming Languages I Know -</th>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>C++<br> Java<br> JavaScript<br> HTML<br> CSS<br> PHP</td>";
          echo "</tr>";
        ?>
            </tbody>
        </table>
        <div id="sociallinks">
            <?php echo "<p> Social Links: </p>"; ?>
        <ul>
           <li><img src= "images/fb.png" class="img3"> <a href="https://www.facebook.com/jiamichellejimenea"> Facebook </a> <img src= "images/instagram.png" class="img3"> <a href="https://www.instagram.com/elleji._"> Instagram </a> <img src= "images/github.png" class="img3"> <a href="https://github.com/s2120651Jimenea"> GitHub </a> </li>
        </ul>
        </div>
        <br>
        <br>
            <div class="footer">
                <?php echo "© 2022, Jimenea."; ?>
            </div>
    </body>
</html>