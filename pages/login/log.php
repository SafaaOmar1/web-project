<?php

session_start();


if (!isset($webroot)){
    $webroot = "../../";
}
 include($webroot .'layout/top.php');
 include ($webroot .'pages/login/log.ctrl.php');
?>

<head>

<style>
    .login-page {
    width: 360px;
        padding: 8% 0 0;
        margin: auto;
    }
    .form {

    z-index: 1;
        background: #FFFFFF;
        max-width: 720px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 100px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
    font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 20px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form button {
    font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all ;
        transition: all;
        cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
    background: #43A047;
}
    .form .message {
    margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
    }
    .form .message a {
    color: #4CAF50;
    text-decoration: none;
    }
    .form .register-form {
    display: none;
}
    .container {

        max-width: 1500px;
        margin: 0 auto;
    }
    .container:before, .container:after {

    display: block;
    clear: both;
}
    .container .info {
    margin: 50px auto;
        text-align: center;
    }
    .container .info h1 {
    margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
    }
    .container .info span {
    color: #4d4d4d;
    font-size: 12px;
    }
    .container .info span a {
    color: #000000;
    text-decoration: none;
    }
    .container .info span .fa {
    color: #EF3B3A;
}
    body{
    width: 100%;
    background: -webkit-linear-gradient(left, #22d686, #24d3d3, #22d686, #24d3d3);
        background: linear-gradient(to right, #22d686, #24d3d3, #22d686, #24d3d3);
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

</style>

   </head>
<body>

<div class="login-page">
    <div  class="form">
        <?php if (isset($errorMessage)) {?>
            <div style="color:red" > <?=$errorMessage?></div>
        <?php }?>
        <form class="login-form"  name="login" action="<?=$webroot?>pages/login/log.php" method="POST" >
            <input name="username" type="text" placeholder="username">
            <input name="password" type="password" placeholder="password">
            <button type="submit" class="btn btn-default" name="bttlogin" value="Login">Login</button>

        </form>
    </div>
</div>
</body>
<?php include($webroot.'layout/footer.php') ?>

