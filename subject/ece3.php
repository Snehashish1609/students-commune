<?php 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/subject.css">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <title>Subject</title>
</head>
<style>
img {
  border-radius: 25px;
}
p {
  text-align: center;
}
</style>
<body>
     <?php 
    
     if(!isset($_SESSION['name']))
    {
        $die="Access Denied!! Redirecting You to Login page";
        echo('<p style="color: black;
    font-size: 75px;
    padding: 75px;
    margin: 6px;">' . $die . "</p>\n");
        echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; 
        exit();
        
    }
   ?>
    <header>
            <div class="head_box"><a href="../home.php">Home</a></div>
            <div class="active_box"><a href="" >Subject</a></div>
            <div style="font-size:30px;cursor:pointer;" class="right pull_right"  onclick="openNav()">&#9776; Menu</div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="" title="<?php 
            $user=$_SESSION['name'];
            $sql= $conn-> prepare("SELECT * FROM profile WHERE roll=:usname");
            $sql->execute(array(
                ':usname' => $user
                ));
            foreach($sql as $row)
            {
                 echo"Department: ".$row["dept"]." \n";
                 echo"Year: ".$row["year"]."\n";
                 
            ?>"><i class="fa fa-fw fa-user" style="color:#0099d1;"></i><?php echo $row['name']; }?></a>
        <a href="../about.php"><i class="fa fa-fw fa-hashtag" style="color:#ebb500"></i>About</a>
        <a href="../logout.php"><i class="fa fa-fw fa-power-off" style="color:#d10030"></i>Logout</a>
            </div>
        
        
            <script>
                function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                }
        
                function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.body.style.backgroundColor = "white";
                }
            </script>
			<div class="clear"></div>
    </header>
     <?php 
    
     if(!isset($_SESSION['name']))
    {
        $die="Access Denied!! Redirecting You to Login page";
        echo('<p style="color: white;
    font-size: 75px;
    padding: 75px;
    margin: 6px;">' . $die . "</p>\n");
        echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; 
        exit();
        
    }
   ?>
    <div>
        <div class="box_2nd"><p class="inline-block"><h1>ECE 3rd Year</h1> <h4> Intermediate</h4><hr></p></div>
        <div>
            <div class="box">
                <a href="../content.php?code=ec501">
                <img src="../images/ECE/1.jpg" alt="">
                <p>Electromagnetic Waves</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=ec502">
                <img src="../images/ECE/2.jpg" alt="">
                <p>Computer Architecture</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=ec503">
                <img src="../images/ECE/3.jpg" alt="">
                <p>Digital Communication & Stochastic Process</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=ec504">
                <img src="../images/ECE/4.jpg" alt="">
                <p>Digital Signal Processing</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=peec505d">
                <img src="../images/ECE/5.jpg" alt="">
                <p>Scientific Computing</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=peec505c">
                <img src="../images/ECE/6.png" alt="">
                <p>Power Electronics</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=oeec506a">
                <img src="../images/ECE/7.jpg" alt="">
                <p>Soft Skill and Interpersonal Communication</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=oeec506c">
                <img src="../images/ECE/8.jpg" alt="">
                <p>HR Management</p>
                </a>
            </div>
            <div class="box">
                <a href="../content.php?code=mchu501">
                <img src="../images/ECE/9.jpg" alt="">
                <p>Effective Technical Communication</p>
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div style="margin-left: 2%;">
            <h2>&#x1f525Students' Commune | &nbsp</h2><h4 style="color: blanchedalmond;">&copy 2020 Students' Commune - @onlinemckvie</h4>
        </div>
    </footer>
</body>
</html>