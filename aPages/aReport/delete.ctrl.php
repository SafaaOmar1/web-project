<?php
if (!isset($webroot)) {
    $webroot = "../../";
}

$con = new mysqli("localhost","root","","mydb");
if(isset($_POST['id'])){
    $f =  $_POST['id'];



    $sql = "DELETE  FROM report WHERE  id ='$f' ";
    $result = mysqli_query($con, $sql);


    if (!($con->query($sql) === TRUE)) {
        $errorMessage = "Your Login Name or Password is invalid";
    }

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