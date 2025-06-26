  <!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/headerindex.css" />
      <link rel="stylesheet" href="/assets/css/footer.css" />
      <link rel="stylesheet" href="/assets/css/cadastro.css" />
      <link rel="stylesheet" href="./../assets/css/tema.css">
  </head>
  <body>
    <header id="inicio">
      <?php
        include_once("../includes/headerindex.html");
      ?>
    </header>  
    <div class="container shadow">
      <main>
        <div class="container">
          <div class="form-container mx-auto my-5 p-4 shadow-sm rounded bg-white">
            <h2 class="form-title text-center mb-4">Criar uma nova conta</h2>
            <form action="../pages/processa_cadastro.php" method="POST">
              <div class="row mb-3">
                <div class="col-sm-12 col-md-6 mb-2 mb-md-0">
                  <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="col-sm-12 col-md-6">
                  <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                </div>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="cpf" placeholder="CPF">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="endereco" placeholder="Endereço">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
              </div>
              <div class="mb-3">
                <label class="form-label d-block">Gênero</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="genero" id="feminino" value="Feminino">
                  <label class="form-check-label" for="feminino">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino">
                  <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="genero" id="personalizado" value="Personalizado">
                  <label class="form-check-label" for="personalizado">Personalizado</label>
                </div>
              </div>
              <div class="d-grid">
              <button type="submit" class="btn btn-success">Cadastre-se</button>
              </div>
              <div class="mt-3 text-center">
                <small>Já tem uma conta? <a href="../pages/login.php">Faça login</a></small>
              </div>
            </form>
          </div>
        </div>
            <div>
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
      </main>
    </div>
  </body>
  </html>
