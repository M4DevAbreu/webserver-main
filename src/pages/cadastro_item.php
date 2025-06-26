<?php require_once("../includes/autenGestor.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastrar novo item</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./../assets/css/controleestoque.css" />
  <link rel="stylesheet" href="./../assets/css/footer.css" />
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css" />
  <link rel="stylesheet" href="./../assets/css/tema.css" />
</head>

<body>
  <div class="container">
    <header id="inicio">
      <?php include_once("../includes/headerbarbeiro.html"); ?>
    </header>

    <div class="container shadow">
      <main class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
          <h5 class="mb-2 mb-sm-0 fw-semibold">Cadastrar novo item</h5>
          <a href="controleestoque.php" class="btn btn-secondary">Voltar</a>
        </div>

        <form action="../pages/processa_cadastro_item.php" method="POST" class="row g-3">
          <div class="col-12">
            <label for="nome" class="form-label">Nome do item</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do item" required />
          </div>

          <div class="col-12">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" min="0" required />
          </div>

          <div class="col-12">
            <label for="validade" class="form-label">Data de validade</label>
            <input type="date" class="form-control" id="validade" name="validade" />
          </div>

          <div class="col-12 d-flex gap-2">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="controleestoque.php" class="btn btn-secondary">Cancelar</a>
          </div>
        </form>
      </main>
    </div>

    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <ul class="lista d-flex justify-content-center flex-wrap gap-3 mb-3">
          <li><a href="#" class="px-2 links">Início</a></li>
          <li><a href="#" class="px-2 links">Serviços</a></li>
          <li><a href="#" class="px-2 links">Contatos</a></li>
          <li><a href="#" class="px-2 links">Sobre</a></li>
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
