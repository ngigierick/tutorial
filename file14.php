<html>
<style>
  body {
    background-color: d6fb2b;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT string functions
</center>
    </h1>

through episode 35-3<br><br>
<h3><u>string functions inside php<br><br></u></h3>
<?php
//using zero on the argument of the string will produce
//just the numebr of words 

//using a 1 will produce the idexes of the words
$string = '<b> hi this is an example string</b><br>';
$string_word_count = str_word_count($string,1);
echo $string;
print_r(  $string_word_count );
echo '<br><br><br>';

//using 2 will produce the postion on the line where 
//the word acctually starts
$string = '<b> hi this is an example string</b><br>';
$string_word_count = str_word_count($string,2);
echo $string;
print_r(  $string_word_count );

?>

<h4><u>using string shuffle<br><br></u></h4>
<?php

//this is an example using shuffle function on a string
$string = '<b> hi this is an example string</b><br>';
$string_shuffled = str_shuffle($string);
echo $string;
echo 'this fuction will always shuffle when u refresh the page<br>';
echo $string_shuffled;
?>
<br>

<h4><u>using string reverse<br></u></h4>
<?php

//this is an example using shuffle function on a string
$string = '<br>'.' hi this is an example string';
$string_reversed= strrev($string);
echo $string;
echo '<br>this fuction will be reversed when u refresh the page<br>';
echo $string_reversed;
?>

<br>

<h4><u>coparing similarity in two different strings<br></u></h4>
<?php
$string_one ="this is my easy";
$string_two = "this is my poem , its mine";

similar_text($string_one, $string_two,$result);
echo ' the similarity between<b> '.$string_one.' </b>and<b> '.$string_two.' </b>is ' .$result;
?>

<br>

<h4><u>seeing through the string lenght<br></u></h4>
<?php

$mystring = 'this is an example of a simple string';
$mystring_length = strlen($mystring);
echo $mystring_length;
echo '<br>done<br><br>';

?>


<h4><u>trimed string<br></u></h4>
<?php
//you can choose to trim the leftor right side
//using the ltrim for left and rtrim for right
$mystring = 'this is an example of a simple string';
$mystring_trimed = trim($mystring);
echo $mystring_trimed;
echo '<br>done<br><br>';

?>


<h4><u>addslashes<br></u></h4>
<?php
 
$mystring = 'this is <img src ="mmm.jpg.point"> a simple string';
$mystring_shlashes = htmlentities(addslashes($mystring));
echo $mystring_shlashes;
echo '<br>done<br><br>';

?>