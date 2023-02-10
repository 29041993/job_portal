-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 21:48:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `job_portal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'vinculacion707@gmail.com', '1234567', 'vinculacion', 'vinculacion', 'sociedad', '1'),
(2, 'daniel@gmail.com', '1234567', 'first', 'Daniel', 'Ullauri', '2'),
(6, 'nathy@gmail.com', '1234567', 'nathy101', 'Nathaly', 'Andrade', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(111) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super administrador'),
(2, 'Cliente administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`) VALUES
(8, 'nathy@gmail.com', 'Full Stack Developer', 'Javascript', 'Ecuador', 'Sto. Domingo de los Tsachilas', 'Santo domingo', 'Javascript', '3'),
(9, 'nathy@gmail.com', 'Php developer', 'php', 'Ecuador', 'Tungurahua', 'Ambato', 'Php', '1'),
(10, 'daniel@gmail.com', 'Mobile Developer', 'switf', 'Ecuador', 'Loja', 'Loja', 'Swift', '4'),
(11, 'vinculacion707@gmail.com', 'Motorizado', 'Servicio de transporte de comida', 'Ecuador', 'Manabí', 'Portoviejo', 'Rider', '1'),
(12, 'daniel@gmail.com', 'Logistica', 'tecleado de pedidos', 'Ecuador', 'Esmeraldas', 'Muisne', 'Logistica', '4'),
(28, 'nathy@gmail.com', 'Full Stack Developer', 'Javascript', 'Ecuador', 'Sto. Domingo de los Tsachilas', 'Santo domingo', 'Javascript', '3'),
(29, 'nathy@gmail.com', 'Php developer', 'php', 'Ecuador', 'Tungurahua', 'Ambato', 'Php', '1'),
(30, 'daniel@gmail.com', 'Mobile Developer', 'switf', 'Ecuador', 'Loja', 'Loja', 'Swift', '4'),
(31, 'vinculacion707@gmail.com', 'Motorizado', 'Servicio de transporte de comida', 'Ecuador', 'Manabí', 'Portoviejo', 'Rider', '1'),
(32, 'daniel@gmail.com', 'Logistica', 'tecleado de pedidos', 'Ecuador', 'Esmeraldas', 'Muisne', 'Logistica', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicant`
--

CREATE TABLE `applicant` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `applicant`
--

INSERT INTO `applicant` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`) VALUES
(1, 'sebas@gmail.com', '1', 'Sebas', 'Ullauri', '1999-10-01', '0985104365'),
(3, 'daniel@gmail.com', '1', 'Daniel', 'Ullauri', '1993-04-29', '0985104365');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(100) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`, `admin`) VALUES
(2, 'Faster', 'app de delivery', 'nathy@gmail.com'),
(5, 'Cobis', 'cobis.com', 'daniel@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `id_job` int(11) NOT NULL,
  `applicant` varchar(111) NOT NULL,
  `mobile_number` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `applicant`, `mobile_number`) VALUES
(23, 'Nathaly', 'Ullauri Ochoa', '2022-11-05', 'peakpx.jpg', 12, 'sebas@gmail.com', 985104365);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(1, 'Php', 'desarrollador php y msql y laravel y java'),
(3, 'Java', 'desarrollador java'),
(4, 'Switf', 'Desarrollador de ios y juegos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(111) NOT NULL,
  `img` varchar(350) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `img`, `name`, `dob`, `number`, `email`, `user_email`) VALUES
(16, '958027.jpg', 'Daniel', '2022-12-02', '6546546', 'nathy@gmail.com', 'daniel@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indices de la tabla `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indices de la tabla `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
