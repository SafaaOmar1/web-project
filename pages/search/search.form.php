<?php
    if (!isset($webroot)){
        $webroot = "../../";
    }

?>
<form class="form-inline" action="<?=$webroot?>pages/search/search.view.php" method="get">
    <div class="form-group">
        <label for="exampleInputName2">f.Name</label>
        <input  name="pinfo[firstname]" type="text" class="form-control" id="exampleInputName2" placeholder="Jane ">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail2">Last.Name</label>
        <input  name="pinfo[Lastname]" type="text" class="form-control" id="exampleInputEmail2" placeholder="Ross">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail2">location</label>
        <input  name="pinfo[location]" type="text" class="form-control" id="exampleInputEmail2" placeholder="NewYork">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>
