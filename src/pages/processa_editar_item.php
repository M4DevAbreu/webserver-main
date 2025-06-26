<?php
require_once("../includes/autenGestor.php");
require_once("../config/conexao.php");

if (
    isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['nome']) && !empty(trim($_POST['nome'])) &&
    isset($_POST['quantidade']) && $_POST['quantidade'] !== ''
) {
    $id = intval($_POST['id']);
    $nome = trim($_POST['nome']);
    $quantidade = intval($_POST['quantidade']);
    $validade = !empty($_POST['validade']) ? $_POST['validade'] : null;

    $sql = $pdo->prepare("UPDATE estoque SET nome = :nome, quantidade = :quantidade, validade = :validade WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':quantidade', $quantidade, PDO::PARAM_INT);
    $sql->bindValue(':validade', $validade);
    $sql->bindValue(':id', $id, PDO::PARAM_INT);

    if ($sql->execute()) {
        header("Location: ../pages/controleestoque.php?msg=editado");
        exit;
    } else {
        echo "Erro ao atualizar o item.";
    }
} else {
    echo "Dados inválidos.";
}
