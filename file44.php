<h2>Reading Data</h2>

File Handling - Appending, Writing, and Reading - Episode 77-79<br><br><br>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["newname"])) {
    $name = $_POST["newname"];
    if (!empty($name)) {
        $handle = fopen("Anames.txt", "a"); // Open the file with the correct extension
        fwrite($handle, $name . "\n"); // Write the name without unnecessary concatenation
        fclose($handle); // Close the file

        echo "You have added a name.<br>";

        echo 'Current names in the file:<br>';

        $count = 1;
        $readin = file('Anames.txt'); // Read the file content into an array
        $readin_count = count($readin);
        foreach ($readin as $fname) {
            echo trim($fname);
            if($count < $readin_count) {
                echo ', ';
            }
            $count++;
        }
    } else {
        echo 'Please enter your name.';
    }
}
?>

<form action="file44.php" method="POST">
    <center>
        NAME: <input type="text" name="newname"><br><br>
        <input type="submit" value="Submit">
    </center>
</form>
