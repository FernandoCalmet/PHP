SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL UNIQUE,
  `telefono` varchar(20) NOT NULL UNIQUE,
  `dni` varchar(8) NOT NULL UNIQUE,
  `password` varchar(128),
  `estado` enum('activo','bloqueado') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'activo',
  `created_at` timestamp not null default current_timestamp,
  `updated_at` timestamp null on update current_timestamp,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for campos
-- ----------------------------
DROP TABLE IF EXISTS `campos`;
CREATE TABLE `campos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `descripcion` text,
  `created_at` timestamp not null default current_timestamp,
  `updated_at` timestamp null on update current_timestamp,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;

-- ----------------------------
-- Table structure for reservas
-- ----------------------------
DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_reserva` datetime NOT NULL,
  `estado` enum('disponible','ocupado') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ocupado',
  `usuarioId` int(11) NULL,
  `campoId` int(11) NOT NULL,
  `created_at` timestamp not null default current_timestamp,
  `updated_at` timestamp null on update current_timestamp,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuarioId`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`campoId`) REFERENCES `campos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;