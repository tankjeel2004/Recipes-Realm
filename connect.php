<?php

// $servername="localhost";
// $username="root";
// $SPassword="jeel0004";
// $database="recipes_realm";
//  echo "Before";
// $connection = new mysqli($servername,$username,$SPassword,$database);
//  echo "After";
// echo isset($_POST['submit']);
$mysqli = new mysqli("localhost","root","jeel0004","recipes_realm");


if($connection === false)
{
    die("ERROR: Could not connect. " . $connection->connect_error);
}


if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="insert into user (username, email, password) values ('$username', '$email', '$password')";
	if($connection->query($sql) === true)
	{
		echo "<script>alert('Registration Done Successfully')</script>";
	}
	else
	{
		echo "Something Went Wrong" . $connection->error;
	}
	$connection->close();

}

?>
