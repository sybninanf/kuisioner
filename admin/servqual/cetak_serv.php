<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

<div class="header" style="display: flex; align-items: center; justify-content: space-between;">
    <img src="https://i.ibb.co/gP2Z797/logo.png" alt="logo" class="logo" style="max-width: 210px; max-height: 90px;">
    <div class="name" style="flex-grow: 1;">
        <p style="font-weight: bold; font-size: 33px; margin: 0;">BENGKEL MOBIL DANPRAD</p>
        <p style="font-weight: italic; font-size: 17px; margin: 0;">Layanan berkualitas tinggi serta solusi terbaik untuk kebutuhan perawatan dan perbaikan kendaraan</p>
        <p style="font-size: 10px;">Telp: 089611663501/p>
    </div>

</div>

<hr style="border-top: 1px solid #000; margin-bottom: 20px;">

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/kuisioner/koneksi.php');
?>

<div class="col-12">
    <div class="card">
        <div class="card-header">

            <table class="table table-head-fixed text-nowrap table-bordered" style="font-size: 12px;">

                <thead>
                    <tr>
                        <th rowspan="2" width="3%" style="text-align: center;background-color: Red; color: white;"><b>NO</b></th>
                        <th rowspan="2" style="text-align: center;background-color: Red; color: white;"><b>DIMENSI</b></th>
                        <th rowspan="2" style="text-align: center;background-color: Red; color: white; width: 1.5%;"><b>PERTANYAAN</b></th>
                        <th colspan="5" style="text-align: center; background-color: Red; color: white;"><b>PRESEPSI</b></th>
                        <th colspan="5" style="text-align: center; background-color: Red; color: white;"><b>HARAPAN</b></th>
                        <th colspan="5" style="text-align: center; background-color: Red; color: white;"><b>SERVQUAL</b></th>
                        <th colspan="6" style="text-align: center; background-color: Red; color: white;"><b>KETERANGAN</b></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pertanyaanQuery = "SELECT * FROM pertanyaan";
                    $pertanyaanResult = mysqli_query($koneksi, $pertanyaanQuery);
                    $counter = 1; // Initialize counter
                    // Fetch the first rows from each result set
                    $pertanyaanRow = mysqli_fetch_assoc($pertanyaanResult);

                    while ($pertanyaanRow) {
                        // Initialize totals for each category
                        $totalPresepsiSP = $totalPresepsiP = $totalPresepsiCP = $totalPresepsiTP = $totalPresepsiSTP = 0;
                        $totalHarapanSP = $totalHarapanP = $totalHarapanCP = $totalHarapanTP = $totalHarapanSTP = 0;
                        $rowCount = 0;

                        if ($pertanyaanRow && isset($pertanyaanRow['dimensi'])) {
                            $pertanyaan_id = $pertanyaanRow['pertanyaan_id'];

                            // Query for perception
                            $persepsiQuery = "SELECT SUM(presepsi_SP) AS TotalSP,
                                SUM(presepsi_P) AS TotalP,
                                SUM(presepsi_CP) AS TotalCP,
                                SUM(presepsi_TP) AS TotalTP,
                                SUM(presepsi_STP) AS TotalSTP
                          FROM presepsi
                          WHERE pertanyaan_id = $pertanyaan_id";

                            $persepsiResult = mysqli_query($koneksi, $persepsiQuery);
                            $persepsiRow = mysqli_fetch_assoc($persepsiResult);

                            // Query for expectation
                            $harapanQuery = "SELECT SUM(harapan_SP) AS TotalSP,
                               SUM(harapan_P) AS TotalP,
                               SUM(harapan_CP) AS TotalCP,
                               SUM(harapan_TP) AS TotalTP,
                               SUM(harapan_STP) AS TotalSTP
                         FROM harapan
                         WHERE pertanyaan_id = $pertanyaan_id";

                            $harapanResult = mysqli_query($koneksi, $harapanQuery);
                            $harapanRow = mysqli_fetch_assoc($harapanResult);

                            // Add perception values to corresponding totals
                            $totalPresepsiSP += $persepsiRow['TotalSP'];
                            $totalPresepsiP += $persepsiRow['TotalP'];
                            $totalPresepsiCP += $persepsiRow['TotalCP'];
                            $totalPresepsiTP += $persepsiRow['TotalTP'];
                            $totalPresepsiSTP += $persepsiRow['TotalSTP'];

                            // Add expectation values to corresponding totals
                            $totalHarapanSP += $harapanRow['TotalSP'];
                            $totalHarapanP += $harapanRow['TotalP'];
                            $totalHarapanCP += $harapanRow['TotalCP'];
                            $totalHarapanTP += $harapanRow['TotalTP'];
                            $totalHarapanSTP += $harapanRow['TotalSTP'];

                            $rowCount++;
                            $pertanyaanRow = mysqli_fetch_assoc($pertanyaanResult);
                            $weights = array(
                                'SP' => 5,  // Weight for SP
                                'P' => 4,   // Weight for P
                                'CP' => 3,  // Weight for CP
                                'TP' => 2,  // Weight for TP
                                'STP' => 1, // Weight for STP
                            );

                            $sum_pre = $weights['SP'] * $persepsiRow['TotalSP'] +
                                $weights['P'] * $persepsiRow['TotalP'] +
                                $weights['CP'] * $persepsiRow['TotalCP'] +
                                $weights['TP'] * $persepsiRow['TotalTP'] +
                                $weights['STP'] * $persepsiRow['TotalSTP'];

                            $rata_pre = $sum_pre / 100;

                            $sum_har = $weights['SP'] * $harapanRow['TotalSP'] +
                                $weights['P'] * $harapanRow['TotalP'] +
                                $weights['CP'] * $harapanRow['TotalCP'] +
                                $weights['TP'] * $harapanRow['TotalTP'] +
                                $weights['STP'] * $harapanRow['TotalSTP'];

                            $rata_har = $sum_har / 100;

                            $servqual = $rata_pre - $rata_har;

                            echo "<tr>";
                            echo "<td>" . $counter . "</td>";
                            if ($pertanyaanRow && isset($pertanyaanRow['dimensi']) && isset($pertanyaanRow['pertanyaan'])) {
                                echo "<td>" . $pertanyaanRow['dimensi'] . "</td>";
                                echo "<td>" . $pertanyaanRow['pertanyaan'] . "</td>";
                            }

                            echo "<td colspan='5' style='text-align: center;'>" . $rata_pre . "</td>";
                            echo "<td colspan='5' style='text-align: center;'>" . $rata_har . "</td>";
                            echo "<td colspan='5' style='text-align: center;'>" . $servqual . "</td>";
                            if ($servqual > 0) {
                                echo "<td colspan='5' style='text-align: center;'>Puas</td>";
                            } else {
                                echo "<td colspan='5' style='text-align: center; color: red;'>Tidak Puas</td>";
                            }



                            echo "</tr>";

                            $counter++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="signature" style="position: absolute; bottom: -290px; right: -12px;">
            <p id="tanggal" style="font-size: 20px; font-weight: bold;">
                <?php
                $arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                $tanggal = date("d");
                $bulan = date("n") - 1; // Perlu mengurangkan 1 karena indeks array dimulai dari 0
                $tahun = date("Y");

                echo " Manggadewa" . "," . " " . $tanggal . " " . $arrbulan[$bulan] . " " . $tahun;
                ?>
            </p>
            <div style="margin-top: 190px; font-size: 20px">
                <p>(Admin)</p>
            </div>
        </div>




        <style>
            .radio.col-up {
                display: inline-flex;
                flex-direction: column-reverse;
                align-items: center;
            }

            label {
                font-family: monospace;
                font-size: 18px;
            }

            h4 {
                font-family: monospace;
            }

            * Logo di kiri,
            Alamat,
            Telp,
            dan Email di tengah,
            dan Nama di kanan */ .header {
                display: flex;
                /* Menggunakan flexbox untuk mengelola posisi elemen */
                justify-content: space-between;
                /* Memastikan elemen akan terletak di sisi berlawanan */
                align-items: center;
                /* Mengatur elemen agar berada di tengah secara vertikal */
            }

            .logo {
                max-width: 200px;
                max-height: 80px;
                margin-left: 150px;
                /* Tambahkan margin kiri sekitar 20 piksel atau sesuai kebutuhan Anda */
            }

            .name {
                flex-grow: 1;
                /* Memungkinkan elemen Nama untuk mengisi ruang yang tersisa */
                text-align: center;
                margin-right: 100px;
                /* Mengatur teks nama ke kanan */
            }
        </style>
        <script>
            window.print();
        </script>