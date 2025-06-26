<?php require_once("../includes/autenGestor.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meu Estoque</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./../assets/css/controleestoque.css"/>
  <link rel="stylesheet" href="./../assets/css/footer.css"/>
  <link rel="stylesheet" href="./../assets/css/headerbarbeiro.css"/>
   <link rel="stylesheet" href="./../assets/css/tema.css">
</head>

<body>

 <div class="container">
  <header id="inicio">
    <?php
      include_once("../includes/headerbarbeiro.html");
    ?>
    </header>
 <div class="container shadow">
   
    <main class="container py-4">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-sm-row text-center text-sm-start">
        <h5 class="mb-2 mb-sm-0 fw-semibold">Meu Estoque</h5>
        <button class="btn btn-success">Novo equipamento</button>
      </div>
      <div class="row g-3">
   
        <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>

         <div class="col-12">
          <div class="card estoque-card shadow-sm">
            <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
              <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                  <img src="./../assets/images/alcool.png" width="32" alt="Produto" />
                </div>
                <div>
                  <h6 class="mb-1 fw-semibold">Álcool 70°</h6>
                  <small>Quant. em estoque: <span class="text-success fw-bold">6 unidades</span></small>
                </div>
              </div>
              <div class="d-flex align-items-center mt-3 mt-sm-0">
                <button class="btn btn-sm btn-outline-secondary me-1">-</button>
                <span class="mx-2 fw-semibold">6</span>
                <button class="btn btn-sm btn-outline-secondary ms-1">+</button>
              </div>
            </div>
          </div>
        </div>
   
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
