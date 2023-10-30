<html>
    <center>
    <h1>this file includes episode 7 on php.ini file and episode 8 on indentation</h1>
</center>
<hr>
    </html>

<?php
// this code shows the need or benefits that result to code indentation
//easy to read
$name = "erick";
$age = 21; 
if (($name) === "erick") {
    echo "your name is " .$name ."<br>";
    if($age>=21) {
        echo 'you are over 21';
        if ( 1===1) {
            echo '<br> yes 1 is equal to 1 you have told the truth';
        }
    }else{
        echo "your age is not 21";
    }
}
else {
    echo 'you are not erick<br>';
    echo 'your name is '. $name;
}
?> 