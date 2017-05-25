<?php
if (!isset($webroot)){
    $webroot = "../../";
}

include ($webroot."aPages/aTrain/find.ctrl.php");
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
<?php include($webroot ."aPages/aTrain/find.php");?>
    <legend class="hero legend"><h1 class="hero">Result</h1></legend>
    <hr class="hr">
<?php $i=0; if(isset($searchResultRows)){?>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>email</th>
            <th>number</th>
            <th>id</th>
            <th>Gender</th>
            <th>why</th>
            <th>uni</th>
            <th>city</th>




        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchResultRows as $key =>  $row ){ ?>
            <tr>

                <td> <?= $i++?></td>
                <td> <?=$row["fullname"];?> </td>
                <td>  <?=$row["email"];?> </td>
                <td>  <?=$row["number"];?> </td>
                <td>  <?=$row["id"];?> </td>
                <td>  <?=$row["gender"];?> </td>
                <td>  <?=$row["why"];?> </td>
                <td>  <?=$row["uni"];?> </td>
                <td>  <?=$row["city"];?> </td>






            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
<?php include($webroot .'aLayout/afooter.php') ?>