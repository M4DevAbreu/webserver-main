<?php
session_start();
require_once("../config/conexao.php");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    $user = $sql->fetch(PDO::FETCH_OBJ);

    if ($user) {
        if (password_verify($senha, $user->senha)) {
            $_SESSION["logado"] = true;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_nome'] = $user->nome;
            $_SESSION['tipo_usuario'] = $user->tipo_usuario;

        // Verifica o tipo de usuário e redireciona para a página correta
            if ($user->tipo_usuario === 'gestor') {
            header("Location: /pages/pagPrincipalBarbeiro.php");
            } elseif ($user->tipo_usuario === 'admin') {
            header("Location: /pages/pagPrincipalBarbeiro.php");
            } else {
                header("Location: /pages/paginainicial.php");
            }
            exit;
        } else {
            die("Email ou senha inválidos.");
        }
    }
} else {
    die("Email ou senha inválidos.");
    }


