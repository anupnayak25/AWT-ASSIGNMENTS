<?php
// assignment6_sequential_access.php
echo "<h2>Sequential Access Demo</h2>";
$arr = ['a','b','c','d'];
echo "Using current/next/reset:<br>";
reset($arr);
while (($val = current($arr)) !== false) {
    echo current($arr) . " ";
    next($arr);
}
echo "<br>Using foreach:<br>";
foreach ($arr as $k => $v) {
    echo "$k:$v ";
}
?>