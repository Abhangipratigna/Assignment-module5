<?php

$arr=array(0=>"niraj",1=>"jay",2=>"nishu",3=>"pratigna");
arsort($arr);

foreach($arr as $value)
{ 

    echo "After srt the values is :".$value."<br>";
    echo "<br>";

}


$arr=array(0=>"niraj",1=>"jay",2=>"nishu",3=>"pratigna");
krsort($arr);

foreach($arr as $value)
{ 

    echo "After srt the values is :".$value."<br>";

}



?>