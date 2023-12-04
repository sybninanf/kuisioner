<!-- <script src="../assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="../assets/plugins/datepicker/css/datepicker.css"> -->

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-2">
                    <!-- <h6 class="card-title"> -->
                    <?php
                    if ($_SESSION['role'] == 'super_admin') {
                        echo '<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-primary">
                            <i class="fa fa-plus"></i> Tambah Data</button>';
                    }
                    ?>
                    <!-- </h6> -->
                </div>
                <div class="col-6">
                    <form method="POST" action="tanggapan/cetak_tanggapan.php" class="form-inline row">
                        <div class="col-sm-1">
                            <label for="">Dari </label>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <!-- <label for="">Dari Tanggal</label> -->
                                <input type="date" name="dari_tanggal" value="<?php echo date("Y-m-d") ?>" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="">Sampai </label>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <!-- <label for="">Sampai Tanggal</label> -->
                                <input type="date" name="ke_tanggal" value="<?php echo date("Y-m-d") ?>" class="form-control form-control-sm">
                            </div>
                        </div>&ensp;&ensp;&ensp;
                        <div class="col-sm-1">
                            <button name="tampil" formtarget="_blank" class="btn btn-outline-success btn-sm" style="width: 300%;">Cetak</button>
                        </div>
                    </form>
                </div>


                <table class="table table-head-fixed text-nowrap table-bordered" style="font-size: 16px;">

                    <thead>
                        <tr>
                            <th rowspan="2" width="3%" style="text-align: center;background-color: black; color: white;"><b>NO</b></th>
                            <th rowspan="2" style="text-align: center;background-color: black; color: white;"><b>DIMENSI</b></th>
                            <th rowspan="2" style="text-align: center;background-color: black; color: white; width: 15%;"><b>PERTANYAAN</b></th>
                            <th colspan="5" style="text-align: center; background-color: black; color: white;"><b>PRESEPSI</b></th>
                            <th rowspan="2" width="3%" style="text-align: center;background-color: black; color: white;"><b>RATA-RATA</b></th>
                            <th colspan="5" style="text-align: center; background-color: black; color: white;"><b>HARAPAN</b></th>
                            <th rowspan="2" width="3%" style="text-align: center;background-color: black; color: white;"><b>RATA-RATA</b></th>
                        </tr>
                        <tr>

                            <td width="2%" colspan="1,6" style="background-color: black; color: white;">SP</td>
                            <td width="2%" style="background-color: black; color: white;">P</td>
                            <td width="2%" style="background-color: black; color: white;">CP</td>
                            <td width="2%" style="background-color: black; color: white;">TP</td>
                            <td width="2%" style="background-color: black; color: white;">STP</td>

                            <td width="2%" style="background-color: black; color: white;">SP</td>
                            <td width="2%" style="background-color: black; color: white;">P</td>
                            <td width="2%" style="background-color: black; color: white;">CP</td>
                            <td width="2%" style="background-color: black; color: white;">TP</td>
                            <td width="2%" style="background-color: black; color: white;">STP</td>

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


                                echo "<tr>";
                                echo "<td>" . $counter . "</td>";
                                if ($pertanyaanRow && isset($pertanyaanRow['dimensi']) && isset($pertanyaanRow['pertanyaan'])) {
                                    echo "<td>" . $pertanyaanRow['dimensi'] . "</td>";
                                    echo "<td>" . $pertanyaanRow['pertanyaan'] . "</td>";
                                }

                                echo "<td>" . $totalPresepsiSP . "</td>";
                                echo "<td>" . $totalPresepsiP . "</td>";
                                echo "<td>" . $totalPresepsiCP . "</td>";
                                echo "<td>" . $totalPresepsiTP . "</td>";
                                echo "<td>" . $totalPresepsiSTP . "</td>";
                                echo "<td style='text-align: center;'>". $rata_pre . "</td>";

                                echo "<td>" . $totalHarapanSP . "</td>";
                                echo "<td>" . $totalHarapanP . "</td>";
                                echo "<td>" . $totalHarapanCP . "</td>";
                                echo "<td>" . $totalHarapanTP . "</td>";
                                echo "<td>" . $totalHarapanSTP . "</td>";

                                echo "<td colspan='5' style='text-align: center;'>" . $rata_har . "</td>";
                                echo "</tr>";



                                $counter++;
                            }
                        }

                        ?>
                    </tbody>
                </table>

                <!-- Your CSS styling goes here -->




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
                </style>

            </div>