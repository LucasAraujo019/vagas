<?php
require_once("templates/header.php");
require_once("includes/functions.php");
require_once("config/db.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;
$vaga = null;

if ($id) {
    $stmt = $conn->prepare("SELECT * FROM vagas_cadastradas WHERE id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $vaga = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<div id="main-container" class="container">
    <h2><?= $id ? "Editar Vaga" : "Adicionar Nova Vaga" ?></h2>

    <form action="save_vaga.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">

        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" value="<?= htmlspecialchars($vaga['empresa'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="<?= htmlspecialchars($vaga['cargo'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="localizacao">Localização</label>
            <input type="text" class="form-control" id="localizacao" name="localizacao" value="<?= htmlspecialchars($vaga['localizacao'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="salario">Salário (R$)</label>
            <input type="text" class="form-control" id="salario" name="salario" value="<?= htmlspecialchars($vaga['salario'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="link_vaga">Link da Vaga</label>
            <input type="url" class="form-control" id="link_vaga" name="link_vaga" value="<?= htmlspecialchars($vaga['link_vaga'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="data_aplicacao">Data de Aplicação</label>
            <input type="date" class="form-control" id="data_aplicacao" name="data_aplicacao" value="<?= htmlspecialchars($vaga['data_aplicacao'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="data_retorno">Data de Retorno</label>
            <input type="date" class="form-control" id="data_retorno" name="data_retorno" value="<?= htmlspecialchars($vaga['data_retorno'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label for="beneficios">Benefícios</label>
            <textarea class="form-control" id="beneficios" name="beneficios" rows="4" required><?php echo htmlspecialchars($vaga['beneficios'] ?? ''); ?></textarea>
        </div>

        <div class="form-group">
            <label for="requisitos">Requisitos</label>
            <textarea class="form-control" id="requisitos" name="requisitos" rows="4" required><?php echo htmlspecialchars($vaga['requisitos'] ?? ''); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary"><?= $id ? "Atualizar Vaga" : "Salvar Vaga" ?></button>
    </form>
</div>

<?php
require_once("templates/footer.php");
?>
