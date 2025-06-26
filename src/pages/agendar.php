<?php
require_once("../includes/autenticacao.php"); // Garante que o usuário está logado
require_once("../config/conexao.php"); // Conexão com o banco de dados

header('Content-Type: application/json');

// Ativa mensagens de erro para debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Lê os dados JSON enviados pelo JavaScript
$dados = json_decode(file_get_contents("php://input"), true);

// Verifica se os dados chegaram corretamente
if (!$dados) {
    echo json_encode(['success' => false, 'message' => 'Nenhum dado recebido.']);
    exit;
}
// Extrai os dados com validação básica
$data = isset($dados['data']) ? $dados['data'] : null;
$hora = isset($dados['horario']) ? $dados['horario'] : null;
$servicos = isset($dados['servicos']) ? implode(', ', $dados['servicos']) : null;
$descricao = isset($dados['comentario']) ? $dados['comentario'] : '';
$valor = isset($dados['valor']) ? floatval($dados['valor']) : null;

// Valida os campos obrigatórios
if (!$data || !$hora || !$servicos || $valor === null) {
    echo json_encode(['success' => false, 'message' => 'Dados incompletos.']);
    exit;
}

// ID do cliente logado
$id_cliente = $user_logado->id;

// Prepara e executa a inserção no banco
try {
    $stmt = $pdo->prepare("INSERT INTO agendamentos (id_cliente, data, hora, servicos, valor, descricao) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$id_cliente, $data, $hora, $servicos, $valor, $descricao]);

    echo json_encode(['success' => true, 'message' => 'Agendamento realizado com sucesso.']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erro ao salvar no banco: ' . $e->getMessage()]);
}
