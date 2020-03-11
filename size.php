<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<html>
    <head>
        <title>Select size page</title>
    </head>
    <body>
        <form action="selectcolour.php" method="post">
            Select the size for the <?php echo $_SESSION['quantity']  ?> widgets you are ordering:
            <select name="selsize">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
            </select>
            <br/><br/>	
            <input type="submit" value="Buy"/>
        </form>
    </body>
</html>