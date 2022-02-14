<?php


$email="";
$invalid ="";

if(isset($_REQUEST['submit']))
{
	if ($_REQUEST['Email']==null) {
		$invalid = "invalid email or email is epmty";
	}
	else
	{
		$email = $_REQUEST['Email'];
			}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email</title>
</head>
<body>
	<form method="POST" action="">
		Email:<br>
		<input type="Email" name="Email" value="<?=$email?>"><h1><?=$invalid?></h1>
		<br>
		<input type="submit" name="submit" value="submit">
		<hr>
	</form>

</body>
</html>