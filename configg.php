<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("138900873055-o1e6jerukfvf9a43d21pp1mmm68p8lco.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/Facebook/g-callbackk.php");
	$gClient->addScope("https://www.googleapis.com/auth/userinfo.profile openid https://www.googleapis.com/auth/userinfo.email");
?>
