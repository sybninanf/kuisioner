<?php
$koneksi->query("DELETE FROM pertanyaan WHERE pertanyaan_id='$_GET[id]'");

echo "<script>location='index.php?halaman=pertanyaan';</script>";
// echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
echo "<script>alert('Data pertanyaan Telah Dihapus');</script>";
