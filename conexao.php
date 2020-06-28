<?php
    function connectBd(){
        $servername     = "sql109.epizy.com";
        $username       = "epiz_25729834";
        $password       = "4ZLZb9HNASjN";
        $dbname         = "epiz_25729834_hospital";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão Realizada com Sucesso!";
            return $conn;

        } catch(PDOException $e) {
            echo "Error! Conexão Falhou." . $e->getMessage();
        }
    }
?>