<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
	'app_id' => '510733956086232',
	'app_secret' => '7d4328fe0845c03349c4a3460a08285c',
	'default_graph version' => 'v2.10'
	]);

$helper = $FB->getRedirectLoginHelper();




?>