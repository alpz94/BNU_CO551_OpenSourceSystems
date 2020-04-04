<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $conn = mysqli_connect("localhost", "21903356", "mysqluser", "db5_21903356");

    $sql = "select id from monster;";

    $result = mysqli_query($sql, $db);
    $row = mysqli_fetch_array($result);

    echo "<img src='getjpg.php?id=" . $row[id]. "'/>";

    mysqli_close();
?>