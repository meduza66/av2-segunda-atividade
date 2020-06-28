<?php 
    
    include "conexao.php";
    $conn = conectBd();
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO cadastro (nome completo, cpf, endereço, idade, rg)
        VALUES ('John', 'Doe', 'john@example.com')";

        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;
?>