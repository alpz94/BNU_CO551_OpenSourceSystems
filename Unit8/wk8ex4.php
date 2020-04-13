<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "db_week8");

    $sql = "select * from lotto;";
    $result = mysqli_query($conn, $sql);

    echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
    echo "<br/>Select the lottery week ";
    echo "<select name='selweek' >";
    while($row = mysqli_fetch_array($result))
    {
        echo "<option value='$row[wk]'>$row[wk]</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' value='Select' />";
    echo "</form>";
?>