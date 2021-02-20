<?php 
error_reporting(E_ERROR | E_PARSE);
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
if(isset($_POST["user1"]) && isset($_POST["pass"]) )
{
$user=htmlentities($_POST["user1"]);
$pass=htmlentities($_POST["pass"]);

$sql="SELECT name,pass,admin FROM profile WHERE (name=:usname) and (pass=:uspass) and admin=1";
$query= $conn -> prepare($sql);
$query-> bindParam(':usname', $user, PDO::PARAM_STR);
$query-> bindParam(':uspass', $pass, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0 )
{
    $_SESSION["name1"]=$_POST["user1"];
    echo "<script type='text/javascript'>window.top.location='/admin.php';</script>";
}
else{
    echo "<script>alert('Sorry ".$_POST['user1'].", You are not an admin');</script>";
}

}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
      
    <div class="container">
        <div class= "logo"></div>
      <header>Admins Login Here!</header>
      <form method="Post">
        <div class="input-field">
          <input type="text" required name="user1">
          <label>Admin Name</label>
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
