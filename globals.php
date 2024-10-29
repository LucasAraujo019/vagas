<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); // Inicia a sessão apenas se ainda não estiver ativa
    }
    
    // Define a URL base, garantindo o uso correto do protocolo e caminho
    $BASE_URL = "http://" . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/') . "/";
?>
