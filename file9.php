<html>
<style>
  body {
    background-color: 00ff9a;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT  loops
</center>
    </h1>

through episode 25-27<br><br>
    LOOPs are used to repeat a block of code a given number of times<br>
    in the cause you want the same block of code to run several times the<br>
    need a loop, loops can ange from ...<br>
    while
    <br> do while<br> and for loop
 <br><br><br>
    <h3> </h3>
 <h3>while loop</h3>

    <?php
    $num = 10;
    while ($num >=1){
        echo "  $num.hello erick<br>";
        $num--;
    }
  

    echo "done";
    ?>

<br><br><br>
    <h3>do while loops</h3>
    <?php
   $num = 1;
   //using the do while loop atleat a there will be an output
   //even the the result is false
    do {
        echo "$num. hi<br>";
        $num ++;
    } while ($num <= 10);
    ?>


<br><br><br>
    <h3>for  loops</h3>
    <?php
    
    for ($num = 10;$num>= 1;$num--) {
        echo "$num. my name<br>";
        
    }
    ?>               

     