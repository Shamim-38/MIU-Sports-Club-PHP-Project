<?php
   if(isset($_GET['logout'])){
   	session_destroy();
   	unset($_SESSION['username']);
   	if(isset($_COOKIE['login'])){
   		/* $username=$_COOKIE['username'];
   		$password=$_COOKIE['password'];
   		setcookie('username',$username,time()-30);
   		setcookie('password',$password,time()-30); */
		setcookie('login',1,time()-30);
   	}
   	header('location:login.php');
   }
?>