<?php
// session_start();
include("../db_connection.php");
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

	$email = $_POST['email'];
	$password =($_POST['password']);

	$sql = "SELECT * FROM admin_login WHERE email='" . $email . "'";
	$query = mysqli_query($conn, $sql);

	$get_no_row = mysqli_num_rows($query);

	if ($get_no_row) {
		$data = mysqli_fetch_assoc($query);
		if ($data['password'] ==($_POST['password'])) {
			session_start();
			$_SESSION['email'] = $data['email'];
			// $_SESSION['name'] = $data['name'];
			header('location:dasbord.php');
		} else {
			echo "<script>
			alert('Password don\'t Match....');
			window.location.href='index.php';
		  </script>";
		}
	} else {
		echo "<script>
			alert('User not Exist...);
			window.location.href='index.php';
		  </script>";
	}
} else {
	echo "<script>
			alert('Somethings Went Wrong.\nPlease Try Again...');
			window.location.href='index.php';
		  </script>";
}