-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 04, 2020 at 04:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `saveCode`$$
CREATE DEFINER="root"@"localhost" PROCEDURE "saveCode" (IN `user1` VARCHAR(15), IN `codename1` VARCHAR(20), IN `codelang` VARCHAR(5), IN `codetext` TEXT, IN `codeout` TEXT)  BEGIN
    DECLARE statusCall boolean ;
    IF exists(SELECT  codeName FROM codes WHERE (username= user1 and codeName = codename1)) THEN
    	UPDATE codes SET codeText = codetext , codeOut = codeout WHERE (username = user1 and codeName = codename1);
        SET statusCall = true;


    ELSE
    	INSERT INTO codes (username,codeName,codeLang,codeText,codeOut) VALUES (user1,codename1,codelang,codetext,codeout);
        SET statusCall= false;

    END IF;
    select statuscall;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE IF NOT EXISTS `codes` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `codeName` varchar(20) NOT NULL,
  `codeLang` varchar(5) NOT NULL,
  `codeText` text NOT NULL,
  `codeOut` text NOT NULL DEFAULT '',
  `codeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codeID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`username`, `codeName`, `codeLang`, `codeText`, `codeOut`, `codeID`) VALUES
('foram', 'test4', 'c', 'updated', 'test Output', 1),
('foram', 'test2', 'c', 'updated', 'test rerererer', 2),
('foram', 'test', 'c', 'updated', 'test Output', 3),
('tergffgfgrst', 'terrst', '', '45454', 'foram', 4),
('foram', 'qwertyui', 'c', 'So hope this is working finally....Yes working thanks', '\'gcc\' is not recognized as an internal or external command,\r\noperable program or batch file.\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('foram', '49f6f16f6d0092d1c8f6ebbd393d45dc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
