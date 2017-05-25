<?php
/**
 * Created by PhpStorm.
 * User: safaa
 * Date: 4/18/2017
 * Time: 8:55 PM
 */

if (!isset($webroot)){
    $webroot = "../../";
}
?>
<?php include($webroot.'layout/top.php') ?>

<div class="starter-template">
    <h1>Explore phone  Directory </h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    <?php include($webroot ."pages/search/search.form.php");?>
</div>

<?php include($webroot .'layout/footer.php') ?>