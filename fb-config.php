<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
	'app_id' => 'YOUR APP ID',
	'app_secret' => 'YOUR APP SECRET',
	'default_graph version' => 'v2.10'
	]);

$helper = $FB->getRedirectLoginHelper();




?>
