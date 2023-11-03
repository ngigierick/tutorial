<?php
require 'file53(connecting to db).php'; 
echo 'you are connected';
?>

<?php
if(isset($_POST['search_name'])){
    $search_name = $_POST['search_name'];
    if(!empty($search_name)){
        if(strlen($search_name) >= 3){
            $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($conn,$search_name)."%'";
            $query_run = mysqli_query($conn,$query);
            if(mysqli_num_rows($query_run)>= 1){
                echo '<br><i>results found</i>';
                echo "<br><u><font size = '5'>names:</font></u>";
                while($query_row = mysqli_fetch_assoc($query_run)){
                    echo '<br>: ' . $query_row['name'].'';
                }

            }else{
            echo ' <br><i>no results found</i>';
            }
            

        
            
        }else{
            echo '<br><i>enter a search greaterthan 3 characters</i>';
        }
        
    }else{
        echo '<br><i>search for your name</i>';
    }
}

?>
<br><br>
<form action = 'file58using the like).php' method = 'POST'>
name: <input type ='tetx' name ='search_name'>
<input type ='submit' value ='search'>

</form>
