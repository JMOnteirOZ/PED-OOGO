-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 12:20 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oogo-testes`
--

-- --------------------------------------------------------
--
-- Table structure for table `user`
--
-- Creation: May 23, 2017 at 04:15 PM
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
(1, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', NULL, NULL, ''),
(20, 'Maria Inacia', 'maria.inacia@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(21, 'Joao Pedro', 'joao.pedro@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(22, 'Luisa Gomes', 'luisa.gomes@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(23, 'Pedro Barros', 'pedro.barros@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(24, 'Roberto To', 'roberto.to@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(25, 'Xico Mane', 'xico.mane@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', NULL, NULL, NULL),
(35, 'Papa Franku', 'papa@franku.pt', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'sei la', 21, '../img/images/user/ID (9).jpg');

-- --------------------------------------------------------
--
-- Table structure for table `category`
--
-- Creation: May 28, 2017 at 02:24 PM
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
-- Table structure for table `order`
--
-- Creation: May 23, 2017 at 04:35 PM
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
(56, 'Passear o meu cao.', 'Preciso que alguem leve o meu canito a dar uma voltinha, urgentemente.', 4, 'Lisbon', '15.00', '2017-05-27 22:34:13', '2017-06-29 23:00:00', NULL, 'Destaque', 25),
(57, 'Comprar-me pipocas', 'Vou ter uma sessao de cinema aqui em casa, preciso que alguem me traga umas pipocas DOCES!!', 4, 'Lisbon', '7.00', '2017-05-27 22:34:29', '2017-06-25 23:00:00', NULL, '', 25),
(65, 'Big Tasty', 'Preciso que me tragam um Big Tasty à  sala de estudo para eu comer', 6, 'ISCTE - Lisbon University Institute', '10.00', '2017-05-27 22:34:38', '2017-06-28 23:00:00', NULL, '', 24),
(66, 'Browser em chinês', 'Preciso de mudar a lingua do browser para português, alguem me pode ajudar?', 1, 'ISCTE - Lisbon University Institute', '3.00', '2017-05-28 14:26:48', '2017-06-14 23:00:00', NULL, '', 23),
(67, 'TPCs de matemática', 'Preciso de ajuda nos TPCs de matemática. Funções quadráticas e afins..', 1, 'Queluz', '2.00', '2017-05-27 23:03:26', '2017-05-10 07:20:00', NULL, 'destaque', 1),
(68, 'TESTE BAN', 'teste ban', 1, 'Lisbon', '10.00', '2017-05-27 23:05:39', '2017-05-30 23:00:00', NULL, 'destaque', 1),
(69, 'testeO1', 'teste', 4, 'quelux', '10.00', '2017-05-28 06:52:55', '2017-05-28 18:52:47', NULL, 'destaque', 25),
(70, 'testeGOOD', 'teste dá', 3, 'queluz', '10.00', '2017-05-28 06:54:55', '2017-05-28 22:55:00', NULL, 'NULL', 25),
(73, 'testeBAD', 'fodasse caralho', 5, 'quelux', '10.00', '2017-05-28 06:58:35', '2017-05-28 18:58:23', NULL, 'NULL', 25),
(74, 'testes', 'testes', 3, 'quelux', '5.00', '2017-05-29 11:01:59', '2017-05-28 22:58:05', NULL, 'NULL', 25),
(75, 'test', 'test', 3, 'test', '55.00', '2017-05-29 11:05:19', '2017-05-28 23:05:03', '../img/images/order/''69 dodge charger RT.jpg', 'NULL', 25),
(76, 'teste6', 'teste6', 2, 'teste', '659.00', '2017-05-29 11:07:57', '2017-05-28 23:07:37', '../img/images/order/18596630_1828885007125397_1688318028_o.jpg', 'NULL', 25);

-- --------------------------------------------------------
--
-- Table structure for table `pendingorder`
--
-- Creation: May 23, 2017 at 04:34 PM
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

--
-- Dumping data for table `pendingorder`
--

INSERT INTO `pendingorder` (`pendingID`, `userID`, `orderID`, `pendingState`) VALUES
(41, 0, 65, 'accepted'),
(44, 0, 66, 'accepted');

-- --------------------------------------------------------
--
-- Table structure for table `bannedwords`
--
-- Creation: May 23, 2017 at 04:11 PM
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
(5, 'matar');

-- --------------------------------------------------------
--
-- Table structure for table `bannedorder`
--
-- Creation: May 28, 2017 at 02:17 PM
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
(1, 68, ''),
(2, 73, 'BAD WORD');

-- --------------------------------------------------------
--
-- Table structure for table `pro`
--
-- Creation: May 27, 2017 at 09:57 PM
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
(2, 2, 'LOL', 20, ''),
(3, 3, 'teste', 23, ''),
(4, 1, 'zuera', 35, '');

-- --------------------------------------------------------
--
-- Table structure for table `pendingpro`
--
-- Creation: May 27, 2017 at 09:57 PM
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

-- --------------------------------------------------------
--
-- Table structure for table `follow`
--
-- Creation: May 23, 2017 at 04:11 PM
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
-- Table structure for table `blockeduser`
--
-- Creation: May 23, 2017 at 04:11 PM
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
-- Table structure for table `banneduser`
--
-- Creation: May 23, 2017 at 04:35 PM
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
(1, 1),
(2, 23);

-- --------------------------------------------------------
--
-- Table structure for table `review`
--
-- Creation: May 23, 2017 at 04:15 PM
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
-- Creation: May 23, 2017 at 04:30 PM
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
-- --------------------------------------------------------

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
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banneduser`
--
ALTER TABLE `banneduser`
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bannedwords`
--
ALTER TABLE `bannedwords`
  MODIFY `bannedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `pendingorder`
--
ALTER TABLE `pendingorder`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `pendingpro`
--
ALTER TABLE `pendingpro`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `proID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `suggestionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
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
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
