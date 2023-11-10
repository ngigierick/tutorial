<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'default_url.php';

if (!function_exists('logged_in')) {
    function logged_in() {
        if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}

global $conn;

function getfield($field) {
    global $conn;

    $query = "SELECT `$field` FROM `users` WHERE `id` = '" . $_SESSION['user_id'] . "'";   
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            $row = mysqli_fetch_assoc($query_run);
            echo '<br>';
            echo $row[$field];
        }
    }
}


?>




