<?php
if (!isset($webroot)){
    $webroot = "../../";
}
include ($webroot."pages/campaign/sub.ctrl.php");

?>
<?php include($webroot .'layout/top.php');
include($webroot ."pages/campaign/sub.php");
?>

    <style>

        body {
            width: 100%;
            background-color: #abd6ac;
    </style>


<?php include($webroot .'layout/footer.php') ?>