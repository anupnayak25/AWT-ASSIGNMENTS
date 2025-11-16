<?php
// assignment8_pattern_matching.php
echo "<h2>Pattern Matching Demo</h2>";
\$text = "Contact: alice@example.com, bob@domain.org; Visit: https://example.com/page";

// preg_match
if (preg_match('/[\w.-]+@[\w.-]+\.\w+/', \$text, \$m)) {
    echo "Found email (preg_match): " . \$m[0] . "<br>";
}

// preg_match_all
preg_match_all('/https?:\/\/[^\s,;]+/', \$text, \$urls);
echo "Found URLs (preg_match_all): "; print_r(\$urls[0]); echo "<br>";

// preg_replace
\$masked = preg_replace('/([\w.-]+)@([\w.-]+)\.\w+/', '***@***.***', \$text);
echo "Masked emails (preg_replace): " . \$masked . "<br>";

// preg_split
\$parts = preg_split('/[;,]+\s*/', \$text);
echo "preg_split by , or ; => "; print_r(\$parts); echo "<br>";
?>