

<?php
function hit_count (){

    $filename = ' count.txt';
    $handle = fopen($filename,'r');
    $current = fread($handle, filesize($filename));

    echo $current_inc = $current + 1;
}


?>