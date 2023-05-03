<?php
// sprintf -
/* sprintf ডাটা return এর জন্য ব্যবহার করা হয়, এটা সরাসরি আউটপুট দেয় না, কোন ভেরিয়েবলের মাধ্যমে value return করে এর আউটপুট রিটার্ন করা যাবে/ */
$fname = "Isaac";
$lname = "Newton";

$result = sprintf("His name is %s %s",$fname,$lname);
echo $result;
