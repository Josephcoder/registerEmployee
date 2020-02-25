<?php
require_once 'session.php';
require_once 'db_connection.php';
require_once 'functions.php';
$error = '';
if(isset($_POST['register'])){
    if($_POST['fname'] != ''){
        $fname = $_POST['fname'];
       
    }else{
        $error = "Please enter your first name";
    }
    if($_POST['lname'] != ''){
        $lname = $_POST['lname'];
        
    }else{
        $error = "Please enter your last name";
    }
    if($_POST['phone'] != ''){
        $phone = $_POST['phone'];
        
    }else{
        $error = "Please enter your phone";
    }
    if($_POST['email'] != ''){
        $email = $_POST['email'];
        
    }else{
        $error = "Please enter your last email";
    }
    if($_POST['password'] != ''){
        $password = $_POST['password'];
        
    }else{
        $error = "Password must not be empty!";
    }

    if ($error == '') {

        try {
            date_default_timezone_set('Africa/Kigali');
            $datetime = date('y-m-d H-i-s');
            //to check if username is available
            $checkUser = "SELECT * FROM employee WHERE email = :email AND status = 1";
            $checkUserStmt = $conn->prepare($checkUser);
            $checkUserStmt->execute(array(
                    ':email' => $email));
            $row_number = $checkUserStmt->rowCount();

            if ($row_number > 0) {
                $_SESSION['errors'] = "Email already exists! please retype new mail!";
                redirect_to("../public/register.php");
            } else {
                $userInsert = $conn->prepare('INSERT INTO employee (fname, lname, phone, email, date, password) VALUES (:fname, :lname, :phone, :email, :datetime, :password)');
                $userInsert->execute(array(
                    ':fname' => $fname,
                    ':lname' => $lname,
                    ':phone' => $phone,
                    ':email' => $email,
                    ':password' => $password,
                    ':datetime' => $datetime
                    ));
                if ($userInsert) {
                    $_SESSION['message'] = "Well Done! you can login right now";
                    redirect_to("../public/login.php");
                }
            }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
 
    }else{
        $_SESSION['errors'] = $error;
        redirect_to("../public/register.php");
    }

}

if (isset($_POST['login'])) {
    if ($_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $error = "Please enter your last name";
    }
    if ($_POST['password'] != '') {
        $password = $_POST['password'];
    } else {
        $error = "Password must not be empty!";
    }
    if ($error == '') {
        $stmt = $conn->prepare('SELECT * FROM employee WHERE email = :email AND status = 1');
        $stmt->execute(array(
            ':email' => $email
            ));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                
        if (!($data)) {
            $_SESSION['errors'] = "Failed to login, Invalid email or password!";
            redirect_to("../public/login.php");
        } else {
            if ($password == $data['password']) {
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['lname'] = $data['lname'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['id'] = $data['id'];
               
                $_SESSION['message'] = "Welcome " . $_SESSION['fname'];
                redirect_to("../public/listOfWork.php");
            }
        }
    }else{
        $_SESSION['errors'] = $error . $_SESSION['fname'];
        redirect_to("../public/login.php");  
    }
}
?>