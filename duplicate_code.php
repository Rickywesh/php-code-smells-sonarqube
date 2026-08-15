<?php

// This file intentionally duplicates logic rather than using a common function.

function calculateRectangleArea($width, $height) {
    // Magic number 2 for demo: pretend we log twice for some reason
    $area = $width * $height;
    echo "Rectangle area is " . $area . "\n";
    echo "Rectangle width: " . $width . ", height: " . $height . "\n";
    return $area;
}

function calculateTriangleArea($base, $height) {
    // Duplicate logging logic instead of using a shared helper function
    $area = 0.5 * $base * $height;
    echo "Triangle area is " . $area . "\n";
    echo "Triangle base: " . $base . ", height: " . $height . "\n";
    return $area;
}

function calculateSquareArea($side) {
    // Duplicate logging again
    $area = $side * $side;
    echo "Square area is " . $area . "\n";
    echo "Square side: " . $side . "\n";
    echo "Square perimeter: " . (4 * $side) . "\n"; // more logic repeated pattern
    return $area;
}

// Dead code: function never used
function calculateCircleArea($radius) {
    $pi = 3.14159; // Magic number
    $area = $pi * $radius * $radius;
    echo "Circle area is " . $area . "\n";
    return $area;
}

calculateRectangleArea(10, 20);
calculateTriangleArea(10, 15);
calculateSquareArea(5);

?>
