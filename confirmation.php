<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    session_start();
    echo "<h2> Your order qty is" . $_SESSION['quantity'] . "</h2></br>";
    echo "<h2> and the selected colour is" . $_POST['selcolour'] . "</h2>";
?>