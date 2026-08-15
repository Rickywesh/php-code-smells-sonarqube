<?php

// This file intentionally duplicates logic rather than using a common function.
function calculateRectangleArea($width, $height) {
// Magic number 2 for demo: pretend we log twice for some reason
$area = $width * $height;
echo &quot;Rectangle area is &quot; . $area . &quot;\n&quot;;
echo &quot;Rectangle width: &quot; . $width . &quot;, height: &quot; . $height . &quot;\n&quot;;
return $area;
}
function calculateTriangleArea($base, $height) {
// Duplicate logging logic instead of using a shared helper function
$area = 0.5 * $base * $height;
echo &quot;Triangle area is &quot; . $area . &quot;\n&quot;;
echo &quot;Triangle base: &quot; . $base . &quot;, height: &quot; . $height . &quot;\n&quot;;
return $area;
}
function calculateSquareArea($side) {
// Duplicate logging again
$area = $side * $side;
echo &quot;Square area is &quot; . $area . &quot;\n&quot;;
echo &quot;Square side: &quot; . $side . &quot;\n&quot;;
echo &quot;Square perimeter: &quot; . (4 * $side) . &quot;\n&quot;; // more logic repeated pattern
return $area;
}
// Dead code: function never used
function calculateCircleArea($radius) {
$pi = 3.14159; // Magic number
$area = $pi * $radius * $radius;
echo &quot;Circle area is &quot; . $area . &quot;\n&quot;;
return $area;
}
calculateRectangleArea(10, 20);
calculateTriangleArea(10, 15);
calculateSquareArea(5);
?>
