<?php
session_start(); // Inicia a sessão
require_once("config/db.php"); // Arquivo de conexão com o banco de dados

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    if ($id > 0) {
        $sql = "DELETE FROM vagas_cadastradas WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        try {
            if ($stmt->execute()) {
                $_SESSION['mensagem'] = ["tipo" => "sucesso", "texto" => "Vaga excluída com sucesso!"];
            } else {
                $_SESSION['mensagem'] = ["tipo" => "erro", "texto" => "Erro ao excluir a vaga."];
            }
        } catch (Exception $e) {
            $_SESSION['mensagem'] = ["tipo" => "erro", "texto" => "Erro: " . $e->getMessage()];
        }
    } else {
        $_SESSION['mensagem'] = ["tipo" => "erro", "texto" => "ID inválido."];
    }
} else {
    $_SESSION['mensagem'] = ["tipo" => "erro", "texto" => "Nenhum ID fornecido."];
}

// Redireciona de volta para o index
header("Location: index.php");
exit;
?>
