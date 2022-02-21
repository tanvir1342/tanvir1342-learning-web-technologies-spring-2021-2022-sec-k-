<?php
?>

<html>
<head>
	
	<title>Login</title>
</head>
<body>
	<h1>Log in form</h1>

	<form method="POST" action="loginchk.php">
		<table>
			<tr>
				<td>username</td>
				<td colspan="2"><input type="username" name="username" value="" ></td>
			</tr>
			<tr>
				<td>password</td>
				<td colspan="2"><input type="password" name="password" value="" ></td>
			</tr>
			<tr>
				
				<td colspan="3"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>