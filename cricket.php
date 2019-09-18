<?php  
include('database.php');
 if(isset($_COOKIE['login'])){
	header('location:index.php');
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notices</title>
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
		<li><a id="active" href="#">Tournament</a>
				<ul>
					<li><a href="cricket.php">Cricket Tournament</a></li>
					<li><a href="football.php">Football 
					Tournament</a></li>
					<li><a href="teamregis.php">Spring Cricket Tournament Registration 2018</a>
		</li>
					</ul>
		</li>
		<li><a href="register.php">Membership</a></li>
		<li><a href="galary.php">Gallery</a></li>
		<li><a  href="notice.php">Notice</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>
<div class="register clear">
  <div class="header">
         <h2>Inter Department Cricket Tournament 2018 </h2>
      </div>
      <div class="contentsection contemplete cricket clear">
        <img src="images/5647_cricket.jpg" width="1200" height="200" alt="post image"/>
				<p>
					Manarat International University-Bangladesh (MIU) Sport Club has organized an Inter Department Twenty20 Cricket Tournament to be held from Jamuary 2, 2018 to Jamuary 22, 2018 in MIU Sports Ground. In total 12 teams from different departments (both undergraduate and graduate) including two Teacher/Officer teams will participate in the tournament. The Honorable Vice Chancellor of MIU Professor Dr. Umar Ali will inaugurate the tournament in the Miu sports Ground at 9.30 a.m. on Jamuary 2, 2018.Last date of team registration for the tournament is 20 ecember 2018. 
				</p>
				<div class="readmore clear">
					<a href="teamregis.php">Team Registration</a>
				</div>
			
			</div>
	  <div class="header">
         <h2>Cricket Tournament 2017</h2>
      </div>
      <div class="contentsection contemplete cricket clear">
        <img src="images/cricket.jpg" width="1200" height="300" alt="post image"/>
				<p>
					Manarat International University-Bangladesh (MIU) Sport Club  organized an Inter Department Twenty20 Cricket Tournament in Jamuary 22, 2017 in MIU Sports Ground. In total 12 teams from different departments (both undergraduate and graduate) including two Teacher/Officer teams  participated in the tournament. The Honorable Vice Chancellor of MIU Professor Dr. Umar Ali  inaugurated the tournament in the Miu sports Ground.The winner team of the tournament is CSE 38-39 RIDERS. 
				</p>
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