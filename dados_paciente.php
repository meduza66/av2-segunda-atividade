<?php 

    include "conexao.php";
    $conn = connectBd();

    try {
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO cadastro (nome completo, cpf, endereço, idade, rg)
            VALUES (:nome compelto, :cpf, :endereço, :idade, :rg)");
            $stmt->bindParam(':nome completo', $nameNome_completo);
            $stmt->bindParam(':cpf', $numberCpf);
            $stmt->bindParam(':endereço', $nameendereço);
            $stmt->bindParam(':idade', $numberidade);
            $stmt->bindParam(':rg', $numberRg);
           
        
            $nameNome_completo = $_POST['name_nome completo'];
            $numberCpf  = $_POST['number_cpf'];
            $nameEndereço  = $_POST['name_endereço'];
            $numberidade  = $_POST['number_idade'];
            $numberRg  = $_POST['number_rg'];
          
            $stmt->execute();
    
    
            echo "New records created successfully";
    }   catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
    
    $conn = null;

    header('Location: visu_dados.php');
?>