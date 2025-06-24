<?php
require_once("../config/conexao.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? '';
    $sobrenome = $_POST["sobrenome"] ?? '';
    $cpf = $_POST["cpf"] ?? '';
    $email = $_POST["email"] ?? '';
    $telefone = $_POST["telefone"] ?? '';
    $endereco = $_POST["endereco"] ?? '';
    $senha = $_POST["senha"] ?? '';
    $genero = $_POST["genero"] ?? 'personalizado';
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

try {
   $sql = $pdo->prepare("INSERT INTO usuarios (
    nome, sobrenome, cpf, email, telefone, endereco, senha, genero, tipo_usuario
    ) VALUES (
    :nome, :sobrenome, :cpf, :email, :telefone, :endereco, :senha, :genero, :tipo_usuario
    )");

    $tipo_usuario = "cliente";
    $sql->execute([
        ":nome" => $nome,
        ":sobrenome" => $sobrenome,
        ":cpf" => $cpf,
        ":email" => $email,
        ":telefone" => $telefone,
        ":endereco" => $endereco,
        ":senha" => $senha_hash,
        ":genero" => $genero,
        ":tipo_usuario" => $tipo_usuario
    ]);
    header("location: login.php?cadastro=sucesso");
} catch (PDOException $e) {
    echo "Erro ao Cadastrar: " . $e->getMessage();   
}

?>