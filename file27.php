</html>
    <h1>
        <center>

        THIS FILE IS for replace a string
</center>
    </h1>
through episode  48-53<br><br>
<h4><u>using string fuction str_replace</u></h4>
<i></i>




<?php
$find = array("love","joy","eric");
$replace = array("peace","happiness","lewis");


if (isset($_POST['user_input']) &&!empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    $user_input = str_ireplace($find, $replace,$user_input);
    echo ''. $user_input.'';
    echo '<br><i>it works</i>';

}

?>
<center>
<form action = "file27.php" method = "POST">
<textarea color="00ff00" name = "user_input" rows = "6" cols = "50"><?php echo  $user_input; ?></textarea>
<br><br><br>
<input type = "submit" value = "  ok  ">
</form>
</center>



<br><br><br>
this program gets an input from the user and relaces some words with others