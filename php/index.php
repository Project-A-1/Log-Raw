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
    <title>LOG & RAW</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a class="main"href="index.php">Home</a>
            <!-- <a href="howto.php">How to</a> -->
            <a  href="raw.php">RAW</a>
            <a href="log.php">LOG</a>
            <a  href="about.php">About</a>
       
        
           
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->
            <div class="icon"><a class="main"href="../user.php"><span class="material-symbols-outlined"style="font-size:16px";>
            <div title="<?= $_SESSION["username"] ?>">account_circle</div></span></a></div>

             <input type="text" placeholder="Search..">
            </div>
        </div>
      
    <div class="home">
      <div class="title">
            <a>LOG & RAW</a>
            </div>

                    <h2><b>UNLEASH YOUR TRUE POTENTIAL.</b></h2>
                    <div class="howto">
                        <a href="raw.php"><h3>Get Started.</h3></a>
                    </div>
    </div>

<div class="homeimg">
        <img src="https://cdn.discordapp.com/attachments/1030687788401700904/1030698637015142400/Picsart_22-10-15_11-25-10-099_2.jpg"loading="lazy"
        alt="three bird" width="720px" height="720px">
</div>


</body>
</html>