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
        if ($senha === $user->senha) {
            $_SESSION["logado"] = true;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_nome'] = $user->nome;

            header("Location: /pages/paginainicial.php");
            exit;
        } else {
            die("Senha incorreta.");
        }
    } else {
        die("Email não encontrado.");
    }
} else {
    echo "Acesso inválido.";
}

