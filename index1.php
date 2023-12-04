<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE telp_pelanggan='$_GET[telp]'");
$pecah = $ambil->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/template.css" />

    <link rel="stylesheet" href="./admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bengkel Mobil Danprad</title>
</head>

<style>
    .radio.col-up {
        display: inline-flex;
        flex-direction: column-reverse;
        align-items: center;
    }

    label {
        font-family: monospace;
        font-size: 12px;
    }

    h4 {
        font-family: monospace;
    }
</style>

<body>
    <div class="container">
        <form method="POST">
            <div class="alert alert-info text-center" role="alert">
                <h4><b>Kepuasan Pelanggan Terhadap Bengkel Danprad <i class="fas fa-tools"></i></b></h4>


            </div><br>
            <div class="form-group">
                <label for="">
                    <h5>Tingkat Kepuasan</h5>
                </label> <br>
                <!-- <div class="text-center"> -->
                <table class="table table-striped table-bordered" style="background-color: white;">
                    <thead>
                        <th width='3%'><b>
                                <p style="text-align: center;"><b><span style="font-family: Tahoma; font-size: 2em;">NO</span></b></th>
                        <th colspan='2'>
                            <p style="text-align: center;"><b><span style="font-family: Tahoma; font-size: 2em;">PERTANYAAN</span></b>
                        </th>
                        <th colspan='10' style='background:#FFFF00'>
                            <p style="text-align: center;"><b><span style="font-family: Tahoma; font-size: 2em;">PENILAIAN</span></b>
                        </th>
                        <tr>
                            <th colspan="3">
                                <p style="text-align: center;"><span style="font-family: Tahoma; font-size: 1em;"> </span>
                            </th>
                            <th colspan="5" style='background:#FFFF00'>
                                <p style="text-align: center;"><span style="font-family: Tahoma; font-size: 1em;">PRESEPSI </span>
                            </th>

                            <th colspan="5" style='background:#FFFF00'>
                                <p style="text-align: center;"><span style="font-family: Tahoma; font-size: 1em;">HARAPAN </span>
                            </th>
                        </tr>



                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $sql_dimensi = "SELECT * FROM dimensi";
                        $result_dimensi = $koneksi->query($sql_dimensi);

                        if ($result_dimensi->num_rows > 0) {
                            $no = 1;
                            while ($row_dimensi = $result_dimensi->fetch_assoc()) {
                                echo "<tr valign='top'>
                                <td><font face='Tahoma' size='3' colspan='1'><b> $no</b></font></td>
                                 <td colspan='2'><font face='Tahoma' size='3'><b>{$row_dimensi['dimensi']}</b></font></td>
                            
                                 <td height='15'width='3%'' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>SP</font></td>
                                 <td height='15' width='3%'' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>P</font></td>
                                 <td height='15' width='3%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>CP</font></td>
                                 <td height='15' width='3%'' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>TP</font></td>
                                 <td height='15'' width='3%' bgcolor='#000000'><p align='center'><font face='Tahoma' size='1' color='white'>STP</font></td>

                                 <td height='15' width='3%' bgcolor='#A99C9C'><p align='center'><font face='Tahoma' size='1' color='black'>SP</font></td>
                                 <td height='15'width='3%' bgcolor='#A99C9C'><p align='center'><font face='Tahoma' size='1' color='black'>P</font></td>
                                 <td height='15' width='3%'' bgcolor='#A99C9C'><p align='center'><font face='Tahoma' size='1' color='black'>CP</font></td>
                                 <td height='15'' width='3%' bgcolor='#A99C9C'><p align='center'><font face='Tahoma' size='1' color='black'>TP</font></td>
                                 <td height='15' width='3%'' bgcolor='#A99C9C'><p align='center'><font face='Tahoma' size='1' color='black'>STP</font></td>
                             </tr>";


                                $id_dimensi = $row_dimensi['dimensi'];
                                $sql_pertanyaan = "SELECT * FROM pertanyaan WHERE dimensi = '$id_dimensi'";
                                $result_pertanyaan = $koneksi->query($sql_pertanyaan);

                                if ($result_pertanyaan->num_rows > 0) {
                                    while ($row_pertanyaan = $result_pertanyaan->fetch_assoc()) {
                                        echo '<td colspan="1"></td>';
                                        echo '<td colspan="2"><font face="Tahoma" size="2">' . $row_pertanyaan['pertanyaan'] . '</font></td>';

                                        // Assuming $row_pertanyaan['pertanyaan_id'] contains the question ID
                                        echo '<td align="center"><input type="radio" name="presepsi_SP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="presepsi_P' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="presepsi_CP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="presepsi_TP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="presepsi_STP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';

                                        // Harapan
                                        echo '<td align="center"><input type="radio" name="harapan_SP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="harapan_P' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="harapan_CP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="harapan_TP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';
                                        echo '<td align="center"><input type="radio" name="harapan_STP' . $row_pertanyaan['pertanyaan_id'] . '" value="1"></td>';

                                        // Call the function to toggle radio buttons

                                        // Assuming $row_pertanyaan['pertanyaan_id'] contains the question ID
                                        echo '<script>toggleRadio("presepsi_SP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("presepsi_P", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("presepsi_CP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("presepsi_TP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("presepsi_STP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';

                                        echo '<script>toggleRadio("harapan_SP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("harapan_P", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("harapan_CP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("harapan_TP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';
                                        echo '<script>toggleRadio("harapan_STP", ' . $row_pertanyaan['pertanyaan_id'] . ');</script>';


                                        echo '</tr>';
                                    }
                                } else {
                                    // echo "No rows found.";
                                }
                                $no++;
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
    </div>

    <!-- Tombol Submit -->
    <div class="container">
        <div class="form-group">
            <button name="save" class="btn btn-sm btn-primary rounded" style="font-size: 25px; text-align: center; font-weight: bold;">Submit</button>

        </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


<?php
include 'koneksi.php';

if (isset($_POST['save'])) {
    // Iterate through your questions
    $sql_dimensi = "SELECT * FROM dimensi";
    $result_dimensi = $koneksi->query($sql_dimensi);

    while ($row_dimensi = $result_dimensi->fetch_assoc()) {
        $id_dimensi = $row_dimensi['dimensi'];
        $sql_pertanyaan = "SELECT * FROM pertanyaan WHERE dimensi = '$id_dimensi'";
        $result_pertanyaan = $koneksi->query($sql_pertanyaan);

        while ($row_pertanyaan = $result_pertanyaan->fetch_assoc()) {
            $pertanyaan_id = $row_pertanyaan['pertanyaan_id'];

            // Presepsi
            $presepsi_SP = isset($_POST['presepsi_SP' . $pertanyaan_id]) ? 1 : 0;
            $presepsi_P = isset($_POST['presepsi_P' . $pertanyaan_id]) ? 1 : 0;
            $presepsi_CP = isset($_POST['presepsi_CP' . $pertanyaan_id]) ? 1 : 0;
            $presepsi_TP = isset($_POST['presepsi_TP' . $pertanyaan_id]) ? 1 : 0;
            $presepsi_STP = isset($_POST['presepsi_STP' . $pertanyaan_id]) ? 1 : 0;

            // Harapan
            $harapan_SP = isset($_POST['harapan_SP' . $pertanyaan_id]) ? 1 : 0;
            $harapan_P = isset($_POST['harapan_P' . $pertanyaan_id]) ? 1 : 0;
            $harapan_CP = isset($_POST['harapan_CP' . $pertanyaan_id]) ? 1 : 0;
            $harapan_TP = isset($_POST['harapan_TP' . $pertanyaan_id]) ? 1 : 0;
            $harapan_STP = isset($_POST['harapan_STP' . $pertanyaan_id]) ? 1 : 0;

            // Insert data into the database
            $query_presepsi = "INSERT INTO presepsi (pertanyaan_id, presepsi_SP, presepsi_P, presepsi_CP, presepsi_TP, presepsi_STP)
                                VALUES ('$pertanyaan_id', '$presepsi_SP', '$presepsi_P', '$presepsi_CP', '$presepsi_TP', '$presepsi_STP')";
            $query_harapan = "INSERT INTO harapan (pertanyaan_id, harapan_SP, harapan_P, harapan_CP, harapan_TP, harapan_STP)
                                VALUES ('$pertanyaan_id', '$harapan_SP', '$harapan_P', '$harapan_CP', '$harapan_TP', '$harapan_STP')";

            // Execute the queries
            if ($koneksi->query($query_presepsi) && $koneksi->query($query_harapan)) {
                echo "<div class='alert alert-success'>Data Presepsi dan Harapan Tersimpan</div>";
                echo "<script>location='index2.php';</script>";
            } else {
                // Data gagal disimpan, tampilkan pesan kesalahan
                echo "<div class='alert alert-danger'>Data Gagal Disimpan: " . $koneksi->error . "</div>";
            }
        }
    }
}
?>

<!-- Rest of your HTML form here -->

<script>
    function toggleRadio(groupName) {
        var radios = document.getElementsByName(groupName);

        for (var i = 0; i < radios.length; i++) {
            radios[i].addEventListener('change', function() {
                for (var j = 0; j < radios.length; j++) {
                    if (radios[j] !== this) {
                        radios[j].checked = false;
                    }
                }
            });
        }
    }

    // Panggil fungsi toggleRadio untuk setiap grup
    toggleRadio("presepsi_SP");
    toggleRadio("presepsi_P");
    toggleRadio("presepsi_CP");
    toggleRadio("presepsi_TP");
    toggleRadio("presepsi_STP");
    toggleRadio("harapan_SP");
    toggleRadio("harapan_P");
    toggleRadio("harapan_CP");
    toggleRadio("harapan_TP");
    toggleRadio("harapan_STP");
</script>


</html>