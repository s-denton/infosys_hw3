<?php 

include 'includes/header.html'; 

function calculate_tax($income, $status) {
	
	if($status === 'single') {
		if ($income >= 0 && $income <= 9725) {
			$tax = $income * .1;
		} else if ($income >= 9276 && $income <= 37650) {
			$tax = 927.50 + (($income - 9275) * .15);
		} else if ($income >= 37651 && $income <= 91150) {
			$tax = 5183.75 + (($income - 37650) * .25);
		} else if ($income >= 91151 && $income <= 190150) {
			$tax = 18558.75 + (($income - 91150) * .28);
		} else if ($income >= 190151 && $income <= 413350) {
			$tax = 46278.75 + (($income - 190150) * .33);
		} else if ($income >= 413351 && $income <= 415050) {
			$tax = 119934.75 + (($income - 413350) * .35);
		} else if ($income >= 415051) {
			$tax = 120529.75 + (($income - 415050) * .396);
		}
	} else if($status === 'married') {
		if ($income >= 0 && $income <= 18450) {
			$tax = $income * .1;
		} else if ($income >= 18451 && $income <= 74900) {
			$tax = 1845 + (($income - 18450) * .15);
		} else if ($income >= 74901 && $income <= 151200) {
			$tax = 10312.50 + (($income - 74900) * .25);
		} else if ($income >= 151201 && $income <= 230450) {
			$tax = 29387.50 + (($income - 151200) * .28);
		} else if ($income >= 230451 && $income <= 411500) {
			$tax = 51577.50 + (($income - 230450) * .33);
		} else if ($income >= 411501 && $income <= 464850) {
			$tax = 111324 + (($income - 411500) * .35);
		} else if ($income >= 464851) {
			$tax = 129996.50 + (($income - 464850) * .396);
		}
	}
	
	// Return the formatted tax:
	return number_format($tax, 2);
	
} // end calculate_tax function

?>

<nav class="navbar navbar-light navbar-expand-md">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item active">
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

<?php

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Minimal form validation:
	if (isset($_POST['income'], $_POST['status']) &&
	 is_numeric($_POST['income']) && is_string($_POST['status']) ) {
	
		// Calculate the results:
		$tax = calculate_tax($_POST['income'], $_POST['status']);

		// Print the results:
		echo '<h1>Total Tax Due</h1>
	<p>The total federal tax garnished from earning $' . number_format($_POST['income'], 2) . ', filing with a status of ' . $_POST['status'] . ' is $' . $tax;
	
	} else { // Invalid submitted values.
		echo '<h1>Error!</h1>
		<p class="error">Please enter a valid income and status.</p>';
	}
	
} // End of main submission IF.

?>
<hr>
<div id="calculator">
	<h2 class="content-title">Federal Tax Calculator</h2>
	<hr>
	<div class="form-container">
		<form action="calculator.php" method="post">
			<div class="form-group">
			  <label for="income">Total Taxable Income:</label>
			  <input type="text" class="form-control" name="income" id="income" value="<?php echo $_POST['income']; ?>" placeholder="e.g. 75000">
			</div>
			<div class="form-group">
			  <label for="status">Filing Status:</label>
			  <select class="form-control" name="status" id="status">
			    <option value="single"<?php if (isset($_POST['status']) && ($_POST['status'] == 'single')) echo ' selected="selected"'; ?>>Single</option>
			    <option value="married"<?php if (isset($_POST['status']) && ($_POST['status'] == 'married')) echo ' selected="selected"'; ?>>Married or Widow(er)</option>
			  </select>
			</div>
			<input type="submit" class="btn btn-lg btn-success" id="calculate-btn" name="submit" value="Calculate" />
		</form>
	</div>
</div>
<?php include 'includes/footer.html'; ?>