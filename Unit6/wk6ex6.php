<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £" . calculatetax(7413) . " tax, being that my tax allowance is $allowance";
	html_footer();
?>