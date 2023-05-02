<?php
// String -
$name = "Neptune";
var_dump($name);

// Integer -
$age = 12;
var_dump($age);

// --------------------------------------
$name1 = "Mainur";
$name2 = "Rahaman";
var_dump($name1, $name2); # double data check
// --------------------------------------

/** Types of Data Type - [Primitive Data Type]
 * String           -> string           [ '...' / "..." ]
 * Integer          -> int              [ 0 ]
 * Double / Float   -> float            [ 0.00... ]
 * Boolean          -> bool             [ true / false ]
 * Null
 * Arrey
 * Object
 * Resource
 */

// --------------------------------------
// Integer -
$age = 12.433;
var_dump($age);

// Boolean -
$result = true;
var_dump($result);

/* ============================================================= */

$name = "Earth";
echo "We're living on {$name}"; # [ "" into use variable with switable ]
echo "\n";

// --------------------------
echo 'We\'re living on' . $name; # [scape_sequence]
echo "\n";
// --------------------------

// All capital_letter in variable -
$uname = strtoupper($name);
echo "We're living on {$uname}";
echo "\n";

// ---------------------------
// Using Printf -

printf("We are living on %s", $name);
echo "\n";

/* ================================================================== */

$fname = "Isaac";
$lname = "Newton";

printf("His %s name is %s %s", "Full", $fname, $lname);

echo "\n";
printf("His %s name is %s", "Full", $fname, $lname); # when parameter small --- this is work
echo "\n";

// printf("His %s name is %s %s %s", "Full", $fname, $lname);    # but when parameter many --- this is not work
echo "\n";

/* ================================================================== */

echo "My
Name
is
Mainur Rahaman,\n
How are you?";

echo "\n\n";

echo "His
Name
is
{$fname} {$lname},\n
How are you?";
