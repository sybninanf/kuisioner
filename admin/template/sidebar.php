<style>
    p {
        font-size: 15px;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/dist/img/akun.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['nama_pengguna'] ?></a>
            </div>
        </div>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="index.php?halaman=ubah_password" class="nav-link  <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=ubah_password" ? "active" : ""); ?>">
                            <i class="nav-icon fas fa-key"></i>
                            <p>
                                Ubah Password
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <div class="sidebar">
                    <!-- ... User Panel ... -->

                    <!-- Sidebar Menu (Part 1) -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- ... Existing Menu Items ... -->

                            <!-- Add a new menu item for each section -->
                            <li class="nav-item">
                                <a href="index.php" class="nav-link  <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php" ? "active" : ""); ?>">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
        
                            <a href="index.php?halaman=dimensi" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=dimensi" ? "active" : ""); ?>">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Kelola Kuisioner
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="index.php?halaman=dimensi" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=dimensi" ? "active" : ""); ?>">
                                         
                                            <p>Data Dimensi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?halaman=pertanyaan" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=pertanyaan" ? "active" : ""); ?>">
                                        
                                            <p>Data Pertanyaan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="index.php?halaman=kepuasan" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=kepuasan" ? "active" : ""); ?>
                                <i class="nav-icon fas fa-cogs"></i>    
                                <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Laporan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="index.php?halaman=kepuasan" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=kepuasan" ? "active" : ""); ?>">
                                           
                                            <p>Laporan Kuisioner</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?halaman=servqual" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=pelanggan" ? "active" : ""); ?>">
                                     
                                            <p>Metode Servqual</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?halaman=pelanggan" class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=pelanggan" ? "active" : ""); ?>">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Pelanggan
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>


                    <?php if ($_SESSION['role'] == 'super_admin') {
                        echo "<li class='nav-item'>";
                        echo "<a href='index.php?halaman=pengguna' class='nav-link";
                        if ($_SERVER['REQUEST_URI'] == "/si_skpsm/admin/index.php?halaman=pengguna") {

                            echo " active";
                        }
                        echo "'>";
                        echo "<i class='fas fa-user-cog'></i>
                        <p>
                            Pengguna
                        </p>
                    </a>
                </li>";
                    } ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Menangani klik pada tombol dropdown
        $('.nav-item.has-treeview > a').on('click', function(e) {
            e.preventDefault(); // Menghentikan aksi default dari tautan
            // Toggle kelas 'menu-open' untuk membuka atau menutup dropdown
            $(this).parent().toggleClass('menu-open');
        });

        // Menangani klik di luar dropdown untuk menutupnya
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.nav-item.has-treeview').length) {
                $('.nav-item.has-treeview').removeClass('menu-open');
            }
        });
    });
</script>