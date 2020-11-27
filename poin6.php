<?php
$cari = "fjrstp";
$set = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

$arrayCari = str_split($cari);
$arraySet = [];

foreach($set as $keys){
    foreach($keys as $key){
        array_push($arraySet, $key);
    }
}

$status = true;
foreach($arrayCari as $key){
    if(in_array($key, $arraySet) == true){
        if($status == true){
            $status = true;
        } else {
            $status = false;
        }
    } else {
        $status = false;
    }
}

echo 'Cari : ' . $cari . '<br>';
echo '$set = [<br>';
echo "['f', 'g', 'h', 'i'],<br>";
echo "['j', 'k', 'p', 'q'],<br>";
echo "['r', 's', 't', 'u']<br>";
echo "];<br>";

if ($status) {
    echo 'hasil : true';
} else {
    echo 'hasil : false';
}
?>
