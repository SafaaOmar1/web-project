<?php
if (!isset($webroot)){
    $webroot = "../../";
}

include ($webroot."aPages/aReport/find.ctrl.php");
// $searchResultRows
?>
<?php include($webroot .'aLayout/atop.php') ?>

    <style>

        body {
            width: 100%;
            background-color: #abd6ac;
        margin:0 30px ;
    </style>




    <!-- ---------------------------------------------------------- -->
    <hr>
    <h1>Search</h1>
<?php include($webroot ."aPages/aReport/find.php");?>
    <legend class="hero legend"><h1 class="hero">Result</h1></legend>
    <hr class="hr">
<?php $i=0; if(isset($searchResultRows)){?>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>third Name</th>
            <th>Lastname</th>
            <th> Address</th>
            <th>pNumber</th>
            <th>mNumber</th>
            <th>id</th>
            <th>email</th>
            <th>whenhome</th>
            <th>city</th>
            <th>problem</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchResultRows as $key =>  $row ){ ?>
            <tr>

                <td> <?= $i++?></td>
                <td> <?=$row["fname"];?> </td>
                <td>  <?=$row["sname"];?> </td>
                <td>  <?=$row["thname"];?> </td>
                <td>  <?=$row["lname"];?> </td>
                <td>  <?=$row["address"];?> </td>
                <td>  <?=$row["number"];?> </td>
                <td>  <?=$row["ncontact"];?> </td>
                <td>  <?=$row["id"];?> </td>
                <td>  <?=$row["email"];?> </td>
                <td>  <?=$row["whenhome"];?> </td>
                <td>  <?=$row["city"];?> </td>
                <td>  <?=$row["problem"];?> </td>





            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
<?php include($webroot .'aLayout/afooter.php') ?>