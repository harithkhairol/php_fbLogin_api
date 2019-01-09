<?php 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container" style="margin-top: 100px">
		
		<div class="row justify-content-center">
			
			<div class="col-md-9"">

				<center>
				<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
				</center>
			</div>

			

			<div class="col-md-9"">

				<table class="table table-hover table-bordered">
					
					<tbody>
						
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['userData']['id'] ?></td>
						</tr>

						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['userData']['first_name'] ?></td>
						</tr>

						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['userData']['last_name'] ?></td>
						</tr>

						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['userData']['email'] ?></td>
						</tr>


					</tbody>

				</table>

			</div>

		</div>


	</div>

</body>
</html>