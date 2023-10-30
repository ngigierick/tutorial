</html>
    <h1>
        <center>

        THIS FILE IS for $_server variable
</center>
    </h1>
through episode  61-62 <br><br>
<h4><u>using $_server variable</u></h4>
<i></i>





<?php 
echo $scroptname = "file name:".$_SERVER["SCRIPT_NAME"]."<br>";
echo "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Host: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Referring Page: " . $_SERVER['HTTP_REFERER'] . "<br>";
echo "Is HTTPS: " . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'Yes' : 'No') . "<br>";
echo "Query String: " . $_SERVER['QUERY_STRING'] . "<br>";


?> 