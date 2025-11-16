<?php
// assignment12_second_most_freq.php
echo "<h2>Second Most Frequent Element (without using built-in freq functions)</h2>";
// simple form to input array elements separated by commas
if (\$_SERVER['REQUEST_METHOD'] === 'POST') {
    \$input = trim(\$_POST['elements']);
    \$parts = array_map('trim', explode(',', \$input));
    // count frequencies manually using associative array (allowed: basic arrays)
    \$freq = [];
    foreach (\$parts as \$p) {
        if (\$p === '') continue;
        if (!isset(\$freq[\$p])) \$freq[\$p] = 0;
        \$freq[\$p] += 1;
    }
    // find first and second most frequent without using built-ins like arsort
    \$firstKey = null; \$firstVal = -1;
    foreach (\$freq as \$k => \$v) {
        if (\$v > \$firstVal) {
            \$firstVal = \$v; \$firstKey = \$k;
        }
    }
    \$secondKey = null; \$secondVal = -1;
    foreach (\$freq as \$k => \$v) {
        if (\$k === \$firstKey) continue;
        if (\$v > \$secondVal) {
            \$secondVal = \$v; \$secondKey = \$k;
        }
    }
    echo "Frequencies: "; print_r(\$freq); echo "<br>";
    if (\$secondKey !== null) {
        echo "Second most frequent: \$secondKey (count = \$secondVal)<br>";
    } else {
        echo "No second most frequent (not enough distinct elements).<br>";
    }
} else {
    echo '<form method="post">Enter elements separated by commas:<br><input name="elements" size="60"><br><input type="submit" value="Find"></form>';
}
?>