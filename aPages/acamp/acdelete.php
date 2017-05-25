<?php
/**
 * Created by PhpStorm.
 * User: safaa
 * Date: 4/22/2017
 * Time: 9:15 PM
 */
if (!isset($webroot)){
    $webroot = "../../";
}

// $searchResultRows
?>
<style>
    body{
        background-color: #c4d6ba;
    }
     select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255, 255, 255, .1);
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin: 0;
        outline: 0;
        padding: 7px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #d4efb5;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;

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

     select{
        -webkit-appearance: menulist-button;
        height:35px;
    }
</style>

<?php include($webroot .'aLayout/atop.php') ;
include ($webroot .'aPages/acamp/del.ctrl.php');
include ($webroot .'aPages/acamp/v.php');


?>


<h2>Delete Campaigns</h2>
    <label for="image">image:</label>
    <form action="<?=$webroot?>aPages/acamp/v.php " method="post">
    <select id="problem" name="im">
    <optgroup label="choose one of these !">
<?php foreach ($searchResultRows as $key =>  $row ){ ?>

        <option value="<?=$row["iname"]?>" name="x">
            <?=$row["iname"]?>
        </option>
    ?>


<?php } ?>

    </optgroup>
    </select>

    <button  class="x" type="submit" class="btn btn-default">Delete</button>


</form>

<?php include($webroot . 'aLayout/afooter.php') ?>