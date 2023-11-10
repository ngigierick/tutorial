
<?php
require 'file59(newcore).php';
require 'file59(connect,login).php';

if (isset($_POST['user_name']) && isset($_POST['users_pass']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['users_pass'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $password_hash = md5($password);

    if (!empty($user_name) && !empty($password) && !empty($firstname) && !empty($surname)) {
        $conn = mysqli_connect("localhost", "root", "", "login");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT `id` FROM `users` WHERE `username` = '$user_name' AND `password` = '$password_hash'";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $query_num_rows = mysqli_num_rows($query_run);

            if ($query_num_rows == 1) {
                $row = mysqli_fetch_assoc($query_run);
                $user_id = $row['id'];
                $_SESSION['user_id'] = $user_id;
                header('Location: file59(creating tables).php');
            } else {
                echo 'Invalid username password combination';
            }
        } else {
            echo 'Error executing the query: ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo 'You must fill in all fields';
    }
}
?>


<center>
<form action='file59(loginform).php' method='POST'>
    <br>user_name: <input type='text' name='user_name'><br>
    <br>password: <input type='password' name='users_pass'><br>
    <br>firstname: <input type='text' name='firstname'><br>
    <br>surname: <input type='text' name='surname'><br>
    <br><br>
    <input type='submit' value='login'>
</form>
</center>


