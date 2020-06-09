<?php

function array_random( $size, $max = 999999) {
    
    $array = [];
    
    for($i=0; $i<= $size; $i++) {
        array_push($array, rand(0, $max));
    }

    return $array;
}

function array_bubble_sort( $array ) {

    $done = false;
    
    while( !$done ) {
        $check = 0;
        for ($i=0; $i < count($array); $i++) {  
            if ( $i < count($array) - 1  && $array[$i] > $array[$i+1]) {                
                $smaller = $array[$i+1];                
                $array[$i+1] = $array[$i];
                $array[$i] = $smaller;
                $check++;
            }                        
        }

        if ( $check == 0) {
            $done = true;
        }
    }

    return $array;
}

$arr = array_random(10992, 988);

print_r($arr);
print_r(array_bubble_sort($arr));

