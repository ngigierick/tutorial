
<?php
require 'file59(newcore).php';
echo 'you are logged out';

session_destroy();
$http_referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'default_url.php';
header('Location: ' . $http_referer);
?>
