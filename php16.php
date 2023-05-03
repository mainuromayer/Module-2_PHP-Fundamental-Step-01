<?php
// Nosted Swich Case -

$n = -13;
$r = $n % 2;

switch($r){
    case 0:
        switch($n){
            case ($n > 0):
                echo "$n is positive even number \n";
                break;
            case ($n < 0):
                echo "$n is negitive even number \n";
                break;
        }
        break;

    default:
        switch($n){
            case ($n > 0):
                echo "$n is positive odd number \n";
                break;
            case ($n < 0):
                echo "$n is negitive odd number \n";
                break;
        }
}




// -------------------------------------------
switch(true){
    case(0 == $r && $n > 0):
        echo "$n is a positive even number";
        break;
    case(1 == $r && $n > 0):
        echo "$n is a positive odd number";
        break;
    case(0 == $r && $n < 0):
        echo "$n is a negative even number";
        break;
    case(-1 == $r && $n < 0):
        echo "$n is a negative odd number";
        break;
}