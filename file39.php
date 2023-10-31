this will view the session in file38.php<br><br><br>
<?php
session_start();
//if(isset($_SESSION['username'])&&isset($_SESSION['age'])){
    echo 'welocme '. $_SESSION['username'].' you are'.$_SESSION['age'];

//}else{
   // echo 'please login';
//}

?>

<br><br><br>