<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
</head>
<body>
  
    <div class="topnav">
        <div class="navleft">
            <a href="index.html">Home</a>
            <!-- <a href="howto.html">How to</a> -->
            <a class="raw" href="raw.html">RAW</a>
            <a href="log.html">LOG</a>
            <a href="about.html">About</a>
       
            <!-- <div class="icon"><a href="#"><span class="material-symbols-outlined" style="font-size:16px";>menu</span></a></div> -->

            <!-- <div class="icon"><a href="login.php"><span class="material-symbols-outlined"style="font-size:16px";><div title="Account">account_circle</div></span></a></div> -->

            <!-- <input type="text" placeholder="Search.."> -->

            </div>
        </div>

        <div class="login-container">
		<h1>Login</h1>
		<form method="post" action="user.php">
			<label for="username">Username:</label><br>
			<input type="text" id="username" name="username" required ><br>
			<label for="password">Password:</label><br>
			<input type="password" id="password" name="password" required minlength="6"><br><br>
			<input type="submit" value="Submit">
		</form> 
	</div>
