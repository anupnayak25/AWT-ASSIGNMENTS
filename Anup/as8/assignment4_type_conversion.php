<?php
// assignment4_type_conversion.php
echo "<h2>Type Conversion Demo</h2>";
// Implicit conversion
$a = "10"; // string
$b = 5;      // int
$sum = $a + $b; // implicit conversion of $a to int
echo "Implicit: '10' + 5 = " . $sum . " (type: " . gettype($sum) . ")<br>";
// Explicit conversion (casting)
$str = "123.45 apples";
$num = (int)$str; // becomes 123
echo "Explicit cast (int) '123.45 apples' => " . $num . " (type: " . gettype($num) . ")<br>";
// Another example: (float), (string), (bool), (array)
$f = (float)"3.14"; echo "(float)'3.14' => " . $f . "<br>";
$t = (bool)0; echo "(bool)0 => " . ($t ? 'true':'false') . "<br>";
?>