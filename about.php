<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Miu sports club</title>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
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
<div class="navsection templete">
	<ul>
		<li><a  href="index.php">Home</a></li>
		<li><a id="active" href="about.php">About</a></li>
		<li><a href="#">Tournament</a>
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
		<li><a href="notice.php">Notice</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>

		


	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="samepost clear">
				<h2><a href="">About MIU SPORTS CLUB</a></h2>
				<p>
 MIU Sport Club program exists to provide the students, faculty, and staff of MANARAT INTERNALTIONAL UNIVERSITY the opportunity to participate in organized sport and competitive activities. Opportunities to develop leadership skills exist through Sport Clubs Executive Council, Sport Clubs officer positions, and club member participation.Sport Club is composed of individuals who share a common interest in recreation, sport and organize to collectively pursue their goals to either compete locally or at the national level.  Sport Clubs are formed, organized, and governed by the members under the guidelines of Athletics and MANARAT Recreation & Physical Education.
				</p>
			</div>



		</div>
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<a href="notice.php"><h2>NOTICES</h2></a>
					<ul>
					
		     <?php
		      $db=mysqli_connect('localhost','root','','userdata');
			  if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
                 } 
			$sql = "SELECT tittle,date FROM notice_tb ORDER BY id DESC limit 3";
            $result = mysqli_query($db,$sql);	 
			
               while($row = mysqli_fetch_array($result)) {
		       echo"<li><p>".$row['date']."</p><a href='notice.php'>".$row['tittle']."</a></li>";
			    } ?>
					
            </ul>
	  </div>
			<div class="samesidebar clear">
				<h2>Recent Events</h2>
					<div class="popular clear">					
					<?php
		      $db=mysqli_connect('localhost','root','','userdata');
			  if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
                 } 
			 $sql = "SELECT url,title,image,details FROM recent_tb ORDER BY id DESC LIMIT 2";
            $result = mysqli_query($db,$sql);
			  
               while($row = mysqli_fetch_assoc($result)){
		       echo"<h3><a href='".$row['url']."'>".$row['title']."</a></h3>";
			   ?><img src="admin/<?php echo $row['image'];?>"/>
			  <?php echo"<p>".$row['details']."</p>";
			    } ?>
					</div>
	
			</div>
			
		</div>
	</div>
<div class="fbg template clear">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="galary.php"><img src="images/football2.jpg" width="100" height="100" alt="" class="gal" /></a> <a href="galary.php"><img src="images/cric.jpg" width="100" height="100" alt="" class="gal" /></a> <a href="galary.php"><img src="images/football.jpg" width="100" height="100" alt="" class="gal" /></a> <a href="galary.php"><img src="images/sss.jpg" width="100" height="100" alt="" class="gal" /></a> <a href="galary.php"><img src="images/bj.jpg" width="100" height="100" alt="" class="gal" /></a> <a href="#"><img src="images/bj1.png" width="100" height="100" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>OUR ACTIVITIES</span></h2>
        <ul class="fbg_ul">
          <li><a href="#">Arrange Tournament</a></li>
          <li><a href="#">Ensure Commonroom Facilities</a></li>
          <li><a href="#">Arrange Indoor Gemes</a></li>
		  
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>MANARAT INTERNALTIONAL UNIVERSITY</p>
        <p class="contact_info"> <span>Address:</span> Ashulia,Savar,Bangladesh<br />
          <span>Telephone:</span> +88-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">miu@sportsclub.com</a> </p>
		  <span>Facebook :</span> <a href="#">fb/miusportsclub</a> </p>
		  <span>Youtube :</span> <a href="#">Youtube/miusportsclub</a> </p>
      </div>
      <div class="clr"></div>
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
		<a href="http://www.facebook.com"><img src="images/fb1 (2).png" alt="Facebook"/></a>
		<a href="http://www.twitter.com"><img src="images/t.png" alt="Twitter"/></a>
		<a href="http://www.googleplus.com"><img src="images/g+.png" alt="GooglePlus"/></a>
		<a href="http://www.snapchat.com"><img src="images/snap.png" alt="Snapchat"/></a>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>