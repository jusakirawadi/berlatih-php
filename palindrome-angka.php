<?php

// fungsi untuk memeriksa apakah angka ini palindrome
function periksa($angka) {
  $hasil = "";
  for ($ke=0 ; $ke<strlen($angka) ; $ke++) {
    $hasil = $angka[$ke] . $hasil;
  }
  return ($angka == $hasil);
}

function palindrome_angka($angka) {
  // tulis kode di sini
  $hitung = $angka;
  do {
  } while (periksa((string)++$hitung) == 0);

  echo "palindrome_angka($angka) = $hitung <br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>