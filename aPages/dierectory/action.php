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
       font{
            size: 8px;
            font-family: "Comic Sans MS";
        }

        #a {
            width: 300px;
            height: 300px;
            margin: 0 auto;
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



        #c {
            width: 300px;
            height: 300px;

            position: absolute;
            right: 100px;
            top:400px;
            background: #a9e84f;
            -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
            transition: width 2s, height 2s, transform 2s;

        }

        #c:hover {
            width: 300px;
            height: 300px;
            -webkit-transform: rotate(180deg); /* Safari */
            transform: rotate(180deg);
        }





    </style>
</head>
<body>
<div id ="a">
      <a href="<?= $webroot.'aPages/dierectory/add.php'?>">
          <br>
          <br>
          <br>

                <h3 style="font-family: 'Comic Sans MS';font-size:80px;text-align:center;color: #e8e760">

                    ADD
                </h3> </a>
</div>

<div id="b">
    <b>  <a href="<?= $webroot.'aPages/dierectory/update.php'?>">
            <br>
            <br>
            <br>

            <h3 style="font-family: 'Comic Sans MS';font-size:70px;text-align:center;color: #a9e84f">

                UPDATE
            </h3> </a>
</div>
<div id="c">
    <b>  <a href="<?= $webroot.'aPages/dierectory/delete.php'?>">
            <br>
            <br>
            <br>

            <h3 style="font-family: 'Comic Sans MS';font-size:70px;text-align:center;color:#e8e760 ">

                DELETE
            </h3> </a>
</div>
</div>


</body>
</html>
<?php include($webroot . 'aLayout/afooter.php') ?>