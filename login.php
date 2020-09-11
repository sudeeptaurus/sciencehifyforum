<?php

$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'includes/dbh-inc.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);

	$sql = "SELECT * FROM signin where email='$email'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	if ($num == 1) {
		$login = true;
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		header("location: index.php");
	} else {
		$showError = "Invalid Credentials";
	}
}

include "includes/header.php";
require "includes/navigation.php";


if ($login) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in..
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	</div>';
}
if ($showError) {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showError . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	</div>';
}

?>

<div class="container">

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Login</h1>
			<p class="lead">Please login to access privileged contents.</p>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-5">
				<div class="form-group">
					<h2></h2>
					<form action="login.php" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="password" />
						</div>
						<div class="g-recaptcha" data-sitekey="6Lcj7soZAAAAAEa7Tlj27robmMZSFpJbvXLRoa_q"></div>
						<br>
						<div class="input-group">

							<input type="submit" class="btn btn-primary" value="Login" name="" />
							<!-- <button type="submit" value="submit" class="btn btn-primary" name="login">Login</button> -->
						</div>
					</form>
				</div>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
</div>


<script>
	function onSubmit(token) {
		document.getElementById("demo-form").submit();
	}
</script>

<?php
include "includes/footer.php";

?>