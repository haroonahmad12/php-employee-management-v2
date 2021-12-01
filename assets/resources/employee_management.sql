-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 17:15:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employee_management`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` varchar(11) NOT NULL,
  `Name` varchar(11) NOT NULL,
  `Email` varchar(11) NOT NULL,
  `Age` varchar(11) NOT NULL,
  `Street No.` varchar(11) NOT NULL,
  `City` varchar(11) NOT NULL,
  `Phone State` varchar(11) NOT NULL,
  `Phone Postal Code` varchar(11) NOT NULL,
  `Phone Number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `Name`, `Email`, `Age`, `Street No.`, `City`, `Phone State`, `Phone Postal Code`, `Phone Number`) VALUES
('1', 'Rack', 'jackon@netw', '24', '126', 'San Jone', 'CA', '394221', '7383627627'),
('2', 'John', 'jhondoe@foo', '34', '89', 'New York', 'WA', '09889', '1283645645'),
('3', 'Leila', 'mills@leila', '29', '55', 'San Diego', 'CA', '098765', '9983632461'),
('4', 'Richard', 'dismond@foo', '30', '90', 'Salt lake c', 'UT', '457320', '90876987654'),
('5', 'Susan', 'susanmith@b', '28', '43', 'Louisville', 'KNT', '445321', '22435548897'),
('6', 'Brad', 'brad@foo.co', '40', '128', 'Atlanta', 'GEO', '394221', '6854634522'),
('7', 'Neil', 'walkerneil@', '42', '1', 'Nashville', 'TN', '90143', '45372788192'),
('8', 'Robert', 'jackon@netw', '24', '126', 'New Orleans', 'LU', '63281', '91232876454');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('admin@assemblerschool.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
