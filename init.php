<?php 
session_start();
error_reporting(0);
require 'db1.php';


if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'uname', 'pass', 'email');
	if (user_active($user_data['unmae']) === false) {
		session_destroy();
		header('Location: home.php');
		exit();
	}
}
$errors = array();

?>