<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $db = mysqli_connect("localhost", "21903356", "mysqluser", "db5_21903356");

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
    
    $sql = "INSERT INTO monster";
    $sql .= "(Name, Image, Audio)";
    $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

    $result = mysqli_query($sql, $db);

    mysqli_close();
?>