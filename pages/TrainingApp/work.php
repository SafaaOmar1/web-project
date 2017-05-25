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
<?php include($webroot . 'layout/top.php') ?>
    <html><head><style>

            *, *:before, *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                font-family: 'Nunito', sans-serif;
                color: #384047;
            }

            form {
                max-width: 5000px;
                margin: 10px auto;
                padding: 10px 20px;
                background: #f4f7f8;
                border-radius: 8px;
            }

            h1 {
                margin: 0 0 30px 0;
                text-align: center;
            }

            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="datetime"],
            input[type="email"],
            input[type="number"],
            input[type="search"],
            input[type="tel"],
            input[type="time"],
            input[type="url"],
            textarea,
            select {
                background: rgba(255,255,255,0.1);
                border: none;
                font-size: 16px;
                height: auto;
                margin: 0;
                outline: 0;
                padding: 15px;
                width: 100%;
                background-color: rgba(191, 202, 191, 0.83);
                color: #8a97a0;
                box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                margin-bottom: 30px;
            }

            input[type="radio"],
            input[type="checkbox"] {
                margin: 0 4px 8px 0;
            }

            select {
                padding: 6px;
                height: 32px;
                border-radius: 2px;
            }

            button {
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

            fieldset {
                margin-bottom: 30px;
                border: none;
            }

            legend {
                font-size: 1.4em;
                margin-bottom: 10px;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            label.light {
                font-weight: 300;
                display: inline;
            }

            .number {
                background-color: #5fcf80;
                color: #fff;
                height: 30px;
                width: 30px;
                display: inline-block;
                font-size: 0.8em;
                margin-right: 4px;
                line-height: 30px;
                text-align: center;
                text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                border-radius: 100%;
            }

            @media screen and (min-width: 1000px) {

                form {
                    max-width: 1000px;
                }

            }
        </style>

    </head><body background="<?=$webroot.'img/mm.png'?>">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play it right and apply to Reach where sky is your limit</title>
    <link rel="stylesheet" >
    <link href="http://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" >



    <form action="<?=$webroot?>pages/TrainingApp/v.php" method="post">

        <h1 style="color:#5fcf80; ">Play it right and apply to Reach where sky is your limit </h1>
        <br>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="user_name">

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="user_email">

            <label for="phone">Mobile Number:</label>
            <input type="number" id="phone" name="user_num">

            <label for="phone1">ID Number:</label>
            <input type="number" id="phone1" name="user_id">



            <label>Gender:</label>
            <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">Male</label><br>
            <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female</label>
        </fieldset>

        <fieldset>
            <legend><span class="number">2</span>Your profile</legend>
            <label for="bio"> Why should we hire you ?!:</label>
            <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
            <label for="job">University:</label>
            <select id="job" name="user_job">
                <optgroup label="choose">
                    <option value="najah">Najah Uni</option>
                    <option value="quds">Opened Quds</option>
                    <option value="berziet">Beirzeit</option>
                    <option value="american"> American uni</option>
                    <option value="bethlhem">bethlhem uni</option>

                </optgroup>
                &gt;
            </select>

            <label>In witch branch do you want to work ?</label>
            <input type="checkbox" id="development" value="Ramallah" name="user_interest"><label class="light" for="development">Ramallah</label><br>
            <input type="checkbox" id="design" value="Nablus" name="user_interest"><label class="light" for="design">Nablus</label><br>


        </fieldset>


        <button type="submit">Sign Up</button>
    </form>


    </body></html>
<?php include($webroot . 'layout/footer.php') ?>