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


$connection->query("INSERT INTO `cancion` (`id_cancion`, `nombre_cancion`, `album`, `anio_salida`, `autor`, `genero`, `duracion`) VALUES
(1, '01 So What.mp3', 'Kind of Blue', 1959, 'Miles Davis', 'Jazz', '00:09:25'),
(2, '02 Freddie Freeloader.mp3', 'Kind of Blue', 1959, 'Miles Davis', 'Jazz', '00:09:48'),
(3, '03 Blue in Green.mp3', 'Kind of Blue', 1959, 'Miles Davis', 'Jazz', '00:05:39'),
(4, '04 All Blues.mp3', 'Kind of Blue', 1959, 'Miles Davis', 'Jazz', '00:11:35'),
(5, '05 Flamenco Sketches.mp3', 'Kind of Blue', 1959, 'Miles Davis', 'Jazz', '00:09:27'),
(7, 'Voyage.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:04:56'),
(9, 'Final Fantasy.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:05:44'),
(10, 'In a Sentimental Mood.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:04:55'),
(11, 'Almost.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:05:54'),
(12, 'Beba.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:05:50'),
(13, 'You and Me.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:07:52'),
(14, 'Third Ball.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:06:09'),
(15, 'Sir Vival.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:05:25'),
(16, 'Insane in Seine.mp3', 'Wake', 2005, 'Trio Toykeat', 'Jazz', '00:07:12'),
(17, 'Beatophone.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:03:51'),
(18, 'Clash.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:04:12'),
(19, 'Cotton Heads.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:03:38'),
(20, 'Dramaphone.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:03:23'),
(21, 'Maniac.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:04:10'),
(22, 'Newbop.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:02:49'),
(23, 'Panic.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:04:04'),
(24, 'Rock it for me.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:03:10'),
(25, 'The dirty side of the street.mp3', 'Panic', 2012, 'Caravan Palace', 'Electro Swing', '00:03:37'),
(26, 'Keep Ya Head Up.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:24'),
(27, 'Me Against The World.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:39'),
(28, 'How Do U Want It.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:48'),
(29, 'I Ain''t Mad At Cha.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:54'),
(30, 'I Get Around.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:19'),
(31, 'All About U.mp3', '2Pac Greatest Hits', 1998, '2Pac', 'Rap', '00:04:33'),
(32, 'Could You Be Loved.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:04:00'),
(33, 'Is This Love.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:03:53'),
(34, 'Jamming.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:03:53'),
(35, 'One Love.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:02:55'),
(36, 'Three Little Birds.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:03:03'),
(37, 'Bad Boys.mp3', 'Bob Marley Greatest Hits', 2008, 'Bob Marley', 'Reggae', '00:03:36'),
(39, 'MIX eric the tutor BIGGIE.mp3', 'Math class V15', 2009, 'Biggie Smalls - Eric the tutor', 'Rap-Mix', '01:11:55'),
(40, 'Tesla.mp3', 'You''re Dead!', 2014, 'Flying Lotus', 'Electronic', '00:01:54'),
(41, 'Never Catch Me (feat. Kendrick).mp3', 'You''re Dead!', 2014, 'Flying Lotus', 'Electronic', '00:03:54'),
(42, 'Turkey Dog Coma.mp3', 'You''re Dead!', 2014, 'Flying Lotus', 'Electronic', '00:03:09'),
(43, 'Stella.mp3', 'Program Music I', 2007, 'Kashiwa Daisuke', 'Electronic', '00:35:58'),
(44, 'Write Once, Run Melos.mp3', 'Program Music I', 2007, 'Kashiwa Daisuke', 'Electronic', '00:25:56'),
(45, 'Bitch, Dant Kill My Vibe.mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:05:10'),
(46, 'The Art Of Peer Pressure.mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:05:24'),
(47, 'Money Trees (Feat. Jay Rock).mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:06:26'),
(48, 'Sing About Me, Im Dying Of Thirst.mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:12:03'),
(49, 'The Recipe (Feat. Dr Dre).mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:05:53'),
(50, 'Black Boy Fly.mp3', 'Good Kid, M.A.A.D City', 2012, 'Kendrick Lamar', 'Hip-Hop/Rap', '00:04:39');");



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


$connection->query("INSERT INTO `forma` (`id_listafk`, `id_cancionfk2`, `num_cancion`) VALUES
(3, 2, 2),
(3, 3, 3),
(3, 4, 4),
(3, 5, 5),
(3, 1, 1),
(4, 19, 1),
(4, 20, 2),
(4, 21, 3),
(4, 22, 4),
(4, 23, 5),
(4, 17, 6),
(4, 18, 7),
(4, 24, 8),
(5, 26, 1),
(5, 27, 2),
(5, 28, 3),
(5, 29, 4),
(5, 30, 5),
(5, 31, 6),
(8, 34, 1),
(9, 45, 1),
(9, 46, 2),
(9, 47, 3),
(9, 48, 4),
(9, 49, 5),
(9, 50, 6),
(10, 43, 1),
(10, 44, 2),
(8, 2, 2),
(8, 3, 3),
(8, 4, 4),
(8, 5, 5),
(8, 7, 6),
(8, 9, 7),
(8, 10, 8),
(8, 11, 9),
(8, 12, 10),
(8, 13, 11),
(8, 14, 12),
(8, 15, 13),
(8, 16, 14),
(8, 17, 15),
(8, 18, 16),
(8, 19, 17),
(8, 20, 18),
(8, 21, 19),
(8, 22, 20),
(8, 23, 21),
(8, 24, 22),
(8, 25, 23),
(8, 26, 24),
(8, 27, 25),
(8, 28, 26),
(8, 29, 27),
(8, 30, 28),
(8, 31, 29),
(8, 32, 30),
(8, 33, 31),
(8, 35, 32),
(8, 36, 33),
(8, 37, 34),
(8, 39, 35),
(8, 40, 36),
(8, 41, 37),
(8, 42, 38),
(8, 43, 39),
(8, 44, 40),
(8, 45, 41),
(8, 46, 42),
(8, 47, 43),
(8, 48, 44),
(8, 49, 45),
(8, 50, 46),
(13, 3, 1),
(13, 4, 2),
(13, 5, 3),
(13, 7, 4),
(13, 16, 5),
(13, 17, 6),
(13, 18, 7),
(13, 19, 8),
(13, 25, 9),
(13, 26, 10),
(13, 27, 11),
(13, 29, 12),
(13, 30, 13),
(13, 43, 14),
(13, 44, 15),
(13, 45, 16),
(13, 50, 17),
(14, 9, 1),
(14, 10, 2),
(14, 11, 3),
(14, 12, 4),
(14, 13, 5),
(14, 14, 6),
(14, 15, 7),
(14, 16, 8),
(14, 43, 9),
(14, 44, 10),
(15, 32, 1),
(15, 33, 2),
(15, 34, 3),
(15, 35, 4),
(15, 36, 5),
(15, 37, 6),
(16, 16, 1),
(16, 17, 2),
(16, 18, 3),
(16, 19, 4),
(16, 20, 5),
(16, 21, 6),
(16, 22, 7),
(16, 23, 8),
(16, 24, 9),
(16, 25, 10),
(16, 26, 11),
(16, 29, 12),
(16, 30, 13),
(16, 31, 14),
(16, 32, 15),
(16, 35, 16),
(16, 36, 17),
(16, 37, 18),
(16, 39, 19),
(16, 40, 20),
(16, 41, 21),
(17, 4, 1),
(17, 5, 2),
(17, 7, 3),
(17, 9, 4),
(17, 10, 5),
(17, 11, 6),
(17, 12, 7),
(17, 13, 8),
(17, 14, 9),
(17, 30, 10),
(17, 31, 11),
(17, 32, 12),
(17, 33, 13),
(17, 34, 14),
(18, 11, 1),
(18, 12, 2),
(18, 13, 3),
(18, 14, 4),
(18, 15, 5),
(18, 16, 6),
(18, 17, 7),
(18, 18, 8),
(18, 19, 9),
(18, 36, 10),
(18, 37, 11),
(18, 39, 12),
(18, 43, 13),
(18, 44, 14),
(18, 47, 15),
(18, 48, 16),
(18, 49, 17),
(18, 50, 18),
(19, 1, 1),
(19, 2, 2),
(19, 3, 3),
(19, 4, 4),
(19, 5, 5),
(19, 7, 6),
(19, 9, 7),
(19, 10, 8),
(19, 11, 9),
(19, 12, 10),
(19, 13, 11),
(19, 14, 12),
(19, 15, 13),
(19, 16, 14),
(19, 17, 15),
(19, 18, 16),
(19, 19, 17),
(19, 20, 18),
(19, 21, 19),
(19, 22, 20),
(19, 23, 21),
(19, 24, 22),
(19, 25, 23),
(19, 26, 24),
(19, 27, 25),
(19, 28, 26),
(19, 29, 27),
(19, 30, 28),
(19, 31, 29),
(19, 32, 30),
(19, 33, 31),
(19, 34, 32),
(19, 35, 33),
(19, 36, 34),
(19, 37, 35),
(19, 39, 36),
(19, 40, 37),
(19, 41, 38),
(19, 43, 39),
(19, 46, 40),
(19, 47, 41),
(19, 48, 42),
(19, 49, 43),
(19, 50, 44),
(20, 3, 1),
(20, 4, 2),
(20, 22, 3),
(20, 23, 4),
(20, 29, 5),
(20, 30, 6),
(21, 1, 1),
(21, 2, 2),
(21, 3, 3),
(21, 4, 4),
(21, 5, 5),
(21, 7, 6),
(21, 9, 7),
(21, 10, 8),
(21, 27, 9),
(21, 28, 10),
(21, 29, 11),
(21, 30, 12),
(21, 31, 13),
(21, 35, 14),
(21, 36, 15),
(21, 37, 16),
(21, 39, 17),
(22, 5, 1),
(22, 29, 2),
(22, 30, 3),
(22, 31, 4),
(22, 34, 5),
(22, 35, 6),
(22, 37, 7),
(22, 41, 8),
(22, 42, 9),
(22, 43, 10),
(22, 44, 11),
(22, 47, 12),
(22, 50, 13),
(23, 5, 1),
(23, 7, 2),
(23, 11, 3),
(23, 15, 4),
(23, 16, 5),
(23, 23, 6),
(23, 25, 7),
(23, 26, 8),
(23, 27, 9),
(23, 29, 10),
(23, 31, 11),
(23, 36, 12),
(23, 39, 13);");





$connection->query("CREATE TABLE IF NOT EXISTS `lista` (
`id_lista` int(11) NOT NULL,
  `nombre_usuariofk` varchar(20) NOT NULL,
  `nombre_lista` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_crea` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;");


$connection->query("INSERT INTO `lista` (`id_lista`, `nombre_usuariofk`, `nombre_lista`, `fecha_crea`) VALUES
(3, 'Alvaro', 'Jazz', '2016-02-07'),
(4, 'Alvaro', 'Caravan Palace', '2016-02-28'),
(5, 'Alvaro', '2Pac', '2016-02-29'),
(8, 'Alvaro', '1cancion', '2016-02-29'),
(9, 'prueba', 'K lamar', '2016-02-29'),
(10, 'prueba', 'Kashiwa Daisuke', '2016-03-01'),
(12, 'Alvaro', 'asdadsfas', '2016-03-02'),
(13, 'Pepito', 'Mi primera lista', '2016-06-07'),
(14, 'Pepito', 'Estudiando', '2016-06-07'),
(15, 'Pepito', 'Vacas', '2016-06-07'),
(16, 'Pepito', 'OST', '2016-06-07'),
(17, 'Alfonso', 'Playa', '2016-06-07'),
(18, 'Alfonso', 'Fiesta', '2016-06-07'),
(19, 'Alfonso', 'Tranquilas', '2016-06-07'),
(20, 'Alfonso', 'Viernes', '2016-06-07'),
(21, 'Manuel', 'Relax', '2016-06-07'),
(22, 'Manuel', 'Cañeras', '2016-06-07'),
(23, 'Manuel', 'Trabajando', '2016-06-07');");



$connection->query("CREATE TABLE IF NOT EXISTS `usuario` (
  `nombre_usuario` varchar(20) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `nivel_adm` tinyint(1) NOT NULL,
  `fecha_registro` date NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");



$connection->query("INSERT INTO `usuario` (`nombre_usuario`, `pass`, `nivel_adm`, `fecha_registro`, `correo`) VALUES
('Alfonso', '3f128e570b3a9009d7b52a0523af43dd', 1, '2016-06-07', 'alfonso@gmail.com'),
('Alvaro', '98db6b79acb71383b5a83e0bbc1cadd4', 0, '2016-01-15', 'alvgarsot92@gmail.com'),
('daniel', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1, '2016-02-28', 'dani_martin91@hotmail.com'),
('Manuel', '96917805fd060e3766a9a1b834639d35', 1, '2016-06-07', 'manuel@hotmail.com'),
('pekechis', 'b07776334776699c58bf11906daaf469', 1, '2016-02-28', 'pekechis@gmail.com'),
('Pepito', '32164702f8ffd2b418d780ff02371e4c', 1, '2016-06-07', 'pepito@yahoo.es'),
('prueba', 'c893bad68927b457dbed39460e6afd62', 1, '2016-02-29', 'probando@prueba.com');");


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