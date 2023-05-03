<?php
// Ternary Operator -

$n = 12;

if (12 == $n) {
    echo "Twelve";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

$numberInWord = (12 == $n) ? "Twelve" : "A Number";
echo $numberInWord;

echo "\n";

// -----------------------------------------

$n = 13;

if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "\n";

$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo $result;

echo "\n";




/* ================================================================ */
// Nosted Ternary Operator -

$n = 10;

if (12 == $n) {
    echo "Twelve";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

$numberInWord = (12 == $n) ? ("Twelve") : ((10 == $n) ? ("Ten") : ("A Number"));
echo $numberInWord;
