<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  $topmodules[0] = "Internet Systems Development";
  $topmodules[5] = "Programming 1";
  $topmodules[10] = "Programming 2";
  $topmodules[30] = "OOAD";
  $topmodules[40] = "Software Engineering";

  while(list($index,$value) = each($topmodules))
  {
    echo "Index is $index  and value is $value <br/>";
  }
?>