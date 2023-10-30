</html>
    <h1>
        <center>

        THIS FILE IS for each statement
</center>
    </h1>

through episode  42<br><br>
<h4><u>using for each statement</u></h4>
this statement goes through all the value in the array
<?php
$food = array('healthy'=>
            array('rice','salad','food juice','fruits'),
'unhealthy'=>
            array('chips','burgar','pop corn','sweet'));

//print_r($food);
echo '<br><br>';
foreach($food as $element=>$inner_element){
echo'<b><u>'.$element.'</b></u><br>';
foreach($inner_element as $item){
echo ''.$item.'<br>';
}
}

?>