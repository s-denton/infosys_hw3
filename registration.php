<?php include 'includes/header.html'; ?>

		<h3 id="content-title">Registration</h3>
		<small class="text-muted"><p>*all fields are required</p></small>
		<div class="form-container">
			<form action="registration_handler.php" method="post">
				<div class="form-group row">
					<label for="firstname">First Name:</label>
					<input type="text" id="firstname" class="form-control form-control-lg" name="firstname" size="20" maxlength="40" value="<?php echo $_POST['firstname']; ?>">
				</div>
				<div class="form-group row">
					<label for="lastname">Last Name:</label>
					<input type="text" id="lastname" class="form-control form-control-lg" name="lastname" size="20" maxlength="40" value="<?php echo $_POST['lastname']; ?>">
				</div>
				<div class="form-group row">
					<label for="username">Username:</label>
					<input type="text" id="username" class="form-control form-control-lg" name="username" size="20" maxlength="40" value="<?php echo $_POST['username']; ?>">
				</div>
				<div class="form-group row">
					<label for="password">Password:</label>
					<input type="password" id="password" class="form-control form-control-lg" name="password" size="20" maxlength="40">
				</div>
				<div class="form-group row">
					<label for="confirm-password">Confirm Password:</label>
					<input type="password" id="confirm-password" class="form-control form-control-lg" name="confirm-password" size="20" maxlength="40">
				</div>
				<div class="form-group row">
					<label for="email">Email Address:</label>
					<input type="email" id="email" class="form-control form-control-lg" name="email" size="20" maxlength="40" value="<?php echo $_POST['email']; ?>">
				</div>
				<div class="form-group row">
					<label for="address">Home Address:</label>
					<input type="text" id="address" class="form-control form-control-lg" name="address" size="20" maxlength="80" value="<?php echo $_POST['address']; ?>">
				</div>
				<div class="form-check form-check-inline">
					<label class="form-check-label" for="gender" style="font-weight: 100;">
						<input type="radio" name="gender" class="form-check-input form-control-lg" value="male"<?php if (isset($_POST['gender']) && ($_POST['gender'] == 'male')) echo ' checked="checked"'; ?>> Male
					</label>
					<label class="form-check-label" for="gender" style="font-weight: 100;">
						<input type="radio" name="gender" class="form-check-input form-control-lg" value="female"<?php if (isset($_POST['gender']) && ($_POST['gender'] == 'female')) echo ' checked="checked"'; ?>> Female
					</label>
				</div>
				<div class="form-group row">
					<div class="col-6">
						<a href="login.php" id="reg-page-login-btn" class="btn btn-lg btn-primary">Login</a>
					</div>
					<div class="col-6">
						<button type="submit" id="reg-page-reg-btn" name="submit" class="btn btn-lg btn-success">Register</button>
					</div>
				</div>
			</form>
		</div>
<?php include 'includes/footer.html'; ?>