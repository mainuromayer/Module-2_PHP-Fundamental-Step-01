<?php
// Logical Operator -
    $n = 13;
    if ($n % 2 == 0){
        echo "$n is Even Number";
    }
    else {
        echo "$n is Odd Number";
    }
    echo "\n";


    // --------------------
    if ($n > 10){
        echo "$n is gretter then 10";
    }
    echo "\n";
    
    
    // --------------------
    $m = 12;
    $n = 13;
    if($m == $n){
        echo "M is equal to N";
    }
    elseif($m != $n) {
        echo "M is not equal to N";
    }
    echo "\n";

/* ============================================================= */

/**
 * == -> equal to [ দুইটা নম্বর সমান কিনা সেটা চেক করার জন্য ]
 * != -> not equal to [ দুইটা নম্বর সমান না কিনা সেটা চেক করার জন্য ]
 * > -> gretter then
 * < -> less then / smaller then
 * >= -> gretter then equal to
 * <= -> less then equal to / smaller then equal to
 */


/* ============================================================= */
$alam = 100;
$rohim = 1100;

if($alam >= $rohim){
    echo "Alam has same or more money than Rahim";
}elseif($alam > $rohim){
    echo "Alam has more amount of money as Rahim";
}elseif($alam < $rohim){
    echo "Alam has less amount of money as Rahim";
}elseif($alam == $rohim){
    echo "Alam and Rahim has same amount of money";
}

echo "\n";


/* ============================================================= */
// এখন আমরে চেক করব, কোন একজন এর বয়স ১৩ থেকে ১৯ এর মধ্যে কিনা -
// && -> And

    $age = 14;
    if ($age >= 13 && $age <= 19){
        echo "This person is a teenager";
    }else{
        echo "This person is not teenager";
    }
    echo "\n";



/* ============================================================= */
// == দিয়ে চেক করার সঠিক নিয়ম -

    $food = "apple";
    if ($food = "tuna") {
        echo "It is vitamin D";
    }else{
        echo "We don't know if it contains vitamin D";
    }
    echo "\n";

    # Note : This is not true.

// -----------------------
    $food = "apple";
    if ("tuna" == $food) {
        echo "It is vitamin D";
    }else{
        echo "We don't know if it contains vitamin D";
    }
    echo "\n";

    # Note : This is true. 

// -----------------------



/* ============================================================= */
// || -> or
$food = "salmon";
if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has vitamin D";
}elseif ("apple" == $food){
    echo "Apple doesn't contain vitamin D";
}else{
    echo "We don't know if {$food} contains vitamin D";
}
echo "\n";



