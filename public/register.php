<?php
require_once '../includes/session.php';
require_once '../includes/functions.php';
?>

<!doctype html>
<html>
<head>
<title> my assignment </title>
<link type="text/css" rel="stylesheet" href="assets/hu.css">
<link type="text/css" rel="stylesheet" href="assets/bootstrap-4.0.0/dist/css/bootstrap.min.css"> 
</head>
<body>
   <div clas="container-fluid">
            
<div class="row">
    <div class="col">
<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link navbarlink" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbarlink" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbarlink" href="contact_us.php">Contact Us</a>
    </li>
      <li class="nav-item">
      <a class="nav-link navbarlink" href="about_us.php">About Us</a>
    </li>
  </ul>

</nav>
 </div>
</div>
        
 <div class="row">
  <div class="col-md-12 bg-primary login-form">
    <h1 style="color: white;"> Register employee</h1>
  </div>
</div>
<?php
   echo message();
   echo errors();
?>
<div class="row">
    <div class="col-md-2"></div>
     <div class="col-md-8 form-page mt-4">
      <div class="">
        <form action="../includes/userRegisterLogin.php" method="POST" style="margin: 12px;">
        <div class="form-group">
            <label for="first name">First name:</label>
            <input type="text" name="fname" class="form-control" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="first name">Last name:</label>
            <input type="text" name="lname" class="form-control" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="first name">Phone number:</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone number">
          </div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
          </div>
          <button type="submit" name="register" class="btn btn-primary">Register</button>
          <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
        </div>
    </div>
     <div class="col-md-2"></div>
</div>  

        </div>
</body>
</html>