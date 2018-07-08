<?php
require_once ("checklogin.parent.php");
include('navbar.html');
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

<html>  
  <head>
        <title>Child Remove Request Form</title>
                
    </head>
    <body>
    <h1>Child Remove Request</h1>
      
    <div class="row">
      <form class="col s12" action="record-child-remove-request.php" method="post">

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="remove_date" type="date" name="remove_date" required min=<?php echo date('y-m-d') ?> max=<?php echo date('y-m-d',strtotime('+ 1 week')) ?> value=<?php echo $_GET['remove_date'] ?>>
            <label for="remove_date">Remove Date</label>
          </div>
          <div>
            <p class="err_msg"><?php echo $_GET["note_for_date"]; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="remove_time" type="radio" value="Morning" name="remove_time" required value=<?php echo $_GET['remove_time'] ?>><label for="morning" class="light">Morning</label>
            <input id="remove_time" type="radio" value="Evening" name="remove_time" required value=<?php echo $_GET['remove_time'] ?>><label for="morning" class="light">Evening</label>
            <label for="remove_time">Time</label>
          </div>
          <div>
            <p class="err_msg"><?php echo $_GET["note_for_time"]; ?></p>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <textarea id="note" name="note" required><?php echo $_GET['note'] ?></textarea>
            <label for="note">How will you pick up your child</label>
          </div>
          <div>
            <p class="err_msg"><?php echo $_GET["note_for_method"]; ?></p>
          </div>
        </div>

        <div class="center">
          <button type="submit">Send</button>
        </div>

      </form>
    </div>

    </body>
</html>