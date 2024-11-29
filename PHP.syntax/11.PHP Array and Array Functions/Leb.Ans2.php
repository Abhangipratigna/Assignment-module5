<?php

$numbers = array(array(),array());

for($i=1; $i<=20; $i++)
{
    if ($i % 2 == 0)
    {
        array_push($numbers[0],$i);
    }
    else
    {
        array_push($numbers[1],$i);
    }
}
echo "odd numbers:";
print_r ($numbers[1]);

echo "\nEven numbers:";
print_r ($numbers[0]);


?>