<?php
	require_once "configg.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: index.php');
	exit();
?>