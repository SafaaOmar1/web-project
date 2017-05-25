<?php
/**
 * Created by PhpStorm.
 * User: safaa
 * Date: 4/15/2017
 * Time: 9:15 PM
 */
$con = new mysqli("localhost","root","","mydb");
if(isset($_GET['id'])){
    $i = $_GET['id'];
    // connection to Data base,
    // find all users weher first name/ lastname = $_post[
    $query = $con->query("select * from report where report.id = '$i' ");

    if(!$query){

        echo "No Results....";
    }
    $rowNums = $query->num_rows;
    $i =0 ;
    $searchResultRows =[];
    while($i <$rowNums){
        $r = $query->fetch_assoc();
        array_push($searchResultRows, $r );
        $i =$i+1;
    };
}
