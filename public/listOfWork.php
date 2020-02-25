<?php
require_once '../includes/session.php';
require_once '../includes/functions.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> my assignment </title>  
<link type="text/css" rel="stylesheet" href="assets/hu.css">
<link type="text/css" rel="stylesheet" href="assets/bootstrap-4.0.0/dist/css/bootstrap.min.css"> 

</head>
<body>
<div clas="container-fluid">

<div class="row">
    <div class="col-md-12">
<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link navbarlink" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbarlink" href="contact_us.php">Contact Us</a>
    </li>
      <li class="nav-item">
      <a class="nav-link navbarlink" href="about_us.php">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbarlink" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbarlink" href="register.php">Register</a>
    </li>
    <li class="nav-item float-right">
      <a class="nav-link navbarlink" href="../includes/logout.php">Logout</a>
    </li>
  </ul>
</nav>
 </div>
</div>
<div class="container">
    <br>
<?php
   echo message();
   echo errors();
?>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron mt-5">
              <h1>List of work</h1>
              <ul>
                  <li>hdfnx</li>
                  <li>sfdf</li>
                  <li>sd</li>
                  <li>sfd</li>
                  <li>sdf</li>
              </ul>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>