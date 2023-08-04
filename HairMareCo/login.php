<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HairMare</title>
    <link rel="stylesheet" href="login2.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
<body>
    <div class="navbar">
        <a><ion-icon name="person-circle-outline"></ion-icon> </a>
        <a href="login2.html"><button class="thingy" >Account</button></a>
        <a href="home.html" class="logo">HairMare</a>
        <a href = "cart.html">purchases</a>
        <a href = "about.html">About</a>
        <a href = "appointmets.html">Appointmets</a>
        <a href = "shop.html">Shop</a>
        
        
    </div>

<form action="action_page.php" method="post">
    <div class="imgcontainer">
     <h1 class="header">Login</h1>
  
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

<?php
  extract($_REQUEST);
  $file=fopen("form.txt" , "a");

  fwrite($file , "name :");
  fwrite($file , "email :");
  fwrite($file , $email , "\n");
  fwrite($file , "password :");
  fwrite($file , $password , "\n");
  fclose($file);
?>

