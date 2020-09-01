-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 11:05 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `morada_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  `password_cliente` varchar(45) NOT NULL,
  `telefone_cliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `morada_cliente`, `email_cliente`, `password_cliente`, `telefone_cliente`) VALUES
(1, 'André', 'rua do andre', 'Gomes', '202cb962ac59075b964b07152d234b70', '123'),
(2, 'pedro', 'rua do pedro', 'pedro@pedro.com', '202cb962ac59075b964b07152d234b70', '123'),
(3, 'vitinho', '123', 'vitinho@vitinho.com', '202cb962ac59075b964b07152d234b70', '123'),
(4, 'joao', '123', 'joao@joao.com', '202cb962ac59075b964b07152d234b70', '123'),
(5, 'jose', '123', 'jose@jose.com', '202cb962ac59075b964b07152d234b70', '123'),
(6, 'claudia', '123', 'claudia@claudia.com', '202cb962ac59075b964b07152d234b70', '123'),
(7, 'Bruno Fernandes', 'rua de manchester', 'brunofernandes@gmail.com', '8c060fe5581f5786f0f155ffee112496', '920369258'),
(8, 'Bas Dost', 'rua da juve leo', 'basdost@cintonacabeca.com', '25f9e794323b453885f5181f1b624d0b', '123456789'),
(9, 'Hugo Oliveira', 'Rua do Hugo', 'Hugoliveira@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '960000000');

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_fantoche` int(11) NOT NULL,
  `fk_id_pagamento` int(11) NOT NULL,
  `data_compra` date DEFAULT current_timestamp(),
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id_compra`, `fk_id_cliente`, `fk_id_fantoche`, `fk_id_pagamento`, `data_compra`, `quantidade`) VALUES
(6, 1, 2, 1, '0000-00-00', 0),
(7, 6, 2, 1, '0000-00-00', 0),
(8, 6, 2, 1, '0000-00-00', 0),
(9, 6, 2, 1, '2020-03-01', 0),
(10, 6, 2, 1, '0000-00-00', 0),
(11, 6, 1, 1, '0000-00-00', 0),
(12, 6, 1, 1, '0000-00-00', 0),
(13, 4, 2, 1, '0000-00-00', 0),
(14, 4, 2, 1, '0000-00-00', 0),
(15, 4, 1, 2, '0000-00-00', 0),
(16, 4, 1, 2, '0000-00-00', 0),
(17, 4, 2, 1, '2020-03-01', 3),
(18, 4, 2, 1, '2020-03-01', 3),
(19, 4, 2, 1, '2020-03-01', 3),
(20, 6, 2, 1, '2020-03-01', 1),
(21, 6, 5, 1, '2020-03-01', 3),
(22, 6, 2, 1, '2020-03-01', 1),
(23, 6, 5, 1, '2020-03-01', 5),
(24, 6, 2, 1, '2020-03-01', 3),
(25, 9, 5, 1, '2020-03-01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `encomendas`
--

CREATE TABLE `encomendas` (
  `id_encomenda` int(11) NOT NULL,
  `fk_id_cliente` int(11) DEFAULT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `descricao_encomenda` text NOT NULL,
  `email_encomenda` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `encomendas`
--

INSERT INTO `encomendas` (`id_encomenda`, `fk_id_cliente`, `nome_cliente`, `descricao_encomenda`, `email_encomenda`) VALUES
(1, 2, 'pedro', 'quero um fantomine ', 'pedro@pedro.com');

-- --------------------------------------------------------

--
-- Table structure for table `fantoches`
--

CREATE TABLE `fantoches` (
  `id_fantoche` int(11) NOT NULL,
  `preco_fantoche` decimal(4,2) NOT NULL,
  `stock_fantoche` int(11) DEFAULT NULL,
  `detalhes_fantoche` text DEFAULT NULL,
  `foto_fantoche` varchar(100) NOT NULL,
  `nome_fantoche` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fantoches`
--

INSERT INTO `fantoches` (`id_fantoche`, `preco_fantoche`, `stock_fantoche`, `detalhes_fantoche`, `foto_fantoche`, `nome_fantoche`) VALUES
(1, '15.00', 20, ' - É um lobo muito tolo, totalmente inofensivo que adora doces mais do que tudo, o seu melhor amigo é o porco Joaquim e com ele vive grandes aventuras. ', 'alberto.png', 'Lobo Alberto '),
(2, '15.00', 17, ' - É uma velhinha simpática que adora desporto, conta muitas histórias, normalmente todas relacionadas com as aventuras que viveu quando era uma grande desportista. Não gosta de aparelhos eletrónicos porque não os compreende.', 'AvoCremilda.png', 'Avó Cremilda '),
(3, '15.00', 20, '– É um cão muito querido que tem o sonho de ser um chef muito famoso, contudo é péssimo cozinheiro. É muito tímido e está sempre metido em confusões, normalmente criadas pelo lobo Alberto. ', 'carlosrodrigocomlingua.png', 'Carlos Rodrigo'),
(4, '15.00', 20, '– Dudu o nome que todos lhe chamam, este leão é o médico, padeiro, polícia, florista, músico, dentista, no fundo tem todas as profissões e ninguém acha estranho.', 'leaoedu.png', 'Leão Edu'),
(5, '15.00', 12, '– O porco Joaquim é muito inteligente, que adora estudar e dormir longas sestas. O seu melhor amigo é o lobo Alberto, quando estão juntos tem tendência a fazer muitos disparates, divertindo-se muito. ', 'miniquim.png', 'Porco Joaquim'),
(6, '15.00', 20, '– É muito convencido, inconveniente e desagradável, sempre tentou deitar chamas pela boca, mas nunca conseguiu, algo que o lobo Alberto nunca o deixa esquecer. ', 'sebastião.png', 'Dragão Sebastião');

-- --------------------------------------------------------

--
-- Table structure for table `mensagens`
--

CREATE TABLE `mensagens` (
  `id_mensagem` int(11) NOT NULL,
  `fk_id_cliente` int(11) DEFAULT NULL,
  `texto_mensagem` text NOT NULL,
  `nome_cliente_mensagem` varchar(45) DEFAULT NULL,
  `email_cliente_mensagem` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id_pagamento` int(11) NOT NULL,
  `tipo_pagamento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagamentos`
--

INSERT INTO `pagamentos` (`id_pagamento`, `tipo_pagamento`) VALUES
(1, 'MbWay'),
(2, 'Transferência Bancária');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compras_clientes_idx` (`fk_id_cliente`),
  ADD KEY `fk_compras_fantoches1_idx` (`fk_id_fantoche`),
  ADD KEY `fk_compras_pagamentos1_idx` (`fk_id_pagamento`);

--
-- Indexes for table `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`id_encomenda`),
  ADD KEY `fk_encomendas_clientes1_idx` (`fk_id_cliente`);

--
-- Indexes for table `fantoches`
--
ALTER TABLE `fantoches`
  ADD PRIMARY KEY (`id_fantoche`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id_mensagem`),
  ADD KEY `fk_mensagens_clientes1_idx` (`fk_id_cliente`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `id_encomenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fantoches`
--
ALTER TABLE `fantoches`
  MODIFY `id_fantoche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_clientes` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_fantoches1` FOREIGN KEY (`fk_id_fantoche`) REFERENCES `fantoches` (`id_fantoche`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_pagamentos1` FOREIGN KEY (`fk_id_pagamento`) REFERENCES `pagamentos` (`id_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `encomendas`
--
ALTER TABLE `encomendas`
  ADD CONSTRAINT `fk_encomendas_clientes1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `fk_mensagens_clientes1` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
