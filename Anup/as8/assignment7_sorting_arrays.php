<?php
// assignment7_sorting_arrays.php
echo "<h2>Sorting Arrays Demo</h2>";
$nums = [5,2,9,1,7];
echo "Original: "; print_r($nums); echo "<br>";
$a = $nums; sort($a); echo "sort() ascending: "; print_r($a); echo "<br>";
$b = $nums; rsort($b); echo "rsort() descending: "; print_r($b); echo "<br>";
$assoc = ['c'=>3,'a'=>1,'b'=>2];
echo "Associative original: "; print_r($assoc); echo "<br>";
$c = $assoc; asort($c); echo "asort() by value (maintain keys): "; print_r($c); echo "<br>";
$d = $assoc; ksort($d); echo "ksort() by key: "; print_r($d); echo "<br>";
?>