<?php
$servername="localhost";
$susername="root";
$spassword="";
$dbname="recipes_realm";

$con = mysqli_connect($servername,$susername,$spassword,$dbname);

if($con)
{
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = $con->prepare("insert into user(username,email,password) values(?,?,?)");
	$query->bind_param("sss",$username, $email, $password);
	$query->execute();

	echo "<script>alert('Registration Done Successfully')</script>";
	$query->close();
	$con->close();
}
else
{
	echo "Error Occured";
}

?>

 



