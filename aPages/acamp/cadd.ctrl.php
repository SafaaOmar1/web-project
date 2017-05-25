<?php
if (!isset($webroot)) {
    $webroot = "../../";
}

$con = new mysqli("localhost","root","","mydb");
if(isset($_POST['name'])){
    $in = mysqli_real_escape_string($con, $_POST['name']);
    $des = mysqli_real_escape_string($con, $_POST['desc']);


    $sql = "INSERT INTO campains (iname, description)
 VALUES ('$in','$des')";

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