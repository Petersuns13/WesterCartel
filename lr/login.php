<?php

include 'core/init.php';


if (empty($_POST) ==== false){
	$username = $_POST['username'];
	$password = $_POST['password'];
 
 if (empty($username)  === true || empty($password) === true) {
	 $errors[] = 'You need to enter a username and password';
	}else if (user_exists()=== false){
		$errors[] = 'Sorry, but have your registered?';
	}else if(user_active($username) === false){
		$errors[] = 'You have not activated your accunt';
	}else{
		
	}
		print_r($errors);
 }
 

?>