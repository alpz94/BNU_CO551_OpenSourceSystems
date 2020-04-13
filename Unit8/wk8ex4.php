<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php session_start();?>
<?php

    $conn = mysqli_connect("localhost", "root", "", "db_week8");

    $sql = "select * from lotto;";
    $result = mysqli_query($conn, $sql);
?>
<html>
    <head>
        <h2>Exercise 4: lotto table, db_week8 database</h2>
    </head>
    <body>
        <form action="<?php $_SESSION["PHP_SELF"];?>" method="post">
            <?php    
                echo "<br/>Select the lottery week ";
                echo "<select name='selweek' >";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<option value='$row[wk]'>$row[wk]</option>";
                }
                echo "</select><br/>";
                echo "<input type='submit' value='Select' />";
            ?>
        </form>
    </body>
</html>