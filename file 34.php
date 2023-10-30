<style>
        body {
            background-image: url('https://cdn.dribbble.com/users/10931652/screenshots/20525538/media/87a3d1c10702fb8a3e964a11397de84f.gif');
            background-size: cover;
        }
    </style>
    <h1>Welcome to My Page</h1>
    <p>This is episode 69  </p>



<br><br>
<?php
//check if it exists,, or has it been submitted
if (isset($_GET['day'])&&isset($_GET['day'])&&isset($_GET['day'])){

    $day = ''.$_GET['day'].'';
    $date = ''.$_GET['date'].'';
    $year = ''.$_GET['year'].'';
    if(!empty($day)&&!empty($date)&&!empty($year)){
        echo " today is ". $day." ";
        echo $date." ";
        echo $year ." <br><br>";

    }else
    echo "fill in all fields";

    
}


?>  
<form action = "file 34.php" mathod = "GET">
    day:<br> <input type ="text" name ="day"><br>
    date:<br> <input type ="text" name ="date"><br>
    year :<br><input type ="text" name ="year"><br><br>

    <input type ="submit" value ="submit"><br>

</form>