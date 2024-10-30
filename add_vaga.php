<?php
require_once("templates/header.php"); // Inclui o header
require_once("includes/functions.php"); // Inclui as funções auxiliares, caso estejam sendo usadas para formatação
?>

<div id="main-container" class="container">
    <h2>Adicionar Nova Vaga</h2>

    <!-- Formulário para adicionar uma nova vaga -->
    <form action="save_vaga.php" method="POST">
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" required>
        </div>

        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>

        <div class="form-group">
            <label for="localizacao">Localização</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" required>
        </div>

        <div class="form-group">
            <label for="salario">Salário (R$)</label>
            <input type="text" class="form-control" id="salario" name="salario" required>
        </div>

        <div class="form-group">
            <label for="link_vaga">Link da Vaga</label>
            <input type="url" class="form-control" id="link_vaga" name="link_vaga" required>
        </div>

        <div class="form-group">
            <label for="data_aplicacao">Data de Aplicação</label>
            <input type="date" class="form-control" id="data_aplicacao" name="data_aplicacao" required>
        </div>

        <div class="form-group">
            <label for="data_retorno">Data de Retorno</label>
            <input type="date" class="form-control" id="data_retorno" name="data_retorno">
        </div>

        <!-- Botão para salvar a vaga -->
        <button type="submit" class="btn btn-primary">Salvar Vaga</button>
    </form>
</div>

<?php
require_once("templates/footer.php"); // Inclui o footer
?>
