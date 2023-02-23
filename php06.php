<?php
// +    -   *   /   %   = Arithmetic Operator
// +=  -=  *=  /=  %=   = Assignment operator


// Addition -
    $number = 12;
    // $number = $number + 13;
    $number += 13;
    echo "Addition ". $number;

    echo "\n";

// Subtraction -
    $number = 12;
    $number -= 5;
    echo "Subtraction ". $number;

    echo "\n";

    $number2 = $number - 20;
    echo $number,"\n", $number2;
    
    echo "\n";

// Multipication -
    $number = 12;
    $number *= 5;
    echo "Multipication ". $number;

    echo "\n";

    $number = 12 * 20;
    echo $number;

    echo "\n";

// Divition -
    $number = 12;
    $number /= 2;
    echo "Divition ". $number;

    echo "\n";

    $number = 12 / 2;
    echo $number;

    echo "\n";

/* ========================================================= */

/** Slash -
 * Forword slash    -   /
 * Backword slash   -   \
 */

/* ========================================================= */


// Modulus -
    $number = 12 % 2;
    echo "Modulas ". $number;

    echo "\n";


 $number = 13 - 5 * 5;
 $number = (13 - 5) * 5;
 echo $number; 
 
 echo "\n";

 /** Rules : BODMAS -
 * B -> Bracket           	( ), { }, [ ] 
 * O -> Order               Square roots, indices, exponents and powers
 * D -> Divition            ÷, /
 * M -> Multipication       ×, *
 * A -> Addition            +
 * S -> Subscription        _
 */

//  ----------------------------------------

/* ========================================================= */

// Post Increment -
$number = 12;
// $number = $number + 1;  //output : same
// $number += 1;  //output : same
$number++;  //output : same
echo $number;

echo "\n";

// Post Decrement -
$number = 12;
// $number = $number - 1;  //output : same
// $number -= 1;  //output : same
$number--;  //output : same
echo $number;

echo "\n";


/* ========================================================= */


/** Increment/decrement Operators
 * ++$a ->	Pre-increment   ->	Increments $a by one, then returns $a.
 * $a++ ->	Post-increment  ->	Returns $a, then increments $a by one.
 * --$a ->	Pre-decrement   ->	Decrements $a by one, then returns $a.
 * $a-- ->	Post-decrement  -> 	Returns $a, then decrements $a by one.
 */