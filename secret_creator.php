<?php
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mainDB');

	

	 $sql = "INSERT INTO secret_code(code) VALUES (5008)";
     if($con->query($sql) === TRUE)
     {
        echo "data is inserted succesfully";
     }
     else
     {
        echo "data is not inserted".$conn->error;
     }
?>