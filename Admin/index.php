<?php
require_once('checklogin.admin.inc.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Admin</title>
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
        <a href="#" class="brand-logo left">KinderSmart</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href=""><i class="material-icons left">home</i>Home</a></li>
            <li><a href="#" ><i class="material-icons left">settings</i>Settings</a></li>
            <li class="red"><a href="../include/logout.inc.php"><i class="material-icons left">phonelink_erase</i>Logout</a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <div class="col xl4 s12">
        <div class="hoverable">
            <a href="registration.parent.php">
                <h2 class="header black-text">Register Parent</h2>
                <div class="card horizontal red lighten-1">
                    <div class="card-image">
                        <i class="material-icons large white-text">person_pin</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="white-text">You can register person using this link</p>
                        </div>
                        <div class="card-action">
                            <a href="registration.parent.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col xl4 s12">
        <div class="hoverable">
            <a href="registration.admin.php">
                <h2 class="header black-text">Register Admin</h2>
                <div class="card horizontal orange lighten-1">
                    <div class="card-image">
                        <i class="material-icons large white-text">supervisor_account</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="white-text">You can register an admin using this link</p>
                        </div>
                        <div class="card-action">
                            <a href="registration.admin.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col xl4 s12">
        <div class="hoverable">
            <a href="addTeacher.php">
                <h2 class="header black-text">Register Teacher</h2>
                <div class="card horizontal blue-grey lighten-1">
                    <div class="card-image">
                        <i class="material-icons large white-text">school</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="white-text">You can register a teacher using this link</p>
                        </div>
                        <div class="card-action">
                            <a href="addTeacher.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col xl4 s12">
            <a href="viewLeave.php">
                <div class="hoverable">
                    <h2 class="header black-text">Leave Requests</h2>
                    <div class="card horizontal red lighten-1">
                        <div class="card-image">
                            <i class="material-icons large white-text">assignment</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p class="white-text">You can view leave applications using this link</p>
                            </div>
                            <div class="card-action">
                                <a href="viewLeave.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col xl4 s12">
            <a href="addChild.php">
                <div class="hoverable">
                    <h2 class="header black-text">Add Child</h2>
                    <div class="card horizontal orange lighten-1">
                        <div class="card-image">
                            <i class="material-icons large white-text">face</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p class="white-text">You can add a child to a parent using this link</p>
                            </div>
                            <div class="card-action">
                                <a href="registration.admin.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col xl4 s12">
            <a href="update-lunch-front.php">
                <div class="hoverable">
                    <h2 class="header black-text">Update Lunch</h2>
                    <div class="card horizontal blue-grey lighten-1">
                        <div class="card-image">
                            <i class="material-icons large white-text">local_dining</i>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p class="white-text">You can update weekly lunch details using this link</p>
                            </div>
                            <div class="card-action">
                                <a href="update-lunch-front.php" class="white-text">Go to page <i class="material-icons right">arrow_forward</i> </a>
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

</script>
</body>
</html>