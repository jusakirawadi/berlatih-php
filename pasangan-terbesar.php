<?php
function pasangan_terbesar($angka){
// kode di sini
    $abjad = (string)$angka;
    $terbesar = 0;

    // untuk panjang inputan kurang dari 2 digit, dianggap terbesar
    if ( strlen($abjad)<=2) {
        $terbesar = (int)$abjad;
    }
    else {
        for ($ke = 0; $ke<strlen($abjad)-1 ; $ke++) {
            $baca = (int)substr($abjad,$ke,2);
            IF ($baca>$terbesar) {
                $terbesar = $baca;
            }
        }
    }

    return $terbesar . '<br>';
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>