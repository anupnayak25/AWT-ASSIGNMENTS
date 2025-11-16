<?php
// assignment10_reverse_sum.php
echo "<h2>Reverse Number & Sum of Digits</h2>";
if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
    \$num = trim(\$_POST['number']);
    if (!is_numeric(\$num)) {
        echo "Please enter a valid integer.<br>";
    } else {
        \$n = (int)\$num;
        \$original = \$n;
        \$rev = 0;
        \$sum = 0;
        while (\$n > 0) {
            \$d = \$n % 10;
            \$rev = \$rev * 10 + \$d;
            \$sum += \$d;
            \$n = intdiv(\$n, 10);
        }
        echo "Original: \$original <br>";
        echo "Reversed: \$rev <br>";
        echo "Sum of digits: \$sum <br>";
    }
} else {
    echo '<form method="post">
            Enter integer: <input name="number">
            <input type="submit" value="Compute">
          </form>';
}
?>