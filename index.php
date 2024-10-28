<?php 
   require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <h2>Vagas cadastradas</h2>

    <form action="<?= $BASE_URL ?>add_vaga.php" method="POST">
        <!-- <input type="hidden" name="type" value="delete"> -->
        <!-- <input type="hidden" name="id" value="<?= $movie->id ?>"> -->
        <button type="submit" class="delete-btn">
            <i class="fas fa-times"></i> Adicionar nova vaga
        </button>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
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
                        <td><?= htmlspecialchars($row['status']) ?></td>
                        <td><?= htmlspecialchars($row['empresa']) ?></td>
                        <td><?= htmlspecialchars($row['cargo']) ?></td>
                        <td><?= htmlspecialchars($row['localizacao']) ?></td>
                        <td><a href="<?= htmlspecialchars($row['link_vaga']) ?>" target="_blank"><?= htmlspecialchars($row['link_vaga']) ?></a></td>
                        <td><p>R$ <?= htmlspecialchars($row['salario']) ?></p></td>
                        <td><?= htmlspecialchars($row['data_aplicacao']) ?></td>
                        <td><?= htmlspecialchars($row['data_retorno']) ?></td>
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