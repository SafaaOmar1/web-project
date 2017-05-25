<?php

$con = new mysqli("localhost","root","","mydb");
// create short variable names
if(!$con){
    echo 'errer';
}


$fullname=$_POST['user_name'];
$email = $_POST['user_email'];
$number = $_POST['user_num'];
$id = $_POST['user_id'];
$gender = $_POST['gender'];
$why = $_POST['user_bio'];
$uni = $_POST['user_job'];
$city = $_POST['user_interest'];
$file=$_POST['attachedfile'];




if (!$fullname || !$email || !$number || !$id || !$gender || !$why || !$uni || !$city  || !$file ) {
    echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
    exit;
}




if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later.";
    exit;
}

$query = "insert into training values('".$fullname."', '".$email."', '".$number."',  '".$id."',  '".$gender."',  '".$why."',  '".$uni."',  '".$city."',  '".$file."')";
$result=$con->query($query);
echo 'your application was sent we will call you soon :)';

?>

