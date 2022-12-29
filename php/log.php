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
    <title>Log</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="../CSS/log.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a href="index.php">Home</a>
            <!-- <a href="howto.php">How to</a> -->
            <a  href="raw.php">RAW</a>
            <a class="log"href="log.php">LOG</a>
            <a href="about.php">About</a>
       
        
           
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->
            <div class="icon"><a class="log" href="../user.php"><span class="material-symbols-outlined"style="font-size:16px";>
            <div title="<?= $_SESSION["username"] ?>">account_circle</div></span></a></div>

             <input type="text" placeholder="Search..">
            </div>
        </div>
    <div class="background">
        <img src="https://cdn.discordapp.com/attachments/1031067549036716082/1031076304130420797/Picsart_22-10-16_12-28-53-606.jpg"loading="lazy"
        width="100%" height="500px">
    </div>
        
    
           
                <div class="rawheader">
                    <h1>Browse Your Video</h1>
                  </div>
                  <div class="description">
                  <p>Find the perfect video for your practice</p>
                  </div>

    <div class="rawsearch">
    <input type="text" placeholder="Search..">
    </div>
    
    

    <div id="videoal">
      <table>

          <tr style="vertical-align: top;">
          <!-- Table Left -->
              <td> 
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid2.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto  controls>
                      <source src="../Video/vid3.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid5.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid2.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid4.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid6.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid1.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>                  
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid5.mp4" type="video/mp4" loading="lazy">
                  </video>


              </td>
          <!-- Table Mid -->
          <td> 
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid6.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid1.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid4.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid2.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid1.mp4" type="video/mp4" loading="lazy">
                  </video>
<br>
                  <video width="100%" height=auto controls>
                      <source src="../Video/vid3.mp4" type="video/mp4" loading="lazy">
                  </video>
              </td>
          <!-- Table Right -->
          <td>

            <video width="100%" height=auto controls>
              <source src="../Video/vid1.mp4" type="video/mp4" loading="lazy">
            </video>
<br>
            <video width="100%" height=auto controls>
              <source src="../Video/vid4.mp4" type="video/mp4" loading="lazy">
            </video>
<br>
          <video width="100%" height=auto controls>
              <source src="../Video/vid2.mp4" type="video/mp4" loading="lazy">
          </video>
<br>
            <video width="100%" height=auto controls>
              <source src="../Video/vid6.mp4" type="video/mp4" loading="lazy">
          </video>
<br>
          <video width="100%" height=auto controls>
              <source src="../Video/vid3.mp4" type="video/mp4" loading="lazy">
          </video>
<br>
          <video width="100%" height=auto controls>
              <source src="../Video/vid1.mp4" type="video/mp4" loading="lazy">
          </video>


              </td>
          </tr>
        
        </table>
      </div>      

      
    

    
</body>
</html>