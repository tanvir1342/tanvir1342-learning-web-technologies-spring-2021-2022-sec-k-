<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<form>
		
		<table border="1" width="100%">
			<tr align="center">
				<td colspan="3"><h1>Person profile<h1></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="Name" name="name" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="Email" name="Email" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Usser name:</td>
				<td>
					<input type="username" name="Username" value="">
					
				</td>
				<td></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" value=""></td>
				<td></td>
			</tr>
			<tr>
				<td>Confirm password:</td>
				<td>
					<input type="password" name="password" value="">
					
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value=""> male
					<input type="radio" name="gender" value="" >female
					<input type="radio" name="gender" value=""> other
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Date of birth:</td>
				<td><input type="date" name="DOB" value=""></td>
				<td></td>
				
			</tr>
			<tr>
				<td colspan="3"></td>
			</tr>
			<tr align="right">
				<td colspan="3">
					<input type="submit" name="submit" value="submit">
                    <input type="reset" name="reset" value="reset">
				</td>
			</tr>
		</table>
		
	</form>

</body>
</html>