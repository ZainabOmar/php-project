<?php include "../includes/header.php" ?>

<?php


$connection = mysqli_connect('localhost', 'root', '', 'loginapp');  
if(!$connection) {
	die("Database connection failed");
}

?>

<?php include "../includes/footer.php" ?> 