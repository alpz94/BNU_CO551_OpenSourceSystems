<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    $conn = mysqli_connect("localhost", "root", "", "db_week7");

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
    
    $sql = "INSERT INTO monster";
    $sql .= "(Name, Image, Audio)";
    $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
?>