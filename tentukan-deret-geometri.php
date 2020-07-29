<?php
function tentukan_deret_geometri($arr) {
// kode di sini

    // pembagian array1 dan array0 menjadi acuan interval deret geometri berikutnya
    $interval = $arr[1] / $arr[0];
    $hasil = TRUE;
    for ($ke=1 ; $ke<count($arr)-1; $ke++) {
        if ( $interval <> ($arr[$ke+1]/$arr[$ke])) {
            $hasil = FALSE;
            break;
        }
    }
    //return $hasil;
    return ($hasil == TRUE) ? "true <br>" : "false <br>";
}

//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>