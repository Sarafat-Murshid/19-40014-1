<?php
	require "../model/User.php"

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{

		$username = $_POST['uname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		create($username,$email,$password)
	}
?>