<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<html>
<head></head>
<body>

<?php
    $db = mysqli_connect("localhost", "root", "", "db_week7");

    $sql = "select id,name from monster;";

    $result = mysqli_query($db, $sql);

    echo "<table align='center' border='1'>";
    echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td><a href='getwav.php?id=" . $row["id"]. "'>Click to play</a></td>";
        echo "<td><img src='getjpg.php?id=" . $row["id"]. "' height='100' width='100'</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db);
?>