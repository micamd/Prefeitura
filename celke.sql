-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/12/2023 às 03:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `numero` int(11) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `prazo` date NOT NULL,
  `contribuinte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `protocolo`
--

INSERT INTO `protocolo` (`numero`, `descricao`, `data`, `prazo`, `contribuinte`) VALUES
(1, 'blblblla', '2022-07-22', '2025-07-22', ''),
(2, 'blblblla', '2022-07-22', '2025-07-22', ''),
(3, 'blblblla', '2023-11-30', '2023-12-02', 'fddgtbjuujnbhh');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `cpf` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `data`, `cpf`, `sexo`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `created`, `modified`) VALUES
(1, 'micaelle', '0000-00-00', 2147483647, '0', 'sao leopoldo', 'campina', 'guilherme', '90', 'casa', 2147483647, NULL),
(2, 'micaelle', '0000-00-00', 2147483647, 'feminino', 'sao leopoldo', 'campina', 'guilherme', '90', 'casa', 2147483647, NULL),
(3, 'micaelle', '0000-00-00', 2147483647, 'feminino', 'sao leopoldo', 'campina', 'guilherme', '90', 'casa', 2147483647, NULL),
(4, 'micaelle', '2023-12-06', 2147483647, 'feminino', 'sao leopoldo', 'campina', 'guilherme', '90', 'casa', 2147483647, NULL),
(5, 'micaelle', '2023-12-13', 2147483647, 'feminino', 'sao leopoldo', 'campina', 'guilherme antonio stumpf', '90', 'casa', 2147483647, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`numero`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
