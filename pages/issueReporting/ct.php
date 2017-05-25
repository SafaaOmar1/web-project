<?php

$con = new mysqli("localhost","root","","mydb");
// create short variable names
if(!$con){
    echo 'errer';
}


$fname=$_POST['field1'];
$sname = $_POST['field2'];
$thname = $_POST['field3'];
$lname = $_POST['field4'];
$address = $_POST['field5'];
$number = $_POST['field6'];
$cnumber = $_POST['field7'];
$id = $_POST['field8'];
$email = $_POST['field9'];
$city = $_POST['field11'];
$whenhome = $_POST['field10'];
$problem = $_POST['field12'];




if (!$fname || !$sname || !$thname || !$lname  || !$address || !$number || !$cnumber || !$id || !$email || !$whenhome|| !$city  || !$problem) {
    echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
    exit;
}

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later.";
    exit;
}

$query = "insert into report values('".$fname."', '".$sname."', '".$thname."',  '".$lname."',  '".$address."',  '".$number."',  '".$cnumber."',  '".$id."',  '".$email."',  '".$whenhome."',  '".$city."',  '".$problem."')";
$result = $con->query($query);
echo 'the report was send succesfully';

?>

