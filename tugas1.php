<?php

function pembagian($angka1, $angka2)
{
   $a= $angka1;
   $b= $angka2;
   $pembagian= $a/$b;
   return $pembagian;
}

$pembagian=pembagian(20, 5);
echo "pembagian 20 dibagi 5 adalah $pembagian\n";
$pembagian=pembagian(64, 8);
echo "pembagian 64 dibagi 8 adalah $pembagian\n";
$pembagian=pembagian(100, 10);
echo "pembagian 100 dibagi 10 adalah $pembagian\n";
?>