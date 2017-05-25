<?php
session_start();
if (!isset($webroot)) {
    $webroot = "../../";
}
?>
<?php include($webroot . 'aLayout/atop.php') ?>
<html>
<head>
    <style>
        body{
            background: #cae8b3;


        }

        #a {
            width: 300px;
            height: 300px;
            position: absolute;
            left: 1000px;

            top: 300px;

            background: #86e8b6;
            -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
            transition: width 2s, height 2s, transform 2s;

        }

        #a:hover {
            width: 300px;
            height: 300px;
            -webkit-transform: rotate(180deg); /* Safari */
            transform: rotate(180deg);
        }


        #b {
            width: 300px;
            height: 300px;

            position: absolute;
            left: 100px;
            top: 300px;
            background: #e8e760;
            -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
            transition: width 2s, height 2s, transform 2s;

        }

        #b:hover {
            width: 300px;
            height: 300px;
            -webkit-transform: rotate(180deg); /* Safari */
            transform: rotate(180deg);
        }







    </style>
</head>
<body>
<div id ="a">
    <a href="<?= $webroot.'aPages/aTrain/delete.php'?>">
        <br>
        <br>
        <br>

        <h3 style="font-family: 'Comic Sans MS';font-size:70px;text-align:center;color: #e8e760">

            DELETE
        </h3> </a>
</div>

<div id="b">
    <a href="<?= $webroot.'aPages/aTrain/sv.php'?>">
        <br>
        <br>
        <br>

        <h3 style="font-family: 'Comic Sans MS';font-size:70px;text-align:center;color: #86e8b6">

            SEARCH
        </h3> </a>

</div>

</div>


</body>
</html>
<?php include($webroot . 'aLayout/afooter.php') ?>
