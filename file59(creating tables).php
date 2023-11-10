<a href="file59(logout).php"><input type='submit' value='logout'></a>


<?php
require 'file59(newcore).php';
require 'file59(connect,login).php';

if (logged_in()) {
    echo '<br>You are logged in';
    if(1==1){
      echo '<br><br><br>'.'<iframe width="560" height="315" src="https://www.youtube.com/embed/xy13lY4N9zM?si=hEDDF7sbdiaEpRY2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
     //   header('Location:https://youtu.be/xy13lY4N9zM');
     $first = getfield('firstname');
    $sirname = getfield('sirname');

    echo "$first,$sirname";
     


    }
} else {
    echo '<br>Please login';
    include 'file59(loginform).php';
    
}

echo '<br>it okey<br>done';
//echo '<br>'.$current_file;
?>
