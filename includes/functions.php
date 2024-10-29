<?php
// Função para formatar data no padrão brasileiro
function formadaData($data) {
    $timestamp = strtotime($data);
    return date('d-m-Y', $timestamp); 
}

function formatarValorEmReais($salario) {
    return 'R$ ' . number_format($salario, 2, ',', '.'); // Formata para R$ X.XXX,XX
}

function gerarBotoes($id) {
    $botaoEditar = '<form action="add_vaga.php" method="GET" style="display:inline;">
                        <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                        <button type="submit" class="btn btn-warning btn-custom"> <!-- Adiciona a classe personalizada -->
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </form>';
    
    $botaoExcluir = '<form action="delete_vaga.php" method="POST" style="display:inline;" class="delete-form" data-id="' . htmlspecialchars($id) . '">
                        <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                        <button type="button" class="btn btn-danger btn-custom delete-btn"> <!-- Muda o tipo para button -->
                            <i class="fas fa-times"></i> Excluir
                        </button>
                    </form>';
    
    return $botaoEditar . ' ' . $botaoExcluir; // Retorna os botões concatenados
}

function gerarLinkVaga($url, $texto) {
    return '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($texto) . '</a>';
}
?>
