<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="m-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/headerindex.css">
    <link rel="stylesheet" href="/assets/css/tema.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-body-tertiary">
    <header id="inicio">
        <?php
          include_once __DIR__ . '/../../includes/headerindex.html';
        ?>
      </header>
    <div class="container shadow">
        <main class="w-100 form-container">
            <form action="/../controller/usuarioController.php" method="POST">
    <img src="/assets/images/logotipoVertical.png" class="mb-3" height="350" width="350" />
    <h1 class="h3 fw-normal">Agende seu corte de cria agora mesmo no nosso App!</h1>
    <h1>Login</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required />
        <label for="floatingInput">Email</label>
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Senha" required />
        <label for="floatingPassword">Senha</label>
    </div>

    <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Lembrar-me
        </label>
    </div>

    <button type="submit" class="btn btntestcor py-2">Entrar</button>
</form>
        </main>
    </div>

    <footer id="final">
        <?php
          include_once __DIR__ . '/../../includes/footer.html';
        ?>
    </footer>
    <script src="./../assets/js/mododark.js"></script>
</body>
</html>
