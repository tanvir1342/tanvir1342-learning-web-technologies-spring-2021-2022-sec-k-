<?php



if(isset($_REQUEST['submit']))
{
	if($_REQUEST['name'] == null)
	{
		echo "invalid user name";
	}
	else
	{
		$name = $_REQUEST['name'];
		echo $name;
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
		<input type="name" name="name" value=""><br>
		<input type="submit" name="submit" value="submit">
		<hr>
	</form>

</body>
</html>