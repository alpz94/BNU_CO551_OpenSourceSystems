<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php echo "Your account is $_POST[txtaccount]"; ?>
    <form action="confirmDeposit.php" method="post">
        <input type="text" name="txtdeposit" />
        <input type="hidden" name="hdaccount" value="<?php echo $_POST[txtaccount] ?>" />
        <input type="submit" />
    </form>