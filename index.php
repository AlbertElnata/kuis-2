<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>KUIS 2 PWEB</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>SELAMAT KAMU BERHASIL LOGIN!!!</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>