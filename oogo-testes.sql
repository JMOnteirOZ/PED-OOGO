-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 06:06 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oogo-testes`
--
CREATE DATABASE IF NOT EXISTS `oogo-testes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `oogo-testes`;

-- --------------------------------------------------------

--
-- Table structure for table `bannedorder`
--

CREATE TABLE `bannedorder` (
  `bannedID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `bannedReason` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `bannedorder`:
--   `orderID`
--       `order` -> `orderID`
--

--
-- Dumping data for table `bannedorder`
--

INSERT INTO `bannedorder` (`bannedID`, `orderID`, `bannedReason`) VALUES
(3, 1, 'BAD WORD');

-- --------------------------------------------------------

--
-- Table structure for table `banneduser`
--

CREATE TABLE `banneduser` (
  `bannedID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `banneduser`:
--   `userID`
--       `user` -> `userID`
--

--
-- Dumping data for table `banneduser`
--

INSERT INTO `banneduser` (`bannedID`, `userID`) VALUES
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `bannedwords`
--

CREATE TABLE `bannedwords` (
  `bannedID` int(11) NOT NULL,
  `bannedWord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `bannedwords`:
--

--
-- Dumping data for table `bannedwords`
--

INSERT INTO `bannedwords` (`bannedID`, `bannedWord`) VALUES
(1, 'merda'),
(2, 'fodasse'),
(3, 'prostituição'),
(4, 'roubar'),
(5, 'matar'),
(6, 'furtar');

-- --------------------------------------------------------

--
-- Table structure for table `blockeduser`
--

CREATE TABLE `blockeduser` (
  `userID` int(11) NOT NULL,
  `blockedID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `blockeduser`:
--   `userID`
--       `user` -> `userID`
--   `blockedID`
--       `user` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `category`:
--

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Outros'),
(2, 'Electricidade'),
(3, 'Tecnologia'),
(4, 'Animais'),
(5, 'Entretenimento'),
(6, 'Alimentação'),
(7, 'Transportes');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `userID` int(11) NOT NULL,
  `followID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `follow`:
--   `userID`
--       `user` -> `userID`
--   `followID`
--       `user` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `orderTitle` varchar(50) NOT NULL,
  `orderDescription` varchar(500) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `orderLocation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `orderPrice` decimal(11,2) NOT NULL,
  `orderDateOpen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `orderDateClose` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `orderImage` varchar(100) DEFAULT NULL,
  `orderState` varchar(10) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `order`:
--   `userID`
--       `user` -> `userID`
--   `categoryID`
--       `category` -> `categoryID`
--

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `orderTitle`, `orderDescription`, `categoryID`, `orderLocation`, `orderPrice`, `orderDateOpen`, `orderDateClose`, `orderImage`, `orderState`, `userID`) VALUES
(1, 'Passear crianças', 'Procuro crianças para furtar / roubar', 1, 'Lisboa', '2.00', '2017-06-05 04:36:10', '2017-10-10 19:30:00', '../img/images/order/', 'NULL', 7),
(2, 'Dog Sitter', 'Boas! Dia 12 de Junho tenho a apresentação de PED no ISCTE-IUL e não queria ter de deixar o meu Máx sozinho em casa.. Alguém que possa tomar conta dele até eu chegar a casa?', 4, 'Amadora', '10.00', '2017-06-05 16:04:12', '2017-06-15 19:00:00', '../img/images/order/dog.jpg', 'destaque', 1),
(3, 'Problema com o carro!!', 'Nem sei como explicar, ia eu muito bem a caminho da faculdade para fazer um exame e o meu carro avariou! Logo hoje que estava preparadíssimo', 7, 'ISCTE-IUL', '20.00', '2017-06-05 15:45:04', '2017-06-16 10:00:00', '../img/images/order/carro.jpg', 'NULL', 2),
(4, 'Dúvidas de Matemática', 'Preciso de explicador/a de matemática, estou a tentar fazer os TPC''s e não me estou a conseguir safar ...', 1, 'Lisboa', '7.50', '2017-06-05 04:47:23', '2017-06-20 09:30:40', '../img/images/order/mat.jpg', 'NULL', 5),
(5, 'Alguem perto do Mac?', 'Estou a estudar e estou com uma fome descomunal, alguém que esteja perto do Mac Donald''s e me traga um Big Mac por favor..', 6, 'ISCTE-IUL', '9.00', '2017-06-05 15:59:10', '2017-06-05 16:48:02', '../img/images/order/mac.png', 'destaque', 4),
(6, 'Browser em Chinês', 'Bastou um download para a minha vida andar para trás, saquei um programa que me seria útil para a faculdade e isto ficou tudo em chinês!!', 3, 'Lisboa', '12.00', '2017-06-05 04:53:10', '2017-06-20 19:50:00', '../img/images/order/baidu.gif', 'NULL', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pendingorder`
--

CREATE TABLE `pendingorder` (
  `pendingID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `pendingState` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pendingorder`:
--   `orderID`
--       `order` -> `orderID`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendingpro`
--

CREATE TABLE `pendingpro` (
  `pendingID` int(11) NOT NULL,
  `pendingCategoryID` int(11) NOT NULL,
  `pendingDescription` varchar(500) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `pendingFile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pendingpro`:
--   `userID`
--       `user` -> `userID`
--   `pendingCategoryID`
--       `category` -> `categoryID`
--

--
-- Dumping data for table `pendingpro`
--

INSERT INTO `pendingpro` (`pendingID`, `pendingCategoryID`, `pendingDescription`, `userID`, `pendingFile`) VALUES
(1, 1, 'Faço trabalhos a nível de Marketing/Estratégia e Gestão de Projecto', 1, '../img/images/pro/'),
(2, 1, 'Precisa de um serviço profissional que envolva finanças?\nNão hesite em contactar!', 2, '../img/images/pro/'),
(3, 1, '"Não há nada tão inútil quanto fazer eficientemente o que não deveria ser feito." - Peter Drucker\n', 3, '../img/images/pro/'),
(4, 3, 'Jovem - Experiência em várias linguagens de programação - Licenciatura Feita - Programador Nato', 4, '../img/images/pro/'),
(5, 3, 'Habilitações Literárias: Licenciatura\nExperiência: Média\nLinguagens Preferenciais: HTML/PHP/Java/C#', 5, '../img/images/pro/');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `proID` int(11) NOT NULL,
  `proCategoryID` int(11) NOT NULL,
  `proDescription` varchar(500) DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `proFile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `pro`:
--   `userID`
--       `user` -> `userID`
--   `proCategoryID`
--       `category` -> `categoryID`
--

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`proID`, `proCategoryID`, `proDescription`, `userID`, `proFile`) VALUES
(1, 1, 'Faço trabalhos a nível de Marketing/Estratégia e Gestão de Projecto', 1, '../img/images/pro/'),
(2, 1, 'Precisa de um serviço profissional que envolva finanças?\r\nNão hesite em contactar!', 2, '../img/images/pro/'),
(3, 1, '"Não há nada tão inútil quanto fazer eficientemente o que não deveria ser feito." - Peter Drucker\r\n', 3, '../img/images/pro/'),
(4, 3, 'Jovem - Experiência em várias linguagens de programação - Licenciatura Feita - Programador Nato', 4, '../img/images/pro/'),
(5, 3, 'Habilitações Literárias: Licenciatura\r\nExperiência: Média\r\nLinguagens Preferenciais: HTML/PHP/Java/C#', 5, '../img/images/pro/');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewAuthorID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `reviewStar` int(11) NOT NULL,
  `reviewComment` varchar(500) DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `review`:
--   `reviewAuthorID`
--       `user` -> `userID`
--   `userID`
--       `user` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `suggestionID` int(11) NOT NULL,
  `suggestionDescription` varchar(1000) NOT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `suggestion`:
--   `userID`
--       `user` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userAddress` varchar(200) DEFAULT NULL,
  `userContact` int(11) DEFAULT NULL,
  `userPhoto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userEmail`, `userPassword`, `userAddress`, `userContact`, `userPhoto`) VALUES
(1, 'João Santos', 'joao.santos@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Amadora', 912345678, '../img/images/user/shotor.png'),
(2, 'Rui Brito', 'rui.brito@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Queluz/Carenque', 912345678, '../img/images/user/brito.png'),
(3, 'Diogo Delgado', 'diogo.delgado@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Damaia', 912345678, '../img/images/user/rip.png'),
(4, 'José Ruivo', 'jose.ruivo@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Margem Sul', 912345678, '../img/images/user/ruivo.png'),
(5, 'Joel Monteiro', 'joel.monteiro@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Queluz/Massamá LS', 912345678, '../img/images/user/jole.png'),
(6, 'João Pedro', 'joao.pedro@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Algures', 912345678, '../img/images/user/joao pedro.jpg'),
(7, 'Papa Franku', 'papa.franku@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Japão', 912345678, '../img/images/user/franku.jpg'),
(8, 'Xico Mane', 'xico.mane@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Chiraq', 912345678, '../img/images/user/xico mane.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannedorder`
--
ALTER TABLE `bannedorder`
  ADD PRIMARY KEY (`bannedID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `banneduser`
--
ALTER TABLE `banneduser`
  ADD PRIMARY KEY (`bannedID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `bannedwords`
--
ALTER TABLE `bannedwords`
  ADD PRIMARY KEY (`bannedID`);

--
-- Indexes for table `blockeduser`
--
ALTER TABLE `blockeduser`
  ADD PRIMARY KEY (`userID`,`blockedID`),
  ADD KEY `blockedID` (`blockedID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`userID`,`followID`),
  ADD KEY `followID` (`followID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `pendingorder`
--
ALTER TABLE `pendingorder`
  ADD PRIMARY KEY (`pendingID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `pendingpro`
--
ALTER TABLE `pendingpro`
  ADD PRIMARY KEY (`pendingID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD KEY `pendingCategoryID` (`pendingCategoryID`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`proID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `proCategoryID` (`proCategoryID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewAuthorID`,`userID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`suggestionID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bannedorder`
--
ALTER TABLE `bannedorder`
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banneduser`
--
ALTER TABLE `banneduser`
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bannedwords`
--
ALTER TABLE `bannedwords`
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pendingorder`
--
ALTER TABLE `pendingorder`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pendingpro`
--
ALTER TABLE `pendingpro`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `proID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bannedorder`
--
ALTER TABLE `bannedorder`
  ADD CONSTRAINT `bannedorder_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `banneduser`
--
ALTER TABLE `banneduser`
  ADD CONSTRAINT `banneduser_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blockeduser`
--
ALTER TABLE `blockeduser`
  ADD CONSTRAINT `blockeduser_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blockeduser_ibfk_2` FOREIGN KEY (`blockedID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`followID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendingorder`
--
ALTER TABLE `pendingorder`
  ADD CONSTRAINT `pendingorder_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendingpro`
--
ALTER TABLE `pendingpro`
  ADD CONSTRAINT `pendingpro_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendingpro_ibfk_2` FOREIGN KEY (`pendingCategoryID`) REFERENCES `category` (`categoryID`);

--
-- Constraints for table `pro`
--
ALTER TABLE `pro`
  ADD CONSTRAINT `pro_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `pro_ibfk_2` FOREIGN KEY (`proCategoryID`) REFERENCES `category` (`categoryID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`reviewAuthorID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `suggestion_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for bannedorder
--

--
-- Metadata for banneduser
--

--
-- Metadata for bannedwords
--

--
-- Metadata for blockeduser
--

--
-- Metadata for category
--

--
-- Metadata for follow
--

--
-- Metadata for order
--

--
-- Metadata for pendingorder
--

--
-- Metadata for pendingpro
--

--
-- Metadata for pro
--

--
-- Metadata for review
--

--
-- Metadata for suggestion
--

--
-- Metadata for user
--

--
-- Metadata for oogo-testes
--

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('oogo-testes', 'schema');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('oogo-testes', 'bannedorder', @LAST_PAGE, 503, 430),
('oogo-testes', 'banneduser', @LAST_PAGE, 84, 523),
('oogo-testes', 'bannedwords', @LAST_PAGE, 505, 548),
('oogo-testes', 'blockeduser', @LAST_PAGE, 82, 426),
('oogo-testes', 'category', @LAST_PAGE, 286, 380),
('oogo-testes', 'follow', @LAST_PAGE, 120, 346),
('oogo-testes', 'order', @LAST_PAGE, 490, 48),
('oogo-testes', 'pendingorder', @LAST_PAGE, 711, 48),
('oogo-testes', 'pendingpro', @LAST_PAGE, 49, 190),
('oogo-testes', 'pro', @LAST_PAGE, 78, 37),
('oogo-testes', 'review', @LAST_PAGE, 836, 364),
('oogo-testes', 'suggestion', @LAST_PAGE, 795, 514),
('oogo-testes', 'user', @LAST_PAGE, 291, 47);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
