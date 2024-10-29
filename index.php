<?php 
require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <h2>Vagas cadastradas</h2>

    <form class="form-add-vaga" action="<?= $BASE_URL ?>add_vaga.php" method="POST">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Adicionar nova vaga
        </button>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Opções</th>
                <th>Status</th>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Localização</th>
                <th>Link</th>
                <th>Salário</th>
                <th>Data de aplicação</th>
                <th>Data de retorno</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($vagas): ?>
                <?php foreach ($vagas as $row): ?>
                    <tr>
                        <td><?= gerarBotoes($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['status']) ?></td>
                        <td><?= htmlspecialchars($row['empresa']) ?></td>
                        <td><?= htmlspecialchars($row['cargo']) ?></td>
                        <td><?= htmlspecialchars($row['localizacao']) ?></td>
                        <td><?= gerarLinkVaga($row['link_vaga'], $row['link_vaga']) ?></td>
                        <td><?= formatarValorEmReais($row['salario']) ?></td>
                        <td><?= formadaData($row['data_aplicacao']) ?></td>
                        <td><?= formadaData($row['data_retorno']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">Nenhuma vaga cadastrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
require_once("templates/footer.php");
?>
