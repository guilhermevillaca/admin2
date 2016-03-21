-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Mar-2016 às 21:19
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE IF NOT EXISTS `arquivos` (
  `ArqCodigo` int(11) NOT NULL,
  `ArqNome` varchar(45) DEFAULT NULL,
  `ArqExtensao` varchar(9) DEFAULT NULL,
  `ArqDescricao` varchar(256) DEFAULT NULL,
  `ArqArquivo` varchar(32) DEFAULT NULL,
  `CtgArqCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaarq`
--

CREATE TABLE IF NOT EXISTS `categoriaarq` (
  `CtgArqCodigo` int(11) NOT NULL,
  `CtgArqNome` varchar(45) DEFAULT NULL,
  `CtgArqPai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaprd`
--

CREATE TABLE IF NOT EXISTS `categoriaprd` (
  `CtgPrdCodigo` int(11) NOT NULL,
  `CtgPrdNome` varchar(45) DEFAULT NULL,
  `CtgPrdPai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriapst`
--

CREATE TABLE IF NOT EXISTS `categoriapst` (
  `CtgPstCodigo` int(11) NOT NULL,
  `CtgPstNome` varchar(45) DEFAULT NULL,
  `CtgPstPai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE IF NOT EXISTS `configuracoes` (
  `CnfCodigo` int(11) NOT NULL,
  `CnfNomeSite` varchar(45) DEFAULT NULL,
  `ArqArquivo` int(11) DEFAULT NULL,
  `CnfLinkSite` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`CnfCodigo`, `CnfNomeSite`, `ArqArquivo`, `CnfLinkSite`) VALUES
(1, 'Agrossol Sementes', NULL, 'http://agrossol.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PstCodigo` int(11) NOT NULL,
  `PstTitulo` varchar(60) NOT NULL,
  `PstArquivo` varchar(256) NOT NULL,
  `PstTpArquivo` varchar(9) NOT NULL,
  `PstDescricao` text NOT NULL,
  `ArqCodigo` int(11) DEFAULT NULL,
  `CtgPstCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`PstCodigo`, `PstTitulo`, `PstArquivo`, `PstTpArquivo`, `PstDescricao`, `ArqCodigo`, `CtgPstCodigo`) VALUES
(7, 'Teste2', 'b7f1b9ec362d0f389f859d3d11e0e002.pdf', '.pdf', '<b>teste</b>', NULL, NULL),
(8, 'asdfasdf', 'f542539cc5b97559bcb7d5519ccebee8.pdf', '.pdf', 'asdfasdf', NULL, NULL),
(9, 'asdfasdf', '865da591fb17004a39206aebb5da12b1.pdf', '.pdf', 'asdfasdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `PrdCodigo` int(11) NOT NULL,
  `PrdNome` varchar(45) DEFAULT NULL,
  `PrdDescricao` text,
  `CtgPrdCodigo` int(11) DEFAULT NULL,
  `PrdValor` float DEFAULT NULL,
  `PrdPeso` decimal(2,0) DEFAULT NULL,
  `ArqCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pssfisica`
--

CREATE TABLE IF NOT EXISTS `pssfisica` (
  `PssFisicaCodigo` int(11) NOT NULL,
  `PssFisicaNome` varchar(45) NOT NULL,
  `PssFisicaSobrenome` varchar(45) NOT NULL,
  `PssFisicaEmail` varchar(255) DEFAULT NULL,
  `PssFisicaDtNascimento` datetime DEFAULT NULL,
  `PssFisicaSexo` char(1) DEFAULT NULL,
  `PssFisicaCPF` varchar(14) DEFAULT NULL,
  `PssFisicaRG` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pssfisica`
--

INSERT INTO `pssfisica` (`PssFisicaCodigo`, `PssFisicaNome`, `PssFisicaSobrenome`, `PssFisicaEmail`, `PssFisicaDtNascimento`, `PssFisicaSexo`, `PssFisicaCPF`, `PssFisicaRG`) VALUES
(2, 'Guilherme', 'Villaca', 'guidvillaca@gmail.com', '1986-09-25 00:00:00', 'M', '05095059967', '85094122');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `UsrCodigo` int(11) NOT NULL,
  `UsrLogin` varchar(64) NOT NULL,
  `UsrSenha` varchar(64) NOT NULL,
  `PssFisicaCodigo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`UsrCodigo`, `UsrLogin`, `UsrSenha`, `PssFisicaCodigo`) VALUES
(2, 'admin', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 2),
(3, 'queiroz', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', NULL),
(4, 'agrossol', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`ArqCodigo`),
  ADD KEY `CtgArqCodigoFK_idx` (`CtgArqCodigo`);

--
-- Indexes for table `categoriaarq`
--
ALTER TABLE `categoriaarq`
  ADD PRIMARY KEY (`CtgArqCodigo`),
  ADD KEY `CtgArqPai_idx` (`CtgArqPai`);

--
-- Indexes for table `categoriaprd`
--
ALTER TABLE `categoriaprd`
  ADD PRIMARY KEY (`CtgPrdCodigo`),
  ADD KEY `CtgPai_idx` (`CtgPrdPai`);

--
-- Indexes for table `categoriapst`
--
ALTER TABLE `categoriapst`
  ADD PRIMARY KEY (`CtgPstCodigo`),
  ADD KEY `CtgPstPaiFK_idx` (`CtgPstPai`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`CnfCodigo`),
  ADD KEY `ArqArquivoFK_idx` (`ArqArquivo`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PstCodigo`),
  ADD KEY `ArqCodigo_idx` (`ArqCodigo`),
  ADD KEY `CtgPstPaiFK_idx` (`CtgPstCodigo`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`PrdCodigo`),
  ADD KEY `CategoriaPrdId_idx` (`CtgPrdCodigo`),
  ADD KEY `ArqCodigo_idx` (`ArqCodigo`);

--
-- Indexes for table `pssfisica`
--
ALTER TABLE `pssfisica`
  ADD PRIMARY KEY (`PssFisicaCodigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsrCodigo`),
  ADD KEY `PssFisicaCodigo_idx` (`PssFisicaCodigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `ArqCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoriaarq`
--
ALTER TABLE `categoriaarq`
  MODIFY `CtgArqCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoriaprd`
--
ALTER TABLE `categoriaprd`
  MODIFY `CtgPrdCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoriapst`
--
ALTER TABLE `categoriapst`
  MODIFY `CtgPstCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `CnfCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PstCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `PrdCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pssfisica`
--
ALTER TABLE `pssfisica`
  MODIFY `PssFisicaCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsrCodigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `CtgArqCodigoFK` FOREIGN KEY (`CtgArqCodigo`) REFERENCES `categoriaarq` (`CtgArqCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `categoriaarq`
--
ALTER TABLE `categoriaarq`
  ADD CONSTRAINT `CtgArqPai` FOREIGN KEY (`CtgArqPai`) REFERENCES `categoriaarq` (`CtgArqCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `categoriaprd`
--
ALTER TABLE `categoriaprd`
  ADD CONSTRAINT `CtgPaiFK` FOREIGN KEY (`CtgPrdPai`) REFERENCES `categoriaprd` (`CtgPrdCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `categoriapst`
--
ALTER TABLE `categoriapst`
  ADD CONSTRAINT `CtgPstPaiFK` FOREIGN KEY (`CtgPstPai`) REFERENCES `categoriapst` (`CtgPstCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD CONSTRAINT `ArqArquivoFK` FOREIGN KEY (`ArqArquivo`) REFERENCES `arquivos` (`ArqCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `ArqCodigoFK2` FOREIGN KEY (`ArqCodigo`) REFERENCES `arquivos` (`ArqCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CtgPstPaiFK2` FOREIGN KEY (`CtgPstCodigo`) REFERENCES `categoriapst` (`CtgPstCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `ArqCodigoFK` FOREIGN KEY (`ArqCodigo`) REFERENCES `arquivos` (`ArqCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CtgPrdCodigoFK` FOREIGN KEY (`CtgPrdCodigo`) REFERENCES `categoriaprd` (`CtgPrdCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `PssFisicaCodigoFK` FOREIGN KEY (`PssFisicaCodigo`) REFERENCES `pssfisica` (`PssFisicaCodigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
