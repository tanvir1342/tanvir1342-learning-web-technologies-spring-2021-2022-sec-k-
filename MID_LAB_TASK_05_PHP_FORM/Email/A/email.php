<?php


$email;
if(isset($_REQUEST['submit']))
{
	if ($_REQUEST['Email']==null) {
		echo "invalid email or email is epmty";
	}
	else
	{
		$email = $_REQUEST['Email'];
		echo $email;
	}
}


?>