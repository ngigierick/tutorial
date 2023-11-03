using xml files<br><br><br><br>
 <?php
 
 $xml = simplexml_load_file('file53(example).xml');
 foreach($xml ->producer as $producer){
   echo 'your name is: '. $producer -> name . ' and your age is:' .$producer-> age.'<br>';
   echo ' your shows are :<br>';
      foreach($producer->show as $myshows){
         echo '   --'.$myshows-> showname.'        ------ '.$myshows-> showdate.'<br>';
      }
      echo '<br>';
  
 }



 ?>

 <br><br>
 <b>sample B</b><br>
<?php
$video = simplexml_load_file('https://www.w3schools.com/xml/note.xml');
echo 'to:  '. $video -> to.'<br>';

echo 'from:  '. $video -> from;
?>