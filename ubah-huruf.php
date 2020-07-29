<?php
function ubah_huruf($string){
//kode di sini
    $hasil = '';
    for ($ke=0; $ke<strlen($string); $ke++) {
        if ($string[$ke] == 'z') {
            $hasil = $hasil . 'a';
        }
        else {
            $hasil = $hasil . chr(ord($string[$ke])+1);
        }
    }
    return $hasil . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>