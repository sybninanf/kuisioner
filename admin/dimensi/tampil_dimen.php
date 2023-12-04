<div class="col-12">
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-sm-6">
                    <h6 class="card-title">
                        <?php
                        if ($_SESSION['role'] != 'owner') {
                            echo '<button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#modal-primary">
                            <i class="fa fa-plus"></i> Tambah Data</button>';
                        }
                        ?>

                    </h6>

                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
            <?php
            if (isset($_POST['save'])) {
                if (!$koneksi->query("INSERT INTO dimensi (dimensi_nama_id, dimensi) VALUES('$_POST[dimensi_nama_id]', '$_POST[dimensi]')")) {
                    echo "Error: " . $koneksi->error;
                } else {
                    echo "<div class='alert alert-success'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1'>";
                }
            }
            ?>
            <table class="table table-head-fixed text-nowrap table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10px">No.</th>
                        <th>ID</th>
                        <th>Dimensi</th>
                        <?php
                        if ($_SESSION['role'] != 'owner') {
                            echo '<th class="text-center">Aksi</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $batas = 5;
                    $halaman = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                    $previous = $halaman - 1;
                    $next = $halaman + 1;

                    $data = mysqli_query($koneksi, "select * from dimensi ORDER BY dimensi_id ASC");
                    $jumlah_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jumlah_data / $batas);

                    $nomor = 1;
                    $ambil = $koneksi->query("SELECT * FROM dimensi ORDER BY dimensi_nama_id ASC limit $halaman_awal, $batas");
                    while ($pecah = $ambil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor++; ?></td>
                            <td><?php echo $pecah['dimensi_nama_id'] ?></td>
                            <td><?php echo $pecah['dimensi'] ?></td>
                            <?php if ($_SESSION['role'] != 'owner') {
                                // echo '<button onclick="myFunction()">Click me</button>';
                                echo '<td class="text-center">';
                                echo '<a href="index.php?halaman=hapus_dimen&id=';
                                echo $pecah['dimensi_id'];
                                echo '"';
                                echo ' class="btn btn-danger" onclick="myFunction()"> <i class="fas fa-trash"></i></a>';

                                echo ' <a href="index.php?halaman=ubah_dimen&id=';
                                echo $pecah['dimensi_id'];
                                echo '"';
                                echo 'class="btn btn-warning"><i class="far fa-edit"></i></a></td>';
                            } ?>
                        </tr>
                    <?php
                    }
                    ?>
                    <script>
                        function myFunction() {
                            return confirm('Apakah anda yakin ingin menghapus ?');
                        }
                    </script>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman > 1) {
                                                    echo "href='?halaman=dimensi&page=$previous'";
                                                } ?>>Previous</a>
                    </li>
                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                    ?>
                        <li class="page-item"><a class="page-link" href="?halaman=dimensi&page=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                    echo "href='?halaman=dimensi&page=$next'";
                                                } ?>>Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-primary">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="dimensi_nama_id" class="form-control" placeholder="ID" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Dimensi</label><br>
                            <input type="text" name="dimensi" class="form-control" placeholder="Masukan Pertanyaan..." required autofocus>
                        </div>
            </div>
            <div class="modal-footer text-right">
                <button name="save" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>