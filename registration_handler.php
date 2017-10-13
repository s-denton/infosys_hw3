<?php
	include 'includes/header.html';
	if (!empty($_POST['firstname']))
		$firstname = $_POST['firstname'];
	if (!empty($_POST['lastname']))
		$lastname = $_POST['lastname'];
	if (!empty($_POST['username']))
		$username = $_POST['username'];
	if (!empty($_POST['password']))
		$password = $_POST['password'];
	if (!empty($_POST['confirm-password']))
		$confirm_password = $_POST['confirm-password'];
	if (!empty($_POST['email']))
		$email = $_POST['email'];
	if (!empty($_POST['address']))
		$address = $_POST['address'];
	if (!empty($_POST['gender']))
		$gender = $_POST['gender'];

	if ($password === $confirm_password) {
		echo "<div class='content-container'>";
		echo"<h2 style='font-weight: 100;'>Thank you for registering " . $firstname . " " . $lastname . "!</h2>";
		echo "<div class='text-left'>";
		echo "<p class='lead'>Your username is: " . $username . ", your password is: " . $password . ", you are registered with the following email address: " . $email . ", your mailing address is on record as: " . $address . ", your gender is listed as: " . $gender . "</p>";
		echo "</div>";
		echo "</div>";
	} else {
		echo "<h3 style='font-weight: 100;'>Passwords do not match</h3>";
	}
?>

<div class="row">
	<div class="col-12">
		<button type="button" class="btn btn-lg btn-primary" style="margin-top: 20px;" onclick="history.back()">Go Back</button>
	</div>
</div>

<?php include 'includes/footer.html'; ?>