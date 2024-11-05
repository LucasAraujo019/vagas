<?php 
    $db_name = "vagas";
    $db_host = "localhost";
    $db_user = "root"; // altere para seu usuário para funcionar
    $db_pass = "1234"; // altere para sua senha do seu banco para funcionar

    $conn = new PDO("mysql:dbname=" . $db_name . ";host=". $db_host, $db_user, $db_pass);
    
    try {
        $conn = new PDO("mysql:dbname=" . $db_name . ";host=". $db_host, $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $sql = " SELECT * FROM vagas_cadastradas;
                
        ";
    
        $stmt = $conn->query($sql);
        $vagas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
    }
?>