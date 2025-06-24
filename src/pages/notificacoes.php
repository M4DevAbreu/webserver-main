<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Notificações</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/header.css" />
  <link rel="stylesheet" href="./../assets/css/notificacoes.css" />
  <link rel="stylesheet" href="./../assets/css/footer.css" />
  <link rel="stylesheet" href="./../assets/css/tema.css">
  
</head>
<body>
    <header id="inicio">
    <?php
      include_once("../includes/header.html");
    ?>
    </header>
<div class="container shadow">
  
    <main class="container py-4">
      <div class="notification-list">
        <div class="notification-item" onclick="marcarComoLido(this)">
          <div class="d-flex align-items-center mb-1">
            <span class="dot me-2"></span>
            <h6 class="title">Atualize sua foto de perfil</h6>
          </div>
          <p>Você pode colocar a foto do seu último corte como foto de perfil. Vai ficar daora!</p>
        </div>
  
        <div class="notification-item" onclick="marcarComoLido(this)">
          <div class="d-flex align-items-center mb-1">
            <span class="dot me-2"></span>
            <h6 class="title">Faça seu primeiro agendamento</h6>
          </div>
          <p>Que tal já agendar seu primeiro corte? Aproveita e lança logo aquele corte Mec da semana!</p>
        </div>
       <div class="notification-item" onclick="marcarComoLido(this)">
          <div class="d-flex align-items-center mb-1">
            <span class="dot me-2"></span>
            <h6 class="title">Faça seu primeiro agendamento</h6>
          </div>
          <p>Que tal já agendar seu primeiro corte? Aproveita e lança logo aquele corte Mec da semana!</p>
        </div>
        <div class="notification-item" onclick="marcarComoLido(this)">
          <div class="d-flex align-items-center mb-1">
            <span class="dot me-2"></span>
            <h6 class="title">Atualize sua foto de perfil</h6>
          </div>
          <p>Se quiser, você pode colocar a foto do seu último corte como foto de perfil. Vai ficar de cria!</p>
        </div>
      </div>
  
      <div class="mt-4">
        <button class="btn btn-success w-100 fw-semibold py-2" onclick="marcarTudoComoLido()">Marcar tudo como lido</button>
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
  <script src="./../assets/js/notificacao.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
