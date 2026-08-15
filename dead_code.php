<?php

// This file demonstrates several forms of dead code.

function sayHello() {
    echo "Hello, World!\n";
}

function unusedFunction() {
    echo "I am never used.\n";
}

function partiallyUsedFunction($flag) {
    if ($flag) {
        echo "Flag is true.\n";
        return;
        echo "This line is unreachable.\n"; // Unreachable statement
    } else {
        echo "Flag is false.\n";
    }
}

function complexUnusedLogic($value) {
    // Entire function is never called
    if ($value > 100) {
        echo "Large value.\n";
    } else {
        echo "Small value.\n";
    }
}

// Unused variable
$unusedVariable = 12345;

sayHello();
partiallyUsedFunction(true);

?>
