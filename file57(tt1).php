using fuctions to check for an add and increment count y 1
<?php


require 'file53(connecting to db).php';
$user_ip = $_SERVER['REMOTE_ADDR'];



function ip_exists($ip){
    global $user_ip;
    global $conn;

    $query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '$user_ip'";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $query_num_rows = mysqli_num_rows($query_run);
        if ($query_num_rows == 0) {
            return false;
        } elseif ($query_num_rows >= 1) {
            return true;
        }
    } else {
        echo "Query error: " . mysqli_error($conn);
        return false;
    }
}


function ip_add($ip){
    global $conn;
    $query = "INSERT INTO `hits_ip` VALUES ('$ip')";
    @$query_run = mysqli_query($conn,$query);
  
    

}
function update_count(){
    global $conn;
    $query = "SELECT `count` FROM `hits_count`";
    
    if($query_run = mysqli_query($conn, $query)){
        // Check if any rows were returned
        if(mysqli_num_rows($query_run) > 0) {
            $row = mysqli_fetch_assoc($query_run);
            $count = $row['count'];

             $count_inc =$count + 1;
             $query_update = "UPDATE `hits_count` SET `count` ='$count_inc' ";
            if(@$query_update_run = mysqli_query($conn, $query_update)){
               // echo 'ok<br>';
              //  echo $count = $row['count'];
            } 
        } else {
            echo 'No rows found';
        }
    } else {
        echo "Your query didn't run<br>";
        die(mysqli_error($conn));
    }
}

if(!ip_exists($user_ip)){
    update_count();
    ip_add($user_ip);
    
}else{
    echo '<br><i>you are login</i>';
}

?>

<h3>turely done100%<br>
<i>welcome </i>
<hr>
<h1>Mypage</h1>