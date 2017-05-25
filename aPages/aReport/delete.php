<?php
if (!isset($webroot)){
    $webroot = "../../";
}

include($webroot .'aLayout/atop.php');
include ($webroot .'aPages/aReport/delete.ctrl.php');
?>

    <style>

        body {
            width: 100%;
            background-color: #abd6ac;
            margin:0 30px;
    </style>


    <form class="form-inline" action="<?=$webroot?>aPages/aReport/delete.php" method="post">
        <br>
        <div class="form-group">
            <label for="exampleInputName2">ID</label>
            <input  name="id" type="text" class="form-control" id="exampleInputName2" placeholder="id ">
        </div>


        <button type="submit" class="btn btn-default">Delete</button>
        <div style="background-color:whitesmoke ">

            <?php if (isset($errorMessage)) {?>
                <div style="color:red" > <?=$errorMessage?></div>
            <?php }?>
        </div>



    </form>


<?php include($webroot .'aLayout/afooter.php') ?>