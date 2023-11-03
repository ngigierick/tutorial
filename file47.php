checking if a file exists<br><br><br>
<?php

$filename = 'Anaimes.txt';
if (file_exists($filename)){
    echo 'file already exixsts';

}else{
    echo 'file does not exixsts<br>';
    $handle = fopen ($filename, 'w');
    fwrite($handle,'nothing');
    fclose($handle);
    echo '<br>i have created a new file';

}

?> 