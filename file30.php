</html>
    <h1>
        <center>

        THIS FILE IS for radom number generator
</center>
    </h1>
through episode  60 <br><br>
<h4><u>using rand function</u></h4>
<i></i>





<?php  
if (isset($_POST["roll"])&&!empty($_POST["roll"])) {
    $rand = rand(1,6);
    echo 'you have rolled a = '.$rand.'';
}

?>  

<br><br>
<form action = "file30.php" method = "POST">
    <input type = "submit" name = "roll" value ="roll the dice">
</form>
<br>
done
<br><br>

