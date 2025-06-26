-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 26/06/2025 às 11:43
-- Versão do servidor: 9.3.0
-- Versão do PHP: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `stylehub`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `genero` enum('feminino','masculino','personalizado') NOT NULL DEFAULT 'personalizado',
  `tipo_usuario` enum('cliente','gestor','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'cliente',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `cpf`, `email`, `telefone`, `endereco`, `senha`, `genero`, `tipo_usuario`, `ativo`, `data_criacao`) VALUES
(1, 'João', 'de abreu', '090.590.534-12', 'joao@email.com', '(63) 99295-7029', 'rua boa ', '$2y$12$ebNov0YKvWd0wDYT1RjTouj3MBp8mTLfLinkbP9n/XS4bo.lLr1Ny', 'masculino', 'cliente', 1, '2025-06-24 14:01:19'),
(2, 'matheus', 'de abreu', '090.590.534-12', 'matheusabreu2004silva1@gmail.com', '(63) 99295-7029', 'rua boa ', '$2y$12$48AeDdG4kv5SHJ6n/zdFU.v99QRVpaJeHOqqlHiKon.d.YjWY41X6', 'masculino', 'cliente', 1, '2025-06-24 14:03:20'),
(3, 'Chefe', 'de abreu', '090.590.534-12', 'editsneed@gmail.com', '(63) 99295-7029', 'rua boa ', '$2y$12$.aFkUoMME0RCvUNz3aTbHOZIBh9joS8Ev.0QJqO3NUvAqylvGsyOm', 'masculino', 'admin', 1, '2025-06-24 14:04:00'),
(4, 'Raianny', 'Silva', '567.890.789-23', 'raianny123@gmail.com', '(63) 99295-7029', 'rua boa ', '$2y$12$AfP0mghYGhjLJy.PPvJXxuIJy1ANYPkFLEskN7OJFtb/4J3iDj1f2', 'feminino', 'cliente', 1, '2025-06-26 11:41:21');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
