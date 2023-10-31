<b>using POST</b> 
C:\xampp2\htdocs\openpathtuet1
<br><br><br><br>

<?php
$match = 'pass123';
if (isset($_POST['password'])){
    $real_password = $_POST['password'];
    if (!empty($real_password)){
        if($real_password == $match){
            echo ' the password matches and you have access';
            include_once 'file17.php';
            header("Location: file36.php");
            die ('thank you for singing in');
    
         }else{
            echo '<i>your password is incorrect
            enter the correct password<br><br><br></i>';
         }
    }else  {
        echo 'fill in your password';
    }
}else{
    echo 'the form is not working';
}


?>

<form action ="file35.php" method = "POST">
    password:<br>
    <input type = "password" name = "password" ><br><br>
    <input type = "submit" value ="submit" >
    

</form>
