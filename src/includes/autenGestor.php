<?php
require_once("autenticacao.php");
if ($user_logado->tipo_usuario !== 'gestor' && $user_logado->tipo_usuario !== 'admin') {
    header("Location: /pages/paginainicial.php");
    exit;
}
