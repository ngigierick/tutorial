<?php
require'file53(connecting to db).php';
?>


<form action = "file55(select example).php" method= "GET" >
   choose afood type:  <br><br>
    <select name ="uh">
    <option value ="u"> uhealthy</option>
    <option value ="h">healthy<option>
</select>
<br><br>
<input type = "submit" value = "submit" >
</form>


<?php
// the code below uses the ifelse statement to select either the healthy or the unhealty foods


/*
if(isset($_GET['uh']) && !empty($_GET['uh'])){
    $uh = strtolower($_GET['uh']);

    if ($uh =='u'){
        $query = "SELECT `food`,`calories` FROM `foods`WHERE `healthy_unhealthy`='u' ORDER BY `id` DESC ";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Query success<br>';
            if(mysqli_num_rows($query_run)== null){
                echo 'this kind of data does not exist';
            }else{
                // You can now fetch the results and process them.
            while ($row = mysqli_fetch_assoc($query_run)) {
                echo 'Food: ' . $row['food'] . ', Calories: ' . $row['calories'] .'<br>';
            }
        
            }
            
        } else {
            echo 'Query failed';
            echo '<br>'.mysqli_error($conn);
        }
        
    }elseif($uh =='h'){
        $query = "SELECT `food`,`calories` FROM `foods`WHERE `healthy_unhealthy`='h' ORDER BY `id` DESC ";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Query success<br>';
            if(mysqli_num_rows($query_run)== null){
                echo 'this kind of data does not exist';
            }else{
                // You can now fetch the results and process them.
            while ($row = mysqli_fetch_assoc($query_run)) {
                echo 'Food: ' . $row['food'] . ', Calories: ' . $row['calories'] .'<br>';
            }
        
            }
            
        } else {
            echo 'Query failed';
            echo '<br>'.mysqli_error($conn);
        }
    }else{
       echo 'the server canot process your data';
    }
        

}

  */ 
?>



<br><br><br><br><br><br>
<b>simlified code without uisig elseif</b>

<?php
require'file53(connecting to db).php';
?>



<?php
if(isset($_GET['uh']) && !empty($_GET['uh'])){
    $uh = strtolower($_GET['uh']);

    if ($uh =='u' || $uh = 'h'){
        $query = "SELECT `food`,`calories` FROM `foods`WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC ";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Query success<br>';
            if(mysqli_num_rows($query_run)== null){
                echo 'this kind of data does not exist';
            }else{
                // You can now fetch the results and process them.
            while ($row = mysqli_fetch_assoc($query_run)) {
                echo 'Food: ' . $row['food'] . ', Calories: ' . $row['calories'] .'<br>';
            }
        
            }
            
        } else {
            echo 'Query failed';
            echo '<br>'.mysqli_error($conn);
        }
    
    }else{
       echo 'the server canot process your data';
    }
        

}

   
?>
