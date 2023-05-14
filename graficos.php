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

                <!-- Begin Page Content -->
                <div id="chart_div" style=" margin-top:1%; margin-left: 20px ;width: 80%; height: 500px;"></div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
</body>

</html>