<?php

if (!isset($webroot)) {
    $webroot = "../../";
}

$con = new mysqli("localhost", "root", "", "mydb");
if (isset($_POST['username'])) {

    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    //echo 'console.log = console.log || function(){};';
    $sql = "SELECT * FROM user WHERE username ='$myusername' and password='$mypassword'";
    $result = mysqli_query($con, $sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['login_user'] = $myusername;

        header("location:".$webroot .'aPages/aHome/ahome.php');
    } else {
        $errorMessage = "Your Login Name or Password is invalid";
//    var_dump( $errorMessage);
    }


}
?>








