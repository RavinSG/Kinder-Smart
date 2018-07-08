<?php
	
  if (isset($_GET["note_for_date"])) {
    echo '<div class="center"><p class="btn red msg">$_GET["note_for_date"]</p></div>';
  }
  elseif (isset($_GET["note_for_method"])) {
    echo '<div class="center"><p class="btn red msg">$_GET["note_for_method"]</p></div>';
  }
  else (isset($_GET["note_for_time"])) {
    echo '<div class="center"><p class="btn red msg">$_GET["note_for_time"]</p></div>';
  }

?>