<?php
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$telepon = $_POST['telepon'] ?? '';
$lokasi = $_POST['lokasi'] ?? '';
$pesan = $_POST['pesan'] ?? '';

if (!empty($email) && !empty($pesan)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $penerima = "farhanexcellentz17@gmail.com";
        $subjek = "Pesan dari : $nama <$email>";
        $body = "Nama: $nama\n\nEmail: $email\n\nTelepon: $telepon\n\nLokasi: $lokasi\n\nPesan:\n$pesan\n\nSalam,\n$nama";
        $header = "From: $email";

        if (mail($penerima, $subjek, $body, $header)) {
            echo "Pesan Kamu Berhasil Dikirim..";
        } else {
            echo "Maaf, Pesanmu Gagal Dikirim";
        }
    } else {
        echo "Masukkan Email yang Valid";
    }
} else {
    echo "Email dan pesan harus di isi";
}