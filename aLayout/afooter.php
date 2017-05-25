<?php
if (!isset($webroot)){
    $webroot = "../";
}
?>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=$webroot?>js/lib/jquery.min.js"></script>
<script src="<?=$webroot?>js/lib/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
</body>
<?php include($webroot . 'aLayout/amenu.php') ?>
</html>