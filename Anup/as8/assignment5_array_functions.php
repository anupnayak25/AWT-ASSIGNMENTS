<?php
// assignment5_array_functions.php
echo "<h2>Array Functions Demo</h2>";
$arr = [1,2,3];
echo "Original: "; print_r($arr); echo "<br>";
array_push($arr, 4); echo "after array_push(4): "; print_r($arr); echo "<br>";
$popped = array_pop($arr); echo "array_pop => $popped, array: "; print_r($arr); echo "<br>";
array_unshift($arr, 0); echo "after array_unshift(0): "; print_r($arr); echo "<br>";
$shifted = array_shift($arr); echo "array_shift => $shifted, array: "; print_r($arr); echo "<br>";
$sliced = array_slice([10,20,30,40,50],1,3); echo "array_slice([10..50],1,3): "; print_r($sliced); echo "<br>";
$merged = array_merge([1,2],[3,4]); echo "array_merge([1,2],[3,4]): "; print_r($merged); echo "<br>";
echo "in_array(3,[1,2,3]) => " . (in_array(3,[1,2,3]) ? 'true':'false') . "<br>";
?>