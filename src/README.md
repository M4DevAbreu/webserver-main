# StyleHub é um sistema de gerenciamento para barbearias, desenvolvido com HTML, CSS, JavaScript e PHP, focado em otimizar agendamentos, controle financeiro, estoque e localização de serviços.

#PARA FAZER
.atualizar header
.botão notificações
.mudar tudo para .php
.configurar bancode dados
.configurar composer
.configurar git ignore
.adicionar telas


#// Verifica se os dados chegaram corretamente
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
