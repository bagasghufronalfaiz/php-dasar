<?php
function cari($array, $string){
    $arrayCari = str_split($string);
    $arraySet = [];

    foreach ($array as $keys) {
        foreach ($keys as $key) {
            array_push($arraySet, $key);
        }
    }

    $status = true;
    foreach ($arrayCari as $key) {
        if (in_array($key, $arraySet) == true) {
            if ($status == true) {
                $status = true;
            } else {
                $status = false;
            }
        } else {
            $status = false;
        }
    }

    echo 'Cari : ' . $string . '<br>';

    if ($status) {
        echo 'hasil : true';
    } else {
        echo 'hasil : false';
    }
}

$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];
cari($arr, 'fjrstp');
?>
