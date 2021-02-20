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
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/logo1.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body style="background-color: #05223C;">
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
                 
            ?>"><i class="fa fa-fw fa-user" style="color:#0099d1"></i><?php echo $row['name']; }?></a>
        <a href="about.php"><i class="fa fa-fw fa-hashtag" style="color:#ebb500"></i>About</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off" style="color:#d10030"></i>Logout</a>
    </div>

    <div style="font-size:30px;cursor:pointer;" class="right"  onclick="openNav()">&#9776; Menu</div>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }
        
        function welcome(){
            alert('Hello');
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
      
    <div class="menu-bar">
	<ul>
		<li class="active tab"><a href="#"><p>Home</p>&shy;</a><i class="fa fa-home"></i></li>
		<li class="tab"><a href="#" class="tab"><p>Department</p>&shy;</a><i class="fa fa-search"></i>
            <div class="sub-menu-1 subtab">
            	<ul>            			
            		<li class="hover-me"><a href="#">CSE</a><i class="fa fa-angle-right"></i>
            			<div class="sub-menu-2">
            				<ul>
            					<li><a href="subject/cse1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/cse2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/cse3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/cse4.php">4th year</a><i class="fa fa-angle-right"></i></li>
            				</ul>
            			</div>
            		</li>
                    <li class="hover-me"><a href="#">ECE</a><i class="fa fa-angle-right"></i>
                    	<div class="sub-menu-3">
            				<ul>
            					<li><a href="subject/ece1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ece2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ece3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ece4.php">4th year</a><i class="fa fa-angle-right"></i></li>
            				</ul>
            			</div>
                    </li>
                    <li class="hover-me"><a href="#">IT</a><i class="fa fa-angle-right"></i>
                    	<div class="sub-menu-4">
            				<ul>
            					<li><a href="subject/it1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/it2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/it3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/it4.php">4th year</a><i class="fa fa-angle-right"></i></li>
            				</ul>
            			</div>
					</li>
					<li class="hover-me"><a href="#">EE</a><i class="fa fa-angle-right"></i>
						<div class="sub-menu-6">
							<ul>
								<li><a href="subject/ee1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ee2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ee3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/ee4.php">4th year</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div>
					</li>
                    <li class="hover-me"><a href="#">ME</a><i class="fa fa-angle-right"></i>
                    	<div class="sub-menu-5">
            				<ul>
            					<li><a href="subject/me1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/me2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/me3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/me4.php">4th year</a><i class="fa fa-angle-right"></i></li>
            				</ul>
            			</div>
                    </li>
                    <li class="hover-me"><a href="#">AUE</a><i class="fa fa-angle-right"></i>
                    	<div class="sub-menu-6">
            				<ul>
            					<li><a href="subject/aue1.php">1st year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/aue2.php">2nd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/aue3.php">3rd year</a><i class="fa fa-angle-right"></i></li>
            					<li><a href="subject/aue4.php">4th year</a><i class="fa fa-angle-right"></i></li>
            				</ul>
            			</div>
                    </li>
            	</ul>
            </div>
		</li>
		<li class="tab"><a href="contact.html"><p>Contact Us</p>&nbsp;</a><i class="fa fa-phone"></i></li>
	</ul>
    </div>

    <?php 

         if(isset($_GET['profile']))
        {?>
        <div> <table border="2" style="display: inline-table; display: inline-table;
    font-size: xx-large;
    color: #0480C6;
    margin-top: 20%;
    border-color: #0480C6;
    float: left;
    margin-left: 19px;">
            <?php 
            $user=$_SESSION['name'];
            $sql= $conn-> prepare("SELECT * FROM profile WHERE name=:usname");
            $sql->execute(array(
                ':usname' => $user
                ));
            foreach($sql as $row)
            {
                 echo('<tr><td>');
                 echo"Name".'</td><td>';
                 echo $row["name"];
                 echo('</td></tr><tr><td>');
                 echo"Department".'</td><td>';
                 echo $row["dept"];
            echo('</td></tr><tr><td>');
            echo"Year".'</td><td>';
            echo $row["year"];
            echo('</td></tr>');
        }?>
            </table></div>
 <?php } ?>
 
    
    
     <footer>
        <div class="main-content">
            <div class="left-box">
                <h2>About Us</h2>
                <div class="content">
                    <p>We are a team of passionate web developers that found a gaping hole in the world of online education amid COVID-19. We took it upon ourselves to represent the whole community and help other students keep track of all the live online lectures and watch them anytime anywhere through our website.</p>
                    <div class="social">
                        <a href="https://www.facebook.com/campusmckvie/"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://www.mckvie.edu.in/"><span class="fab fa-wikipedia-w"></span></a>
                        <a href="https://www.instagram.com/mckvieofficial/?hl=en"><span class="fab fa-instagram"></span></a>
                        <a href="https://www.youtube.com/channel/UCdJYgbOHMis5NtTI9DihVgA"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div> 
            <div class="center-box">
                <h2>Address</h2>
                <div class="content1">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Liluah, Howrah</span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+0758-685-1253</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">studentscommune.wb@gmail.com</span>
                    </div>
                </div>
            </div>          
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Created for <a href="https://www.youtube.com/channel/UCpFHiTB1EtiJ2NCq9uppbyw">Students'-Commune</a> | </span>
                <span class="far fa-copyright"></span><span>2020 All rights reserved.</span>
            </center>
        </div>
    </footer>
</body>
</html>