-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2023 às 01:17
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `studio_estetica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome_adm` varchar(250) NOT NULL,
  `email_adm` varchar(250) NOT NULL,
  `senha_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'Kaylane Maria da S.', 'studioestetica2023@gmail.com', '12345'),
(2, 'Andressa carneiro', 'andressamariasilvacarneiro@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cliente1` varchar(250) NOT NULL,
  `telefone` int(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `servico` varchar(250) NOT NULL,
  `profissional` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `cliente1`, `telefone`, `email`, `servico`, `profissional`, `data`, `hora`) VALUES
(2, 'kaylane Maria', 123456789, 'kaylane2023@gamail.com', 'Cortes Masculinos - R$50', 'Pedro - Cabeleireiro', '2023-04-05', '08h às 09h'),
(5, 'Andreia Maria Silva ', 999999999, 'ams@gmail.com', 'Cortes Femininos - R$50', 'Pedro - Cabeleireiro', '2023-05-04', ' 09h às 10h'),
(6, 'Raquel Gomes ', 55556555, 'rg@gmail.com.br', 'Manicure em Gel- R$45,00', 'Camila - Manicure e Pedicure', '2023-05-25', '15h às 17h'),
(7, 'Andressa Silva ', 2147483647, 'as@gmail.com', 'Visagismo - R$50', 'Helena - Esteticista', '2023-05-26', '14h às 15h'),
(8, 'Lucas Almeida', 123456789, 'lucas@g', 'Massagem Relaxante - R$60,00', 'Guilherme - Massagista', '2023-05-15', '09h às 10h'),
(9, 'Luana da Silva', 23456789, 'luana@g', 'Visagismo - R$50', 'Juliana - Visagista', '2023-05-03', '08h às 09h'),
(10, 'Aparecida da Silva', 3456789, 'aparecida@g', 'Sobracelhas - R$30,00', 'Bruna - Lash Designer', '2023-05-24', '13h às 14h'),
(11, 'Natalia Almeida', 456789, 'natalia@g', 'Manicure em Gel- R$45,00', 'Camila - Manicure e Pedicure', '2023-05-25', '14h às 15h'),
(12, 'Melisa Silva', 567890, 'melisa@g', 'Alongamneto de cílios - R$80,00', 'Bruna - Lash Designer', '2023-05-27', '14h às 15h'),
(13, 'Luiz Felipe', 55555555, 'luiz@g', 'Banho de lua - R$110,00', 'Juliana - Visagista', '2023-05-25', '13h às 14h'),
(14, 'Felipe Jose', 44444444, 'felipe@g', 'Cortes Masculinos - R$25,00', 'Rodrigo Cintra - Cabeleireiro', '2023-05-31', '16h às 17h'),
(15, 'Ricardo Almeida', 33333333, 'ricardo@g', 'Cortes Masculinos - R$25,00', '', '2023-05-29', '14h às 15h');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
