<?php
session_start();
if (!(isset($_SESSION['uid']) && isset($_SESSION['type']))) {
    if($_SESSION['type']!='parent'){}
        header("Location: ../Login/index.html?error=login");
    return;
}
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
?>

<html>  
  <head>
        <title>Child Remove Request Form</title>
        <link rel="stylesheet" href="styleSheet.css">
        
    </head>
    <body>

      <form action="record-child-remove-request.php" method="post">
      
        <h1>Child Remove Request</h1>
        
        <fieldset>
          <label for="name">Remove Date:</label>
          <input type="date" name="remove_date" required>
          <p class="err_msg"><?php echo $_GET["note_for_date"]; ?></p>
          <label>Time:</label>
          <input type="radio" value="Morning" name="remove_time" required><label for="morning" class="light">Morning</label>
		  <br>
          <input type="radio" value="Evening" name="remove_time" required><label for="morning" class="light">Evening</label>
		      <p class="err_msg"><?php echo $_GET["note_for_time"]; ?></p>
		  <label>How will you pick up your child:</label>
          <input type="text" name="note" value=<?php echo $_GET["note"]?>>
          <p class="err_msg"><?php echo $_GET["note_for_method"]; ?></p>
        </fieldset>
		
        <button type="submit">Send</button>
      </form>
      
    </body>
</html>