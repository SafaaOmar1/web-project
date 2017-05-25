<?php
/**
 * Created by PhpStorm.
 * User: safaa
 * Date: 4/15/2017
 * Time: 9:15 PM
 */
$con = new mysqli("localhost","root","","mydb");

// connection to Data base,
// find all users weher first name/ lastname = $_post[
$query = $con->query("select * from campains");

if (!$query) {

    echo "No Results....";
}
$rowNums = $query->num_rows;
$i = 0;
$searchResultRows = [];
while ($i < $rowNums) {
    $r = $query->fetch_assoc();
    array_push($searchResultRows, $r);
    $i = $i + 1;
};


