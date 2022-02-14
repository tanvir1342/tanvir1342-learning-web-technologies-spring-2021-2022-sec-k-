<?php

$name = "";
$invalidName ="";

if(isset($_REQUEST['submit']))
{
	if($_REQUEST['name'] == null)
	{
		$invalidName = "invalid user name";
	}
	else
	{
		$name = $_REQUEST['name'];
		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>name</title>
</head>
<body>
	<form method="POST" action="">
		Name:<br>
		<input type="name" name="name" value="<?=$name?>">
        <h1><?=$invalidName?></h1>
		<br>
		<input type="submit" name="submit" value="submit">
		<hr>
	</form>

</body>
</html>