<?php
// assignment9_scope.php
echo "<h2>Scope Demo</h2>";
\$x = 10; // global
function testLocal() {
    \$x = 5; // local
    echo "Inside testLocal, x = \$x<br>";
}
function testGlobal() {
    global \$x;
    echo "Inside testGlobal, global x = \$x<br>";
}
function testStatic() {
    static \$count = 0;
    \$count++;
    echo "Static count = \$count<br>";
}

testLocal();
testGlobal();
testStatic();
testStatic();
?>