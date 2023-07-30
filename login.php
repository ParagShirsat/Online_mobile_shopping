<?php
session_start(); // Start the session
$error = ''; // Initialize the error message
if (isset($_POST['submit'])) { // Check if the login form has been submitted
  if (empty($_POST['email']) || empty($_POST['password'])) { // Check if email or password is empty
    $error = 'Usernname or password is invalid';
  } else {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    // Hardcode the email and password for the user in this example
    $valid_uname = 'admin';
    $valid_password = '123';
    if ($email == $valid_email && $password == $valid_password) { // If the email and password match the valid user
      $_SESSION['uname'] = $uname; // Store the email in session variable
      header('Location: page.html'); // Redirect to the dashboard page
    } else {
      $error = 'Username or password is invalid';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-5">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Login</h3>
          </div>
          <div class="card-body">
            <form action="./page.html" method="post">
              <div class="mb-3">
                <label for="uname" class="form-label">User Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter Username">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
