<?php 
    $servername = "localhost";
    $username = "id14612239_studentscommune";
    $password = "We love education 3000";
    $dbname = "id14612239_profile";
    session_start();
try
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch(PDOException $e)
{
  exit("Error: " . $e->getMessage());
}

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/subject.css">
    <title><?php echo($_GET['code']);?></title>
</head>
<body>
    <header>
            <div class="head_box"><a href="../home.php">Home &shy;</a><i class="fa fa-home"></i></div>
            <div class="active_box"><a href="javascript:history.back()">Subject &shy</a><i class="fa fa-search"></i></div>
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
        <a href="about.php"><i class="fa fa-fw fa-hashtag" style="color:#ebb500"></i>About</a>
        <a href="logout.php"><i class="fa fa-fw fa-power-off" style="color:#d10030"></i>Logout</a>
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
    $sub = $_GET['code'];
    $sql= $conn-> prepare("SELECT * FROM videos WHERE sub=:scode ORDER BY dated DESC");
    $sql->execute(array(
        ':scode' => $sub
        ));
    ?>
    <div>
        <div class="box_2nd">
            <p class="inline-block">
                <h1>Subject Code: <?php echo(strtoupper($_GET['code'])); ?></h1>
                <h3></h3>
                <hr>
            </p>
        </div>
        <div>
            <div class="box">
                <table style="object-position: top;">
                <?php
             foreach($sql as $row){
                 echo('<tr><td>');
                 echo('<iframe width="336%" height= "189%" src="https://www.youtube.com/embed/'.$row['link']).'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: fit-content;"></iframe>';
                 echo'<br><div style="display: inline-block;">Date: </div>'.date("j F Y",strtotime($row['dated']));
                 echo'<br>'.$row['description'];
                 echo('<hr><br></td></tr>');
                 }
                ?>
                </table>
                <p></p>
                </a>
            </div>
            
            
        
        </div>
    </div>
    
</body>
</html>