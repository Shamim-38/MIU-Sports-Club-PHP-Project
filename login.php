<?php  
 if(isset($_COOKIE['login'])){
	header('location:index.php');
} 
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
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
				<p>A Club Of MANARAT INTERNATIONAL UNIVERSITY</p>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
		   <a id="active" href="login.php" >Login</a>
		   <a href="register.php" >Register</a>
	
  
</div>
	</div>
	</div>
<div class="navsection templete">
	<ul>
		<li><a href="index.php">Home</a></li>
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
		<li><a href="galary.php">Gallery</a></li>
		<li><a href="notice.php">Notice</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>
<div class="register clear">
  <div class="header">
         <h2>Log in</h2>
      </div>
      <div class="form">
      <form method="post" action="login.php">
                <!---display validation errors here-->
        <?php include('errors.php'); ?>
           <div class="input-group">
           <label>Student ID</label>
           <input type="text" name="student_id" placeholder="Student ID"/>
            </div>
            <div class="input-group">
           <label>Password</label>
           <input type="password" name="password" placeholder="Password"/>
            </div>
             <div >
            <input type="checkbox" name="rem" value="1"/>Remember me
            </div>
             <div class="input-group">
           <button type="submit" name="login" value="1" class="btn">Login</button>
            </div>
            <h3>
              Not yet a member?<a href="register.php">Sign up</a>
            </h3>  
        </form>
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
         <a href="http://www.facebook.com"><img src="images/fb1 (2).png" alt="Facebook"/></a>
		<a href="http://www.twitter.com"><img src="images/t.png" alt="Twitter"/></a>
		<a href="http://www.googleplus.com"><img src="images/g+.png" alt="GooglePlus"/></a>
		<a href="http://www.snapchat.com"><img src="images/snap.png" alt="Snapchat"/></a>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>