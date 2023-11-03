<?php 
$negaraAsean = [
    "Indonesia" => "D.K.I Jakarta", 
    "Singapura" => "Singapura", 
    "Malaysia" => "kuala lumpur", 
    "Brunei" => "BandarSeriBegawan", 
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Napydaw"];



echo "<h1>Daftar Negara Asean dan Ibukota</h1><br>";
foreach ($negaraAsean as $negaraBaru => $ibukota) {
    echo "<li>$negaraBaru : $ibukota</li>";
}
// print_r($negaraAsean);
?>