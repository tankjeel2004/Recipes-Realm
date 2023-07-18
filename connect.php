<?php
// Connection of Database
$servername="localhost";
$username="root";
$SPassword="jeel0004";
$database="Project_1";

$connection=mysqli_connect($servername,$username,$SPassword,$database);
if(!$connection)
{
	die("Error".mysqli_error($connection));
}


if(isset($_POST['submit']))
{
	$username=$_POST['user_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="insert into Project_1(user_name,email,Password) values('$username','$email','$password')";

	if(mysqli_query($connection,$sql))
	{
		echo "<script>alert('Registration Done Successfully')</script>";
	}
	else
	{
		echo "Something Went Wrong".mysqli_error($connection);
	}
	mysqli_close($connection);

}

?>
