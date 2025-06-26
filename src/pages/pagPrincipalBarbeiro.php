<?php require_once("../includes/autenGestor.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pagina principal - Barbeiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./../assets/css/pagPrincipalBarbeiro.css" />
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
    <div class="container shadow">
      <main class="container py-4">

        <div
          class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
          <h1 class="mb-2 mb-sm-0 fw-semibold">Tudo beleza, <span class="text-success fw-bold"><?= htmlspecialchars($user_logado->nome) ?></span></h1>
        </div>

        <div class="text-center">
          <h1 class="fw-semibold text-success display-4 display-sm-1">R$ 760,00</h1>
          <h6 class="mt-2 fw-semibold text-center">Faturamento do mês</h6>
          <a href="" class="link" style="margin: 0 auto;"><small>Ver mais</small></a>
        </div>

        <br>
        <br>
        <div
          class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
          <h5 class="mb-2 mb-sm-0 fw-semibold">Agendamentos a confirmar</h5>
        </div>

        <div class="row g-3">

          <div class="col-12">
            <div class="card perfil-card shadow-sm">
              <div class="card-body d-flex justify-content-between align-items-start flex-column flex-sm-row">
                <div class="d-flex align-items-center me-sm-3 mb-3 mb-sm-0">
                  <div class="icon-box me-3">
                    <i class="bi bi-scissors" style="transform: rotate(90deg); font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Serviços: Corte comum, barba e sobrancelhas, alisamento, reflexo.</h6>
                    <div><small>Cliente:<span class="text-success fw-bold"> Pedro Henrique</span></small></div>
                    <div><small>Data:<span class="text-success fw-bold"> 15/05/2025</span></small></div>
                    <div><small>Hora agendada:<span class="text-success fw-bold"> 09:00hrs</span></small></div>
                    <div><small>Valor a receber:<span class="text-success fw-bold"> R$ 80,00</span></small></div>
                  </div>
                </div>
                <div class="d-flex">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-check-lg fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-x fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card perfil-card shadow-sm">
              <div class="card-body d-flex justify-content-between align-items-start flex-column flex-sm-row">
                <div class="d-flex align-items-center me-sm-3 mb-3 mb-sm-0">
                  <div class="icon-box me-3">
                    <i class="bi bi-scissors" style="transform: rotate(90deg); font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Serviços: Corte comum, barba e sobrancelhas, alisamento.</h6>
                    <div><small>Cliente:<span class="text-success fw-bold"> Julio César</span></small></div>
                    <div><small>Data:<span class="text-success fw-bold"> 15/05/2025</span></small></div>
                    <div><small>Hora agendada:<span class="text-success fw-bold"> 11:30hrs</span></small></div>
                    <div><small>Valor a receber:<span class="text-success fw-bold"> R$ 35,00</span></small></div>
                  </div>
                </div>
                <div class="d-flex">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-check-lg fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-x fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card perfil-card shadow-sm">
              <div class="card-body d-flex justify-content-between align-items-start flex-column flex-sm-row">
                <div class="d-flex align-items-center me-sm-3 mb-3 mb-sm-0">
                  <div class="icon-box me-3">
                    <i class="bi bi-scissors" style="transform: rotate(90deg); font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Serviços: Corte comum, alisamento, reflexo.</h6>
                    <div><small>Cliente:<span class="text-success fw-bold"> Felipe Silva</span></small></div>
                    <div><small>Data:<span class="text-success fw-bold"> 15/05/2025</span></small></div>
                    <div><small>Hora agendada:<span class="text-success fw-bold"> 14:00hrs</span></small></div>
                    <div><small>Valor a receber:<span class="text-success fw-bold"> R$ 50,00</span></small></div>
                  </div>
                </div>
                <div class="d-flex">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-check-lg fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-x fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="" class="link" style="margin: 0 auto;"><small>Ver mais</small></a>
          </div>


          <div
            class="d-flex justify-content-between align-items-center mb-1 flex-column flex-sm-row text-center text-sm-start">
            <h5 class="mb-2 mt-2 mb-sm-0 fw-semibold">Meu Estoque</h5>
          </div>

          <div class="col-12">
            <div class="card perfil-card shadow-sm ">
              <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex align-items-center">
                  <div class="icon-box me-3">
                    <i class="bi bi-droplet fs-4"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                    <small>Quantidade em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3 mt-sm-0">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-pencil-square fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-trash fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card perfil-card shadow-sm">
              <div class="card-body w-100 d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex align-items-center">
                  <div class="icon-box me-3">
                    <i class="bi bi-droplet fs-4"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Gel</h6>
                    <small>Quantidade em estoque: <span class="text-danger fw-bold">4 unidades</span></small>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3 mt-sm-0">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-pencil-square fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-trash fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="card perfil-card shadow-sm">
              <div class="card-body w-100 d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex align-items-center">
                  <div class="icon-box me-3">
                    <i class="bi bi-droplet fs-4"></i>
                  </div>
                  <div>
                    <h6 class="mb-1 fw-semibold">Shampoo 500ml</h6>
                    <small>Quantidade em estoque: <span class="text-success fw-bold">12 unidades</span></small>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3 mt-sm-0">
                  <button class="btn btn-sm btn-success me-1">
                    <i class="bi bi-pencil-square fs-5"></i>
                  </button>
                  <button class="btn btn-sm btn-danger ms-1">
                    <i class="bi bi-trash fs-5"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="" class="link" style="margin: 0 auto;"><small>Ver mais</small></a>
          </div>

        </div>
      </main>

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

    </div>

    <script src="./../assets/js/mododark.js"></script>
    <script src="./../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>