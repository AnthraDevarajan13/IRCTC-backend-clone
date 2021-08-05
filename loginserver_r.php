<?php 
	session_start();
	if(isset($_POST["Submit"]))
	{
	$user="";
	$password="";
	$db = mysqli_connect('localhost','root','','railway') or die("Could not connect to tables");
	$user=mysqli_real_escape_string($db,$_POST["userid"]);
	$password=mysqli_real_escape_string($db,$_POST["password"]);
	$user=strtoupper($user);
	if(empty($user)) echo "<script>window.open('login.php','_self');alert('Enter the username');</script>";
	if(empty($password)) echo "<script>alert('Enter the password');</script>";
	$query="select * from users where userid='$user' and password='$password'";//Validating the password
	$conrows=mysqli_query($db,$query);
	$row=mysqli_fetch_array($conrows);// Connecting to sql and fetching array
	$rows=mysqli_num_rows($conrows);
	if($rows==1)
	{	//If the number is 1 then the credentials are valid thereby directing them 
		//to the corresponding page with respect to the user
		$_SESSION['uid']=$row['userid'];
		$_SESSION['id']=$user;//Extracting the values 
	}
	else
	{
		echo "<script>alert('Invalid user credentials')</script>";
	}
	}
?>