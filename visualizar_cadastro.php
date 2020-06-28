<?php include('header.php'); ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 2em;">
                        <h1 class="h3 mb-0 text-gray-800"><i class=""></i> Pacientes</h1>
                    </div>

                    <div class="row">
                        
                        <div class="col-xl col-lg">
                            
                                
                                <!-- Card Body -->
                                
                                        <?php 
                                            

                                            
                                        ?>

                                        
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="text-align: center;"><i class=""></i></th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nome Completo</th>
                                                <th scope="col">Cpf</th>
                                                <th scope="col">Endereço</th>
                                                <th scope="col">Idade</th>
                                                <th scope="col">Rg</th>

                                                <th scope="col" style="text-align: center;"><i class=""></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    
                                                include "conexao.php";
                                                $conn = connectBd();

                                                try {
                                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                    $stmt = $conn->prepare("SELECT * FROM cadastro");
                                                    $stmt->execute();

                                                
                                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                foreach($stmt->fetchAll() as $k=>$v) {
                                                    //echo $v;
                                                    echo '<tr>';
                                                        echo '<td style="text-align: center;"><i class=""></i></td>';
                                                        echo '<td>' .$v['id']. '</td>';
                                                        echo '<td>' .$v['nome completo']. '</td>';
                                                        echo '<td>' .$v['cpf']. '</td>';
                                                        echo '<td>' .$v['Endereço']. '</td>';
                                                        echo '<td>' .$v['idade']. '</td>';
                                                        echo '<td>' .$v['rg'].'</td>';
                                                       
                                                        echo '<td style="text-align: center;"> <a href="edit_dados.php?id='.$v['id'].'"><i class=""></i></a> <a href="view_dados.php?id='.$v['id'].'"><i class=></i></a> <a  href="delete_dados.php?id='.$v['id'].'"><i class=""></i></a></td>';
                                                    echo '</tr>';
                                                }
                                                } catch(PDOException $e) {
                                                    echo "Error: " . $e->getMessage();
                                                }
                                                $conn = null;
                                            
                                        ?>
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                        
                                    
                                
                            
                        </div>


                    </div>
                    <!-- div row-->                                                 
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('footer.php'); ?>