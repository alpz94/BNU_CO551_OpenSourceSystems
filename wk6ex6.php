<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £" . calculatetax(15000,22) . " tax";
	html_footer();
?>