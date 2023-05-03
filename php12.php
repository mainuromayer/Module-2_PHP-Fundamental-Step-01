<?php
/** Leap Year বের করার নিয়ম - 
* 1. divisible by 4 ? 2000
* 2. divisible by 100 ?
* 3. divisible by 400 ?
* নোট ঃ যে সংখ্যা ৪, ১০০ এবং ৪০০ দিয়ে ভাগ যায় সেটা Leap Year হবে 
*/

# This is readable but not smart
$year = 2000;
if($year % 4  == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year.";
}elseif($year % 4  == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year.";
}elseif($year % 4  == 0) {
    echo "{$year} is a leap year.";
}else{
    echo "{$year} is not a leap year.";
}

echo "\n";

/* ============================================================== */

if (true && false){
    echo "true_false\n";    //  not work -> condition false
}

if(false && false){
    echo "false_false\n";    //  not work -> condition false
}

if(true && true){
    echo "true_true\n";    //  work -> condition true
}

// ---------------

if (true || false){
    echo "true_false\n";    //  work -> condition true
}

if (false || false){
    echo "false_false\n";    //  not work -> condition false
}

if(true || true){
    echo "true_true\n";    //  work -> condition true
}

/* ============================================================== */

# This is not readable but smart
$year = 2000;
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
/* 

Note :
// year = 2000
if(true && (false || true)){}
if(true && (     true    )){}
if(         true          ){}

// year = 2003
if(false && (false || true)){}
if(false && (     true    )){}
if(         false          ){}

// year = 1900
if(true && (false || false)){}
if(true && (     false    )){}
if(         false          ){}

// year = 2012
if(true && (true || true)){}
if(true && (     true    )){}
if(         true          ){}


 */