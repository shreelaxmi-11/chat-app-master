<?php
  include("connection.php");

  if(isset($_POST['sign_up'])){
  	 $email  = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
  	 $pass = htmlentities(mysqli_real_escape_string($con,$_POST['user_pass']));
  	 $name = htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
  	 $count = htmlentities(mysqli_real_escape_string($con,$_POST['country']));
  	 // $age = htmlentities(($con,$_POST['age']));

     if($name == ''){
     	echo"<script>alert('pls enter your name')</script>";
     	exit();
     }
     if(strlen($pass)<8){
     	echo"<script>alert('minimum 8 characters')</script>";
     	exit();
     }

     $check_email = "select * from user where email='$email'";
     $run_email = mysqli_query($con,$check_email);

     $check = mysqli_num_rows($run_email);

     if($check==1){
     	echo"<script>alert('email already exist try again')</script>";
     	echo"<script>window.open('signup.php','_self')</script>";
     	exit();
     }

     $insert = "INSERT INTO user (email,user_pass,user_name,country,age) values('$email','$pass','$name','$count','20')";

     $query = mysqli_query($con,$insert);

     if($query){
     	echo"<script>alert('congratulations $name,your account has been created')</script>";
     	echo"<script>window.open('signin.php','_self')</script>";
     }
     else{
     	echo"<script>alert('registration failed, try again!')</script>";
     
     	echo"<script>window.open('signup.php','_self')</script>";
     }

  	 
  }

?>
