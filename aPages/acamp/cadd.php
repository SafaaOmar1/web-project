<?php
if (!isset($webroot)){
    $webroot = "../../";
}

include($webroot .'aLayout/atop.php');
include ($webroot .'aPages/acamp/cadd.ctrl.php');
?>

    <style>

        body {
            width: 100%;
            background-color: #abd6ac;
            margin: 20px 0px;

        }

        .des{

            top: 400px;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: whitesmoke;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #3ac162;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;

        }
        .number{
            position: absolute;
            top: 400px;
        }
        .x {
            position: absolute;
            top: 400px;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #4bc970;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #3ac162;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;
        }

    </style>


    <form class="form-inline" action="<?=$webroot?>aPages/acamp/cadd.php" method="post">
        <br>
        <div class="form-group">
            <label for="exampleInputName2">Image Name</label>
            <input  name="name" type="text" class="form-control" id="exampleInputName2" placeholder="a.jpg">
        </div>
<br>
        <br>

        <fieldset>
            <legend><span class="number"></span>Description</legend>
            <textarea class="des" name="desc"></textarea>
        </fieldset>


        <button type="submit" class="x">ADD</button>



    </form>


<?php include($webroot .'aLayout/afooter.php') ?>