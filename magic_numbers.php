<?php

// This file demonstrates multiple magic numbers and inconsistent time logic.

function calculateAge($birthYear) {
    $currentYear = 2023; // Magic number
    $legalAdultAge = 18; // Magic number

    $age = $currentYear - $birthYear;

    if ($age >= $legalAdultAge) {
        echo "User is an adult.\n";
    } else {
        echo "User is a minor.\n";
    }

    return $age;
}

// Additional magic numbers
function isRetirementAge($age) {
    if ($age >= 65) { // Magic number
        return true;
    }
    return false;
}

// Commented-out alternative implementation
// function calculateAgeUsingSystemTime($birthYear) {
//     return date('Y') - $birthYear;
// }

$age = calculateAge(1990);
echo "Age: " . $age . "\n";

if (isRetirementAge($age)) {
    echo "Retirement age reached.\n";
} else {
    echo "Not yet at retirement age.\n";
}

?>
