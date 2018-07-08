<?php
    //require_once ("checklogin.parent.php");
	include '../include/conToUnreadParentMessage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>view messages</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php   include("navbar.parent.php");?>
<div>
    <br>

    <a href='../include/viewAllParentMessages.php' class='btn right'>
        <span class="row">
            <span class="col s1">
                <i class="material-icons">drafts</i>
            </span>
            <span class="col s11">
                <p>Read Messages</p>
            </span>
        </span>
    </a>
    <h1 class="center">Daily Messages</h1>
</div>
    <div class="container">
    <?php
    	if ($dates==NULL or $messages==NULL) {
    		echo "<div class='center'><p class='btn msg green white-text'>No unread messages</p></div>";
    	} else {
    	    echo "<div class='table'>";
    		echo"<table cellspacing='2'>";
    		echo"<tr>";
    		echo "Date";
    		echo "</tr>";
    		echo "<tr>";
    		echo "Message";
    		echo "</tr>";
    		for ($i = 0; $i < sizeof($dates); $i++)
			{
    			echo "<tr><td>";
            	echo $dates[$i];
            	echo "</td><td>";
            	echo $messages[$i];
            	echo "</td><td>";
            	echo "<br>";
			}
			echo "</table>";
    		echo "</div>";
		}
        echo "<br>";
	?>
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