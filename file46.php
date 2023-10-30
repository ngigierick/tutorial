<b>uploading files</b>
<br>
<hr>


<br>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['file'])) {
        $name = $_FILES['file']['name'];
       $size = $_FILES['file']['size'];
       $type = $_FILES['file']['type'];
    $tmp_name = $_FILES['file']['tmp_name'];
       $error = $_FILES['file']['error'];
       echo "name : $name,<br> size: $size , <br> type: $type, <br>temprary name: $tmp_name ,<br>error: $error  <br><br><br>";
    } else {  
        echo "<br>No file uploaded.";
    }
}
?>
<form action="file46.php " method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>
