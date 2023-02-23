<?php

// Interesting issue with Switch Case -

$string = "8balls";

switch($string){
    case (string)"9balls":
        echo "Nine Balls";
        break;
    case (string)8:
        echo "8";
        break;
    case (string)"8balls":
        echo "Eight Balls";
        break;
}


/* 
Note : 
এই যায়গায় অনেক সময় ভুল উত্তর দেয়, তাই typecasting করে দিতে হবে

*/