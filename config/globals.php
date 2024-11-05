<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); // Inicia a sessão apenas se ainda não estiver ativa
    }
    
    $BASE_URL = "http://" . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/') . "/";
?>
