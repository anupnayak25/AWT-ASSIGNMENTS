<?php
// assignment11_primes.php
echo "<h2>First 20 Primes</h2>";
function is_prime(\$n) {
    if (\$n < 2) return false;
    if (\$n == 2) return true;
    if (\$n % 2 == 0) return false;
    for (\$i = 3; \$i * \$i <= \$n; \$i += 2) {
        if (\$n % \$i == 0) return false;
    }
    return true;
}
function first_n_primes(\$count) {
    \$primes = [];
    \$num = 2;
    while (count(\$primes) < \$count) {
        if (is_prime(\$num)) \$primes[] = \$num;
        \$num++;
    }
    return \$primes;
}
\$first20 = first_n_primes(20);
echo "First 20 primes: "; print_r(\$first20);
?>