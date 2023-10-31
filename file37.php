working with form data episode 71-72<br>and using htmlentities for form security
<br><br>
<?php
//check if it exists,, or has it been submitted
if (isset($_POST['day'])&&isset($_POST['date'])&&isset($_POST['year'])){

    $day = htmlentities(''.$_POST['day'].'');
    $date = htmlentities(''.$_POST['date'].'');
    $year = htmlentities(''.$_POST['year'].'') ;
    if(!empty($day)&&!empty($date)&&!empty($year)){
        echo " today is ". $day." ";
        echo $date." ";
        echo $year ." <br><br>";

    }else
    echo "fill in all fields";

    
}


?>
<form action = "file37.php" method = "POST">
    <center>please fill in the folowing:<br><br></center>
day:<input type = 'text' name = 'day'>
date: <input type = 'text' name = 'date'>
year: <input type = 'text' name = 'year'>
<br><br><center>
<input type = 'submit' value = 'submit'>
</center>



</form>