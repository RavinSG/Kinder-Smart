<?php
require_once ("checklogin.parent.php");
require ("navbar.parent.php");
?>

<html>
<head>
    <title>Child Remove Request Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../style/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<h1 class="center">Child Remove Request</h1>
<?php
if (isset($_GET["note_for_date"]) && !empty($_GET["note_for_date"])) {
    echo "<div class='center'><p class='btn red msg'>{$_GET['note_for_date']}</p></div>";
}
else if(isset($_GET["note_for_method"]) && !empty($_GET["note_for_method"])) {
    echo "<div class='center'><p class='btn red msg'>{$_GET['note_for_method']}</p></div>";
}
else if(isset($_GET["note_for_time"]) && !empty($_GET["note_for_time"])) {
    echo "<div class='center'><p class='btn orange msg'>{$_GET['note_for_time']}</p></div>";
}
else if(isset($_GET['msg']) && !empty($_GET["msg"])){
    echo "<div class='center'><p class='btn orange msg'>{$_GET['msg']}</p></div>";
}
?>
<?php
if (!isset($_GET["remove_date"])){
    $_GET["remove_date"]="";
}
if (!isset($_GET["note"])){
    $_GET["note"]="";
    $text="Text area here.";
}
else{
    $text=$_GET["note"];
}
if (!isset($_GET["note_for_date"])) {
    $_GET["note_for_date"]="";
}
if (!isset($_GET["note_for_method"])) {
    $_GET["note_for_method"]="";
}
if (!isset($_GET["note_for_time"])) {
    $_GET["note_for_time"]="";
}
if (!isset($_GET['remove_time'])) {
    $_GET['remove_time']=NULL;
}
?>
<div class="container">
    <div class="row">
        <form class="col s12" action="record-child-remove-request.php" method="post">
            <div class="row">
                <div class="col s12 xl6 offset-xl3">
                    <div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input id="remove_date" class="datepicker autoClose" name="remove_date" type="text">
                        <label for="remove_date">Remove Date</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s11 xl4 offset-xl3">
                    <p><i class="material-icons prefix">alarm</i>   Enter Remove Time :</p>
                </div>
            </div>
            <div class="row">
                <div class="col s6 xl3 offset-xl4">
                    <label>
                        <input id="remove_time" type="radio" value="Morning" checked name="remove_time" required value=<?php echo $_GET['remove_time'] ?>>
                        <span for="morning" class="light">Morning</span>
                    </label>
                </div>
                <div class="col s6 xl3">
                    <label>
                        <input id="remove_time" type="radio" value="Evening" name="remove_time" required value=<?php echo $_GET['remove_time'] ?>>
                        <span for="evening" class="light">Evening</span>
                    </label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s6 xl6 offset-xl3">
                    <i class="material-icons prefix">airport_shuttle</i>
                    <textarea id="note" name="note" class="materialize-textarea" required><?php echo $_GET['note'] ?></textarea>
                    <label for="note">How will you pick up your child</label>
                </div>
            </div>


            <div class="center">
                <button type="submit" class="btn green">Send</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../style/js/materialize.min.js"></script>
<script>
    (function($){
        $(function(){
            $('.sidenav').sidenav();
            $('.datepicker').datepicker({format: 'yyyy-mm-dd'});
        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
</body>
</html>