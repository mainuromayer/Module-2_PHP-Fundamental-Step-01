<?php

$data = array(
    "key1"  => "value1",
    "key2"  => "value2",
    "key43" => "value3",
);

function say( $data ) {
    printf( "Current value = %s\n", array( $data ) );
}

for ( $i = 0; $i < 10; $i++ ) {
    say( $i );
}

// Formatter

/* 

  "phpfmt.exclude": [     //exclude : ami eta chai na
    "AllmanStyleBraces"
  ],
  "phpfmt.passes": [     //passes : ami eta chai
    "AlignDoubleArrow",    // this is for alignment
    "SpaceAroundParentheses",   // bracket ar bitor -> content ar age pore space hove
    // "ShortArray",
    "LongArray",
    // "SpaceAroundControlStructures",
  ]


*/