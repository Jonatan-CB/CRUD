-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para crud
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud`;

-- Volcando estructura para tabla crud.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `clave` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `sexo` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla crud.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT IGNORE INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `clave`, `telefono`, `correo`, `fechanac`, `sexo`, `foto`) VALUES
	(1, 'Admin', 'Admin', 'admin', '123456', 956478567, 'admin@gmail.com', '2018-06-10', 'M', 'admin.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
