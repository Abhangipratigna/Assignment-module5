<?php

function move_zero($arr)
{
    $count = 0;
    $n = sizeof($arr);

    for($i=0; $i<$n;$i++)

    {
        if ($arr[$i] != 0)
        {
            $arr[$count++] = $arr[$i];
        }
    }

    while ($count < $n)
    {
        $arr[$count++] = 0;
    }

    return $arr;
}
$num_list1=array(0,2,3,4,6,7,10);
print_r(move_zero($num_list1));

?>