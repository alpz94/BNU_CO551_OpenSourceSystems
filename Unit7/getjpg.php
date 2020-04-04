<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  header("Content-type: image/jpeg");

  $conn = mysqli_connect("localhost", "21903356", "mysqluser", "db5_21903356");

  $sql = "SELECT image FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>