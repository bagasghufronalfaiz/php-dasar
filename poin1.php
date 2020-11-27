<?php 
$nilai = [72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86];

$panjang = count($nilai);
$total = array_sum($nilai);
$rata = $total / $panjang;
$max = 0;
$min = 200;
foreach ($nilai as $value ) {
    if ($value > $max) {
        $max = $value;
    }
    if ($value < $min) {
        $min = $value;
    }
}
echo '(1) nilai rata-rata  : ' . $rata . '<br>';
echo '(2) nilai tertinggi  : ' . $max . '<br>';
echo '(3) nilai terendah  : ' . $min;
?>