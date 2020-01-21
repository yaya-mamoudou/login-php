<?php 
	$email=$_POST["email"];
	$password1=$_POST["password"]; 
	$database="yaya"; 
	$username="root";
	$password="";
	$hostname="localhost";

	//database connection
	$dbh= new PDO('mysql:host=localhost; user=root; password=;dbname=yaya');
	$statement=$dbh->query('SHOW DATABASES');
	print_r($statement->fetchAll());
 ?>