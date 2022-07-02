<?php
	$conn = mysqli_connect('localhost', 'root', '', 'contactDB');
	 if($conn)
	 {
	 	echo "connection succesfull <br>";
	 }
	 else
	 {
	 	die("connection lost".$conn->connect_error);
	 }
	 //create database
	 /*$sql = "CREATE DATABASE contactDB";
	 if ($conn->query($sql) === TRUE)
	 {
	 	echo "database is created";
	 }
	 else
	 {
	  	echo "error in creating data".$conn->error;
	 }*/
	 
	 //create table
	 $sql = "CREATE TABLE student_queries(id int(6) auto_increment primary key, name varchar(30) not null, email varchar(50) not null, mobile int(12) not null, message varchar(2000) not null)";
	 if($conn->query($sql) === TRUE)
	 {
	 	echo "table is created";
	 }
	 else
	 {
	 	echo "table is not create".$conn->error;
	 }
	 $conn->close();
?>