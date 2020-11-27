<?php
function enkripsi($input){
    $split = str_split($input);
    $panjang = count($split);

    echo "Input : " . $input;
    echo "<br>";
    echo "Output : ";

    for ($i = 1; $i <= $panjang; $i++) {
        if ($i % 2 == 0) {
            $char = ord($split[$i - 1]) - $i;
            echo chr($char);
        } else {
            $char = ord($split[$i - 1]) + $i;
            echo chr($char);
        }
    }
}

$input = 'DFHKNQ';
enkripsi($input);
?>
