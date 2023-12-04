<?php
// Dummy data
$totalSurveyed = 50; // Replace with actual value from your database
$totalQuestions = 20; // Replace with actual value from your database
?>

<!-- Display the information in your dashboard -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Jumlah Orang Survey</h5>
                <h3><?php echo $totalSurveyed; ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Jumlah Pertanyaan</h5>
                <h3><?php echo $totalQuestions; ?></h3>
            </div>
        </div>
    </div>
</div>

<!-- Ensure the Chart.js library is properly linked -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Ensure the Chart.js library is properly linked -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- ... Your other HTML code ... -->

<div class="col-9">
    <div class="card">
        <div class="card-head text-center">
            <div class="card-tittle">
                <h3>Analisis Kepuasan Pelanggan <br> Pada Bulan <?php echo date('F') ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Sangat Puas", "Puas", "Cukup Puas", "Tidak Puas", "Sangat Tidak Puas"],
                datasets: [
                    {
                        label: 'Presepsi',
                        data: [12, 19, 3, 5, 2], // Dummy data for Presepsi
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(85, 120, 99, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(85, 120, 99, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Harapan',
                        data: [5, 10, 15, 20, 25], // Dummy data for Harapan
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 159, 64, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div>


<!-- <div class="col-9">
    <div class="card">
        <div class="card-head text-center">
            <div class="card-tittle">
                <h3>Analisis Kepuasan Pelanggan <br> Pada Bulan <?php echo date('F') ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Sangat Puas", "Puas", "Cukup Puas", "Tidak Puas", "Sangat Tidak Puas"],
                datasets: [
                    {
                        label: 'Presepsi',
                        data: [<?php echo implode(",", $presepsiData); ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(85, 120, 99, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(85, 120, 99, 1)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Harapan',
                        data: [<?php echo implode(",", $harapanData); ?>],
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 159, 64, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div> -->
