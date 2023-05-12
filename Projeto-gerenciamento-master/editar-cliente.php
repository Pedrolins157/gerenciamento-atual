<?php
include_once "autenticacao.php";
require_once('function.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!--font-google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">


    <title>Brother Lanche</title>

    <link rel="icon" type="image/png" src="img/burguer-title.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "layout/sidebar.php";
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


                <div class="container-fluid " style="margin-left: 37%;margin-top:8%;">
                    <!-- Page Heading -->
                    <h1 class="h2 mb-4 ta-center text-gray-800 "><i class="far fa-address-card"></i> Dados do Cliente </h1>

                    <?php

                    $cod = base64_decode($_GET["cod"]);
                    include_once "conexao.php";
                    $stmt = $con->prepare("SELECT * FROM cliente WHERE cod = ?");
                    $stmt->bindParam(1, $cod);
                    $stmt->execute();

                    $row = $stmt->fetch();



                    ?>


                    <!-- Dados do Form:Nome,E-mail,Cpf,Estado Civil -->
                    <form id="form" action="atualizar-cliente.php" autocomplete="off" class="w-25 mb-2" method="post">
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="cod" value="<?php echo base64_encode($row['cod']); ?>">
                                Nome: <input type="text" value="<?php echo $row['nome'] ?>" require Placeholder="escreva seu Nome aqui" name="nome" class="mb-2 form-control">
                            </div>
                            <div class="col-12">
                                E-mail: <input type="email" value="<?php echo $row['email'] ?>" require Placeholder="escreva seu E-mail" name="email" class="mb-2 form-control">
                            </div>
                            <div class="col-12">
                                Cpf: <input type="text" value="<?php echo $row['cpf'] ?>" require maxlength="14" name="cpf" id="cpff" class="mb-2 form-control">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6 ">
                                Estado Civil:<select name="estadocivil" required class="form-control w-75 mb-5 form-inline ">

                                    <?php
                                    $options = array(
                                        'solteiro' => 'Solteiro',
                                        'casado' => 'Casado',
                                        'viuvo' => 'Viúvo',
                                        'divorciado' => 'Divorciado'
                                    );

                                    foreach ($options as $value => $label) {
                                        $selected = ($row["estadocivil"] == $value) ? 'selected' : '';
                                        echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="col-6 ml-0 mt-4  pl-5 text-right">
                                <button class="btn btn-secondary mx-auto atualizarCadastro " type="button" name="atualizar-cadastro-cliente" value="Atualizar" id="atualizarCadastroCliente">Atualizar</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->


    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <?php
    include "layout/modal.php";
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/sweetalert.js"></script>
    <script>
        $(document).ready(function() {
            $("#cpff").mask("000.000.000-00");
        });
        $("#atualizarCadastroCliente").click(function() {
            Swal.fire({
                title: 'Confirma alteração no cadastro?',
                text: "",
                icon: 'warning',
                iconColor: '#dc3545',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formdata = new FormData($("form")[0]);
                    var link = 'atualizar-cliente.php';

                    $.ajax({
                        type: 'POST',
                        url: link,
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Dados atualizados com sucesso!',
                                showConfirmButton: true

                            }).then((result) => {
                                window.location.href = "consultar-cliente.php";
                            })
                        }

                    });



                }
            })
        });
    </script>


</body>