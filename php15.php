<?php
// Swich Case -

$n = 12;

$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is an Even Number\n";
        break;
    default:
        echo "{$n} is an Odd Number\n";
}

/* 
Note : এখানে If Else এর ক্ষেত্রে কন্ডিশন সত্যি হলে পরের অপশন গুলো যেমন চেক করে না, Switch case এ এখানে সবগুলো কন্ডিশন চেক করে। এজন্য কন্ডিশন সত্যি হলে পরের অপশন গুলোতে যেন না যায় এজন্য প্রতিটা কন্ডিশন এর পর break দেওয়া লাগে।
*/

/* =================================================================== */


$color = "red";

switch($color){
/*  
    case "red":
        echo "{$color} is my favourite color";
        break;
    case "green":
        echo "{$color} is my favourite color";
        break;
 */

    case "red":
    case "green":
        echo ucwords($color) . " is my favourite color";
        break;
    case "blue":
        echo "{$color} is not my favourite color";
        break;
    default:
        echo "This color is ok";
}

echo "\n";


// -------------------

if ("red" == $color || "green" == $color){
    echo ucwords($color) . " is my favourite color";
}elseif("blue" == $color){
    echo ucwords($color) . " is not my favourite color";
}else{
    echo "This color is ok";
}
