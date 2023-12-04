<?php
$koneksi->query("DELETE FROM dimensi WHERE dimensi_id='$_GET[id]'");

echo "<script>location='index.php?halaman=dimensi';</script>";
// echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
echo "<script>alert('Data dimensi Telah Dihapus');</script>";