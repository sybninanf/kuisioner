<?php
$ambil = $koneksi->query("SELECT * FROM dimensi WHERE dimensi_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<div class="col-md-9">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><b>Ubah dimensi</b></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="dimensi_nama_id" value="<?php echo $pecah['dimensi_nama_id'] ?>">
                </div>
                <div class="form-group">
                    <label>Dimensi</label>
                    <input type="text" class="form-control" name="dimensi" value="<?php echo $pecah['dimensi']; ?>">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                <a href="index.php?halaman=dimensi" class="btn btn-outline-dark">Kembali</a>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE dimensi 
        SET dimensi_nama_id ='$_POST[dimensi_nama_id]', 
        dimensi ='$_POST[dimensi]' 
        WHERE dimensi_id='$_GET[id]'");
    echo "<script>alert('Data dimensi Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=dimensi';</script>";
}
?>
