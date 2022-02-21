<?php

session_start();
if(isset($_COOKIE['status'])){

$user = $_SESSION['user'];
$name = $user['name'];
$email = $user['Email'];
$gender = $user['gender'];
$dob = $user['DOB'];




?>

<html>
<head>

	<title>Home</title>
</head>
<body>

<form>
	<table border="1px" width="100%">
		<tr align="center">
			<td colspan="3"><h1>Home</h1></td>
		</tr>
		<tr>
			<td width="30%" align="top"><h2>Account</h2></td>
			<td colspan="2"></td>
		</tr>
		<tr hieght ="600px">
			<td>
				<a href="index.php">Dashboard</a><br>
				<a href="profile.php">veiw Profile</a><br>
				<a href="Edit_profile.php">Edit profile</a><br>
				<a href="change_pic.php">Change Profile picture</a><br>
				<a href="change_pass.php">change password</a><br>
				<a href="logout.php">logout</a>



			</td>
			<td colspan="2">
				<h3>Name:<?=$name?></h3><br>
				<h3>Email:<?=$email?></h3><br>
				<h3>gender:<?=$gender?></h3><br>
				<h3>Date of birth:<?=$dob?></h3>
			</td>
		</tr>
	</table>
</form>

</body>
</html>
<?php
}
else{
	echo "invaild ";
}
?>