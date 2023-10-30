
<h1>
        <center>

        THIS FILE IS for grtting visitors address
</center>
    </h1>

through episode  63 - 64 <br><br>
<h4><u>getting visitors ip address</u></h4>
<i></i>




<?php
require "config.php";

foreach($ip_blocked as $ip){
if($ip == $ip_address){
die('<br<br><i>this page has died</i><br> your ip address '.$ip.'has been blocked');
}
}



//echo $ip_address;
?>