<?php

$con = new mysqli("localhost","root","","mydb");
// create short variable names
if(!$con){
    echo 'errer';
}


$fname=$_POST['fullname'];
$email = $_POST['user_email'];
$num = $_POST['number'];
$id = $_POST['id'];
$m = $_POST['gender'];
$op = $_POST['opt'];




if (!$fname || !$email || !$num || !$id  || !$m || !$op) {
    echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
    exit;
}

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later.";
    exit;
}

$query = "insert into customers values('".$fname."', '".$email."', '".$num."',  '".$id."',  '".$m."',  '".$op."')";
$result = $con->query($query);
echo 'the subsicribe was send succesfully';

?>

