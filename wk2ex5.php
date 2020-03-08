<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
   if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false) 
   {
      echo "You are using Internet Explorer<br/>";
   }
   else
   {
      echo "Why are you not using Internet Explorer ?<br/>";
   }
?> 
