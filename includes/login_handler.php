<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['username']))
		$username = $_POST['username'];

	if (!empty($_POST['password']))
		$password = $_POST['password'];

	if ($username === "username" && $password === "password") {
		echo "<h4 class='content-title text-left'>Welcome, " . $_POST['username'] . "!</h4>";
	} else {
		echo "<h3 class='content-title'>Invalid username or password</h3>";
		echo "
			<div class='row'>
				<div class='col-12'>
					<button type='button' class='btn btn-lg btn-primary' style='margin-top: 20px;' onclick='history.back()'>Go Back</button>
				</div>
			</div>
		";
		exit;
	}
}
?>