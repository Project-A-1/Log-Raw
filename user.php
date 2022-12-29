<?php
session_start();
if (!isset($_SESSION['username'])) {
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
    <title>Welcome! <?= $_SESSION["username"] ?></title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a href="php/index.php">Home</a>
            <!-- <a href="howto.php">How to</a> -->
            <a class="raw" href="php/raw.php">RAW</a>
            <a href="php/log.php">LOG</a>
            <a href="php/about.php">About</a>
       
        
           
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->

            <div class="icon"><a href="logout.php"><div title="Account">Logout</div></span></a></div>

             <!-- <input type="text" placeholder="Search.."> -->
            </div>
        </div>



    <div class= "welcome"> Welcome!<br><?= $_SESSION["username"] ?>.</div>
    <a href="php/raw.php"><button type="submit" value="submit" >Continue</button><a>
      
  </body>
</html>