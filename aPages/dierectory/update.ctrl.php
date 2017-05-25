<?php
if (!isset($webroot)) {
    $webroot = "../../";
}

$con = new mysqli("localhost","root","","mydb");
if(isset($_POST['firstname'])){
    $f = mysqli_real_escape_string($con, $_POST['firstname']);
    $s = mysqli_real_escape_string($con, $_POST['secondname']);
    $l = mysqli_real_escape_string($con, $_POST['lastname']);
    $e = mysqli_real_escape_string($con, $_POST['email']);
    $p = mysqli_real_escape_string($con, $_POST['phone']);
    $loc = mysqli_real_escape_string($con, $_POST['location']);
    $j = mysqli_real_escape_string($con, $_POST['job']);

$sql="UPDATE pinfo SET Email='$e', phone='$p',Location='$loc', Job_Title='$j'WHERE first_name ='$f' and second_name ='$s' and Last_name ='$l' ";


    $result = mysqli_query($con, $sql);

    // connection to Data base,
    // find all users weher first name/ lastname = $_post[


    /*  $rowNums = $query-)>num_rows;
      $i =0 ;
      $searchResultRows =[];
      while($i <$rowNums){
          $r = $query->fetch_assoc();
          array_push($searchResultRows, $r );
          $i =$i+1;
      };*/
}

?>