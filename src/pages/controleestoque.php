<?php 
require_once("../includes/autenGestor.php"); 
require_once("../config/conexao.php"); 

// Tratar exclusão
if (isset($_GET['excluir'])) {
    $idExcluir = (int) $_GET['excluir'];
    $del = $pdo->prepare("DELETE FROM estoque WHERE id = :id");
    $del->bindValue(":id", $idExcluir);
    $del->execute();
    header("Location: controleestoque.php");
    exit;
}

// Buscar itens ordenados
$sql = $pdo->query("SELECT * FROM estoque ORDER BY nome ASC");
$itens = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Estoque</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./../assets/css/controleestoque.css"/>
  <link rel="stylesheet" href="./../assets/css/footer.css"/>
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css"/>
  <link rel="stylesheet" href="./../assets/css/tema.css">
</head>

<body>
  <div class="container">
    <header id="inicio">
      <?php include_once("../includes/headerbarbeiro.html"); ?>
    </header>

    <div class="container shadow">
      <main class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
          <h5 class="mb-2 mb-sm-0 fw-semibold">Meu Estoque</h5>
          <a href="cadastro_item.php" class="btn btn-success">Novo equipamento</a>
        </div>

        <div class="row g-3">
          <?php foreach ($itens as $item): ?>
            <div class="col-12">
              <div class="card estoque-card shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                  <div class="d-flex align-items-center">
                    <div class="icon-box me-3">
                      <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                    </div>
                    <div>
                      <h6 class="mb-1 fw-semibold"><?= htmlspecialchars($item['nome']) ?></h6>
                      <small>Quant. em estoque: <span class="text-success fw-bold"><?= $item['quantidade'] ?> unidades</span></small><br>
                      <small>
                        Validade: <span class="text-muted">
                          <?php 
                            if (!empty($item['validade']) && $item['validade'] != "0000-00-00") {
                              echo date("d/m/Y", strtotime($item['validade']));
                            } else {
                              echo "<i>Não informado</i>";
                            }
                          ?>
                        </span>
                      </small>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3 mt-sm-0">
                    <a href="editar_item.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-success me-1" title="Editar">
                      <i class="bi bi-pencil-square fs-5"></i>
                    </a>
                    <a href="?excluir=<?= $item['id'] ?>" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Excluir esse item?')" title="Excluir">
                      <i class="bi bi-trash fs-5"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </main>
    </div>

    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <ul class="lista d-flex justify-content-center flex-wrap gap-3 mb-3">
          <li><a href="#" class=" px-2 links">Início</a></li>
          <li><a href="#" class=" px-2 links">Serviços</a></li>
          <li><a href="#" class=" px-2 links">Contatos</a></li>
          <li><a href="#" class=" px-2 links">Sobre</a></li>
        </ul>
        <div class="footer-divider"></div>
        <p class="mb-0">&copy; 2025 StyleHub, Inc</p>
      </div>
    </footer>
  </div>

  <script src="./../assets/js/mododark.js"></script>
  <script src="./../assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
