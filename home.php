<?php 
include 'includes/header.html';
include 'includes/login_handler.php';
?>
	<nav class="navbar navbar-light navbar-expand-md">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navigation">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="home.php">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="calculator.php">Tax Calculator</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php">About Us</a>
	      </li>
	    </ul>
	    <form class="form-inline" action="login.php">
			<a href="login.php"><button class="btn btn-primary" id="nav-btn" type="button">Login/Register</button></a>
		</form>
	  </div>
	</nav>
	<hr>
	<div class="content-container text-left">
		<h2 class="content-title"><span><i id="hot-to-icon" class="fa fa-question-circle-o"></i></span> How to use the calculator</h2>
		<hr>
		<blockquote class="blockquote">
			<p class="lead">To use the calculator, simply enter you annual gross income, and select your filing status from the dropdown menu. Press calculate and you will be presented with your total tax owed to the IRS.</p>
		</blockquote>
	</div>

<?php include 'includes/footer.html'; ?>