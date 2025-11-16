<?php
// assignment3_string_functions.php
echo "<h2>String Functions Demo</h2>";
$s = "  Hello, World! PHP strings.  ";
echo "Original: '" . $s . "'<br>";
echo "strlen(s) = " . strlen($s) . "<br>";
echo "trim: '" . trim($s) . "'<br>";
echo "strtoupper: '" . strtoupper($s) . "'<br>";
echo "strtolower: '" . strtolower($s) . "'<br>";
echo "strpos of 'PHP': " . strpos($s, "PHP") . "<br>";
echo "substr (7,5): '" . substr($s,7,5) . "'<br>";
echo "str_replace 'PHP'->'server-side': '" . str_replace('PHP','server-side',$s) . "'<br>";
$words = explode(' ', trim($s));
echo "explode -> number of words: " . count($words) . "<br>";
echo "implode with '-': '" . implode('-', $words) . "'<br>";
?>