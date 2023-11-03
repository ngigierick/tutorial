
<b>episodes through 122</b>
<?php
require 'file53(connecting to db).php';

?>

<?php
/*
//this query inserts data in to the users table
require 'file53(connecting to db).php';

$username = '@prince';
$password = 'mypassword';
$firstname = 'erick12A';
$sirname = 'king';

$query = "INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `sirname`) VALUES (NULL, '$username', '$password', '$firstname', '$sirname')";

if (mysqli_query($conn, $query)) {
    echo 'Data inserted successfully';
} else {
    echo 'Error: ' . mysqli_error($conn);
}
*/
?>




<?php
/*
//this query upadtes the data in the users table
require 'file53(connecting to db).php'; // Include your database connection script

// Define the data you want to update
$id= 1; // Example user ID to update
$username= 'tttpppl';
$firstname = 'Newkingdom';
$sirname = 'kalllly';

// Construct the UPDATE query
$query = "UPDATE `users` SET `username` = '$username', `firstname` = '$firstname', `sirname` = '$sirname' WHERE `id` = $id";

if (mysqli_query($conn, $query)) {
    echo 'Data updated successfully';
} else {
    echo 'Error: ' . mysqli_error($conn);
}
*/
?>



<?php
/*
//the following query daletes data from the users table
require 'file53(connecting to db).php'; // Include your database connection script

// Define the data you want to delete
$userID = 2; // Example user ID to delete

// Construct the DELETE query
$query = "DELETE FROM `users` WHERE `id` = $userID";

if (mysqli_query($conn, $query)) {
    echo 'Data deleted successfully';
} else {
    echo 'Error: ' . mysqli_error($conn);
}
*/
?>




<?php

//this query outputs the data in the users table
$query = "SELECT * FROM `users` ORDER BY `id` DESC LIMIT 2";

        if ($query_run = mysqli_query($conn, $query)) {
            echo 'Query success<br>';
            if(mysqli_num_rows($query_run)== null){
                echo 'this kind of data does not exist';
            }else{
                // You can now fetch the results and process them.
            while ($row = mysqli_fetch_assoc($query_run)) {
                echo 'username: ' . $row['password'] . ', firstname: ' . $row['firstname'] .' '.$row['sirname'].'<br><br>';
            }
        
            }
        }

?>


