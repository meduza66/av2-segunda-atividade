<?php include('header.php'); ?>

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class=""></i> Cadastrar Paciente</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            <div class="card mb-4">
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                        
                                        <form class="user" action="dados_user.php" method="POST" id="form_conta" name="form_conta">

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Nome Completo</label>
                                                    <input type="text" class="form-control form-control-user" id="name_usuario" name="name_usuario" placeholder=>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Cpf</label>
                                                    <input type="text" class="form-control form-control-user" id="number_cpf" name="number_cpf" placeholder=>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Endereço</label>
                                                    <input type="text" class="form-control form-control-user" id="name_endereço" name="name_endereço" placeholder=>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="">Idade</label>
                                                    <input type="number" class="form-control form-control-user" id="number_idade" name="number_idade" placeholder=>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="">Rg</label>
                                                    <input type="number" class="form-control form-control-user" id="number_rg" name="number_rg" placeholder=>
                                                </div>
                                                
                                            </div>

                                            <button type="button" class="btn btn-outline-danger">Cadastrar Paciente</button>
                                            </button>
                                            <button type="button" class="btn btn-outline-danger">Excluir Dados</button>
                                            </button>
                                        </form>
                                        
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- div row-->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php
    include "_includes/footer.php";
  ?>

<?php include('footer.php'); ?>
