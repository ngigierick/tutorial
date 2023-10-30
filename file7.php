<html>
<style>
  body {
    background-color: ffca00;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT logical operators 
        <hr>
</center>

    </h1>
    through episode 23<br><br><br>
    <h3> the logical operators are <br>
AND<BR>
OR<BR>
NOT<BR>
</h3>
    
</html>
<u>the following tests if the number is in the range<br></u>

<?php
$number = 41 ;
$upper = 1000;
$lower = 500;
//thus code checks if the number is in the range
//of 500 and 1000
if ($number <= $upper and $number>= $lower){
    echo"ok";
}else{
    echo "  the number is not in the range";
    echo "  the number must be between ".$upper." and ".$lower;
}


?> 
<br><br><br>
<u>the following tests if the number  ==  2 or 4</u>
<br>
<?php
$number = 3 ;
$canbe1 = 2;
$canbe2 = 4;
if ($number == $canbe1 or $number == $canbe2){
    echo"ok";
}else{
    echo "  the number is not in the range";
    //echo "  the number must be between ".$upper." and ".$lower;
}


?> 

<br><br><br>

<br>
<u>the following tests if the number  !==(not equal) 2 or 4</u>
<br>
<?php
$number = 4 ;
$canbe1 = 2;
$canbe2 = 4;
if (!($number == $canbe1 )or !($number == $canbe2)){
    echo"ok!";
}else{
    echo "  the number is equal to $canbe1 or $canbe2";
    //echo "  the number must be between ".$upper." and ".$lower;
}


?> 