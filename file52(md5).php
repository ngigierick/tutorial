using md5<br><br><br>



<?php
/*
$string = 'password';
$newstring = md5($string);
echo $newstring;
*/
?>
<br><br><br><br>
<?php
    
if (isset($_POST["password"])&&!empty($_POST["password"])) {
    $password = $_POST["password"];
    $true_password = md5($password);


    //open a new file to compare the data stored 
    //to the password entered,,
    $filename = 'file52hash.txt';
    $handle = fopen($filename,'r');
    $file_password = fread($handle, filesize($filename));
    


    if($true_password == $file_password){
        echo 'password okey';

    }else{
        echo '<strong>incorrect password</strong>  please enter the correct password';

    }

    
    


}else {
    echo 'please enter your true password';
}

?>


<form action ='file52(md5).php' method = 'POST'>
 password: <input type = 'password' name = 'password'>
  <input type = 'submit' value = 'submit'>


</form>