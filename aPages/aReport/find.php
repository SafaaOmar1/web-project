<?php
if (!isset($webroot)){
    $webroot = "../../";
}

?>
<form class="form-inline" action="<?=$webroot?>aPages/aReport/sv.php" method="get">
    <div class="form-group">
        <label for="exampleInputName2">ID</label>
        <input  name="id" type="text" class="form-control" id="exampleInputName2" placeholder="Jane ">
    </div>

    <button type="submit" class="btn btn-default">Search</button>
</form>
