<?php include_once("autenticacao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once "layout/read.php" ?>

<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include_once "layout/sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "layout/topbar.php";
                ?>
                <!-- End of Topbar -->

                <!--grafico de comparação diario-->
                <canvas class="line-chart"></canvas>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- cdn do chart.js-->
    <canvas id="myChart" width="{}" height="{}"></canvas>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: '{line}',

        data: {
            labels: {},
            datasets: [{
                label: "My Chart",
                data: {},
                backgroundColor: {},
                borderColor: {},
                borderWidth: {}
            }]
        },

        options: {
            title: {
                text: "My Chart",
                display: {true},
            },
            events: [{}],
            legend: {
                display: {true},
            },
            tooltips: {
                mode: '{}'
            },
            layout: {{}},
            animation: {{}}
        }
    });
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</body>

</html>