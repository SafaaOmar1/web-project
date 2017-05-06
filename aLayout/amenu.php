



<nav class="navbar navbar-inverse navbar-fixed-top"  >
    <div class="container" >
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#"><img class="icon" src="<?=$webroot.'img/1.png'?>"width="100px" height="48px" style= " position: relative ; top: -14px ">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= $webroot?>"">Home</a></li>

                <li><a href="<?= $webroot.'pages/about/about.php'?>">About</a></li>

                <li> <a href="<?=$webroot.'pages/login/log.php'?>"> Logout </a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>