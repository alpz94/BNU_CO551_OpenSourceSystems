<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php session_start(); ?>
<?php
    $_SESSION['price'] = txtprice; 
    $_SESSION['totalcost'] = $_SESSION['quantity'] * $_SESSION['price'];

    echo "<h2> Your order quantity is " . $_SESSION['quantity'] . "</h2></br>";
    echo "<h2> and the selected colour is " . $_POST['selcolour'] . "</h2>";
    echo "<h2> The total price of your widgets is " . $_SESSION['totalcost'] ."</h2>";
?>