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
    <title>RAW</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="../CSS/raw.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a href="index.php">Home</a>
            <!-- <a href="howto.php">How to</a> -->
            <a class="raw" href="raw.php">RAW</a>
            <a href="log.php">LOG</a>
            <a href="about.php">About</a>
       
        
           
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->
            <div class="icon"><a class="raw" href="../user.php"><span class="material-symbols-outlined"style="font-size:16px";>
            <div title="<?= $_SESSION["username"] ?>">account_circle</div></span></a></div>

            <!-- <div class="icon"><a href="../logout.php"><div title="Log-out">Logout</div></span></a></div> -->

             <input type="text" placeholder="Search..">
            </div>
        </div>

<div class="background">
    <img src="https://cdn.discordapp.com/attachments/1031096733654073365/1031100895880028190/joel-filipe-_Di_gyxSdSk-unsplash.jpg"loading="lazy"
    width="100%" height="500px">
</div>
    

       
            <div class="rawheader">
                <h1>Browse Your Image</h1>
            </div>
            <div class="description">
                <p>Find the perfect photo for your practice</p>
                </div>


<div class="rawsearch">
<input type="text" placeholder="Search..">
</div>




<div class="row">
        <div class="column">
            <img class="myImages" id="myImg" src="../Image/Raw2.jpg" loading="lazy">

            <img class="myImages" id="myImg" src="../Image/Raw1.jpg" loading="lazy">

            <img class="myImages" id="myImg" src="../Image/Raw3.jpg" loading="lazy">

            <img class="myImages" id="myImg" src="../Image/Raw4.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw5.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw6.jpg" loading="lazy">

            <img class="myImages" id="myImg" src="../Image/Raw10.jpg" loading="lazy">
        
        </div>
        <div class="column">
            <img class="myImages" id="myImg"src="../Image/Raw13.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw14.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw15.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw16.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw17.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw18.jpg" loading="lazy">
            
            
        </div>
        <div class="column">
            <img class="myImages" id="myImg"src="../Image/Raw7.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw8.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw9.jpg" loading="lazy">
                   
            <img class="myImages" id="myImg"src="../Image/Raw10.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw11.jpg" loading="lazy">
            
            <img class="myImages" id="myImg"src="../Image/Raw12.jpg" loading="lazy">

            <img class="myImages" id="myImg"src="../Image/Raw8.jpg" loading="lazy">
           
          </div>

      </div>
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>
      
      <script src="../raw.js"></script>
    
</body>
</html>