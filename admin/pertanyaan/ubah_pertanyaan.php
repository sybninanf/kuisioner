<?php
$ambil = $koneksi->query("SELECT * FROM pertanyaan WHERE pertanyaan_id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<div class="col-md-9">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"><b>Ubah pertanyaan</b></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" name="id_pertanyaan" value="<?php echo $pecah['id_pertanyaan'] ?>">
                </div>
                </div>
                <div class="form-group">
                    <label>pertanyaan</label>
                    <input type="text" class="form-control" name="pertanyaan" value="<?php echo $pecah['pertanyaan']; ?>">
                </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button name="ubah" class="btn btn-primary">Ubah</button>
                <a href="index.php?halaman=pertanyaan" class="btn btn-outline-dark">Kembali</a>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE pertanyaan 
        SET id_pertanyaan='$_POST[id_pertanyaan]', 
        pertanyaan='$_POST[pertanyaan]',
		WHERE pertanyaan_id='$_GET[id]'");
    echo "<script>alert('Data pertanyaan Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=pertanyaan';</script>";
}
?>