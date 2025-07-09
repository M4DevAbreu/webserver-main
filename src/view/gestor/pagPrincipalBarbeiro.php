<?php
require_once("../includes/autenGestor.php");
require_once("../config/conexao.php");

// Exclusão de itens do estoque
if (isset($_GET['excluir'])) {
  $idExcluir = (int) $_GET['excluir'];
  $del = $pdo->prepare("DELETE FROM estoque WHERE id = :id");
  $del->bindValue(":id", $idExcluir);
  $del->execute();
  header("Location: pagPrincipalBarbeiro.php");
  exit;
}

// Consulta do estoque
$sql = $pdo->prepare("SELECT * FROM estoque ORDER BY nome ASC");
$sql->execute();
$itens = $sql->fetchAll(PDO::FETCH_ASSOC);

// Consulta dos agendamentos pendentes com nome do cliente
$agendamentosSql = $pdo->prepare("
    SELECT a.*, u.nome AS cliente_nome
    FROM agendamentos a
    JOIN usuarios u ON a.id_cliente = u.id
    WHERE a.status = 'pendente'
    ORDER BY a.data, a.hora
");
$agendamentosSql->execute();
$agendamentos = $agendamentosSql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Página principal - Barbeiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./../assets/css/pagPrincipalBarbeiro.css" />
  <link rel="stylesheet" href="./../assets/css/footer.css" />
  <link rel="stylesheet" href="./../assets/css/tema.css">
</head>

<body>
  <header id="inicio">
    <?php include_once("../includes/headerbarbeiro.html"); ?>
  </header>

  <div class="container shadow">
    <main class="container py-4">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
        <h1 class="mb-2 mb-sm-0 fw-semibold">Tudo beleza, <span class="text-success fw-bold"><?= htmlspecialchars($user_logado->nome) ?></span></h1>
      </div>

      <div class="text-center">
        <h1 class="fw-semibold text-success display-4">R$ 760,00</h1>
        <h6 class="mt-2 fw-semibold">Faturamento do mês</h6>
        <a href="#" class="link"><small>Ver mais</small></a>
      </div>

      <br><br>

      <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
        <h5 class="mb-2 mb-sm-0 fw-semibold">Agendamentos a confirmar</h5>
      </div>

      <div class="row g-3">
        <?php if (!empty($agendamentos)): ?>
          <?php foreach ($agendamentos as $ag): ?>
            <div class="col-12">
              <div class="card perfil-card shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-start flex-column flex-sm-row">
                  <div class="d-flex align-items-center me-sm-3 mb-3 mb-sm-0">
                    <div class="icon-box me-3">
                      <i class="bi bi-scissors" style="transform: rotate(90deg); font-size: 1.5rem;"></i>
                    </div>
                    <div>
                      <h6 class="mb-1 fw-semibold">
                        Serviços: <?= htmlspecialchars($ag['servicos']) ?>
                      </h6>
                      <div><small>Cliente:<span class="text-success fw-bold"> <?= htmlspecialchars($ag['cliente_nome']) ?></span></small></div>
                      <div><small>Data:<span class="text-success fw-bold"> <?= date('d/m/Y', strtotime($ag['data'])) ?></span></small></div>
                      <div><small>Hora agendada:<span class="text-success fw-bold"> <?= htmlspecialchars(substr($ag['hora'], 0, 5)) ?></span></small></div>
                      <div><small>Valor a receber:<span class="text-success fw-bold"> R$ <?= number_format($ag['valor'], 2, ',', '.') ?></span></small></div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <a href="confirmar_agendamento.php?id=<?= $ag['id'] ?>" class="btn btn-sm btn-success me-1" title="Confirmar">
                      <i class="bi bi-check-lg fs-5"></i>
                    </a>
                    <a href="cancelar_agendamento.php?id=<?= $ag['id'] ?>" class="btn btn-sm btn-danger ms-1" title="Cancelar">
                      <i class="bi bi-x fs-5"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="col-12 text-center">
            <p class="text-muted">Nenhum agendamento pendente.</p>
          </div>
        <?php endif; ?>
      </div>

      <div class="text-center">
        <a href="listar_agendamentos.php" class="link" style="margin: 0 auto;"><small>Ver mais</small></a>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-1 flex-column flex-sm-row text-center text-sm-start">
        <h5 class="mb-2 mt-2 mb-sm-0 fw-semibold">Meu Estoque</h5>
      </div>

      <?php foreach ($itens as $item): ?>
        <div class="col-12">
          <div class="card perfil-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <i class="bi bi-droplet fs-4"></i>
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold"><?= htmlspecialchars($item['nome']) ?></h6>
                  <small>Quantidade em estoque:
                    <span class="<?= $item['quantidade'] <= 5 ? 'text-danger' : 'text-success' ?> fw-bold">
                      <?= htmlspecialchars($item['quantidade']) ?> unidades
                    </span>
                  </small><br>
                  <small>Validade:
                    <span class="fw-bold"><?= date('d/m/Y', strtotime($item['validade'])) ?></span>
                  </small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <a href="editar_item.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-success me-1">
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

      <div class="text-center mt-3">
        <a href="controleestoque.php" class="link"><small>Ver mais</small></a>
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

  <script src="./../assets/js/mododark.js"></script>
  <script src="./../assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
