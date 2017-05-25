<?php
session_start();
if (!isset($webroot)) {
    $webroot = "../../";
}
?>
<?php include($webroot . 'aLayout/atop.php') ?>
<style>

    body {
        width: 100%;
        background: -webkit-linear-gradient(left, #8bd689, #c0d3a0, #d0d6b5, #a6d379);
        background: linear-gradient(to right, #85d6b6, #c0d3a0, rgba(160, 255, 79, 0.41), #92d3d3);
        background-size: 600% 100%;
        -webkit-animation: HeroBG 20s ease infinite;
        animation: HeroBG 20s ease infinite;
    }

    @-webkit-keyframes HeroBG {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 100% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    @keyframes HeroBG {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 100% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    .mySlides {
        display: none;
    }

    .circle {
        width: 150px;
        height: 150px;
        margin: 0 85px;
        -webkit-border-radius: 75px;
        -moz-border-radius: 75px;
        border-radius: 75px;
        background: #dcffb9;
        text-align: center;
        font-family: 'Montserrat';
    = align-content: space-between;
        font-size: x-large;

    }

</style>

<div class="w3-content w3-section" style="max-width:500px">

    <img class="mySlides w3-animate-fading" src=" <?= $webroot.'img/reach.png'?>" style="width:100% ">
    <img class="mySlides w3-animate-fading" src="<?= $webroot.'img/saf.jpg'?>" style="width:100%">
    <img class="mySlides w3-animate-fading" src="<?= $webroot.'img/rr.jpg'?>" style="width:100%">


</div>

<br>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 9000);
    }
</script>


<center><strong><span
            style="font-family:paltel-font-medium; font-size:40px; line-height:0.7">What do you need today?</span></strong>
    <div>
        <br>
    </div>

    <div style="font-size: 36px;"><span style="line-height:0.7"><span style="font-size:18px">Quick services and easy ways to access information</span></span>
    </div>
</center>

<div>
    <br>
    <br>

</div>

<div>

    <div class="circle col-md-3" style=" 10px;">

        <b>  <a href="<?= $webroot.'aPages/acamp/action.php'?>">  <br>
                <center>
                    <b>

                         Edit
                        Campaigns

                    </b></center>

    </div>

    <div class="circle col-md-3" style=" 10px;">


        <b>  <a href="<?= $webroot.'aPages/dierectory/action.php' ?>">  <br>
                <center>
                    <b>

                       Edit Phone
                        Directory

                    </b></center>
    </div>

    <div class="circle col-md-3" style=" 10px;" href="">

        <b>  <a href="<?= $webroot.'aPages/aReport/action.php'?>">  <br>
                <center>
                    <b>

                        Edit Report
                        Issues

                    </b></center>
    </div>
</div>
<div class="circle col-md-3" style=" 10px;">

    <b>  <a href="<?=$webroot.'aPages/aTrain/action.php'?>">  <br>
            <center>
                <b>

                   Edit
                    Training

                </b></center>
</div>

</div>

</div>

<?php include($webroot . 'aLayout/afooter.php') ?>


