<html>
<style>
  body {
    background-color: fb702b;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT  fuctions
</center>
    </h1>

through episode 30-34<br><br>
<h3><u>using function</u></h3>
<?php
// a function is a satement that helps us decleare
//a block of code that we want to reuse
function myname(){
echo "my name is erick<br>";
}

echo " good evening my people i just wanted to know your names<br>";
myname();
?>
<br><br>

<h3><u>using function with argument</u></h3>
<?php

function add($number1 = 10, $number2= 15, $result = 0){
    $result = $number1 + $number2;
echo " the sum of adding $number1 and $number2 = $result ";
}
add();
?>
<br><br>
<h3><u>example 2</u></h3>
<?php
function displaydate($day,$date,$year){
    echo $day.''.$date.''.$year;

}
displaydate('monday ','24 ','2023');
?>


<br><br>
<h3><u>using fuction with return values</u></h3>
<?php
function adding ( $number1, $number2, $result = 0){
    $answer = $number1 + $number2;
    return $answer;
}

function divide ( $number1, $number2, $result = 0){
    $answer = $number1 / $number2;
    return $answer;
}
echo" the anser is = ";
echo adding(10,10 + 100 + divide(100,2));
?>