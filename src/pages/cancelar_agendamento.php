<?php
require_once("../config/conexao.php");

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = $pdo->prepare("UPDATE agendamentos SET status = 'cancelado' WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: pagPrincipalBarbeiro.php");
exit;
