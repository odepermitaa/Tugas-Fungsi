<?php

function pertambahan ($a,$b) {
    $pertambahan = $a + $b;
    return $pertambahan;
};

function hitung($n, $h= "hallo") {
    echo "$h\n";
    echo "\n";
    echo "Kenalin Nama Aku $n\n";
    echo "\n";
    echo "Aku membeli mangga\n";
    echo "\n";
    echo "Dan ibuku juga membeli mangga\n";
    echo "\n";
    echo "mangga yang aku beli ditambah dengan mangga ibu jumlahnya : ".pertambahan(6, 4)." buah";

}
echo hitung ("Bayu");


?>