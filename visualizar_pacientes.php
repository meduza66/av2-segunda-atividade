<?php

    include "conexao.php";
    $conn = connectBd();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM cadastro WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $id       = $_GET['id'];
        $stmt->execute();

    
    
    foreach($stmt->fetchAll() as $k=>$v) {

        $id         = $v['id'];
        $nome_completo   = $v['nome_completo'];
        $cpf   = $v['cpf'];
        $endereço    = $v['endereço'];
        $idade      = $v['idade'];
        $rg     = $v['rg'];
        
    }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>

<?php include('header.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class=""></i> Dados de <?php echo $usuario; ?></h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg"> 
                                    
                            <div class="card mb-4 py-3 border-left-primary shadow">
                                <div class="card-body">
                                    <h5><i class="fas fa-key icon"></i></h5>
                                    <p><strong>N° de Indentificação: </strong><?php echo $id; ?></p>
                                    <p><i class="fas fa-user icon"></i></p>
                                    <p><strong>Nome Completo: </strong><?php echo $nome_completo; ?></p>
                                    <p><strong>Cpf: </strong><?php echo $cpf; ?></p>
                                    <p><strong>Endereço: </strong><?php echo $endereço; ?></p>
                                    <p><strong>idade: </strong><?php echo $idade; ?></p>
                                    <p><strong>Rg: </strong><?php echo $rg; ?></p>
                                    
                                </div>
                            </div> 
                                    
                            
                        </div>


                    </div>
                    <!-- div row-->                                                 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('footer.php'); ?>