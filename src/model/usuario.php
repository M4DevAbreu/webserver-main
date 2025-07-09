<?php
require_once __DIR__ . '/../config/conexao.php';

class Usuario
{
    public static function buscarPorEmail(string $email)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
