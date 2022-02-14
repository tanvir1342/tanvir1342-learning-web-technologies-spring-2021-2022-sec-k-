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