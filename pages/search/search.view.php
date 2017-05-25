<?php
if (!isset($webroot)){
    $webroot = "../../";
}
include ($webroot."pages/search/search.ctrl.php");
// $searchResultRows
?>
<?php include($webroot .'layout/top.php') ?>

    <style>

        body {
            width: 100%;
            background-color: #abd6ac;
    </style>











    <!-- ---------------------------------------------------------- -->
    <hr>
    <h1>Search</h1>
<?php include($webroot ."pages/search/search.form.php");?>
    <legend class="hero legend"><h1 class="hero">Result</h1></legend>
    <hr class="hr">
<?php $i=0; if(isset($searchResultRows)){?>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Last Name</th>


            <th>Phone</th>
            <th> Email</th>
            <th>Location</th>
            <th>Job Title</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchResultRows as $key =>  $row ){ ?>
            <tr>
                <td> <?= $i++?></td>
                <td> <?=$row["first_name"];?> </td>
                <td>  <?=$row["second_name"];?> </td>
                <td>  <?=$row["Last_name"];?> </td>
                <td>  <?=$row["phone"];?> </td>
                <td>  <?=$row["Email"];?> </td>
                <td>  <?=$row["Location"];?> </td>
                <td>  <?=$row["Job_Title"];?> </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
<?php include($webroot .'layout/footer.php') ?>