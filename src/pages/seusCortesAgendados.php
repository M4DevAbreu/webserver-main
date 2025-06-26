<?php require_once("../includes/autenGestor.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./../assets/css/cortesAgendados.css">
  <link rel="stylesheet" href="./../assets/css/footer.css">
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css">
  <link rel="stylesheet" href="./../assets/css/tema.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <title>Seus Cortes Agendados</title>
</head>
<body>
    <header id="inicio">
    <?php
      include_once("../includes/headerbarbeiro.html");
    ?>
    </header>
  <div class="container shadow">
    <div class="container py-4">
      <h2 class="mb-3">Seus Serviços Agendados</h2>

      <div class="card shadow mb-4">
          <div class="card-body p-0" style="height: auto;">
            <div class="d-flex" style="height: 100%;">
    
              <!-- Coluna da data, ocupando 100% da altura -->
              <!-- DIV PRETA (data/hora) -->
              <div class="bg-dark text-white text-center div-data-hora">
                <p class="mb-1">Sexta-feira<br>22 Nov-14h</p>
                <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                <p class="mb-0">A pagar<br> R$50.00</p>
              </div>
    
              <!-- Coluna do conteúdo restante -->
              <div class="flex-grow-1 p-3 d-flex gap-3">
                <div class="d-flex align-items-center mb-2 gap-3">
                  <div class="rounded-circle border border-success p-2">
                    <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40px">
                  </div>
                  <p class="corte-descricao">Corte comum, barba
                      e sombracelhas, tintura,
                      alisamento, reflexo</p>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-end pe-3 gap-2">
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/edit.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/trash-bin.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card shadow mb-4">
          <div class="card-body p-0" style="height: auto;">
            <div class="d-flex" style="height: 100%;">
    
              <!-- Coluna da data, ocupando 100% da altura -->
              <!-- DIV PRETA (data/hora) -->
              <div class="bg-dark text-white text-center div-data-hora">
                <p class="mb-1">Sexta-feira<br>22 Nov-14h</p>
                <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                <p class="mb-0">A pagar<br> R$50.00</p>
              </div>
    
              <!-- Coluna do conteúdo restante -->
              <div class="flex-grow-1 p-3 d-flex gap-3">
                <div class="d-flex align-items-center mb-2 gap-3">
                  <div class="rounded-circle border border-success p-2">
                    <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40px">
                  </div>
                  <p class="corte-descricao">Corte comum, barba
                      e sombracelhas, tintura,
                      alisamento, reflexo</p>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-end pe-3 gap-2">
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/edit.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/trash-bin.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                </div>
            </div>
          </div>
        </div>

         <div class="card shadow mb-4">
          <div class="card-body p-0" style="height: auto;">
            <div class="d-flex" style="height: 100%;">
    
              <!-- Coluna da data, ocupando 100% da altura -->
              <!-- DIV PRETA (data/hora) -->
              <div class="bg-dark text-white text-center div-data-hora">
                <p class="mb-1">Sexta-feira<br>22 Nov-14h</p>
                <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                <p class="mb-0">A pagar<br> R$50.00</p>
              </div>
    
              <!-- Coluna do conteúdo restante -->
              <div class="flex-grow-1 p-3 d-flex gap-3">
                <div class="d-flex align-items-center mb-2 gap-3">
                  <div class="rounded-circle border border-success p-2">
                    <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40px">
                  </div>
                  <p class="corte-descricao">Corte comum, barba
                      e sombracelhas, tintura,
                      alisamento, reflexo</p>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-end pe-3 gap-2">
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/edit.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/trash-bin.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
         <div class="card shadow mb-4">
          <div class="card-body p-0" style="height: auto;">
            <div class="d-flex" style="height: 100%;">
    
              <!-- Coluna da data, ocupando 100% da altura -->
              <!-- DIV PRETA (data/hora) -->
              <div class="bg-dark text-white text-center div-data-hora">
                <p class="mb-1">Sexta-feira<br>22 Nov-14h</p>
                <hr class="border-light my-2" style="border-top: 1px solid #fff; width: 80%; margin: 0 auto;">
                <p class="mb-0">A pagar<br> R$50.00</p>
              </div>
    
              <!-- Coluna do conteúdo restante -->
              <div class="flex-grow-1 p-3 d-flex gap-3">
                <div class="d-flex align-items-center mb-2 gap-3">
                  <div class="rounded-circle border border-success p-2">
                    <img src="./../assets/images/scissors.svg" alt="Ícone de tesoura" width="40px">
                  </div>
                  <p class="corte-descricao">Corte comum, barba
                      e sombracelhas, tintura,
                      alisamento, reflexo</p>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-end pe-3 gap-2">
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/edit.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                  <div class="rounded-circle bg-success d-flex justify-content-center align-items-center" style="width: 35px; height: 35px;">
                    <a href="#"><img src="./../assets/images/trash-bin.png" width="15" alt="editar" style="display: block; object-fit: contain;"></a>
                  </div>
                </div>
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
  <script src="./../assets/js/mododark.js"></script>
</body>
</html>

