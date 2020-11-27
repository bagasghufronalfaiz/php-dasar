<?php
function lowercount($input)
{
    $split = str_split($input);
    
    $count = 0;
    foreach ($split as $key) {
        if (ctype_lower($key)) {
            $count++;
        }
    }
    
    // Output
    echo 'Input : ' . $input . '<br>';
    
    printf("Output :  “%s” mengandung %s buah huruf kecil.", $input, $count);
}

$input = "TranSISI";
lowercount($input);
?>
