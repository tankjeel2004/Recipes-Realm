<?php
$servername="localhost";
$susername="root";
$spassword="";
$dbname="recipes_realm";

$con = mysqli_connect($servername,$susername,$spassword,$dbname);

if($con)
{
    $recipe_title = $_POST['recipe_title'];
	$recipe_description = $_POST['recipe_description'];
	$recipe_ingredients = $_POST['recipe_ingredients'];
    $recipe_instructions = $_POST['recipe_instructions'];

	$query = $con->prepare("insert into recipes(title,description,ingredients,instructions) values(?,?,?,?)");
	$query->bind_param("ssss",$recipe_title, $recipe_description, $recipe_ingredients, $recipe_instructions);
	$query->execute();

	echo "<script>alert('Recipe Added')</script>";
	$query->close();
	$con->close();
}
else
{
	echo "Try again";
}

?>

 



