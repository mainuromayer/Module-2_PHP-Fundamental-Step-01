<?php

/* ========================================================= */

$number = 12 + 13;  # here 12, 13 is called operand. and symbol called operator

/* ========================================================= */

// How can 1 value store with multiple variable -
$x = $y = 3;
echo "x value:". $x ." and y value:" . $y;
echo "\n";

/* output -
    $x = 3
    $y = 3
*/
// ---------------

$a = 7;
$x = $y = $a;
echo $x, "\n", $y;
echo "\n";


/* output -
    $x = $a     => $x = 7
    $y = $a     => $y = 7
*/

/* ========================================================= */
// Post Increment -
    $n = 8;
    $m = $n++;
    echo "m = $m & n = $n";

    /* output - How it work
        $m = $n++   -> এখানে আগে n এর মানটা m কাছে চলে যাবে, তারপর  n এর সাথে ১ যোগ করবে।

        $m = $n;            8   
        $n = $n + 1         8 + 1 = 9       
    */

echo "\n";


// Pre Increment -
    $n = 7;
    $m = ++$n;
    echo "n = $n & m = $m";

    /* output - How it work
        $m = ++$n;-> এখানে আগে n এর সাথে ১ যোগ করবে।  তারপর n এর মানটা m এর কাছে যাবে

        $n = $n + 1;        7 + 1 = 8
        $m = $n;            8
    */

