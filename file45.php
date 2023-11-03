exploding and imploading data<br><br><br>

<?php
$file_name = 'Anames.txt';
$handle = fopen ($file_name,"r");
$datain = fread ($handle,filesize($file_name));
$name_array = explode("\n",$datain);
foreach($name_array as $call_name){
    echo $call_name.'<br>';
}
?> 
<?php

$names_array = array("alex","billy","dale");
$string = implode("-", $names_array);
echo $string;

?>
