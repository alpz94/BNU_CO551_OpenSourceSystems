<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $link = mysqli_connect("localhost", "root", "", "test");

	$sql = "SELECT * from test where name = '$_GET[id]' ";
	$result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
    <body>
    <form action="wk6ex3.php" method="post">
        Name :
        <input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
        </br>
        Phone number :
        <input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
        </br>
        Email :
        <input type=text name=txtemail value="<?php echo $row['email'] ?>" />
        </br>
        <input type=submit name=btnsubmit value="save"/>
    </form>
    </body>
</html>