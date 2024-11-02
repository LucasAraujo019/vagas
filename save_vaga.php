<?php
require_once("db.php"); 
require_once("globals.php"); 


$empresa = $_POST['empresa'] ?? '';
$cargo = $_POST['cargo'] ?? '';
$localizacao = $_POST['localizacao'] ?? '';
$salario = $_POST['salario'] ?? '';
$link_vaga = $_POST['link_vaga'] ?? '';
$data_aplicacao = $_POST['data_aplicacao'] ?? '';
$data_retorno = $_POST['data_retorno'] ?? null;
$requisitos = $_POST['requisitos'] ?? '';
$beneficios = $_POST['beneficios'] ?? '';


$salario = filter_var($salario, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$link_vaga = filter_var($link_vaga, FILTER_SANITIZE_URL);

try {
   
    $stmt = $pdo->prepare("INSERT INTO vagas (empresa, cargo, localizacao, salario, link_vaga, data_aplicacao, data_retorno) 
                           VALUES (:empresa, :cargo, :localizacao, :salario, :link_vaga, :data_aplicacao, :data_retorno)");
    
    $stmt->bindParam(':empresa', $empresa);
    $stmt->bindParam(':cargo', $cargo);
    $stmt->bindParam(':localizacao', $localizacao);
    $stmt->bindParam(':salario', $salario);
    $stmt->bindParam(':link_vaga', $link_vaga);
    $stmt->bindParam(':data_aplicacao', $data_aplicacao);
    $stmt->bindParam(':data_retorno', $data_retorno);
    $stmt->bindParam(':beneficios', $beneficios);
    $stmt->bindParam(':requisitos', $requisitos);

    $stmt->execute();

    $_SESSION['msg'] = "Vaga adicionada com sucesso!";
    $_SESSION['msg_type'] = "success";

    header("Location: " . $BASE_URL . "index.php");
} catch (PDOException $e) {
    error_log("Erro ao inserir vaga: " . $e->getMessage());
    $_SESSION['msg'] = "Erro ao adicionar vaga.";
    $_SESSION['msg_type'] = "danger";

    header("Location: " . $BASE_URL . "index.php");
}
