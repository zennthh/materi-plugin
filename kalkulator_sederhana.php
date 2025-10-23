<?php

function kalkulator() {
    echo "\n=== Kalkulator Sederhana ===\n";
    
    $angka1 = (float) readline("Masukan angka ke 1:");
    $operasi = readline("Pilih operasi: (+, -, *, /):");
    $angka2 = (float) readline("Masukan angka ke 2:");

    switch ($operasi) {
        case "+":
            $hasil = $angka1 + $angka2;
            break;
        case "-":
            $hasil = $angka1 - $angka2;
            break;
        case "*":
            $hasil = $angka1 * $angka2;
            break;
        case "/":
        if ($angka2 == 0){
            $hasil = "fatal eror";
        } else{
            $hasil = $angka1 / $angka2;
        }
            break;
        default:
            $hasil = "Operasi tidak valdi";
    }
    
    echo "Hasil nya: $hasil\n";

    $lanjut = strtolower(readline("gas lagi enggak? (y/n):"));
    if ($lanjut === "y") {
        kalkulator();
    } else {
        echo "Thankyou dude\n";
        exit;
    }
}
kalkulator();
?>