</html>
    <h1>
        <center>

        THIS FILE IS for replace a string application
</center>
    </h1>
through episode  54 <br><br>
<h4><u>using string fuction str_replace</u></h4>
<i></i>





<?php
if (isset($_POST['text']) && isset($_POST['search_for']) && isset($_POST['replace_with'])) {
    $text = $_POST['text'];
    $search_for = $_POST['search_for'];
    $replace_with = $_POST['replace_with'];

    $search_length = strlen($search_for);

    if (!empty($text) && !empty($search_for) && !empty($replace_with)) {
        $offset = 0;
        while ($strpos = strpos($text, $search_for, $offset)) {
           $offset = $strpos + $search_length;
           $text = substr_replace($text, $replace_with, $strpos, $search_length);
        }

        echo $text;
    } else {
        echo '<b>Fill in all fields</b>';
    }
}
?>

<form action="" method="POST">
    <textarea name="text" rows="6" cols="35"></textarea>
    <br><br><br>Search for:<br>
    <input type="text" name="search_for">
    <br><br>Replace with:<br>
    <input type="text" name="replace_with"><br><br>
    <input type="submit" value="Find and replace">
</form>








<br><br><br>