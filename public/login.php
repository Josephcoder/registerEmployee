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
    <h1 style="color: white;"> Login for more Information </h1>
  </div>
</div>
<?php
   echo message();
   echo errors();
   ?> 
<div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4 form-page mt-4">
      <div class="">
      <form action="../includes/userRegisterLogin.php" method="POST" style="margin: 12px;" onsubmit="return validateForm();">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
            <div id="val">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
            <div id="vali">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
          <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
        </div>
    </div>
     <div class="col-md-4"></div>
</div>  

        </div>
        <script>
function validateForm(){
var box = document.getElementById("email").value;
var boxi = document.getElementById("pwd").value;
var numbers = /^[0-9]+$/;
if(box == ""){
var y = document.getElementById("val")
y.innerHTML="Email must be filled out";
y.style.color="red";
return false;
}
else if(boxi == "")
{
var p = document.getElementById("vali")
p.innerHTML="Password must be filled out";
p.style.color="red";
return false;
}
else if(boxi.length !=8 ){
var z = document.getElementById("vali")
z.innerHTML="Password must be 8 characters";
z.style.color="red";
return false;
}
else {
return true;
}
}

</script>
</body>

</html>