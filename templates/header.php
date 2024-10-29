<?php 
session_start(); 
require_once("globals.php");
require_once("db.php");
require_once("includes/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de vagas</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/job.png"/>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/job.png" alt="Gestão de vagas" id="logo">
                <span id="facil-title">Gestão de vagas</span>
            </a>
        </nav>
    </header>

    <?php if (isset($_SESSION['mensagem'])): ?>
        <?php 
            $mensagem = $_SESSION['mensagem'];
            unset($_SESSION['mensagem']); // Remove a mensagem da sessão após exibir
        ?>
        <div class="alert <?= $mensagem['tipo'] == 'sucesso' ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($mensagem['texto']) ?>
        </div>
    <?php endif; ?>
