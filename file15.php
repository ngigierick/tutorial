<html>
<style>
  body {
    background-color: 73ff33;
  }
</style>

</html>
    <h1>
        <center>

        THIS FILE IS ABOUT Arrays
</center>
    </h1>

through episode 38- 41<br><br>
<h4><u>simple array</u></h4>
<?php
//Array stores a collection of data into one varriable
$food = array('rice','chips','burgar','salad');

print_r($food);
echo '<br>';
$food[4]= 'fruit';
print_r($food);


?>


<br><br>
<h4><u>associative array</u></h4>
<?php
//associative arrays allow you to change the i
//keys from 0,1,2,3 to what everkey you want

$food = array('rice'=>500,'chips'=>400,'burgar'=>350,'salad'=>150);
print_r($food);
echo ' <br>the above array becomes associative since instead of the index
now we use the words as the keys//// <br>somehow relating to key value pairs <br><br>';
echo 'now instead of the name of the food we recieve the number of carrories assciated with <br>
the type of food<br>eg:<br>';
echo 'rice = ' .$food['rice'];



?>

<br><br>
<h4><u>multidimetional arrays</u></h4>
<?php
//multidimetional arrays is like having an array inside another arry

/*healthy
salad
rice

unhealthy
chips
burgar
*/
$food = array('healthy'=>array('<b><u>rice</u></b>','salad'),'<br>','unhealthy'=>array('chips','<b><u>burgar</b></u>'));
print_r($food);
echo '<br>';
echo 'this is a heaalthy food '.$food['healthy'][0];

echo '<br>';
echo 'this is a unheaalthy food '.$food['unhealthy'][1];
?>
