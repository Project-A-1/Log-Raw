<?php
session_start();
if (!$_SESSION['username']) {
  if (!$_POST['username']) {
    echo 'Anda belum login.';
    exit();
  }
  $_SESSION['username'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="../CSS/about.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a href="index.php">Home</a>
            <!-- <a href="howto.php">How to</a> -->
            <a  href="raw.php">RAW</a>
            <a href="log.php">LOG</a>
            <a class="about" href="about.php">About</a>
       
        
           
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->
            <div class="icon"><a class="about"  href="../user.php"><span class="material-symbols-outlined"style="font-size:16px";>
            <div title="<?= $_SESSION["username"] ?>">account_circle</div></span></a></div>

             <input type="text" placeholder="Search..">
            </div>
        </div>

    <div class="background">
        <img src="https://cdn.discordapp.com/attachments/1030705421901643867/1031480699871563776/vincent-guth-qNAgTdop3E0-unsplash.jpg"loading="lazy"
        width="98.9%" height="500px">
    </div>

    <div class="aboutheader">
        <h1>About Us</h1>
    </div>

    <div class="creator">
        <h1>Creator</h1>
    </div>
    
    <div class="potrait">
        <img src="https://cdn.discordapp.com/attachments/1030705421901643867/1031482869215924273/DSC6068-4.jpg" loading="lazy" alt="Awan"
        width="450px" height="450px">
    </div>

    <div class="creatorparagraph">
        <p>Created By: <span class = "awan">Ariawan Soffan Farajaya</span>.<br> This website is his first website ever, 
            created because of his restleness because he can't do practice for color grading with any RAW or LOG format photos and videos because there are no website who provided that.  </p>
    </div>

    <div class ="mainpurpose">
        <h1>Main Purpose</h1>
    </div>

         <div class="colorgrading">
             <img src="https://cdn.discordapp.com/attachments/1030705421901643867/1031495491529211905/setyaki-irham-1vP7tqexb8g-unsplash.jpg" loading="lazy" alt="Awan"
             width="600px" height="366px">
         </div>

                <div class="mainpurposeparagraph">
                    <p>It's main purpose is to help<br>Future Photographer and Videographer who are interested<br>in Color Grading, by giving them the opportunities to practice
                        with LOG and RAW formatted Photos and Videos that can't be obtained without a proper setup.
                    </p>
                </div>


                <div class="contact">
                    <h1>Follow Me</h1>
                </div>

            <div class="social">
                <ul style="list-style-type:none; ">
                    <li style="display:inline"><a href="https://www.youtube.com" target="_blank">
                        <img src="../Image/youtube.png" width="50px" height="50px"></a></li>
                    <li style="display:inline"><a href="https://www.twitter.com" target="_blank">
                        <img src="../Image/twitter.png" width="48px" height="48px"></a></li>
                    <li style="display:inline"><a href="https://www.instagram.com" target="_blank">
                        <img src="../Image/instagram.png" width="45px" height="45px"></a></li>

                </ul>
            </div>

</body>
</html>