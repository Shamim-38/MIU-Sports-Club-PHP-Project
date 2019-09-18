<?php

     session_start();
     $errors=array();
	 $_SESSION['id']=Null;
	 $_COOKIE['login']=Null;


     //connect to the database
     $db=mysqli_connect('localhost','root','','userdata');


     //if the register button is clicked
     if((isset($_POST['register'])) and $_POST['register']==1){
     	$username=mysqli_real_escape_string($db,$_POST['username']);
		$student_id=mysqli_real_escape_string($db,$_POST['student_id']);
		$department=mysqli_real_escape_string($db,$_POST['department']);
		$cgpa=mysqli_real_escape_string($db,$_POST['cgpa']);
		$gender=mysqli_real_escape_string($db,$_POST['gender']);
		$game=mysqli_real_escape_string($db,$_POST['game']);
		$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
     	$email=mysqli_real_escape_string($db,$_POST['email']);
     	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
     	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);

     	//ensure that form fields are filled properly
     	if(empty($username)){
     		array_push($errors, "Name is required");
     	}
		if(empty($student_id)){
     		array_push($errors, "Student ID is required");
     	}
		if(empty($department)){
     		array_push($errors, "Student Department is required");
     	}
		if(empty($cgpa)){
     		array_push($errors, "Student Cgpa is required");
     	}
		if(empty($gender)){
     		array_push($errors, "Gender is required");
     	}
		if(empty($game)){
     		array_push($errors, "Favorite Game is required");
     	}
		if(empty($mobile)){
     		array_push($errors, "Mobile Number is required");
     	}
     	if(empty($email)){
     		array_push($errors, "E-mail is required");
     	}elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
     		array_push($errors, "E-mail is invalid");
     	}
     	if(empty($password_1)){
     		array_push($errors, "Password is required");
     	}
     	if($password_1 != $password_2){
     		array_push($errors, "The two password do not match");
     	}
     	//if there are no errors save user info
     	if(count($errors)== 0){
     		$password=md5($password_1);//encrypt password before storing in database(security)
     	  $sql = "INSERT INTO table_data(username,student_id,department,cgpa,gender,game,mobile,email,password)
     	              VALUES('$username','$student_id','$department','$cgpa','$gender','$game','$mobile','$email','$password')";
     	     mysqli_query($db,$sql);
			 session_start();
     	     $_SESSION['student_id']=$student_id;
     	     $_SESSION['success']="you are now logged in";
     	     header('location:index.php');//redirect to home page
     }

 }

    //log user in from login page
   if((isset($_POST['login'])) and $_POST['login']==1 ){
   	$student_id=mysqli_real_escape_string($db,$_POST['student_id']);
     	$password=mysqli_real_escape_string($db,$_POST['password']);
       if(empty($student_id)){
     		array_push($errors, "Student ID is required");
     	}
     	if(empty($password)){
     		array_push($errors, "Password is required");
     	}
     	if(count($errors)==0){
     		$password=md5($password);
     		$query="SELECT * FROM table_data WHERE student_id='$student_id' AND password='$password'";
            $result=mysqli_query($db,$query);
            if(mysqli_num_rows($result)==1){
            	if((isset($_POST['rem'])) && $_POST['rem']==1){
					setcookie('login',1,time()+50);
					/* setcookie('username',$username,time()+30);
				    setcookie('password',$password,time()+30);   */
            		header('location:index.php');
            	}
				session_start();
				$_SESSION['success']="you are now logged in";
            	$_SESSION['student_id']=$student_id;
            	header('location:index.php');
				
            }else {
            	array_push($errors,"Username or password is invalid");
            	//header('location:login.php');
            }		
     	}

   }
    //log out 
    if(isset($_GET['logout'])){
   	session_destroy();
   	unset($_SESSION['username']);
   	if(isset($_COOKIE['login'])){
   		/* $username=$_COOKIE['username'];
   		$password=$_COOKIE['password'];
   		setcookie('username',$username,time()-30);
   		setcookie('password',$password,time()-30); */
		setcookie('login',1,time()-50);
   	}
   	header('location:login.php');
   }


    



 ?>