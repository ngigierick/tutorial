</html>
    <h1>
        <center>

        THIS FILE IS for string lenght
</center>
    </h1>
through episode  46<br><br>
<h4><u>using string lenght</u></h4>

<?php
$mystring = "erickkaranja";
$string_lenght = strlen($mystring);
echo 'the lenght of '. $mystring.'is = '.$string_lenght;

echo '<i>when you want to loop through every character of a string</i>';
// the following code will loop the number of characters in the given string.
// using for loop.
for($i== 0;$i<=$string_lenght; $i++){
    echo 'character.'.$i.'<br>';
}



?>
<br>
<i>some of the reasons for counting the lenght of a string <br>
or using the strlen function is to get the number of characters in a string</i>