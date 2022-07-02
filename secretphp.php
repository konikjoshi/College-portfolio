<?php
	$code = $_POST['code'];

	//$CODE = stripcslashes($code);
	//$CODE = mysql_real_escape_string($code);

	mysql_connect("localhost", "root");
	mysql_select_db("secret");

	$result = mysql_query("select * from Code where code = '$CODE' ") 
		or die("failed to load".mysqli_error());

		$row = mysql_fetch_array($result);
		if($row['code'] == $CODE)
		{
			echo "login success welcome ".$row['code'];
			header('location :create.php');
		}
		else
		{
			echo "failed to login";
			header('location :create.php');
		}
?>