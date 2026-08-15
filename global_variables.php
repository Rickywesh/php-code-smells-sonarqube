<?php

// This file intentionally overuses global variables.

$globalCounter = 0;
$globalLog = [];
$globalStatus = "OK";

function incrementCounter() {
    global $globalCounter, $globalLog, $globalStatus;

    $globalCounter++;

    if ($globalCounter > 5) {
        $globalStatus = "LIMIT_REACHED"; // global state change
    }

    $globalLog[] = "Counter incremented to " . $globalCounter;
}

function resetCounterIfNeeded() {
    global $globalCounter, $globalLog, $globalStatus;

    // Magic number 10
    if ($globalCounter >= 10) {
        $globalLog[] = "Resetting counter from " . $globalCounter;
        $globalCounter = 0;
        $globalStatus = "RESET";
    }
}

// Commented-out alternative approach using parameters instead of globals
// function incrementCounterProperly($counter) {
//     return $counter + 1;
// }

incrementCounter();
incrementCounter();
incrementCounter();
incrementCounter();
incrementCounter();
incrementCounter(); // should change status

resetCounterIfNeeded();

echo "Global Counter: " . $globalCounter . "\n";
echo "Global Status: " . $globalStatus . "\n";

echo "Log entries:\n";
foreach ($globalLog as $entry) {
    echo $entry . "\n";
}

?>
