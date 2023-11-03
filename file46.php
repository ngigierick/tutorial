file handling lisiting files<br><br><br>
<?php
$directory = 'uploads';
if ($handle = opendir($directory.'/')){
    echo '<br>looking inside  \''.$directory.'\'<br>';

    while($file = readdir($handle)){
        if($file != '.'&&$file !='..'){
            echo '<a href = "'.$directory.'/'.$file.'">'.$file.'</a><br>';

        }
        
    }
}
?>