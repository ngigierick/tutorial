file handling    episode 77<br><br><br>
<?php
$handle = fopen('Anames.txt','w');
fwrite($handle,'hi there my name is erick'."\n");
fwrite($handle,'hi there my name is john');
fwrite($handle,'hi there my name is jane');

fclose($handle);
echo 'written'

?>
