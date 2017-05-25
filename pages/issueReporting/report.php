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
<?php include($webroot .'layout/top.php') ?>
<style >




    .form-style-5{
        max-width: 1000px;
        padding: 10px 20px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 20px;
        background: #f8f5b5;
        border-radius: 8px;
        font-family: Georgia, "Times New Roman", Times, serif;
    }
    .form-style-5 fieldset{
        border: none;
    }
    .form-style-5 legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }
    .form-style-5 label {
        display: block;
        margin-bottom: 8px;
    }
    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="email"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255,255,255,.1);
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
        background-color: #efe4c6;
        color:#8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;

    }
    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="email"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus{
        background: #d2d9dd;
    }
    .form-style-5 select{
        -webkit-appearance: menulist-button;
        height:35px;
    }
    .form-style-5 .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 15px 15px 15px 0px;
    }

    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"]
    {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }
    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover
    {
        background: #109177;
    }
</style>

<body  background="<?=$webroot.'img/ll.jpg'?>">
<div class="form-style-5">
    <form action="<?=$webroot?>pages/issueReporting/v.php" method="post">
        <fieldset>
            <legend><span class="number">1</span> Info about you !</legend>
            <input type="text" name="field1" placeholder="Firs Name *">
            <input type="text" name="field2" placeholder="Second Name *">
            <input type="text" name="field3" placeholder="Third Name *">
            <input type="text" name="field4" placeholder="Last Name *">
            <input type="text" name="field5" placeholder="Adress in detail *">
            <input type="text" name="field6" placeholder="Phone number *">
            <input type="text" name="field7" placeholder="Mobile # to contact *">
            <input type="text" name="field8" placeholder="ID *">

            <input type="email" name="field9" placeholder="Your Email *">
            <textarea name="field10" placeholder="When you will be at home ?"></textarea>
            <label for="job">City:</label>
            <select id="job" name="field11">
                <optgroup label="West Bank">
                    <option value="Ramallah">Ramallah</option>
                    <option value="Nablus">Nablus</option>
                    <option value="Hebron">Hebron</option>
                    <option value="JERICHO">JERICHO</option>
                    <option value="Jenin">Jenin</option>
                    <option value="Tulkarem">Tulkarem</option>
                    <option value="Qalqelya">Qalqelya</option>
                </optgroup>
                <optgroup label="Gaza">
                    <option value="Gaza">Gaza</option>
                    <option value="Nourth Gaza">Nourth Gaza</option>
                    <option value="Rafah">Rafah</option>
                    <option value="Deir Balah">Deir Balah</option>
                    <option value="Khan yonis">Khan yonis</option>

                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span> what your problem exactly ?</legend>
            <label for="job">Problem:</label>
            <select id="problem" name="field12">
                <optgroup label="choose one of these !">
                    <option value="stealing electricity">stealing electricity</option>
                    <option value="stealing cables">stealing cables</option>
                    <option value="electrical fault">electrical fault</option>
                    <option value="Electricity Clock">Electricity Clock</option>
                    <option value="stealing electric current">stealing electric current</option>
                    <option value="traffic light">traffic light</option>
                    <option value="bell issues">bell issues</option>
                    <option value="other">other</option>
                </optgroup>

            </select>
        </fieldset>
        <input type="submit" value="Apply">
    </form>
</div>
</body>
<?php include($webroot .'layout/footer.php') ?>



