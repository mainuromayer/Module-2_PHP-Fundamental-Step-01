<?php
// variable ------

    $name = "Bangladesh";
    $age = 14;
    $question = "How are you?";

    $word = "age";
    echo $$word;



    // ----------------------
    echo "\n";   # \n -> means new line ✅
    // echo '\n';   # '' -> single colon doesn't work ❌


    // ----------------------
    // echo "Hello ".$name;    # . -> use for anything add
    echo "Hello $name";
    echo "\n";
    // echo 'Hello $name';   # '' -> single colon doesn't work
    echo "Hello {$name}";
    echo "\n";
    echo "\n";



    // ----------------------
    echo "Hello {$name}, {$question}";  # ✅ suitable
    echo "\n";
    echo "Hello ".$name." ".$question;  # ✅ but not suitable
    echo "\n";

    // ----------------------
    echo "Hello {$name}, {$question}\n";  # ✅ suitable
    echo "Hello ".$name." ".$question."\n"."something bla bla bla";  # ✅ but not suitable


    // ----------------------
    $task = 'Read';
    echo $task;
    echo "\n";

    $task = 'Write';
    echo $task;
    echo "\n";

    // দেখা যাচ্ছে যে পিএইচপির ভেরিয়েবল এর মান গুলো meutable না, এরা unmutable এদের মান চেঞ্জ করা যায়।

/* =============================================================== */

// constant ------
    define('PI', 3.14159);
    echo constant('PI'); # ✅ যদি constant ফাংশন কল করি তাহলে ''/"" দেওয়া লাগবে।
    echo PI; # ✅ যদি সরাসরি লেখি তাহলে কোন ''/"" দেওয়া লাগবে না।
    echo "\n";
    echo "Value of PI = ".PI;
    echo "\n";


    // ------------------------------
    $constant = 'constant';
    echo "Value of PI = {$constant('PI')}";

/* =============================================================== */

// Comment ------

    //              //-> single line comment
    /*  */          //-> multiple line comment
    #               //-> single line comment

    /**
     *              //-> multiple line comment -> point style
     */

