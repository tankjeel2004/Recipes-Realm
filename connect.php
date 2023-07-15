<?php

$username = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['Password'];

// connection of database

$connection = new mysqli('localhost','root','jeel0004','Project_1');
if ($connection->connect_error) 
	{
		die('Connection Failed : ' .$connection->connect_error);
	}
else
	{
		$data = $connection->prepare("insert into Project_1(user_name,email,password) values(?, ?, ?)");
		$data->bind_param("sss",$username, $email, $password);
		$data->execute();
		echo "Successfull";
		$data->close();
		$connection->close();
	}




?>
