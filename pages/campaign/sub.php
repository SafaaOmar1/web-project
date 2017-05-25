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
<?php include($webroot .'layout/top.php') ;


?>
    <html><head><style>

            *, *:before, *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                font-family: 'Nunito', sans-serif;
                color: #384047;
                background-color: #a3c98a;
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
                background-color: #e8eeef;
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

    </head><body>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subscribe</title>





<form action="<?=$webroot.'pages/campaign/adv.view.php'?>" method="post">

        <h1>subscribe</h1>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname">

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="user_email">

            <label for="phone">Mobile Number:</label>
            <input type="number" id="phone" name="number">

            <label for="phone1">ID Number:</label>
            <input type="number" id="phone1" name="id">



            <label>Gender:</label>
            <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">Male</label><br>
            <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female</label>

            <label>Campaing Name:</label>
            <select id="problem" name="opt">
                <optgroup label="choose one of these !">
                    <option value="step">Step</option>
                    <option value="hadara">HadaraTv</option>
                    <option value="Madafr7a">Mada</option>
                    <option value="ShababCool">JawwalCool</option>
                    <option value="Zaytona">Zaytona</option>
                    <option value="O5tboot">Octubas</option>

                </optgroup>

            </select>
        </fieldset>




        <button type="submit" >Subscribe</button>
</form>

    </body></html>
<?php include($webroot .'layout/footer.php') ?>