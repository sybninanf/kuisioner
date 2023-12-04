<?php
include 'koneksi.php'; // Sertakan file koneksi database

// Ambil data persepsi dari database
$persepsiData = [];
$sqlPersepsi = "SELECT nilai_persepsi FROM persepsi";
$resultPersepsi = $conn->query($sqlPersepsi);

if ($resultPersepsi->num_rows > 0) {
    while($row = $resultPersepsi->fetch_assoc()) {
        $persepsiData[] = $row['nilai_persepsi'];
    }
}

// Ambil data harapan dari database
$harapanData = [];
$sqlHarapan = "SELECT nilai_harapan FROM harapan";
$resultHarapan = $conn->query($sqlHarapan);

if ($resultHarapan->num_rows > 0) {
    while($row = $resultHarapan->fetch_assoc()) {
        $harapanData[] = $row['nilai_harapan'];
    }
}

// Data Pengisian Kuisioner Perbulan (asumsi Anda memiliki data ini di database)
$pengisianData = [100, 120, 150, 180, 200]; // Ganti dengan data sesuai database Anda

// Tutup koneksi
$conn->close();
?>
