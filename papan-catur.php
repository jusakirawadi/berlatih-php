<?php

function papan_catur($angka) {
// tulis kode di sini
    $hasil = "";   
    for ($x=1 ; $x<=$angka ; $x++) {
        $row = "";
        for ($y=1 ; $y<=$angka ; $y++) {
            if ($x%2 == 0) {
                $row = $row . "_#";
            }
            else {
                $row = $row . "#_";
            }
        }
        $hasil = $hasil . substr($row,0,(2*$angka)-1) . "<br>";
    }
    return $hasil . "<br>";
}


// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>