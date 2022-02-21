<?php

session_start();


if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$Email = $_REQUEST['Email'];
	$gender = $_REQUEST['gender'];
	$DOB = $_REQUEST['DOB'];
	$image = $_REQUEST['image'];



	if($username != null && $password != null)
	{
		$user = ['username'=>$username,'password'=>$password,'name'=>$name,'Email'=>$Email,
		'gender'=>$gender,'DOB'=>$DOB,'image=>$image'];
		$_SESSION['user'] = $user;
		header('location: login.php');
	}
	else
	{
		echo "null submission";
	}
}


?>