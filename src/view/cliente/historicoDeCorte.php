<?php ob_start(); require_once("../includes/autenticacao.php"); ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/assets/css/historicoDeCorte.css">
      <link rel="stylesheet" href="/assets/css/footer.css">
      <link rel="stylesheet" href="/assets/css/header.css">
      <link rel="stylesheet" href="/assets/css/tema.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
      <title>Histórico de Corte</title>

    </head>

  <body>
      <header id="inicio">
        <?php
          include_once("../includes/header.html");
        ?>
      </header>
    <div class="container">
      <main class="container py-4">
        <h2 class="mb-3">Seu Histórico de Cortes</h2>

        <div class="card shadow mb-4">
            <div class="card-body p-0" style="height: auto;">
              <div class="d-flex" style="height: 100%;">
          
                <!-- Coluna da data, ocupando 100% da altura -->
                <div class="bg-dark text-white text-center" style="width: 110px; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <p class="mb-1">Sexta-feira<br>22 Nov</p>
                  <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                  <p class="mb-0">14h</p>
                </div>
          
                <!-- Coluna do conteúdo restante -->
                <div class="flex-grow-1 p-3 d-flex gap-3" style="height: 100%">
                  <div class="d-flex flex-column align-items-center mb-2">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte A</p>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte B</p>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-end align-items-end pe-3">
                  <p class="text-end fw-bold valor-pago mb-2">Pago<br>R$50</p>
                </div>
                
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body p-0" style="height: auto;">
              <div class="d-flex" style="height: 100%;">
          
                <!-- Coluna da data, ocupando 100% da altura -->
                <div class="bg-dark text-white text-center" style="width: 110px; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <p class="mb-1">Terça-feira<br>13 Mai</p>
                  <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                  <p class="mb-0">12h</p>
                </div>
          
                <!-- Coluna do conteúdo restante -->
                <div class="flex-grow-1 p-3 d-flex gap-3" style="height: 100%">
                  <div class="d-flex flex-column align-items-center mb-2">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte A</p>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte B</p>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-end align-items-end pe-3">
                  <p class="text-end fw-bold valor-pago mb-2">Pago<br>R$50</p>
                </div>
                
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body p-0" style="height: auto;">
              <div class="d-flex" style="height: 100%;">
          
                <!-- Coluna da data, ocupando 100% da altura -->
                <div class="bg-dark text-white text-center" style="width: 110px; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <p class="mb-1">Sexta-feira<br>22 Nov</p>
                  <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                  <p class="mb-0">14h</p>
                </div>
          
                <!-- Coluna do conteúdo restante -->
                <div class="flex-grow-1 p-3 d-flex gap-3" style="height: 100%">
                  <div class="d-flex flex-column align-items-center mb-2">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte A</p>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte B</p>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-end align-items-end pe-3">
                  <p class="text-end fw-bold valor-pago mb-2">Pago<br>R$50</p>
                </div>
                
              </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-body p-0" style="height: auto;">
              <div class="d-flex" style="height: 100%;">
          
                <!-- Coluna da data, ocupando 100% da altura -->
                <div class="bg-dark text-white text-center" style="width: 110px; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                  <p class="mb-1">Sexta-feira<br>22 Nov</p>
                  <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                  <p class="mb-0">14h</p>
                </div>
          
                <!-- Coluna do conteúdo restante -->
                <div class="flex-grow-1 p-3 d-flex gap-3" style="height: 100%">
                  <div class="d-flex flex-column align-items-center mb-2">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte A</p>
                  </div>
                  <div class="d-flex flex-column align-items-center">
                    <div class="rounded-circle border border-success p-2">
                      <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40">
                    </div>
                    <p class="mb-0 fw-medium">Corte B</p>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-end align-items-end pe-3">
                  <p class="text-end fw-bold valor-pago mb-2">Pago<br>R$50</p>
                </div>
                
              </div>
            </div>
          </div>




      </main>
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
    
     <script src="/assets/js/mododark.js"></script>
  </body>

    </html>

