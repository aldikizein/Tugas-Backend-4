<?php

function perhitunganSederhana(int $pertama, int $kedua){
$hasil = $pertama*$kedua;

if ($hasil%3 == 0){
    echo "Habis dibagi 3";
}else {
    echo "Tidak habis dibagi 3";
}
return $hasil;
}

$angkatan = 2021;
$semester = 1;

perhitunganSederhana($angkatan, $semester);
