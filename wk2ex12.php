<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  $topmodules[0] = "Open Source Systems ";
  $topmodules[1] = "Programming 1";
  $topmodules[2] = "Programming 2";
  $topmodules[3] = "Web Application Development";
  $topmodules[4] = "Software Engineering";
?>
<html>
    <head>
        <title>Data in table</title>
    </head>
    <body>
        <table border=1 align="center">
            <tr>
                <th>Index</th>
                <th>Subject</th>
            </tr> 
                <?php
                    for($count = 0;$count < 5;$count++)
                    {
                        echo "<tr><td>$count</td><td>$topmodules[$count]</td></tr>";
                    }
                ?>
        </table>
    </body>
</html>