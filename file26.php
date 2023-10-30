</html>
    <h1>
        <center>

        THIS FILE IS for replace a string
</center>
    </h1>
through episode  48<br><br>
<h4><u>using string fuction str_replace</u></h4>
<i></i>
<?php
$find = array('is','string','example');
$replace = array('are','','worthy');
$mystring = 'this is an example';
$new_string = str_replace($find, $replace, $mystring);

echo $new_string;
?>