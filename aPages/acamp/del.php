<?php
if (!isset($webroot)) {
    $webroot = "../../";
}


$con = new mysqli("localhost","root","","mydb");
// create short variable names
if(!$con){
    echo 'errer';
}


if(isset($_POST['im'])) {
    $im = mysqli_real_escape_string($con, $_POST['im']);;


    $sql = "DELETE  FROM campains WHERE  iname ='$im' ";
    $result = mysqli_query($con, $sql);


}


?>

