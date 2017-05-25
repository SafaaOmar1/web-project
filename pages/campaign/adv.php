<?php
/**
 * Created by PhpStorm.
 * User: safaa
 * Date: 4/22/2017
 * Time: 9:24 PM
 */

if (!isset($webroot)) {
    $webroot = "../../";
}
?>
<?php include($webroot .'layout/top.php') ;
 include($webroot.'pages/campaign/adv.ctrl.php') ;
?>
    <title>advertisment</title>
<style>
body{
    background-color: #d4efb5;
}
    .x {
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






<div class="w3-content w3-display-container" style="max-width: 100%;">
       <?php foreach ($searchResultRows as $key =>  $row ){ ?>
           <?php
           $row["description"] = utf8_decode($row["description"]);
           $path="img/";


          echo '<div class="w3-display-container mySlides">
               <img src="'.$webroot.$path.$row["iname"].'" style="width:100%">
               <br>
              <p>'.$row["description"].' </p>
           </div>';

?>


    <?php } ?>




        <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>

    </body>
    </html>




    <button class="x" value="subscribe"  name="xx"><a href="<?= $webroot.'pages/campaign/sub.php'?>">Subsicribe</a></button>
    </form>