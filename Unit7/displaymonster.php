<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $conn = mysqli_connect("localhost", "root", "", "db_week7");

    $sql = "select id from monster;";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo "<img src='getjpg.php?id=" . $row[id]. "'/>";

    mysqli_close($conn);
?>