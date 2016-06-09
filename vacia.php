<?php

$connection->query("CREATE TABLE IF NOT EXISTS `cancion` (
`id_cancion` int(11) NOT NULL,
  `nombre_cancion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `album` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio_salida` year(4) DEFAULT NULL,
  `autor` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `duracion` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;");




$connection->query("CREATE TABLE IF NOT EXISTS `comentario` (
`id_comentario` int(11) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `contenido` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_cancionfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");



$connection->query("CREATE TABLE IF NOT EXISTS `forma` (
  `id_listafk` int(11) NOT NULL,
  `id_cancionfk2` int(11) NOT NULL,
  `num_cancion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");




$connection->query("CREATE TABLE IF NOT EXISTS `lista` (
`id_lista` int(11) NOT NULL,
  `nombre_usuariofk` varchar(20) NOT NULL,
  `nombre_lista` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_crea` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;");




$connection->query("CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre_usuario` varchar(20) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `nivel_adm` tinyint(1) NOT NULL,
  `fecha_registro` date NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");




$connection->query("ALTER TABLE `cancion`
 ADD PRIMARY KEY (`id_cancion`);");


$connection->query("ALTER TABLE `comentario`
 ADD PRIMARY KEY (`id_comentario`), ADD KEY `id_cancionfk` (`id_cancionfk`);");


$connection->query("ALTER TABLE `forma`
 ADD KEY `id_cancionfk2` (`id_cancionfk2`), ADD KEY `id_listafk` (`id_listafk`);");


$connection->query("ALTER TABLE `lista`
 ADD PRIMARY KEY (`id_lista`), ADD KEY `nombre_usuariofk` (`nombre_usuariofk`);");


$connection->query("ALTER TABLE `usuario`
 ADD PRIMARY KEY (`nombre_usuario`), ADD UNIQUE KEY `correo` (`correo`);");


$connection->query("ALTER TABLE `cancion`
MODIFY `id_cancion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;");

$connection->query("ALTER TABLE `comentario`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;");

$connection->query("ALTER TABLE `lista`
MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;");



$connection->query("ALTER TABLE `comentario`
ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_cancionfk`) REFERENCES `cancion` (`id_cancion`);");


$connection->query("ALTER TABLE `forma`
ADD CONSTRAINT `forma_ibfk_1` FOREIGN KEY (`id_cancionfk2`) REFERENCES `cancion` (`id_cancion`),
ADD CONSTRAINT `forma_ibfk_2` FOREIGN KEY (`id_listafk`) REFERENCES `lista` (`id_lista`);");


$connection->query("ALTER TABLE `lista`
ADD CONSTRAINT `lista_ibfk_1` FOREIGN KEY (`nombre_usuariofk`) REFERENCES `usuario` (`nombre_usuario`);");

?>