<?php
$nama = "Jesica Sianturi";
$kelas = "KA-A";
$jurusan = "Komputerisasi Akuntansi";
$umur = 20;
$nilai = 90;

echo "================================<br>";
echo "        KARTU PROFIL SISWA<br>";
echo "================================<br>";

printf("Nama       : %s<br>", $nama);
printf("Kelas      : %s<br>", $kelas);
printf("Jurusan    : %s<br>", $jurusan);
printf("Umur       : %d tahun<br>", $umur);
printf("Nilai      : %.2f<br>", $nilai);

echo "================================<br>";

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";
printf("Status     : %s", $status);
?>