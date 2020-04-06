<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  header("Content-type: image/jpeg");

  $db = mysqli_connect("localhost", "root", "", "db_week7");

  $sql = "SELECT Image FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["Image"];

  echo $jpg;
?>