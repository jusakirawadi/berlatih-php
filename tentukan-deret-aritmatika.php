<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini

    // selisih array1 dan array0 menjadi acuan interval deret arimateka
    $interval = $arr[1] - $arr[0];
    $hasil = TRUE;
    for ($ke=1 ; $ke<count($arr)-1; $ke++) {
        if ( $interval <> ($arr[$ke+1]-$arr[$ke])) {
            $hasil = FALSE;
            break;
        }
    }
    //return $hasil;
    return ($hasil == TRUE) ? "true <br>" : "false <br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>