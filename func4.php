<?php
session_start();
$con=mysqli_connect("localhost","root","","hospitalms");

if(isset($_POST['rsub'])){
	$username=$_POST['username2'];
	$password=$_POST['password3'];
	$query="select * from admintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:admin-panel2.php");
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index.php';</script>");
}































?>