-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Ago-2020 às 11:26
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `megalojavirtual`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `tipo`, `banner`, `link`) VALUES
(6, 'topo', '20200725/1595704921_e644ae79ae810253f885.jpeg', 'http://localhost:8080/produto'),
(7, 'home', '20200725/1595704929_26af0ecc04a6fe67e95d.png', 'http://localhost:8080/produto/mostraProduto/17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `descricao`) VALUES
(1, 'Smartphones'),
(2, 'Processadores'),
(3, 'Fontes'),
(4, 'HDs'),
(6, 'Teclados'),
(7, 'Mouses'),
(8, 'FANs com Rolamentos'),
(11, 'Placas de Vídeo'),
(14, 'SSDs'),
(18, 'Ferramentas'),
(26, 'Notebooks'),
(28, 'Doces'),
(29, 'Luz'),
(30, 'Manutenção'),
(33, 'Cinema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `usuarios_id`, `produtos_id`, `data`) VALUES
(1, 2, 5, '2020-07-20 18:00:59'),
(2, 2, 5, '2020-07-20 18:01:53'),
(3, 2, 4, '2020-07-20 18:14:31'),
(4, 3, 5, '2020-07-20 19:09:10'),
(5, 3, 4, '2020-07-20 19:09:19'),
(6, 2, 5, '2020-07-20 19:09:46'),
(7, 2, 15, '2020-07-20 22:41:09'),
(8, 2, 15, '2020-07-20 23:00:31'),
(9, 2, 15, '2020-07-21 18:46:00'),
(10, 2, 15, '2020-07-21 18:57:17'),
(11, 7, 15, '2020-07-22 19:32:02'),
(14, 2, 17, '2020-07-24 15:01:30'),
(15, 2, 17, '2020-07-24 15:01:53'),
(16, 2, 15, '2020-07-24 15:02:05'),
(17, 2, 15, '2020-07-25 14:18:14'),
(21, 1, 17, '2020-07-25 16:59:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `descricao_produto` text NOT NULL,
  `valor` double(10,2) NOT NULL,
  `desconto` int(11) NOT NULL,
  `categorias_id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `link_pagamento` varchar(1000) DEFAULT NULL,
  `destaque` tinyint(1) NOT NULL DEFAULT 0,
  `promocao` tinyint(1) DEFAULT 0,
  `ativo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `descricao_produto`, `valor`, `desconto`, `categorias_id`, `foto`, `link_pagamento`, `destaque`, `promocao`, `ativo`) VALUES
(1, 'Intel core i7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!', 677.00, 10, 2, '20200724/1595619658_ffbc40acc88713132587.jpg', '', 1, 1, 1),
(2, 'Intel Core i5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!', 599.90, 10, 2, '20200724/1595619636_81a731753bc6aec64797.jpg', '', 0, 0, 1),
(3, 'Intel Core i3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!', 499.90, 10, 2, '20200724/1595619626_c9492671bcef16e13120.png', 'http://www.lenovo.com', 1, 0, 1),
(4, 'Samsung Galaxy A10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!', 999.90, 10, 1, '20200724/1595619778_d37d4e6a05b840d1f282.jpg', '', 0, 0, 1),
(5, 'iPhone X10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Libero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! \r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente! Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nLibero hic eum pariatur eaque esse, cupiditate natus, vero eveniet, tenetur consequuntur ex doloribus sed quas neque amet aperiam corporis distinctio sapiente!', 2999.90, 10, 1, '20200724/1595619682_57c450f91023c6f89817.jpg', '', 1, 0, 1),
(15, 'Notebook Lenovo', 'Design sofisticado com desempenho surpreendente\r\nCom aproximadamente 1,85 kg, o ideapad S145 é fácil de transportar! Possui design leve e compacto. Além disso, é equipado com até a 8ª geração dos Processadores Intel® Core™. Perfeito para acompanhar seu ritmo, não importa a tarefa e onde esteja.\r\n\r\nProdutividade com conforto visual\r\nO teclado numério integrado do idepad S145 garante mais rapidez e ergonomia na sua digitação, principalmente para trabalhar mais facilmente com cálculos e planilhas. Tela de 15.6” com tratamento antirreflexo, que pode ser aberta em até 180°, permitindo maior flexibilidade para ajustar o ângulo de visão e proporcionando mais segurança para a integridade da dobradiça.\r\n\r\nQualidade de som\r\nOs alto falantes com certificação Dolby Audio* permitem aumentar o volume sem distorcer o som. Proporciona uma imersão sonora superior com a equalização conforme seu modo de uso. Você pode escolher entre 5 modos: assistir filmes, ouvir musicas, jogar ou ajustar conforme sua necessidade.\r\n\r\n*A certificação Dolby Audio não está disponível nos modelos com sistema operacional Linux', 3419.05, 5, 26, '20200724/1595619763_0922f286881bbded94a0.jpg', 'https://www.lenovo.com/br/pt/laptops/ideapad/ideapad-s-series/Lenovo-IdeaPad-S145-15IWL/p/81S9000LBR', 0, 0, 1),
(17, 'Notebook Asus', 'Design sofisticado com desempenho surpreendente\r\nCom aproximadamente 1,85 kg, o ideapad S145 é fácil de transportar! Possui design leve e compacto. Além disso, é equipado com até a 8ª geração dos Processadores Intel® Core™. Perfeito para acompanhar seu ritmo, não importa a tarefa e onde esteja.\r\n\r\nProdutividade com conforto visual\r\nO teclado numério integrado do idepad S145 garante mais rapidez e ergonomia na sua digitação, principalmente para trabalhar mais facilmente com cálculos e planilhas. Tela de 15.6” com tratamento antirreflexo, que pode ser aberta em até 180°, permitindo maior flexibilidade para ajustar o ângulo de visão e proporcionando mais segurança para a integridade da dobradiça.\r\n\r\nQualidade de som\r\nOs alto falantes com certificação Dolby Audio* permitem aumentar o volume sem distorcer o som. Proporciona uma imersão sonora superior com a equalização conforme seu modo de uso. Você pode escolher entre 5 modos: assistir filmes, ouvir musicas, jogar ou ajustar conforme sua necessidade.\r\n\r\n*A certificação Dolby Audio não está disponível nos modelos com sistema operacional Linux', 2500.00, 10, 26, '20200724/1595619749_f9b76cfff0eafeaa7587.jpg', 'https://www.lenovo.com/br/pt/laptops/ideapad/ideapad-s-series/Lenovo-IdeaPad-S145-15IWL/p/81S9000LBR', 0, 0, 1),
(20, 'Notebook HP', 'Marca: HP\r\n\r\nCor: Preto\r\n\r\nTela: 14.0 polegadas HD SVA eDP Antirreflexo com Retroiluminação WLED slim-plano, 220 cd/m2, 45% NTSC (1366 x 768)\r\n\r\nProcessador CPU: Intel Core i5-8250U (Frequência base de 1.60 GHz, Frequência de pico de até 3.40 GHz, Cache de 6 MB, Quad-Core)\r\n\r\nSistema Operacional: Windows 10 Pro 64 bits\r\n\r\nMemória RAM: 8 GB (1X8GB) DDR4 2400 MHz\r\n\r\nMemória Máxima: 16 GB SDRAM DDR4-2666, 2400 ou 2133\r\n\r\nArmazenamento: 256 GB SSD - Unidade de estado sólido M.2 SATA-3 TLC\r\n\r\nMouse: Mouse HP USB Incluso\r\n\r\nConectividade Wireless: Realtek 802.11ac (1x1) WLAN e Bluetooth 4.2 Combo (MU-MIMO suportado)\r\n\r\nInterface de Rede: Rede NIC 10/100/1000 GbE integrada\r\n\r\nPortas e Conectores: 2 USB 3.1 Gen 1; 1 USB 2.0; 1 HDMI 1.4b; 1 Porta Ethernet RJ-45; 1 Conector Combinado de Fone de Ouvido/Microfone; 1 Porta de Alimentação CA\r\n\r\nSuporte HDMI: Suporta Resoluções Externas de Até 1920 x 1200 a 60 Hz\r\n\r\nSlots de Expansão: Leitor de Mídia Digital Multiformato - Suporta SD, SDHC e SDXC\r\n\r\nWebcam: Câmera HP TrueVision HD\r\n\r\nDispositivo Apontador: Touchpad com Suporte a Gestos Multitoque\r\n\r\nRecursos de Áudio: Alto-falantes Estéreo Duplos Integrados\r\n\r\nGráficos de Vídeo: Placa de Vídeo Integrada Intel UHD Graphics 620\r\n\r\nTeclado: Teclado Estilo Ilha Texturizado de Tamanho Integral Preto Jet - padrão ABNT Português Brasil\r\n\r\nTipo de Bateria: Polímero de íon-lítio de 3 Células HP 41 Wh\r\n\r\nFonte de Alimentação: Adaptador CA externo Smart HP 45 W - Bivolt\r\n\r\nInclui: Notebook HP + Adaptador CA\r\n\r\nDimensões da Embalagem (AxLxP): 6.1 x 50.2 x 30.0cm\r\n\r\nDimensões do Produto (AxLxP): 1.9 x 33.5 x 23.4cm\r\n\r\nPeso Bruto: 2.2kg\r\n\r\nPeso Líquido: 1.6kg', 2999.99, 2, 26, '20200724/1595620488_13d307f421a32b570395.jpg', 'https://www.americanas.com.br/produto/1827655591/notebook-hp-intel-i5-3-4ghz-8gb-ddr4-256gb-m2-ssd-windows-10-pro-tela-14-preto?pfm_carac=notebook%20hp%20pavilion%20i5&pfm_index=3&pfm_page=search&pfm_pos=grid&pfm_type=search_page', 1, 0, 0),
(23, 'Produto ABC', 'ABc', 5.00, 5, 28, '20200725/1595703702_eee297353c850cea206e.png', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `endereco`, `senha`, `admin`) VALUES
(1, 'Fabio dos Santos Reszko', 'fabio@codeigniter.com.br', 'Rua do Fábio', '$2y$10$sVb3Bk23Iovvpc3jpomsK.al3VOtrS8Efs87UAH.kypVvZ07HC4rK', 0),
(2, 'Fabio S. Reszko', 'fabio@gmail.com', 'Rua AbC', '$2y$10$xchHUXWwssPJbE3d1bIjeeQDbBADsqnrZzPs/lylsYuEjiU1oLOnG', 0),
(3, 'Jose da Silva', 'jose@dasilva.com', 'Rua do José', '$2y$10$FyFrLKoWOKue/0XbCn68qO3KFFbkNYsJJ3aoItVxb2tbLUzKV/sTa', 0),
(4, 'Fabio dos Santos', 'fabio@codeigniter.br', 'Rua do Fábio', '$2y$10$51Dwa0pWUI/mwoMnM50btuoyNhMV.jitsprEcFJh/.i1DSeodmITy', 1),
(5, 'Maria da Silva', 'maria@email.com', 'rua da Maria', '$2y$10$gnix5atVSAoxrz5ZsU3KUeVc8k8NkIY0aAJK5Va3ARTJx7Mm9OQBq', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_id` (`produtos_id`),
  ADD KEY `usuarios_id` (`usuarios_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_id` (`categorias_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
