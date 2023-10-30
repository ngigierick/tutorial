<html>
    <h1>
        <center>
        THIS FILE IS for replacing a string
        </center>
    </h1>
    through episode 50<br><br>
    <h4><u>using string function substr_replace</u></h4>
    <i></i>

    <center>this program replaces part of a string</center><br>
    <form action="file25.php" method="GET">
        <center> enter your text here: <input type='text' name="user_name"><br><br>
        <input type="submit" value="submit"></center>
    </form>

    <br><br><br><br>
    <center>
    <form action="file25.php" method="GET">
        <center> enter the replace text here: <input type='text' name="string_replace"><br><br>
        <input type="submit" value="submit"></center>
    </form>
    </center><br>

    <?php
    // Initialize the $mystring variable outside the function
    $mystring = '';
    $string_replace = '';
    $new_string= '';

    // This part will replace the simple string
    if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
        $mystring = $_GET['user_name'];
        echo $mystring;
    }

    // Define the 'replacing' function
    function replacing($mystring, $string_replace, $new_string) {
        // This part will replace the simple string
        if (isset($_GET['string_replace']) && !empty($_GET['string_replace'])) {
            $string_replace = $_GET['string_replace'];
            $new_string = substr_replace($mystring, $string_replace, 6, 5);
            echo $new_string;
        }
    }

    // Call the 'replacing' function
    replacing($mystring, $string_replace, $new_string);
    ?>

    <br><br>
    <h3>done!</h3>
</html>
