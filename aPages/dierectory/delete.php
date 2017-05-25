<?php
if (!isset($webroot)){
    $webroot = "../../";
}

include($webroot .'aLayout/atop.php');
include ($webroot .'aPages/dierectory/delete.ctrl.php');
?>

<style>

    body {
        width: 100%;
        background-color: #abd6ac;
    margin:0 30px;
</style>


<form class="form-inline" action="<?=$webroot?>aPages/dierectory/delete.php" method="post">
    <br>
    <div class="form-group">
        <label for="exampleInputName2">f.Name</label>
        <input  name="firstname" type="text" class="form-control" id="exampleInputName2" placeholder="Jane ">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail2">Last.Name</label>
        <input  name="Lastname" type="text" class="form-control" id="exampleInputEmail2" placeholder="Ross">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail2">location</label>
        <input  name="location" type="text" class="form-control" id="exampleInputEmail2" placeholder="NewYork">
    </div>
    <button type="submit" class="btn btn-default">Delete</button>
    <div style="background-color:whitesmoke ">

        <?php if (isset($errorMessage)) {?>
            <div style="color:red" > <?=$errorMessage?></div>
        <?php }?>
    </div>



</form>


<?php include($webroot .'aLayout/afooter.php') ?>