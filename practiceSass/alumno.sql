DROP TABLE IF EXISTS alumno


CREATE TABLE IF NOT EXISTS `alumno` (
  `idAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAlumno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaternoAlumno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoMaternoAlumno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoAlumno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carreraAlumno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idAlumno`)