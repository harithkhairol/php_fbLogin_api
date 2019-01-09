<?php 

require_once "fb-config.php";

$redirectURL = "http://localhost/facebook_study/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

echo $loginURL;

?>


<!DOCTYPE html>
<html>

<head>
	<title>Log In</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container" style="margin-top: 100px">
		
		<div class="row justify-content-center">
			
			<div class="col-md-6 col-md-offset-3" align="center">

			<form>
				
				<input type="email" name="email" placeholder="Email" class="form-control">

				<br>

				<input type="password" name="password" placeholder="Password" class="form-control">

				<br>

				<input type="button" value="Log In With Facebook" class="btn btn-primary" onclick="window.location = '<?php echo $loginURL; ?>'">




			</form>
				

			</div>

		</div>


	</div>

</body>
</html>