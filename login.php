<?php include 'includes/header.html'; ?>

		<div class="form-container">
			<form action="home.php" method="post">
				<div class="form-group row">
					<label for="user-login">Username:</label>
					<input type="text" id="user-login" class="form-control form-control-lg" name="username" size="20" maxlength="40" value="<?php $_POST['username']; ?>">
				</div>
				<div class="form-group row">
					<label for="login-password">Password:</label>
					<input type="password" id="login-password" class="form-control form-control-lg" name="password" size="20" maxlength="40">
				</div>
				<div class="form-group row">
					<div class="col-6">
						<a href="registration.php" class="btn btn-lg btn-success" style="margin-top: 20px; width: 140px; float: right;">Registration</a>
					</div>
					<div class="col-6">
						<button type="submit" name="submit" class="btn btn-lg btn-primary" style="margin-top: 20px; width: 140px; float: left;">Login</button>
					</div>
				</div>
			</form>
		</div>
		
<?php include 'includes/footer.html'; ?>