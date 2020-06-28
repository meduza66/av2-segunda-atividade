<?php

include "conexao.php";
$conn = connectBd();

try {
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("DELETE FROM cadastro WHERE id=:id");
    $stmt->bindParam(':id', $id);
    

    $id       = $_GET['id'];
    $stmt->execute();


    echo "Excluido com sucesso";
}   catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
header('Location: visu_dados.php');

?>