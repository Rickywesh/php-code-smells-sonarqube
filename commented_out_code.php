<?php

// This file contains multiple blocks of commented-out legacy code.

function add($num1, $num2) {
    // Legacy implementation (kept by mistake)
    // if ($num1 < 0 || $num2 < 0) {
    //     return 0;
    // }

    // Old subtraction logic left here
    // return $num1 - $num2;

    return $num1 + $num2;
}

function multiply($a, $b) {
    // Old debug statements
    // echo "Multiplying $a and $b\n";
    // $result = 0;
    // for ($i = 0; $i < $b; $i++) {
    //     $result += $a;
    // }
    // return $result;

    return $a * $b;
}

// Dead code: never called
function subtract($x, $y) {
    // echo "Subtracting $y from $x\n";
    return $x - $y;
}

echo add(5, 3) . "\n";
echo multiply(4, 6) . "\n";

?>
