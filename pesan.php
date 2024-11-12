<?php
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$telepon = $_POST['telepon'] ?? '';
$lokasi = $_POST['lokasi'] ?? '';
$pesan = $_POST['pesan'] ?? '';

if (!empty($email) && !empty($pesan)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
    }
}