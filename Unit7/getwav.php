<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  header("Content-type: audio/wav");

  $db = mysqli_connect("localhost", "root", "", "db_week7");

  $sql = "SELECT Audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["Audio"];

  echo $audio;
  mysqli_close($db);
?>