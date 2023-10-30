</html>
    <h1>
        <center>

        THIS FILE IS for expression mathcing
</center>
    </h1>
through episode  45<br><br>
<h4><u>more on expression matching</u></h4>

<?php
$mystring = 'hello there you are on my computer'; 
function check_m ($mystring){
    if(preg_match('/ /',$mystring)){
        echo " true, there are spaces in the string";

    }else{
        echo "there are no spaces in the string";
    }

}

function check_mi ($mystring){
    if(preg_match('/love /',$mystring)){
        echo " true, the word is found in the string";

    }else{
        echo " false the word is not found in the string";
    }

}

//check_m("$mystring");
echo "<br>";

$truestring = "i love thewayyoulikeme";
echo "<i>here we are the preg_match fuction within a function to check for spaces in the string</i><br>";

check_m("$truestring");

echo "<br><br>";
echo "<i>here we are using diffrent fuctions to check for the word love in the string</i><br>";
check_mi($truestring);
?>