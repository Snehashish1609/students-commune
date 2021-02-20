<?php
session_start();
  if(!isset($_SESSION['name1']))
    {
        $die="Access Denied!! Redirecting You to Login page";
        echo('<p style="color: white;
    font-size: 75px;
    padding: 75px;
    margin: 6px;">' . $die . "</p>\n");
        echo "<script type='text/javascript'>window.top.location='/adminlogin.php';</script>"; 
        exit();
        
    }
$servername = "localhost";
$username = "id14612239_studentscommune";
$password = "We love education 3000";
$dbname = "id14612239_profile";

try {
   
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query="SELECT COUNT(*) AS users FROM videos";
  $data = $conn->query($query);

  if(isset($_POST['vid_id']) && isset($_POST['sub']) && isset($_POST['date']) && isset($_POST['link']) && isset($_POST['description']))
  {
     $sql = "INSERT INTO `videos` (vid_id,sub,dated,link,description) VALUES (:vi,:sub,:dated,:link,:description)";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array(
          ':vi' => $_POST['vid_id'],
          ':sub' => $_POST['sub'],
          ':dated' => $_POST['date'],
          ':link' => $_POST['link'],
          ':description' => $_POST['description']));
          $_SESSION['success'] = "Recorded";
      
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
  <title>Admin</title>
  <script type="text/javascript"></script>
  <link rel="stylesheet" href="signup.css">
  <link rel="icon" type="image/png" href="images/logo1.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
     <?php 
    
  
   ?>
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
        echo "<script type='text/javascript'>window.top.location='/admin.php';</script>"; exit;
      //header("Location:studentscommune.000webhostapp.com/index.php");
        exit;
         }
 ob_end_flush()
?>
    <div class="container">
        <div class= "logo"></div>
      <header>UPLOAD THE VIDEOS</header>
      <form method="Post">
        <div  align="centre">
            <label><input type="hidden" type="integer" name="vid_id" size="60" required value="<?php
    foreach($data as $key){echo $key['users'] + 1;}
    ?>"></label>
        </div>

        <div class="input-field">
          <select name="sub" required style="border-color: #34a496;
    font-size: smaller;
    margin: -54px;
    height: inherit;">
            <option value="">--Subject Code--</option>
            <option value="ec301">Electronic Devices(EC301)</option>
            <option value="ec302">Digital System Design(EC302)</option>
            <option value="ec303">Signals and Systems(EC303)</option>
            <option value="ec304">Network Theory(EC304)</option>
            <option value="escs301">Data Structure & Algorithm(ES-CS301)</option>
            <option value="bsm301">Probability & Statistics(BS-M301)</option>

            
            <option value="ec401">Analog Communication(EC401)</option>
            <option value="ec402">Analog Electronic Circuits(EC402)</option>
            <option value="ec403">Microprocessor &Microcontrollers(EC403)</option>
            <option value="escs401">Design and Analysis of Algorithm(ES-CS401)</option>
            <option value="bsm401">Numerical Methods(BS-M401)</option>
            <option value="bsb401">Biology for Engineers(BS-B401)</option>


            <option value="ec501">Electromagnetic Waves(EC501)</option>
            <option value="ec502">Computer Architecture(EC502)</option>
            <option value="ec503">Digital Communication & Stochastic Process(EC503)</option>
            <option value="ec504">Digital Signal Processing(EC504)</option>
            <option value="peec505d">Scientific Computing(PE-EC505D)</option>
            <option value="peec505c">Power Electronics(PE-EC505C)</option>
            <option value="oeec506a">Soft Skill and Interpersonal
Communication(OE-EC506A)</option>
            <option value="oeec506c">Human Resource Management(OE-EC506C)</option>
            <option value="mchu501">Effective Technical Communication(MC-HU501)</option>
          </select>
        </div>

        <div class="input-field">
          <input type="integer"  name="date" required>
           <label>Date(YYYYMMDD)</label>
        </div>

        <div class="input-field">
          <input name="link" type="varchar(255)" required>
          <label>Link</label>
        </div>
        
        <div class="input-field">
          <input name="description" type="text" required>
          <label>Description</label>
        </div>
  
      
<div class="button">
          <div class="inner">
</div>
<button>Add</button>
        </div>
        

    
</form>

<div class="button1">
          <div class="inner">
</div>

<p>Done Uploading? &shy;<a style="text-decoration: none; color: #33b899;" href="https://studentscommune.000webhostapp.com/logout.php">Log Out</a></p>
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