<?php include "../includes/header.php" ?>

<form>
	<input type="text" name="$username">
	<input type="text" name="$password">
	<input type="text" name="$email">
	<button>Submit</button>
</form>

<?php

echo "signup page";

if(isset($_POST['submit'])) {

	$username = $_POST['$username'];
	$password = $_POST['$password'];
	$password = $_POST['$email'];


	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');    

	if($connection) {

		echo "Connected To Databases";

	} else {

		die("Database connection failed");

	}
}



?>

<?php include "../includes/footer.php" ?>;