<?php 
include('connection.php');
session_start();

if (isset($_POST['submit'])) {
	if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM Tbllogin WHERE LGusername='$username' and LGpswd = '$password'";
		
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1){
	$_SESSION['username'] = $username;
	
	header('Location: login-page.php');
	}
	else {
	header ('Location: logmasuk.php');
	$error = "invalid login";
	}
}

exit();
	}


?>