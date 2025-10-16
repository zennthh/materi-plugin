<?php
//asosiative arrray = mengakses menggunakan key
$data_mahasiswa = [
    "nama" => "raihan",
    "nim"  => "25090032",
];
// echo $data_mahasiswa["nama"]."\n";
// echo $data_mahasiswa["nim"]."\n";
foreach($data_mahasiswa as $key => $value){
    echo "$key : $value"."\n";
}
?>