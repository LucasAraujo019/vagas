<?php 
    require_once("globals.php");
    require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de vagas</title>
    <!-- <link rel="short icon" href="<?= $BASE_URL ?>img/logo.png"/> -->
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
            <a  href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/procura-de-emprego.png" alt="Gestão de vagas" id="logo">
                <span id="facil-title">Gestão de vagas</span>
            </a>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h2>Relação de Contratos</h2>

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
                <?php if ($contracts): ?>
                    <?php foreach ($contracts as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['nome_banco']) ?></td>
                            <td><?= htmlspecialchars($row['verba']) ?></td>
                            <td><?= htmlspecialchars($row['codigo_contrato']) ?></td>
                            <td><?= htmlspecialchars($row['data_inclusao']) ?></td>
                            <td><?= htmlspecialchars($row['valor']) ?></td>
                            <td><?= htmlspecialchars($row['2']) ?></td>
                            <td><?= htmlspecialchars($row['3']) ?></td>
                            <td><?= htmlspecialchars($row['4']) ?></td>
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

    <footer id="footer">
        <p>&copy; 2024 - Lucas Araújo</p>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.js" integrity="sha512-KCgUnRzizZDFYoNEYmnqlo0PRE6rQkek9dE/oyIiCExStQ72O7GwIFfmPdkzk4OvZ/sbHKSLVeR4Gl3s7s679g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>