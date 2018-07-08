<?php
require_once ("checklogin.parent.php");
if (!isset($_SESSION['parent'])){
    $_SESSION['parent'] = new KinderParent($_SESSION['uid']);
    $parent = $_SESSION['parent'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="#" class="brand-logo left">KinderSmart</a>

        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href=""><i class="material-icons left">home</i>Home</a></li>
            <li><a href="../include/setting.php" ><i class="material-icons left">settings</i>Settings</a></li>
            <li class="red"><a href="../include/logout.inc.php"><i class="material-icons left">phonelink_erase</i>Logout</a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <div class="col xl4 s12 offset-s1 offset-xl1">
        <div class="hoverable">
            <a href="viewMessage.php">
                <h2 class="header black-text">Messages</h2>
                <div class="card horizontal red lighten-1">
                    <div class="card-image">
                        <i class="material-icons large white-text">message</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="white-text">You can view messages from teacher using this link</p>
                        </div>
                        <div class="card-action">
                            <a href="viewMessage.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col xl4 s12 offset-s2 offset-xl2">
        <div class="hoverable">
            <a href="DailyDetails.php">
                <h2 class="header black-text">Daily Details</h2>
                <div class="card horizontal orange lighten-1">
                    <div class="card-image">
                        <i class="material-icons large white-text">today</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="white-text">You can view daily homework, special notes & tomorrow lunch details using this link</p>
                        </div>
                        <div class="card-action">
                            <a href="DailyDetails.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col xl4 s12 offset-s1 offset-xl1">
            <a href="child-remove-request.php">
                <div class="hoverable">
                    <h2 class="header black-text">Transportation</h2>
                    <div class="card horizontal light-green lighten-1">
                        <div class="card-image">
                            <i class="material-icons large white-text">directions_bus</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p class="white-text">You can request to remove child from transportation for today using this link</p>
                            </div>
                            <div class="card-action">
                                <a href="child-remove-request.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col xl4 s12 offset-s2 offset-xl2">
            <a href="achievements.php">
                <div class="hoverable">
                    <h2 class="header black-text">Achievements</h2>
                    <div class="card horizontal blue-grey lighten-1">
                        <div class="card-image">
                            <i class="material-icons large white-text">grade</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p class="white-text">You can view achievements of your children using this link</p>
                            </div>
                            <div class="card-action">
                                <a href="achievements.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</body>
</html>