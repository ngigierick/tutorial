uploading files. full code with security<br><br><br>
<?php

 $name = $_FILES['file']['name'];
 $ext = $_FILES['file']['type'];
 $size = $_FILES['file']['size'];
 $max_size =  1500000;
$type = $_FILES['file']['type'];
//echo $error = $_FILES['file']['error'];

 $tmp_name =$_FILES['file']['tmp_name'];
$extension = strtolower(substr($name,strpos($name,'.') +1));
//die('<br><br>dieieieieiei');

if (isset($name)){
    if(!empty($name)){
        if(($extension == 'jpg'||$extension == 'jpeg')&&($type == 'image/jpeg'||$type == 'image/jpg')&&$size<=$max_size){
            $location = 'uploads/';
            if(move_uploaded_file($tmp_name,$location.$name)){
                echo '<br><br>uploaded';
            }else{
                echo 'there was an error';
            }
        }else{
            echo 'file must be jpg/jpeg and must be 2m or less';
        }
    }else{
        echo 'please choose a file';
    }
}
 

?>
<form action = "file49.php" method = "POST" enctype="multipart/form-data">
<input type = "file" name = 'file' ><br><br>
<input type = "submit" value = 'submit' >
</form>