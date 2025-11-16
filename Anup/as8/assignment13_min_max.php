<?php
// assignment13_min_max.php
echo "<h2>Find Max and Min in Array (without using built-ins)</h2>";
if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
    \$input = trim(\$_POST['elements']);
    \$parts = array_map('trim', explode(',', \$input));
    // convert to numbers if possible
    \$nums = [];
    foreach (\$parts as \$p) {
        if (\$p === '') continue;
        \$nums[] = (float)\$p;
    }
    if (count(\$nums) === 0) {
        echo "Provide some numeric elements.<br>";
    } else {
        \$min = \$nums[0]; \$max = \$nums[0];
        foreach (\$nums as \$n) {
            if (\$n < \$min) \$min = \$n;
            if (\$n > \$max) \$max = \$n;
        }
        echo "Array: "; print_r(\$nums); echo "<br>";
        echo "Minimum = \$min <br>Maximum = \$max <br>";
    }
} else {
    echo '<form method="post">Enter numeric elements separated by commas:<br><input name="elements" size="60"><br><input type="submit" value="Compute"></form>';
}
?>