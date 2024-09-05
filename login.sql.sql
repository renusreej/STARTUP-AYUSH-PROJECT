SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS registration;
USE registration;

CREATE TABLE IF NOT EXISTS `login` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,  
  PRIMARY KEY (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
