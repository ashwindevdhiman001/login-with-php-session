<?php

// Note: The session_start() function must be the very first thing in your document. Before any HTML tags and any php code.
session_start();
// print_r($_SESSION);

// isset — Determine if a variable is set and is not NULL.
// !empty — Determine whether a variable is NOT empty.empty is better than isset
if(!empty($_POST)){

	$email = $_POST['email'];
	$pswd = $_POST['pswd'];

	/*
	* Let account-email is demo@mail.com
	* and account-password is 123456
	*/
	$account_email = "demo@mail.com";
	$account_password = "123456";

	if(trim($email) == $account_email && trim($pswd) == $account_password){
		$_SESSION["is_login"] = true;
		$_SESSION["user_email"] = $email;
		header("Location: ../index.php?msg=Successfull Login");
	}else{
		// remove all session variables
		session_unset(); 
		// destroy the session 
		session_destroy();
		header("Location: ../index.php?msg=Email/Password Not Match");
	}
}else{
	header("Location: ../index.php");
}

?>