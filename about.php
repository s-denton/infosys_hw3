<?php include 'includes/header.html'; ?>

<nav class="navbar navbar-light navbar-expand-md">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculator.php">Tax Calculator</a>
      </li>
      <li class="nav-item active">
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
    <h2 class="content-title">About Me</h2>
    <hr>
    <blockquote class="blockquote">
      <p class="lead">I am a senior at Kean University, graduating in January 2018. I am 36 years old, and am married with two boys, Chase and Reece. My interests are web development, software engineering, music, and spending time with my family. After graduation I hope to get a good job doing front-end development full time.</p>
    </blockquote>
  </div>

<?php include 'includes/footer.html'; ?>