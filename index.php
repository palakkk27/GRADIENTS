<?php
include('connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>FIRST PHP</title>
</head>
<body>

<h1>Login Form</h1>
<form method="POST">
	Email: <input type="email" name="email">
	<br>
	Password: <input type="password" name="password">
	<br>
	<button type="Submit" name ="submitbtn">Login</button>
</form>


	<?php

if(isset($_POST['submitbtn'])){
	$mail= $_POST['email'];
	$pass= $_POST['password'];
	


$sql = "INSERT INTO Login VALUES('$mail','$pass');";

if(mysqli_query($conn, $sql)){
	// echo "<script>
	// location.href = "localhost/ff06/gradient.html";
	// </script>";

	header("Location: http://localhost/ff06/gradient.html");
}
else{
	echo "Error". $sql."<br>". mysqli_error($conn);
}
}


