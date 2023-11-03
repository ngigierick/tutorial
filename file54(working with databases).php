<?php
require'file53(connecting to db).php';
$query = "SELECT `food`,`calories`,`healthy_unhealthy` FROM `foods`WHERE `healthy_unhealthy`='u' and `calories`> 900 ORDER BY `id` DESC ";
/*
if ($query_run = mysqli_query($conn, $query)){
    echo 'query success';

}else{
    echo 'query failed';
}

*/
if ($query_run = mysqli_query($conn, $query)) {
    echo 'Query success<br>';
    if(mysqli_num_rows($query_run)== null){
        echo 'this kind of data does not exist';
    }else{
        // You can now fetch the results and process them.
    while ($row = mysqli_fetch_assoc($query_run)) {
        echo 'Food: ' . $row['food'] . ', Calories: ' . $row['calories'] .' ; '. $row['healthy_unhealthy'].'<br>';
    }

    }
    
} else {
    echo 'Query failed';
    echo '<br>'.mysqli_error($conn);
}
?>