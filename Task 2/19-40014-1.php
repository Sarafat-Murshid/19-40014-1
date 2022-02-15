<?php

$myArray = array(5, 10, 2, 4, 1);

function sortArray($arr) {
// write your sorting logic here
	$size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}

print("Before sorting");
print_r($myArray);

$myArray = sortArray($myArray);
print("After sorting");
print_r($myArray);

?>
