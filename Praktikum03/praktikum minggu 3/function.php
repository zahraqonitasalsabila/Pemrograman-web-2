<?php 

// buat function
function hitungUmur($thn_lahir) {
    //code fungsi
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // tampilin umur
    return $umur;
}

// panggil fungsi 
echo " Umur saya adalah " . hitungUmur(2003);

?>