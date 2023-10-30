</html>
    <h1>
        <center>

        THIS FILE IS for string fuctions upper/lower case
</center>
    </h1>
through episode  47<br><br>
<h4><u>using string fuctions upper/lower case</u></h4>


<center>hi there enter your name below</center><br>
<form action = "file23.php" method = "GET">
   <center> name: <input type = 'text'  name = "user_name"><br><br>
<input type = "submit" value ="submit"></center>
</form>

<?php

if (isset($_GET['user_name'])&&! empty($_GET['user_name'])){
     $user_name = $_GET['user_name'];
     $realname = strtoupper ($user_name);
     if($realname == 'ERICK'){
        echo "hi $user_name you are the best";
     }else{
        echo 'you are not erick';
     }

}

?>




