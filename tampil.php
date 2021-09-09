<?php
    $nama = $_POST["nama"];
    $jk = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $tempatLahir = $_POST["tempat_lahir"];
    $tanggalLahir = $_POST["tanggal_lahir"];
    $hobi = $_POST["hobi"];
    $citaCita = $_POST["cita_cita"];
    $usia = $_POST["usia"];
    $asalSekolah = $_POST["asal_sekolah"];

    echo "<p>Nama Lengkap   : ".$nama."</p>";
    echo "<p>Jenis Kelamin  : ".$jk."</p>";
    echo "<p>Agama          : ".$agama."</p>";
    echo "<p>Tempat Lahir   : ".$tempatLahir."</p>";
    echo "<p>Tanggal Lahir  : ".$tanggalLahir."</p>";
    echo "<p>Hobi           : ".$hobi."</p>";
    echo "<p>Cita-Cita      : ".$citaCita."</p>";
    echo "<p>Usia           : ".$usia."</p>";
    echo "<p>Asal Sekolah   : ".$asalSekolah."</p>";
?>