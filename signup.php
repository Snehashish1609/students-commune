<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "id14612239_studentscommune";
$password = "We love education 3000";
$dbname = "id14612239_profile";
session_start();
try {
   
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query="SELECT COUNT(*) AS users FROM profile";
  $data = $conn->query($query);

  if(isset($_POST['user_id']) && isset($_POST['name']) && isset($_POST['dept']) && isset($_POST['year']) && isset($_POST['roll']) && isset($_POST['pass']))
  {
      if(is_numeric($_POST['user_id']) && is_numeric($_POST['year']) && is_numeric($_POST['roll']) && strlen($_POST['name'])>1 && strlen($_POST['dept']) > 1){
      $sql = "INSERT INTO `profile` (user_id,name, dept, year, roll, pass) VALUES (:ui,:name,:dept,:year,:roll,:pass)";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array(
          ':ui' => htmlentities($_POST['user_id']),
          ':name' => htmlentities($_POST['name']),
          ':dept' => htmlentities($_POST['dept']),
          ':year' => htmlentities($_POST['year']),
          ':roll' => htmlentities($_POST['roll']),
          ':pass' => htmlentities($_POST['pass'])));
          $_SESSION['success'] = "Recorded";
      }
      else{ $_SESSION['error'] = "All fields are required";}
  }
 
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sign Up</title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" href="signup.css">
	<link rel="icon" type="image/png" href="images/logo1.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php 
 ob_start();
			if (isset($_SESSION['error']))
			 {
       		 	echo('<p style="color: red;">' . htmlentities($_SESSION['error']) . "</p>\n");
        			unset($_SESSION['error']);
   			 }
   			 if (isset($_SESSION['success'])) {
        echo('<p style="color: green;">' . htmlentities($_SESSION['success']) . "</p>\n");
        unset($_SESSION['success']);
        error_reporting(E_ERROR | E_PARSE);
        echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; exit;
   		//header("Location:studentscommune.000webhostapp.com/index.php");
        exit;
   			 }
 ob_end_flush()
?>
		<div class="container">
        <div class= "logo"></div>
      <header>Sign Up Now!</header>
      <form method="Post">
        <div  align="centre">
            <label><input type="hidden" type="integer" name="user_id" size="60" required value="<?php
		foreach($data as $key){echo htmlentities($key["users"] + 1);}
		?>"></label>
        </div>
        <div class="input-field">
          <input name="name" type="varchar(255)" required>
          <label>Username</label>
        </div>
  
        <div align="left">
        <select name="dept" style="font-size: larger; border-color: #34a496;" required>
          <option value="">--Department--</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
          <option value="IT">IT</option>
          <option value="EE">EE</option>
          <option value="ME">ME</option>
          <option value="AUE">AUE</option>
          </select>
        </div><br>
        <div align="left" margin-top= "20px">
          <select name="year" style="font-size: larger; border-color: #34a496;" required>
          <option value="">--Year--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
             </select>
        </div>
        <div class="input-field">
          <input name="roll" type="integer" required>
          <label>Roll No.</label>
        </div>
        <div class="input-field">
          <input name="pass" class="pswrd" type="password" required>
          <span class="show">SHOW</span>
          <label>Password</label>
        </div>
        <div class="input-field">
          <input name="pass" class="pswrd" type="password" required>
          <label>Confirm Password</label>
        </div>
<div class="button">
          <div class="inner">
</div>
<button>Register</a></button>
        </div>
</form>
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