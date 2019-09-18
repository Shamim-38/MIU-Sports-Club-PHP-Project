<?php  
 if(isset($_COOKIE['login'])){
	header('location:index.php');
} 
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notice</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="university website">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styleForlog.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

</head>

<body>
	<div class="headersection templete clear">
		<a href="about.php">
			<div class="logo">
				<img src="images/Capture.png" alt="Logo"/>
				<h2>MIU SPORTS CLUB</h2>
				<p>A Club Of MANARAT INTERNAL UNIVERSITY</p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
          <?php if((!isset($_SESSION['student_id'])) && (!isset($_COOKIE['login']))): ?>
		   <a href="login.php" >Login</a>
		   <a href="register.php" >Register</a>
		   <?php endif ?> 
		   	<?php if((isset($_SESSION['student_id'])) or (isset($_COOKIE['login']))): ?>
			<a href="index.php?logout='1'">logout</a>
			<?php session_unset()?>
			  <?php endif ?> 
  </div>
</div>
	</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a  href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="#">Tournament</a>
				<ul>
					<li><a href="cricket.php">Cricket Tournament</a></li>
					<li><a href="football.php">Football 
					Tournament</a></li>
<li><a href="teamregis.php">Spring Cricket Tournament Registration 2018</a></li>
					</ul>
		</li>
		<li><a href="register.php">Membership</a></li>
		<li><a id="active" href="galary.php">Gallery</a></li>
		<li><a  href="notice.php">Notice</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>
<div class="register clear">
  <div class="header">
         <h2>MIU SPORTS CLUB GALARY</h2>
      </div>
      <div class="contentsection contemplete clear">
	       <?php
           $servername = "";
           $username = "root";
           $password = "";
           $dbname = "sport";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
        if (!$conn) 
       {
    die("Connection failed: " . mysqli_connect_error());
       }
	   $sql = "SELECT * FROM 	football";
       $result = mysqli_query($conn, $sql);
	   ?>
	   <table>
	   <?php
	   $i=0;
	   while($post = $result->fetch_assoc()){

       if($i%3==0){
	   echo"</tr>";}
	   ?>
       <td><img src="admin/<?php echo $post['f_img'];?>"/></td>
       <?php	   
	   if($i%3==2){
		   echo"</tr>";
	   }
       $i++;
	   } ?>
        </table>	   
	   
	 

			</div>
	  </div>
	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="register.php">Membership</a></li>
		</ul>
	  </div>
	   <p>&copy; Copyright2017 <a href="http://www.manarat.ac.bd">MANARAT INTERNATIONAL UNIVERSITY</a>. All Rights Reserved.</p>
	</div>
	<div class="fixedicon clear">
		<a href="http://www.facebook.com"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="http://www.twitter.com"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="http://www.linkedin.com"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="http://www.google.com"><img src="images/gl.png" alt="GooglePlus"/></a>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>