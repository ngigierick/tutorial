</html>
    <h1>
        <center>

        THIS FILE IS for string position
</center>
    </h1>
through episode  48<br><br>
<h4><u>string fuctions using string position</u></h4>
<i></i>
<?php
//$mystring = 'this is episode 48 
//and i love the way i look at this game';


?>   


<center>this program tests the postion of /i/ in the users string</center><br>
<form action = "file24.php" method = "GET">
   <center> enter your test here: <input type = 'text'  name = "user_name"><br><br>
<input type = "submit" value ="submit"></center>
</form>
<?Php

if (isset($_GET['user_name'])&&! empty($_GET['user_name'])){
    $mystring  = $_GET['user_name'];
    $find ='i';
    $offset = 0;
    $find_length = strlen($find);
    while($string_pos = strpos($mystring, $find, $offset)) {
        echo 'found at '.$string_pos.'<br>';
        $offset = $string_pos + $find_length;
    }
     }

     ?>