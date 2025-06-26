<?php
require_once("../config/conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST['nome'];
  $quantidade = $_POST['quantidade'];
  $validade = $_POST['validade'];

  $stmt = $pdo->prepare("INSERT INTO estoque (nome, quantidade, validade) VALUES (:nome, :quantidade, :validade)");
  $stmt->bindValue(':nome', $nome);
  $stmt->bindValue(':quantidade', $quantidade);
  $stmt->bindValue(':validade', $validade);
  $stmt->execute();

  header("Location: controleestoque.php");
}
?>