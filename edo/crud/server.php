<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$phone="";
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone= $_POST['phone'];

		mysqli_query($db, "INSERT INTO info (name, address, phone) VALUES ('$name', '$address', '$phone')");
		$_SESSION['message'] = "Address saved";
		header('location: crud.php');
	}

// ...

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone= $_POST['phone'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address', phone='$phone' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: crud.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: crud.php');
}
