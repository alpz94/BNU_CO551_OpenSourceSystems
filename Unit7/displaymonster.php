<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $db = mysqli_connect("localhost", "root", "", "db_week7");

    $sql = "select id from monster;";

    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);

    echo "<img src='getjpg.php?id=" . $row["id"] . "' width='100' height='100'/>";
    
    mysqli_close($db);
?>