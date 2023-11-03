file handling  apending writing and reading  episode 77- 79<br><br><br>
<?php
if(isset($_POST["newname"])){
    $name = $_POST["newname"];
    if(!empty($name)){
        $handle = fopen("Anames","a");
        fwrite($handle,"".$name."\n");
        echo"you have added a name";
        fclose($handle);
}else {
    echo 'please enter your name';
} 

}
?>

<form action ="file43.php" method = "POST">
<center>
     NAME:<input type = "text" name ="newname"><br><br>
     <input type = "submit" value ="submit"></center>

</form>