<?php
/** Number System
 * Decimal Base 10
 * Binary Base 2 [0, 1]
 * Octal Base 8 [0-7] । এখানে ৮, ৯ কাউন্ট করা হয় না ।
 * Hexa-Decimal Base 16 [0-9 and then A, B, C, D, E, F]
 */

// ------------------------------------------------------------

//  Octal, Hexa-Decimal convert with Decimal number
 $n = 123;
 $o = 014;
 $h = 0x2B;

 printf("This Decimal Number is %d, \nOctal Number is %d \nand Hexa-Decimal number is %d",$n, $o, $h);

 /* 
 Decimal   - 0 1 2 3 4 5 6 7  8  9 10 11 12 13 14 15 16 17 18 19 20 ...
 Octal     - 0 1 2 3 4 5 6 7 ❌ ❌ 8  9 10 11 12 13 14 15 ❌ ❌ 16 ...

 Note : Octal Number Not supported 8, 9
 */
echo "\n";

// ------------------------------------------------------------

// Decimal to Binary convert -

printf("The binary equivalent of %d is %b",1212, 1212);
echo "\n";

// ------------------------------------------------------------

// Decimal to Hexa-Decimal convert -

printf("The hexadecimal equivalent of %d is %x",1212, 1212);
echo "\n";
printf("The hexadecimal equivalent of %d is %X",1212, 1212);
echo "\n";
// ------------------------------------------------------------

// Decimal to Octal convert -

printf("The octal equivalent of %d is %o",1212, 1212);
echo "\n";

printf("Octal %o = %d",0200000,0200000);
