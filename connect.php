<?php

$servername="127.0.0.1";
$username="root";
$SPassword="jeel0004";
$database="Project_1";
// echo "Before";
$connection= new mysqli($servername,$username,$SPassword,$database);
// echo "After";
// echo isset($_POST['submit']);

if($connection === false)
{
    die("ERROR: Could not connect. " . $connection->connect_error);
}


if(isset($_POST['submit']))
{
	$username=$_POST['user_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="insert into User_info (user_name, email, Password) values ('$username', '$email', '$password')";
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
