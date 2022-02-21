<?php

session_start();
if(isset($_COOKIE['status'])){

	$user = $_SESSION['user'];
	$name = $user['name'];
	$Email = $user['Email'];
	$gender =$user['gender'];
	$DOB = $user['DOB'];
	$image = $user['image'];



?>



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1>name:<?=$name?></h1>
<h1>name:<?=$Email?></h1>
<h1>name:<?=$gender?></h1>
<form method="POST" action="">
	<input type="name" name="name" value="">
	<input type="submit" name="submit" value="submit">
</form>


<a href="logout.php">logout</a>
</body>
</html>

<?php
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$_SESSION['user']['name'] = $name;
		header('location: index.php');
	}


}
else{
	echo "invaild ";
}
?>