<?php
require_once("config/db.php");

$id = $_GET['id'] ?? null;

if ($id) {
    try {
        $stmt = $conn->prepare("SELECT * FROM vagas_cadastradas WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $vaga = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($vaga): ?>
            <h5>Empresa: <?= htmlspecialchars($vaga['empresa']) ?></h5>
            <p>Cargo: <?= htmlspecialchars($vaga['cargo']) ?></p>
            <p>Localização: <?= htmlspecialchars($vaga['localizacao']) ?></p>
            <p>Salário: R$ <?= htmlspecialchars(number_format($vaga['salario'], 2, ',', '.')) ?></p>
            <p>Data de Aplicação: <?= date("d/m/Y", strtotime($vaga['data_aplicacao'])) ?></p>
            <?php if ($vaga['data_retorno']): ?>
                <p>Data de Retorno: <?= date("d/m/Y", strtotime($vaga['data_retorno'])) ?></p>
            <?php endif; ?>
            <p><a href="<?= htmlspecialchars($vaga['link_vaga']) ?>" target="_blank">Link da Vaga</a></p>
            <p>Benefícios: <?= htmlspecialchars($vaga['beneficios']) ?></p>
            <p>Requisitos: <?= htmlspecialchars($vaga['requisitos']) ?></p>
        <?php else: ?>
            <p>Vaga não encontrada.</p>
        <?php endif;
    } catch (PDOException $e) {
        echo "<p>Erro ao buscar vaga: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>ID de vaga não fornecido.</p>";
}
?>