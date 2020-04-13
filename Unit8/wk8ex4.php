<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php     
     $conn = mysqli_connect("localhost", username, password, databasename);
       $sql = "select * from lotto;";
       $result = mysqli_query($sql);

       echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
       echo "<br/>Select the lottery week ";
       echo "<select name='selweek' >";
       while($row = mysqli_fetch_array($result)) {
  	  echo "<option value='$row[wk]'>$row[wk]</option>";
       }
       echo "</select><br/>";
       echo "<input type='submit' value='Select' />";
       echo "</form>";
?>
