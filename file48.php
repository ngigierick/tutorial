deleting and renaming files in php using functions<br><br><br>

<?php
/*
$filename = 'Anaimes.txt';
if (@unlink($filename)){
    echo $filename.'<br><br>file has been deleted<br><br.';
}else{
    echo "<br><br><br>the file couldn't be deleted";
}
*/
//renaming  a file
/*
$file2name = 'Anaimes.txt';
$rand = rand(10000,99999);
echo ' file'.$file2name.' has been renamed to'. $rand;

if (rename($file2name, $rand.'.txt')){
    echo 'file<strong>'.$file2name.'</strong>has been renamed to<strong>'.$rand.'.txt</strong>';

}else{
    echo 'error renaming,';
 }
*/

?>
<?php
/*
$filename = 'Anaimes.txt';
if (@unlink($filename)){
    echo $filename . '<br><br>File has been deleted.<br><br>';
} else {
    echo "<br><br><br>The file couldn't be deleted.";
}
*/

// Renaming a file
$file2name = 'Anaimes.txt';
$rand = rand(10000, 99999);

if (rename($file2name, $rand . '.txt')) {
    echo 'File <strong>' . $file2name . '</strong> has been renamed to <strong>' . $rand . '.txt</strong>.';
} else {
    echo 'Error renaming.';
}
?>
