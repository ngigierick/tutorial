</html>
    <h1>
        <center>

        THIS FILE IS for time stamps
</center>
    </h1>
through episode  58- 59 <br><br>
<h4><u>using string fuction str_replace</u></h4>
<i></i>





<?php
$time = time();
$actual_time = date('d M Y   @:H:i:s',$time ); 
 $modified_time = date('d M Y  @ :H:i:s', strtotime('+ 1 year'));

 echo ' the current date and time is '.$actual_time.'<br> and the the time
  modified '. $modified_time;

include ('file17.php');
?>
