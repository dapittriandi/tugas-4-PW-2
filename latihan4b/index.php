<?php 
$negaraAsean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

echo "<h1>Daftar Negara Asean awal</h1><br>";
foreach ($negaraAsean as $negaraAwal) {
    echo "<li>$negaraAwal</li>";
}

echo "<br><br>";
// print_r($negaraAsean) ;


echo "<h1>Daftar Negara Asean baru</h1><br>";
$negaraAsean[5] = "Laos";
$negaraAsean[6] = "Filipina";
$negaraAsean[7] = "Myanmar";
foreach ($negaraAsean as $negaraBaru) {
    echo "<li>$negaraBaru</li>";
}
// print_r($negaraAsean);
?>