creating cookies<br><br><br> 
<?php
echo $time = time();
$erick = 'hi there my anme is ngigi erick karanja';
setcookie("username","$erick", time() +1000);
setcookie("username","$erick", time() -1000);


?>