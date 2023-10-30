<html>
<style>
  body {
    background-color: fbcc2b;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT  functions
</center>
    </h1>

through episode 34<br><br>
<h3><u>global variable and how to use them inside functions<br><br></u></h3>
<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$myname = "erick";
function echo_ip(){
global $user_ip,$myname;
$trueip = 'hi erick:'. $user_ip.'<br><br>';
echo $trueip;
echo "my name is realy $myname";

}
echo_ip();
?>