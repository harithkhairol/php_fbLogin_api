<?php

	require_once "fb-config.php";

	try{

		$accessToken = $helper->getAccessToken();
	} catch(\Facebook\Exceptions\FacebookResponseException $e){

		echo "Response Exception: ". $e->getMessage();
		exit();

	} catch(\Facebook\Exceptions\FacebookSDKException $e){

		echo "SDK Exception: ". $e->getMessage();
		exit();

	}

	if(!$accessToken){

		header('Location: login.php');
		exit();

	}

	$oAuth2Client = $FB->getOAuth2Client();

	if(!$accessToken->isLongLived()){

		$accessToken = $oAuth2Client->getLongLivedAccessToken();

	}

	$response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
	$userData = $response->getGraphNode()->asArray();
	

	/* Check if the data has passed */
	//echo "<pre>";
	//var_dump($userData);

	$_SESSION['userData']= $userData;
	$_SESSION['access_token']= $userData;
	header('Location: index.php');
	exit();


?>