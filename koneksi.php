<?php $koneksi = new mysqli("localhost","root","","surveyy");
// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}