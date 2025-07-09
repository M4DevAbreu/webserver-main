<?php
session_start();
require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../model/Usuario.php';

// Captura dados do formulário
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Busca o usuário pelo e-mail
$user = Usuario::buscarPorEmail($email);

if ($user && password_verify($senha, $user->senha)) {
    // Define dados na sessão
    $_SESSION['logado'] = true;
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_nome'] = $user->nome;
    $_SESSION['tipo_usuario'] = $user->tipo_usuario;

    // Redireciona com base no tipo de usuário
    if ($user->tipo_usuario === 'gestor' || $user->tipo_usuario === 'admin') {
        header("Location: /src/view/gestor/pagPrincipalBarbeiro.php");
        exit;
    } else {
        header("Location: /src/view/cliente/paginainicial.php");
        exit;
    }
} else {
    // Login inválido
    die("Email ou senha inválidos.");
}
