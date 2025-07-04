<?php require_once("../includes/autenGestor.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Perfil do cliente </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./../assets/css/perfilCliente.css" />
  <link rel="stylesheet" href="./../assets/css/footer.css" />
   <link rel="stylesheet" href="./../assets/css/tema.css">
</head>
<body>
  <header>
      <header id="inicio">
        <?php
          include_once("../includes/headerbarbeiro.html");
        ?>
      </header>
  <main class="container py-4">
    
          <div class="user-container">
    
            <div class="user-info-box">
              <h6 class="mb-0 fw-bold text-center">189</h6>
              <p class="text-muted">Serviços Concluidos</p>
            </div>
    
    
            <div class="position-relative d-inline-block">
              <i class="bi bi-person-circle" style="font-size: 130px;"></i>
              <a href="" class="position-absolute bottom-0 end-0 translate-middle p-1 rounded-circle" style="font-size: 22px; color:white;">
              <i class="bi bi-plus-circle-fill"></i>
            </a>
            </div>
    
            <div class="user-info-box">
              <h6 class="mb-0 fw-bold text-center">47</h6>
              <p class="text-muted">Serviços Cancelados</p>
            </div>
    
          </div>
    
          <h5 class="mt-2 fw-semibold text-center">Matheus Silva</h5>
         <br>
    
          <div class="bloc-funcoes">
              <div class="item-bloc d-flex justify-content-between align-items-center py-2 border-bottom">
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <h6 class="title mb-0">Agendamentos Concluídos</h6>
                    </div>
                    <p class="mb-0">Confira seu histórico de seriços realizados</p>
                  </div>
                  <i class="bi bi-arrow-right fs-5"></i>
                </div>
                <div class="item-bloc d-flex justify-content-between align-items-center py-2 border-bottom">
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <h6 class="title mb-0">Agendamentos em andamento</h6>
                      </div>
                      <p class="mb-0">Confira seus agendamentos marcados</p>
                  </div>
                  <i class="bi bi-arrow-right fs-5"></i>
                </div>
                <div class="item-bloc d-flex justify-content-between align-items-center py-2 border-bottom">
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <h6 class="title mb-0">Meu Estoque</h6>
                      </div>
                      <p class="mb-0">Gerencie os itens do seu estoque</p>
                  </div>
                  <i class="bi bi-arrow-right fs-5"></i>
                </div>
                   <div class="item-bloc d-flex justify-content-between align-items-center py-2 border-bottom">
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <h6 class="title mb-0">Minhas Despesas</h6>
                      </div>
                      <p class="mb-0">Gerencie as despesas da sua barbearia</p>
                  </div>
                  <i class="bi bi-arrow-right fs-5"></i>
                </div>
                <div class="item-bloc d-flex justify-content-between align-items-center py-2 border-bottom">
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <h6 class="title mb-0">Sair do app</h6>
                      </div>
                      <p class="mb-0">Fazer log out do aplicativo</p>
                  </div>
                  <i class="bi bi-arrow-right fs-5"></i>
                </div>
          </div>
          <div class="bloc-funcoes mt-4">
              <div class="item-bloc border-bottom">
                  <div class="d-flex align-items-center mb-1">
                  <h6 class="title">Política de privacidade</h6>
                  </div>
                  <p class="text-sm-start">Leia nossas políticas e termos de uso do App</p>
              </div>
    
              <div class="item-bloc py-2 border-bottom">
                  <div class="d-flex align-items-center mb-1">
                  <h6 class="title">Versão do App e notas</h6>
                  </div>
                  <p class="text-sm-start" >Confira a versão do aplicativo e notas técnicas</p>
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
  <script src="./../assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>