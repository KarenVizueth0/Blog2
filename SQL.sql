-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.26-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando datos para la tabla restaurante.compras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;

-- Volcando estructura para tabla restaurante.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaEnvio` date NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla restaurante.contacto: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`idcontacto`, `mensaje`, `username`, `fechaEnvio`, `correo`) VALUES
	(23, '', '', '2018-05-28', ''),
	(24, 'HOLA', 'ivonne', '2018-05-28', 'ivon_ne_ram@hotmail.com'),
	(25, 'Me gusta su comida ', 'Pastora', '2018-05-28', 'bb@hotmail.com'),
	(26, 'Me gusta su comida ', 'Pastora', '2018-05-28', 'bb@hotmail.com'),
	(27, 'Me gusta su comida ', 'Pastora', '2018-05-28', 'bb@hotmail.com'),
	(28, '', '', '2018-05-28', ''),
	(29, '', '', '2018-05-28', ''),
	(30, '', '', '2018-06-02', '');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;


-- Volcando datos para la tabla restaurante.login: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Volcando estructura para tabla restaurante.loging
CREATE TABLE IF NOT EXISTS `loging` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` date NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `genero` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla restaurante.loging: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `loging` DISABLE KEYS */;
INSERT INTO `loging` (`idusuario`, `username`, `pass`, `fechaRegistro`, `correo`, `genero`) VALUES
	(1, 'ivonne09', '4c48a4da2950926293072f8ba374f6', '2017-11-07', 'ivon_ne@hotmail.com', 2),
	(2, 'luis', 'luis', '2017-11-23', 'ivon_123@hotmail.com', 1),
	(3, 'ivonne08', 'ivonne08', '2017-11-08', 'ivon_1234@hotmail.com', 1),
	(4, 'Jali', '123', '2017-11-08', 'jali@hotmail.com', 1),
	(5, 'Lisset', '', '2017-11-08', '', 0),
	(6, 'Lisset', 'Vizueth', '2017-11-08', '', 2),
	(7, 'Chona', '1111', '2017-11-08', 'c@hotmail.com', 2),
	(8, 'Karen', 'Vizueth', '2017-11-08', 'vizu@hotmail.com', 2),
	(9, 'Jali', '', '2017-11-10', '', 0),
	(10, 'Jaliciense', 'ojitos', '2017-11-10', '', 1),
	(11, 'Ivonne', 'ivonne0910', '2018-04-23', 'ivon_ne_ram@hotmail.com', 2),
	(12, 'Sam', 'samantha', '2018-04-23', 'ivon_ne_ram@hotmail.com', 2),
	(13, 'Ivonne', 'ivonne0910', '2018-04-24', 'ivon_ne_ram@hotmail.com', 2),
	(14, 'samantha', 'sam', '2018-04-26', 'ivon_ne_ram@hotmail.com', 2),
	(15, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(16, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(17, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(18, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(19, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(20, 'Ivonne', 'ivonne0910', '2018-04-28', 'ivon_ne_ram@hotmail.com', 2),
	(21, 'Ivonne', 'ivonne0910', '2018-04-29', 'ivon_ne_ram@hotmail.com', 1),
	(22, 'Ivonne', 'ivonne0910', '2018-04-29', 'ivon_ne_ram@hotmail.com', 2),
	(23, 'ivonne', 'ivonne09', '2018-05-06', 'ivon_ne_ram@hotmail.com', 1),
	(24, 'Cec', 'cecilita', '2018-05-15', 'cec.ita@gmsil.com', 2),
	(25, 'Alfredo', 'a', '2018-06-05', 'a@hotmail.com', 1);
/*!40000 ALTER TABLE `loging` ENABLE KEYS */;


-- Volcando datos para la tabla restaurante.loginnn: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `loginnn` DISABLE KEYS */;
/*!40000 ALTER TABLE `loginnn` ENABLE KEYS */;

-- Volcando estructura para tabla restaurante.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idproducto` int(11) NOT NULL,
  `nombreP` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idcompra` int(20) DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `IX_Relationship2` (`idcompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla restaurante.productos: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`idproducto`, `nombreP`, `precio`, `stock`, `imagen`, `descripcion`, `idcompra`) VALUES
	(1, 'Cascarrabias', 370, 5, 'producto/cervez.jpg', 'Paquete de 6 cervezas', NULL),
	(2, 'AC DC', 420, 8, 'producto/acdc.jpg', 'Paquete de 6 cervezas', NULL),
	(3, 'GUILDEN DRAAK', 310, 4, 'producto/gd.jpg', 'Paquete de 6 cervezas', NULL),
	(4, 'HOBGOBLIN', 370, 6, 'producto/c1.jpg', 'Paquete de 6 cervezas', NULL),
	(5, 'BLACK', 370, 15, 'producto/c3.jpg', 'Paquete de 6 cervezas', NULL),
	(6, 'PIONERA', 370, 10, 'producto/c4.jpg', 'Paquete de 6 cervezas', NULL),
	(7, 'YOUNGS DOUBLE CHOCOLATE', 290, 20, 'producto/c5.jpg', 'Paquete de 6 cervezas', NULL),
	(8, 'BLACK IPA', 290, 3, 'producto/c3.jpg', 'Paquete de 6 cervezas', NULL),
	(9, 'PIONERA', 370, 9, 'producto/c4.jpg', 'Paquete de 6 cervezas', NULL),
	(10, 'DELIRIUMNOCTUR NUM', 370, 12, 'producto/c6.jpg', 'Paquete de 6 cervezas', NULL),
	(12, 'MEXICANIMPERIAL STUMP', 370, 4, 'producto/c9.png', 'Paquete de 6 cervezas', NULL),
	(13, 'VINO ESPUMUSO ', 129, 7, 'producto/v1.jpg', 'Botella de 750ml', NULL),
	(14, 'J.P CHENET', 450, 8, 'producto/v2.jpg', 'Botella de 750ml', NULL),
	(15, 'CASA DE MADERO COSECHA', 370, 10, 'producto/v3.jpg', 'Botella de 750ml', NULL),
	(16, 'VINO TINTO LA REDONDA RUBY', 370, 6, 'producto/v4.jpg', 'Botella de 750ml', NULL),
	(18, 'RIA HABLA', 370, 6, 'producto/v6.jpeg', 'Botella de 750ml', NULL),
	(19, 'TEQUILA REPOSADO DON JULIO', 370, 6, 'producto/a10.jpg', 'Botella de 750ml', NULL),
	(20, 'VODKA NUVA', 679.99, 3, 'producto/a20.jpg', 'Botella de 750ml', NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla restaurante.reservaciones
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `idreservacion` int(11) NOT NULL AUTO_INCREMENT,
  `username` int(11) NOT NULL,
  `fechaEnvio` date NOT NULL,
  `hora` time NOT NULL,
  `mesa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idreservacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla restaurante.reservaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reservaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservaciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
