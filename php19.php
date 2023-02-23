<?php
$n = 13;
if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

// -----------------------------------
echo PHP_EOL;
// এই জিনিসটা echo "\n"; এর কাজ করে, এটা PHP এর built in constant

// -----------------------------------
if ($n % 2 == 0):
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Text....";
elseif (true):
    # code...
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some Text....";
endif;

echo PHP_EOL;

// -----------------------------------

// Switch Case Alternative option -
/*
Note :
সাধারণত control structure গুলোতে এভাবে করা যায় ।
এগুলো হচ্ছে control structure
control structure গুলো হল - যেমন
if else, loop, break, continue
 */

switch ($n % 2):
case 0:
    echo "Even Number";
    break;
default:
    echo "Odd Number";
    endswitch;
