<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
  $mymarks["CO451"] = 82;
  $mymarks["CO452"] = 83;
  $mymarks["CO453"] = 94;
  $mymarks["CO456"] = 80;
  $mymarks["CO455"] = 85;
  $mymarks["CO457"] = 76;

  while(list($index,$value) = each($mymarks))
  {
    echo "for  $index  my grade was  $value <br/>";

    $total = 0;
    $total = $total + $mymarks[$index];
    $average = $total /  6;
  }
  echo "For this modules my average was $average"
?>