<?php

    $array1 = array(1, 2, 3, 4, 5);
    $array2 = array(4, 5, 6, 7, 8);

    $merged_array = array_merge($array1, $array2);

    $diff_array1 = array_diff($array1, $array2); 
    $diff_array2 = array_diff($array2, $array1); 

    echo "<h3>Array 1:</h3>";
    print_r($array1);

    echo "<h3>Array 2:</h3>";
    print_r($array2);

    echo "<h3>Merged Array:</h3>";
    print_r($merged_array);

    echo "<h3>Difference (Array 1 - Array 3):</h2>";
    print_r($diff_array1);

    echo "<h3>Difference (Array 2 - Array 1):</h3>";
    print_r($diff_array2);

    
    ?>
