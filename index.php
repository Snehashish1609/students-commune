<?php 
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);
session_start();
$servername = "localhost";
$username = "id14612239_studentscommune";
$password = "We love education 3000";
$dbname = "id14612239_profile";
try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch(PDOException $e)
{
  exit("Error: " . $e->getMessage());
}
if(isset($_POST["user"]) && isset($_POST["pass"]) )
{
$user=htmlentities($_POST["user"]);
$pass=htmlentities($_POST["pass"]);
$sql="SELECT roll,pass FROM profile WHERE (roll=:usname) and (pass=:uspass)";
$query= $conn -> prepare($sql);
$query-> bindParam(':usname', $user, PDO::PARAM_STR);
$query-> bindParam(':uspass', $pass, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0 )
{
    $_SESSION["name"]=$_POST["user"];
    header("Location:https://studentscommune.000webhostapp.com/home.php");
}
else{
    echo "<script>alert('Invalid Details');</script>";
}

}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Students' Commune Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      
    <div class="container">
        <div class= "logo"></div>
      <header>Login Here!</header>
      <form method="Post">
        <div class="input-field">
          <input type="text" required name="user">
          <label>Roll. (Ex. BTECH/ECE/18/001)</label>
        </div>
<div class="input-field">
          <input class="pswrd" type="password" required name="pass">
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>
<div class="button">
          <div class="inner">
</div>
<button>LOGIN</button>
        </div>
</form>

<div class="signup">
        Trouble signing in? <a href="https://studentscommune.000webhostapp.com/contact.html">Contact Us</a>
      </div>
</div>
<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
          show.style.color = "#48FFD5";
          show.textContent = "HIDE";
        }else{
          input.type = "password";
          show.textContent = "SHOW";
          show.style.color = "#48FFD5";
        }
      }
    </script>

  </body>
</html>
