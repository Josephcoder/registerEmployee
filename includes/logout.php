<?php
require_once 'session.php';
require_once 'functions.php';
session_destroy();
redirect_to("../public/login.php");

?>