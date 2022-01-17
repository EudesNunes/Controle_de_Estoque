-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2021 às 20:11
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paraguai_importados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

CREATE TABLE `entradas` (
  `etd_codigo` int(11) NOT NULL,
  `etd_nome` varchar(50) NOT NULL,
  `etd_qtd` int(11) NOT NULL,
  `etd_preco` decimal(10,2) NOT NULL,
  `etd_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`etd_codigo`, `etd_nome`, `etd_qtd`, `etd_preco`, `etd_data`) VALUES
(2, 'pneu', 65, '122.30', '2021-11-03'),
(8, 'tapauer', 50, '20.99', '2021-11-04'),
(10, 'calça', 55, '69.99', '2021-11-18'),
(14, 'teclado', 20, '52.25', '2022-02-10'),
(16, 'carvão', 99, '5.66', '2021-11-06'),
(17, 'borracha', 666, '6.66', '2021-06-06'),
(18, 'mandioquinha', 3, '1.00', '2021-11-21'),
(19, 'tapauer', 2, '5.00', '2021-11-09'),
(20, 'produto', 20, '16.00', '2021-11-23');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`etd_codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `entradas`
--
ALTER TABLE `entradas`
  MODIFY `etd_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
