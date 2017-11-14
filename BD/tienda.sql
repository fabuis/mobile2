/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tienda

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-14 11:47:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbldispositivos`
-- ----------------------------
DROP TABLE IF EXISTS `tbldispositivos`;
CREATE TABLE `tbldispositivos` (
  `id_dispositivo` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `referencia` varchar(80) DEFAULT NULL,
  `descripcion` text,
  `cantidad` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `fotografia` varchar(80) DEFAULT NULL,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`id_dispositivo`),
  KEY `fk_Tbldispositivos_Tbldispositivos_1` (`id_marca`),
  CONSTRAINT `fk_Tbldispositivos_Tbldispositivos_1` FOREIGN KEY (`id_marca`) REFERENCES `tblmarca` (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbldispositivos
-- ----------------------------
INSERT INTO `tbldispositivos` VALUES ('1', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 32GB ROSE GOLD 4G LTE   ', '50', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('2', '0', '0', 'P8 LITE', 'P8 LITE', 'P8 LITE 2017 16GB DUAL SIM BLACK 4G LTE ', '55', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('3', '0', '0', 'P8 LITE', 'P8 LITE', 'P8 LITE 2017 16GB DUAL SIM WHITE 4G LTE ', '60', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('4', '0', '0', 'P9 LITE', 'P9 LITE', 'P9 LITE DUAL SIM 16GB GOLD 4G LTE  ', '65', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('5', '3', '3', 'A310F GALAXY', 'A310F GALAXY', 'A310F GALAXY A3 2016 16GB GOLD 4G LTE  ', '50', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('6', '0', '0', 'P9 LITE', 'P9 LITE', 'P9 LITE DUAL SIM 16GB WHITE 4G LTE  ', '55', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('7', '0', '0', 'P9 LITE', 'P9 LITE', 'P9 LITE DUAL SIM 16GB BLACK 4G LTE  ', '60', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('8', '3', '3', 'G390F GALAXY', 'G390F GALAXY', 'G390F GALAXY XCOVER 4 16GB BLACK 4G LTE  ', '65', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('9', '3', '3', 'J710FZ GALAXY', 'J710FZ GALAXY', 'J710FZ GALAXY J7 2016 16GB LTE GOLD 4G LTE ', '50', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('10', '3', '3', 'J710FZ GALAXY', 'J710FZ GALAXY', 'J710FZ GALAXY J7 2016 16GB LTE BLACK 4G LTE ', '55', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('11', '0', '0', 'P10 LITE', 'P10 LITE', 'P10 LITE 32GB DUAL SIM BLACK    ', '60', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('12', '0', '0', 'P10 LITE', 'P10 LITE', 'P10 LITE 32GB DUAL SIM WHITE    ', '65', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('13', '3', '3', 'A510F GALAXY', 'A510F GALAXY', 'A510F GALAXY A5 16GB 2016 GOLD 4G LTE  ', '50', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('14', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 16GB SPACE GRAY 4G LTE   ', '55', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('15', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 16GB GOLD 4G LTE    ', '60', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('16', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 16GB SILVER 4G LTE    ', '65', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('17', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 16GB ROSE GOLD 4G LTE   ', '50', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('18', '3', '3', 'A520F GALAXY', 'A520F GALAXY', 'A520F GALAXY A5 2017 32GB BLACK SKY 4G LTE ', '55', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('19', '3', '3', 'A520F GALAXY', 'A520F GALAXY', 'A520F GALAXY A5 2017 32GB GOLD SAND 4G LTE ', '60', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('20', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 32GB SPACE GRAY 4G LTE   ', '65', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('21', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 32GB ROSE GOLD 4G LTE   ', '50', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('22', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 32GB GOLD 4G LTE    ', '55', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('23', '1', '1', 'IPHONE SE', 'IPHONE SE', 'IPHONE SE 32GB SILVER 4G LTE    ', '60', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('24', '3', '3', 'G925F GALAXY', 'G925F GALAXY', 'G925F GALAXY S6 EDGE 32GB BLACK 4G LTE  ', '65', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('25', '1', '1', 'IPHONE 6', 'IPHONE 6', 'IPHONE 6 32GB SPACE GRAY     ', '50', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('26', '4', '4', 'G6 H870', 'G6 H870', 'G6 H870 32GB BLACK 4G LTE  LG  ', '55', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('27', '4', '4', 'G6 H870', 'G6 H870', 'G6 H870 32GB PLATINUM SILVER 4G LTE  LG ', '60', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('28', '4', '4', 'G6 H870', 'G6 H870', 'G6 H870 32GB WHITE 4G LTE  LG  ', '65', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('29', '3', '3', 'G930F GALAXY', 'G930F GALAXY', 'G930F GALAXY S7 32GB GOLD PLATINUM 4G LTE  ', '50', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('30', '3', '3', 'G930F GALAXY', 'G930F GALAXY', 'G930F GALAXY S7 32GB BLACK 4G LTE   ', '55', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('31', '0', '0', 'P10 64GB', 'P10 64GB', 'P10 64GB BLACK 4G LTE     ', '60', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('32', '3', '3', 'G935F GALAXY', 'G935F GALAXY', 'G935F GALAXY S7 EDGE 32GB BLACK 4G LTE  ', '65', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('33', '3', '3', 'G935F GALAXY', 'G935F GALAXY', 'G935F GALAXY S7 EDGE 32GB GOLD PLATINUM 4G LTE ', '50', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('34', '5', '5', 'S60 32GB', 'S60 32GB', 'S60 32GB DUAL SIM BLACK     ', '55', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('35', '3', '3', 'G950F GALAXY', 'G950F GALAXY', 'G950F GALAXY S8 64GB BLACK 4G LTE   ', '60', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('36', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 32GB ROSE GOLD 4G LTE   ', '65', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('37', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 32GB GOLD 4G LTE    ', '50', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('38', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 32GB BLACK 4G LTE    ', '55', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('39', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 128GB BLACK 4G LTE    ', '60', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('40', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 128GB JET BLACK 4G LTE   ', '65', '1', '', '1200000');
INSERT INTO `tbldispositivos` VALUES ('41', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 128GB GOLD 4G LTE    ', '50', '1', '', '1100000');
INSERT INTO `tbldispositivos` VALUES ('42', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 PLUS 32GB BLACK 4G LTE   ', '55', '1', '', '1000000');
INSERT INTO `tbldispositivos` VALUES ('43', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 PLUS 32GB SILVER 4G LTE   ', '60', '1', '', '1500000');
INSERT INTO `tbldispositivos` VALUES ('44', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 128GB PRODUCT RED 4G LTE   ', '65', '1', '', '1400000');
INSERT INTO `tbldispositivos` VALUES ('45', '1', '1', 'IPHONE 7', 'IPHONE 7', 'IPHONE 7 PLUS 128GB GOLD 4G LTE   ', '50', '1', '', '1300000');
INSERT INTO `tbldispositivos` VALUES ('46', '1', '1', 'IPHONE 8', 'IPHONE 8', 'IPHONE 8 64GB 4G LTE GOLD    ', '55', '1', '', '1200000');

-- ----------------------------
-- Table structure for `tblempleados`
-- ----------------------------
DROP TABLE IF EXISTS `tblempleados`;
CREATE TABLE `tblempleados` (
  `id_empleado` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `numero_documento` varchar(50) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nombres` varchar(80) DEFAULT NULL,
  `apellidos` varchar(80) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `comision` int(11) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `fecha_contratacion` datetime DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `fk_TblEmpleados_TblEmpleados_1` (`id_usuario`),
  CONSTRAINT `fk_TblEmpleados_TblEmpleados_1` FOREIGN KEY (`id_usuario`) REFERENCES `tblusuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblempleados
-- ----------------------------
INSERT INTO `tblempleados` VALUES ('1', '1', '1030521288', 'Cedula', '1986-02-28', 'Fabian', '', '1', '1000000', '5', 'asesor', '2016-01-01 00:00:00', '', '3102569876', 'Bogota', 'Calle 40 a Sur 94 - 13');
INSERT INTO `tblempleados` VALUES ('2', '2', '1030521289', 'Cedula', '1986-03-01', 'Brayan', 'Avila', '1', '1100000', '10', 'asesor', '2015-02-02 00:00:00', '', '3215698745', 'Bogota', 'Calle 40 a Sur 94 - 14');
INSERT INTO `tblempleados` VALUES ('3', '3', '1030521287', 'Cedula', '1986-03-02', 'Juan', 'Romero', '1', '1200000', '15', 'asesor', '2014-03-03 00:00:00', '', '3138133395', 'Bogota', 'Calle 40 a Sur 94 - 15');

-- ----------------------------
-- Table structure for `tblmarca`
-- ----------------------------
DROP TABLE IF EXISTS `tblmarca`;
CREATE TABLE `tblmarca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `descripcion` text,
  `procedencia_geografia` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblmarca
-- ----------------------------
INSERT INTO `tblmarca` VALUES ('0', 'HUAWEI', null, 'CHINA');
INSERT INTO `tblmarca` VALUES ('1', 'APPLE', null, 'EEUU');
INSERT INTO `tblmarca` VALUES ('3', 'SAMSUNG', null, 'COREA DEL SUR');
INSERT INTO `tblmarca` VALUES ('4', 'LG', null, 'COREA DEL SUR');
INSERT INTO `tblmarca` VALUES ('5', 'ASUS', null, 'CHINA');

-- ----------------------------
-- Table structure for `tblnivelacceso`
-- ----------------------------
DROP TABLE IF EXISTS `tblnivelacceso`;
CREATE TABLE `tblnivelacceso` (
  `id_nivel` int(11) NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblnivelacceso
-- ----------------------------
INSERT INTO `tblnivelacceso` VALUES ('1', '1', 'Administrador');

-- ----------------------------
-- Table structure for `tblterceros`
-- ----------------------------
DROP TABLE IF EXISTS `tblterceros`;
CREATE TABLE `tblterceros` (
  `id_tercero` int(11) NOT NULL,
  `tipo_tercero` varchar(10) DEFAULT NULL,
  `numero_documento` varchar(50) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `razon_social` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `pagina_web` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tercero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblterceros
-- ----------------------------
INSERT INTO `tblterceros` VALUES ('1', 'C', '830032493', 'NIT', 'CHAROM MONTAJES LTDA', 'AVILA', 'LILIAN', 'BOGOTA', '2014-01-01 00:00:00', 'www.pagina01@gmail.com', 'charommontajes@hotmail.com', '2606771', 'CL 2A 69 F 20', '1');
INSERT INTO `tblterceros` VALUES ('2', 'C', '830054090', 'NIT', 'FIDUCIARIA COLMENA FIDEICOMISOS', 'AVILA', 'CRISTIAN', 'BOGOTA', '2014-01-02 00:00:00', 'www.pagina01@gmail.com', 'notificaciones@colmenafiduciaria.co', '2105040', 'AV EL DORADO 69 C 03 TO A P 7', '1');
INSERT INTO `tblterceros` VALUES ('3', 'C', '900338114', 'NIT', 'CYCO SAS', 'ASTROS', 'JOSE', 'BOGOTA', '2014-01-03 00:00:00', 'www.pagina01@gmail.com', 'cycosas@gmail.com', '4770423', 'CL 47 SUR 25 34 P 2', '1');
INSERT INTO `tblterceros` VALUES ('4', 'C', '900352876', 'NIT', 'VANGUARDIA ELECTRICA SAS', 'OVALLE', 'LILIAN', 'BOGOTA', '2014-01-04 00:00:00', 'www.pagina01@gmail.com', 'vanelec10@gmail.com', '3727672', 'CL 22 SUR 24 H 38', '1');
INSERT INTO `tblterceros` VALUES ('5', 'C', '900379984', 'NIT', 'MULTIASESORIAS Y SERVICIOS EMPRESARIALES SAS', 'SANCHEZ', 'JAIRO', 'ARMENIA', '2014-01-05 00:00:00', 'www.pagina01@gmail.com', 'masempresariales@gmail.com', '7319529', 'CL 11 19 36', '1');
INSERT INTO `tblterceros` VALUES ('6', 'C', '900392851', 'NIT', 'INVERSIONES LA ELITE SAS', 'DAVILA', 'ESTEBAN', 'BOGOTA', '2014-01-06 00:00:00', 'www.pagina01@gmail.com', 'gerencia@laelite.com', '3425679', 'CL 7 17 54', '1');
INSERT INTO `tblterceros` VALUES ('7', 'C', '900928737', 'NIT', 'VALVESOLUTIONS SAS', 'CASTRO', 'DORA', 'BUCARAMANGA', '2014-01-07 00:00:00', 'www.pagina01@gmail.com', 'ferreteriavalvesolutions@gmail.com', '3187620203', 'CR 21 20 49', '1');
INSERT INTO `tblterceros` VALUES ('8', 'C', 'C10142231', 'NIT', 'HERRERA ALVAREZ JAIROO HERNAN', 'CASTILLO', 'DAIRO', 'PEREIRA', '2014-01-08 00:00:00', 'www.pagina01@gmail.com', 'gerencia@hidroneumaticajh.com', '3240783', 'CR 12 12 61', '1');
INSERT INTO `tblterceros` VALUES ('9', 'C', 'C1017122130', 'NIT', 'CADAVID PERDOMO LEONARDO', 'MARTINEZ', 'CLARA', 'LA DORADA', '2014-01-09 00:00:00', 'www.pagina01@gmail.com', 'cadavid.leonardo@gmail.com', '8572034', 'CL 11 6 35 BRR SOLEDAD', '1');
INSERT INTO `tblterceros` VALUES ('10', 'C', 'C1022941135', 'NIT', 'PORRAS GAONA FABIAN', 'RODRIGUEZ', 'ROCIO', 'BOGOTA', '2014-01-10 00:00:00', 'www.pagina01@gmail.com', 'ferreporras@outloo.es', '3712237', 'CL 8 A 19 38 LC 312', '1');
INSERT INTO `tblterceros` VALUES ('11', 'C', 'C1030636468', 'NIT', 'PINEDA MOYA YESSICA ALEJANDRA', 'DIAZ', 'ENRIQUE', 'CHACHANGUI NARIÑO', '2014-01-11 00:00:00', 'www.pagina01@gmail.com', 'JESSIK18@HOTMAIL.COM', '3143929487', 'BRR PEDREGAL CASA TRES', '1');
INSERT INTO `tblterceros` VALUES ('12', 'C', 'C1037642414', 'NIT', 'ALVAREZ RUEDA YULIANA', 'SOTO', 'CLAUDIA', 'MEDELLIN', '2014-01-12 00:00:00', 'www.pagina01@gmail.com', 'ORLANDOALVAREZGARCIA45@HOTMAIL.COM', '2539710', 'CL 48 97 A 96 APTO 101', '1');
INSERT INTO `tblterceros` VALUES ('13', 'C', 'C1073520460', 'NIT', 'GACHETA GRAJALES DANIELA', 'BERMUDEZ', 'MICHAEL', 'FUNZA', '2014-01-13 00:00:00', 'www.pagina01@gmail.com', 'dan_290@hotmail.com', '8259335', 'CR 9 6 14', '1');
INSERT INTO `tblterceros` VALUES ('14', 'C', 'C1085280619', 'NIT', 'JIMENEZ HEREDIA GINNA LIZETH', 'DIAZ', 'PABLO', 'PASTO', '2014-01-14 00:00:00', 'www.pagina01@gmail.com', 'SERVICOMPRESORESYMOTORES@HOTMAIL.COM', '7330617', 'CL 18 17 97', '1');
INSERT INTO `tblterceros` VALUES ('15', 'C', 'C1085306356', 'NIT', 'JIMENEZ ESPAÑA JESUS FELIPE', 'RANGEL', 'JAIME', 'PASTO', '2014-01-15 00:00:00', 'www.pagina01@gmail.com', 'jesusfelipejimenez@hotmail.com', '7303038', 'CR 2 21 A 26 BRR LA CAROLINA', '1');
INSERT INTO `tblterceros` VALUES ('16', 'C', 'C1110488396', 'NIT', 'SANCHEZ URRIAGO JHONATAN JAVIER', 'DIAZ', 'DIEGO', 'IBAGUE', '2014-01-16 00:00:00', 'www.pagina01@gmail.com', 'javiervs2@hotmail.com', '2750314', 'CR 5 24 48 BRR CARMEN', '1');
INSERT INTO `tblterceros` VALUES ('17', 'C', 'C1110545217', 'NIT', 'CASTRO MENDEZ LINA CONSTANZA', 'PEREZ', 'LUIS', 'BOGOTA', '2014-01-17 00:00:00', 'www.pagina01@gmail.com', 'norbey58@hotmail.com', '2728208', 'SM 13 MZ 37 CA 16 ET 2', '1');
INSERT INTO `tblterceros` VALUES ('18', 'C', 'C1116723297', 'NIT', 'GOMEZ BONILLA MARTHA ISABEL', 'MORENO GOMEZ', 'PEDRO', 'CALI', '2014-01-18 00:00:00', 'www.pagina01@gmail.com', 'MAIGOI@GMAIL.COM', '3168418970', 'CL 70 B 2 D 31 BRR JORGE ELIECER GAITAN', '1');
INSERT INTO `tblterceros` VALUES ('19', 'C', 'C11306347', 'NIT', 'ALBARRACIN JESUS', 'AYALA', 'MILENA', 'PEREIRA', '2014-01-19 00:00:00', 'www.pagina01@gmail.com', 'airefritermica@etp.net.co', '3333431', 'CC FIDUCENTRO LC ESP 12', '1');
INSERT INTO `tblterceros` VALUES ('20', 'C', 'C1140820350', 'NIT', 'BENEDETTI ESTRADA ADAN ENRIQUE', 'PEREZ', 'ESEQUIEL', 'BARRANQUILLA', '2014-01-20 00:00:00', 'www.pagina01@gmail.com', 'adan.benedetti@hotmail.com', '3576704', 'CR 47 98 40 AP 403', '1');
INSERT INTO `tblterceros` VALUES ('21', 'C', 'C12112854', 'NIT', 'FONSECA RAMIREZ LUIS ALEJANDRO', 'RODRIGUEZ', 'NELSON', 'GIRARDOT', '2014-01-21 00:00:00', 'www.pagina01@gmail.com', 'ferrenal@hotmail.com', '8887649', 'CR 8 21 A 04 BRR GRANADA', '1');
INSERT INTO `tblterceros` VALUES ('22', 'C', 'C12128279', 'NIT', 'LOSADA ZAPATA SALVADOR', 'AGUDELO', 'JOHANNA', 'NEIVA', '2014-01-22 00:00:00', 'www.pagina01@gmail.com', 'salvadorlosadaneiva@hotmail.com', '8718012', 'CL 5 5 A 79', '1');
INSERT INTO `tblterceros` VALUES ('23', 'C', 'C12964476', 'NIT', 'JIMENEZ ORDOÑEZ EDUARDO VICENTE', 'FRANCO', 'EVELIO', 'PASTO', '2014-01-23 00:00:00', 'www.pagina01@gmail.com', 'servicompresoresymotores@hotmail.com', '7330435', 'CR 19 12 74 AV LAS AMERICAS', '1');
INSERT INTO `tblterceros` VALUES ('24', 'C', 'C13471095', 'NIT', 'HERNANDEZ PARRADA JORGE ENRIQUE', 'TARAZONA', 'MARIA', 'CUCUTA', '2014-01-24 00:00:00', 'www.pagina01@gmail.com', 'geordy_2005@hotmail.com', '5813938', 'CL 4 4 25 BRR LATI', '1');
INSERT INTO `tblterceros` VALUES ('25', 'C', 'C13485098', 'NIT', 'GARCIA SANTIAGO JAIME', 'OSPINA', 'KEVIN', 'CUCUTA', '2014-01-25 00:00:00', 'www.pagina01@gmail.com', 'tecnicompresoresdelnorte@hotmail.com', '5722313', 'DG AVENIDA SANTANDER  AV 4 3 16', '1');
INSERT INTO `tblterceros` VALUES ('26', 'P', 'P13486098', 'NIT', 'GARCIA SANTIAGO JAIME', 'TRUJILLO', 'DIANA', 'CUCUTILLA', '2014-01-26 00:00:00', 'www.pagina01@gmail.com', 'tecnicompresoresdelnorte_@hotmail.com', '75769069', 'DG 8 A 3 80 BRR LATI', '1');
INSERT INTO `tblterceros` VALUES ('27', 'P', 'P13506205', 'NIT', 'GELVEZ MIGUEL ANGEL Y O MOTORES BOMBAS Y HERRAMIENTAS', 'MARTINEZ', 'MIGUEL', 'BOGOTA', '2014-01-27 00:00:00', 'www.pagina01@gmail.com', 'motoresbombasyherramientas@yahoo.es', '4308916', 'CR  72 BIS #  73-49', '1');
INSERT INTO `tblterceros` VALUES ('28', 'P', 'P13702391', 'NIT', 'FERRETERIA JN Y O NELSON BERNA', 'TIMANA', 'NOHEMIO', 'BUCARMANGA', '2014-01-28 00:00:00', 'www.pagina01@gmail.com', 'ferreteriajn1703@hotmail.com', '6303323', 'CR  15  24 30', '1');
INSERT INTO `tblterceros` VALUES ('29', 'P', 'P13827455', 'NIT', 'GARNICA SANCHEZ LUIS ERNESTO', 'ACOSTA', 'CARLOS', 'SAN ALBERTO', '2014-01-29 00:00:00', 'www.pagina01@gmail.com', 'partesyrepuestos2010@hotmail.com', '5645010', 'CL 3 2 31 BRR CENTRO', '1');
INSERT INTO `tblterceros` VALUES ('30', 'P', 'P13955056', 'NIT', 'MATEUS PAEZ WILLIAM', 'ROJAS', 'ANA', 'VELEZ', '2014-01-30 00:00:00', 'www.pagina01@gmail.com', 'productoselporvenir2012@hotmail.com', '7564173', 'VDA ACO Y PEÑA BLANCA', '1');
INSERT INTO `tblterceros` VALUES ('31', 'P', 'P14319993', 'NIT', 'CALDAS BERNAL ERNESTO', 'NULL', 'EULIS', 'HONDA', '2014-01-31 00:00:00', 'www.pagina01@gmail.com', 'betunescaldas@gmail.com', '2517027', 'CL 9 21 12', '1');
INSERT INTO `tblterceros` VALUES ('32', 'P', 'P14838262', 'NIT', 'LABRADA MELENDEZ LEONARDO', 'RODRIGUEZ', 'MARCOS', 'CALI', '2014-02-01 00:00:00', 'www.pagina01@gmail.com', 'leoname21@hotmail.com', '8801222', 'CR 7 16 10', '1');
INSERT INTO `tblterceros` VALUES ('33', 'P', 'P16751226', 'NIT', 'JURADO GARCIA JHONNY', 'CUELLAR', 'MAURICIO', 'GUADALAJARA DE BUGA', '2014-02-02 00:00:00', 'www.pagina01@gmail.com', 'tornillosbuga@gmail.com', '2366974', 'CR 8 13 44', '1');
INSERT INTO `tblterceros` VALUES ('34', 'P', 'P17165235', 'NIT', 'VELOZA DIAZ ALVARO', 'DIAZ', 'JOSE', 'BOGOTA', '2014-02-03 00:00:00', 'www.pagina01@gmail.com', 'info@vedial.com', '2476510', 'CR 29 7 64', '1');
INSERT INTO `tblterceros` VALUES ('35', 'P', 'P17187807', 'NIT', 'LOPEZ INOCENCIO', 'PARRA', 'RICARDO', 'BOGOTA', '2014-02-04 00:00:00', 'www.pagina01@gmail.com', 'compras@inocenciolopez.com', '7809867', 'CL 69 B SUR 78 56 BRR BOSA SAN PABLO II', '1');
INSERT INTO `tblterceros` VALUES ('36', 'P', 'P17630416', 'NIT', 'SANTACRUZ ZAMBRANO GIL AMERICO', 'VASQUEZ', 'LUIS', 'BOGOTA', '2014-02-05 00:00:00', 'www.pagina01@gmail.com', 'calderassantacruz@hotmail.com', '2779145', 'CL 5 21 10 AP 101', '1');
INSERT INTO `tblterceros` VALUES ('37', 'P', 'P19148888', 'NIT', 'GONZALEZ VARGAS JOSE ROBERTO', 'FRANCO', 'ANGELICA', 'BOGOTA', '2014-02-06 00:00:00', 'www.pagina01@gmail.com', 'gasolinerasymontallantas@gmail.com', '2472845', 'CL 15 28 59', '1');
INSERT INTO `tblterceros` VALUES ('38', 'P', 'P19241914', 'NIT', 'PEDREROS CARDENAS MIGUEL ANTONIO', 'GARCIA', 'RICARDO', 'GUATEQUE - BOYACA', '2014-02-07 00:00:00', 'www.pagina01@gmail.com', 'jadmoragropecuario@gmail.com', '3125014023', 'CR 6 6 46  BRR BOSQUE DORADO', '1');
INSERT INTO `tblterceros` VALUES ('39', 'P', 'P19253767', 'NIT', 'DIAZ PRIETO JOSE', 'SUAREZ', 'ZHAIRO', 'BOGOTA', '2014-02-08 00:00:00', 'www.pagina01@gmail.com', 'diazp_jose@yahoo.com', '4104681', 'CARRERA 69 D 24 A 78 AP 514', '1');
INSERT INTO `tblterceros` VALUES ('40', 'P', 'P19281229', 'NIT', 'DE LA TORRE AGUIRRE RICARDO ANGEL MANUEL', 'ARCHILA', 'CRISTINA', 'BOGOTA', '2014-02-09 00:00:00', 'www.pagina01@gmail.com', 'trikacol@yahoo.com', '2017758', 'CL 2 C  26 60', '1');
INSERT INTO `tblterceros` VALUES ('41', 'P', 'P19337198', 'NIT', 'GARAY QUIROGA  HENRY', 'RUIZ', 'YENY', 'BOGOTA', '2014-02-10 00:00:00', 'www.pagina01@gmail.com', 'jhongaray0726@hotmail.com', '6636300', 'CR 31 31 39 BRR PORVENIR', '1');
INSERT INTO `tblterceros` VALUES ('42', 'P', 'P194183', 'NIT', 'CORTES MANOSALVA PEDRO ALEJANDRO', 'GORDILLO', 'LUZ', 'BOGOTA', '2014-02-11 00:00:00', 'www.pagina01@gmail.com', 'hidraulicas.peaco@hotmail.com', '7240307', 'CL 47 A 31 36 SUR', '1');
INSERT INTO `tblterceros` VALUES ('43', 'P', 'P19432926', 'NIT', 'MONTOYA TAMAYO JUAN ALBEIRO Y/O FERRETERIA TAMAYO', 'PIAMONTE', 'JULIAN', 'BOGOTA', '2014-02-12 00:00:00', 'www.pagina01@gmail.com', 'ES_PEPINOSA@HOTMAIL.COM', '2175148', 'CR  22 69 55', '1');
INSERT INTO `tblterceros` VALUES ('44', 'P', 'P27566420', 'NIT', 'TRUJILLO JIMENEZ ELSA MATILDE', 'PALOMINO', 'JULIAN', 'BUCARAMANGA', '2014-02-13 00:00:00', 'www.pagina01@gmail.com', 'ferreteria_lafloresta@yahoo.com', '6572420', 'CR 44 57 81 BRR LA FLORESTA', '1');
INSERT INTO `tblterceros` VALUES ('45', 'P', 'P29502809', 'NIT', 'DELGADO SERENO JUAN CAMILO', 'ROJAS', 'SILVIA', 'ANAPOIMA', '2014-02-14 00:00:00', 'www.pagina01@gmail.com', 'j.camilodelgado@hotmail.com', '31765774116', 'CR 5 5 50 AUT', '1');
INSERT INTO `tblterceros` VALUES ('46', 'P', 'P31164393', 'NIT', 'QUINTERO BARBOSA ZULMA', 'GARRIDOS GONZALEZ', 'LAURA', 'PEREIRA', '2014-02-15 00:00:00', 'www.pagina01@gmail.com', 'distribucionesind@hotmail.c om', '3141572', 'AV LAS AMERICAS 44 51', '1');
INSERT INTO `tblterceros` VALUES ('47', 'P', 'P31710550', 'NIT', 'NEUMATICA DE OCCIDENTE', 'NULL', 'NULL', 'CALI', '2014-02-16 00:00:00', 'www.pagina01@gmail.com', 'ndeoccidente@gmail.com', '3117648467', 'CL 20 2 24', '1');
INSERT INTO `tblterceros` VALUES ('48', 'P', 'P31877516', 'NIT', 'DISTRIBUIDORA DE VALVULAS DISVAL', 'ECHEVERRY', 'MARY', 'CALI', '2014-02-17 00:00:00', 'www.pagina01@gmail.com', 'MA EUGENIA JIMENEZ SUAREZ', '5572001', 'AUTOP SUR  10 115', '1');
INSERT INTO `tblterceros` VALUES ('49', 'P', 'P3250169', 'NIT', 'HOYOS ROJAS JOSE MANUEL', 'CANO', 'JUAN', 'MONTERREY', '2014-02-18 00:00:00', 'www.pagina01@gmail.com', 'ferrecomercial1@hotmail.com', '6249634', 'CRA 10 17 76', '1');
INSERT INTO `tblterceros` VALUES ('50', 'P', 'P39720973', 'NIT', 'SIERRA CONTRERAS ELFA', 'DIAZ', 'LEIDY', 'BOGOTA', '2014-02-19 00:00:00', 'www.pagina01@gmail.com', 'elfa_40@hotmail.com', '5475452', 'CL 72 57 B 54 BRR SAN FERNANDO', '1');

-- ----------------------------
-- Table structure for `tblusuarios`
-- ----------------------------
DROP TABLE IF EXISTS `tblusuarios`;
CREATE TABLE `tblusuarios` (
  `id_usuario` int(11) NOT NULL,
  `fecha_crea` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `id_nivel_acceso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_TblUsuarios_TblUsuarios_1` (`id_nivel_acceso`),
  CONSTRAINT `fk_TblUsuarios_TblUsuarios_1` FOREIGN KEY (`id_nivel_acceso`) REFERENCES `tblnivelacceso` (`id_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblusuarios
-- ----------------------------
INSERT INTO `tblusuarios` VALUES ('1', '2017-01-02', 'juan', 'juan', '1', '1');
INSERT INTO `tblusuarios` VALUES ('2', '2017-03-01', 'brayan', 'brayan', '1', '1');
INSERT INTO `tblusuarios` VALUES ('3', '2017-04-14', 'fabian', 'fabian', '1', '1');

-- ----------------------------
-- Table structure for `tblventas`
-- ----------------------------
DROP TABLE IF EXISTS `tblventas`;
CREATE TABLE `tblventas` (
  `id_venta` int(11) NOT NULL,
  `id_dispositivo` int(255) DEFAULT NULL,
  `id_tercero` int(255) DEFAULT NULL,
  `id_usuario` int(255) DEFAULT NULL,
  `id_empleado` int(255) DEFAULT NULL,
  `fecha_venta` datetime DEFAULT NULL,
  `valor_venta` double(255,0) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `fk_TblVentas_TblVentas_1` (`id_dispositivo`),
  KEY `fk_TblVentas_TblVentas_2` (`id_tercero`),
  KEY `fk_TblVentas_TblVentas_3` (`id_usuario`),
  KEY `fk_TblVentas_TblVentas_4` (`id_empleado`),
  CONSTRAINT `fk_TblVentas_TblVentas_1` FOREIGN KEY (`id_dispositivo`) REFERENCES `tbldispositivos` (`id_dispositivo`),
  CONSTRAINT `fk_TblVentas_TblVentas_2` FOREIGN KEY (`id_tercero`) REFERENCES `tblterceros` (`id_tercero`),
  CONSTRAINT `fk_TblVentas_TblVentas_3` FOREIGN KEY (`id_usuario`) REFERENCES `tblusuarios` (`id_usuario`),
  CONSTRAINT `fk_TblVentas_TblVentas_4` FOREIGN KEY (`id_empleado`) REFERENCES `tblempleados` (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblventas
-- ----------------------------
INSERT INTO `tblventas` VALUES ('1', '1', '1', '1', '1', '2017-01-02 00:00:00', '2000100', '1');
INSERT INTO `tblventas` VALUES ('2', '2', '2', '2', '2', '2017-01-03 00:00:00', '2000200', '2');
INSERT INTO `tblventas` VALUES ('3', '3', '3', '3', '3', '2017-01-04 00:00:00', '2000300', '1');
INSERT INTO `tblventas` VALUES ('4', '4', '4', '1', '1', '2017-01-05 00:00:00', '2000400', '2');
INSERT INTO `tblventas` VALUES ('5', '5', '5', '2', '2', '2017-01-06 00:00:00', '2000500', '1');
INSERT INTO `tblventas` VALUES ('6', '6', '6', '3', '3', '2017-01-07 00:00:00', '2000600', '2');
INSERT INTO `tblventas` VALUES ('7', '7', '7', '1', '1', '2017-01-08 00:00:00', '2000700', '1');
INSERT INTO `tblventas` VALUES ('8', '8', '8', '2', '2', '2017-01-09 00:00:00', '2000800', '2');
INSERT INTO `tblventas` VALUES ('9', '9', '9', '3', '3', '2017-01-10 00:00:00', '2000900', '1');
INSERT INTO `tblventas` VALUES ('10', '10', '10', '1', '1', '2017-02-11 00:00:00', '2001000', '2');
INSERT INTO `tblventas` VALUES ('11', '11', '11', '2', '2', '2017-02-12 00:00:00', '2001100', '1');
INSERT INTO `tblventas` VALUES ('12', '12', '12', '3', '3', '2017-02-13 00:00:00', '2001200', '2');
INSERT INTO `tblventas` VALUES ('13', '13', '13', '1', '1', '2017-02-14 00:00:00', '2001300', '1');
INSERT INTO `tblventas` VALUES ('14', '14', '14', '2', '2', '2017-02-15 00:00:00', '2001400', '2');
INSERT INTO `tblventas` VALUES ('15', '15', '15', '3', '3', '2017-02-16 00:00:00', '2001500', '1');
INSERT INTO `tblventas` VALUES ('16', '16', '16', '1', '1', '2017-02-17 00:00:00', '2001600', '2');
INSERT INTO `tblventas` VALUES ('17', '17', '17', '2', '2', '2017-02-18 00:00:00', '2001700', '1');
INSERT INTO `tblventas` VALUES ('18', '18', '18', '3', '3', '2017-03-19 00:00:00', '2001800', '2');
INSERT INTO `tblventas` VALUES ('19', '19', '19', '1', '1', '2017-03-20 00:00:00', '2001900', '1');
INSERT INTO `tblventas` VALUES ('20', '20', '20', '2', '2', '2017-03-21 00:00:00', '2002000', '2');
INSERT INTO `tblventas` VALUES ('21', '21', '21', '3', '3', '2017-03-22 00:00:00', '2002100', '1');
INSERT INTO `tblventas` VALUES ('22', '22', '22', '1', '1', '2017-03-23 00:00:00', '2002200', '2');
INSERT INTO `tblventas` VALUES ('23', '23', '23', '2', '2', '2017-03-24 00:00:00', '2002300', '1');
INSERT INTO `tblventas` VALUES ('24', '24', '24', '3', '3', '2017-03-25 00:00:00', '2002400', '2');
INSERT INTO `tblventas` VALUES ('25', '25', '25', '1', '1', '2017-03-26 00:00:00', '2002500', '1');
INSERT INTO `tblventas` VALUES ('26', '26', '26', '2', '2', '2017-04-27 00:00:00', '2002600', '2');
INSERT INTO `tblventas` VALUES ('27', '27', '27', '3', '3', '2017-04-28 00:00:00', '2002700', '1');
INSERT INTO `tblventas` VALUES ('28', '28', '28', '1', '1', '2017-04-29 00:00:00', '2002800', '2');
INSERT INTO `tblventas` VALUES ('29', '29', '29', '2', '2', '2017-04-30 00:00:00', '2002900', '1');
INSERT INTO `tblventas` VALUES ('30', '30', '30', '3', '3', '2017-05-01 00:00:00', '2003000', '2');
INSERT INTO `tblventas` VALUES ('31', '31', '31', '1', '1', '2017-05-02 00:00:00', '2003100', '1');
INSERT INTO `tblventas` VALUES ('32', '32', '32', '2', '2', '2017-05-03 00:00:00', '2003200', '2');
INSERT INTO `tblventas` VALUES ('33', '33', '33', '3', '3', '2017-06-03 00:00:00', '2003300', '1');
INSERT INTO `tblventas` VALUES ('34', '34', '34', '1', '1', '2017-06-04 00:00:00', '2003400', '2');
INSERT INTO `tblventas` VALUES ('35', '35', '35', '2', '2', '2017-06-05 00:00:00', '2003500', '1');
INSERT INTO `tblventas` VALUES ('36', '36', '36', '3', '3', '2017-06-06 00:00:00', '2003600', '2');
INSERT INTO `tblventas` VALUES ('37', '37', '37', '1', '1', '2017-06-07 00:00:00', '2003700', '1');
INSERT INTO `tblventas` VALUES ('38', '38', '38', '2', '2', '2017-06-08 00:00:00', '2003800', '2');
INSERT INTO `tblventas` VALUES ('39', '39', '39', '3', '3', '2017-06-09 00:00:00', '2003900', '1');
INSERT INTO `tblventas` VALUES ('40', '40', '40', '1', '1', '2017-06-10 00:00:00', '2004000', '2');
INSERT INTO `tblventas` VALUES ('41', '41', '41', '2', '2', '2017-06-11 00:00:00', '2004100', '1');
INSERT INTO `tblventas` VALUES ('42', '42', '42', '3', '3', '2017-06-12 00:00:00', '2004200', '2');
INSERT INTO `tblventas` VALUES ('43', '43', '43', '1', '1', '2017-07-16 00:00:00', '2004300', '1');
INSERT INTO `tblventas` VALUES ('44', '44', '44', '2', '2', '2017-07-17 00:00:00', '2004400', '2');
INSERT INTO `tblventas` VALUES ('45', '45', '45', '3', '3', '2017-07-18 00:00:00', '2004500', '1');
INSERT INTO `tblventas` VALUES ('46', '46', '46', '1', '1', '2017-07-19 00:00:00', '2004600', '2');
INSERT INTO `tblventas` VALUES ('47', '1', '47', '2', '2', '2017-07-20 00:00:00', '2004700', '1');
INSERT INTO `tblventas` VALUES ('48', '2', '48', '3', '3', '2017-07-21 00:00:00', '2004800', '2');
INSERT INTO `tblventas` VALUES ('49', '3', '49', '1', '1', '2017-07-22 00:00:00', '2004900', '1');
INSERT INTO `tblventas` VALUES ('50', '4', '50', '2', '2', '2017-08-23 00:00:00', '2005000', '2');
INSERT INTO `tblventas` VALUES ('51', '5', '1', '1', '1', '2017-08-24 00:00:00', '2005100', '1');
INSERT INTO `tblventas` VALUES ('52', '6', '2', '2', '2', '2017-08-25 00:00:00', '2005200', '2');
INSERT INTO `tblventas` VALUES ('53', '7', '3', '3', '3', '2017-08-26 00:00:00', '2005300', '1');
INSERT INTO `tblventas` VALUES ('54', '8', '4', '1', '1', '2017-08-27 00:00:00', '2005400', '2');
INSERT INTO `tblventas` VALUES ('55', '7', '1', '1', '1', '2017-08-28 00:00:00', '2005500', '1');
INSERT INTO `tblventas` VALUES ('56', '7', '1', '1', '1', '2017-08-29 00:00:00', '2005600', '2');
INSERT INTO `tblventas` VALUES ('57', '7', '1', '1', '1', '2017-09-30 00:00:00', '2005700', '1');
INSERT INTO `tblventas` VALUES ('58', '7', '1', '1', '1', '2017-10-01 00:00:00', '2005800', '2');
INSERT INTO `tblventas` VALUES ('59', '7', '1', '1', '1', '2017-10-02 00:00:00', '2005900', '1');
INSERT INTO `tblventas` VALUES ('60', '7', '1', '1', '1', '2017-10-03 00:00:00', '2006000', '2');
INSERT INTO `tblventas` VALUES ('61', '7', '1', '2', '2', '2017-10-04 00:00:00', '2006100', '1');
INSERT INTO `tblventas` VALUES ('62', '7', '12', '3', '3', '2017-10-05 00:00:00', '2006200', '2');
INSERT INTO `tblventas` VALUES ('63', '17', '13', '1', '1', '2017-10-06 00:00:00', '2006300', '1');
INSERT INTO `tblventas` VALUES ('64', '18', '14', '2', '2', '2017-10-07 00:00:00', '2006400', '2');
INSERT INTO `tblventas` VALUES ('65', '19', '15', '3', '3', '2017-10-08 00:00:00', '2006500', '1');
INSERT INTO `tblventas` VALUES ('66', '20', '16', '1', '1', '2017-10-09 00:00:00', '2006600', '2');
INSERT INTO `tblventas` VALUES ('67', '21', '17', '2', '2', '2017-11-10 00:00:00', '2006700', '1');
INSERT INTO `tblventas` VALUES ('68', '22', '18', '3', '3', '2017-11-11 00:00:00', '2006800', '2');
INSERT INTO `tblventas` VALUES ('69', '23', '19', '1', '1', '2017-11-12 00:00:00', '2006900', '1');
INSERT INTO `tblventas` VALUES ('70', '21', '20', '3', '3', '2017-11-13 00:00:00', '2007000', '2');
INSERT INTO `tblventas` VALUES ('71', '21', '21', '3', '3', '2017-11-14 00:00:00', '2007100', '1');
INSERT INTO `tblventas` VALUES ('72', '21', '22', '3', '3', '2017-11-15 00:00:00', '2007200', '2');
INSERT INTO `tblventas` VALUES ('73', '21', '19', '3', '3', '2017-11-16 00:00:00', '2007300', '1');
INSERT INTO `tblventas` VALUES ('74', '21', '19', '3', '3', '2017-11-17 00:00:00', '2007400', '2');
INSERT INTO `tblventas` VALUES ('75', '21', '19', '3', '3', '2017-11-18 00:00:00', '2007500', '1');
INSERT INTO `tblventas` VALUES ('76', '30', '19', '2', '2', '2017-11-19 00:00:00', '2007600', '2');
INSERT INTO `tblventas` VALUES ('77', '31', '19', '3', '3', '2017-11-20 00:00:00', '2007700', '1');
INSERT INTO `tblventas` VALUES ('78', '32', '19', '1', '1', '2017-12-21 00:00:00', '2007800', '2');
INSERT INTO `tblventas` VALUES ('79', '33', '19', '2', '2', '2017-12-22 00:00:00', '2007900', '1');
INSERT INTO `tblventas` VALUES ('80', '34', '30', '3', '3', '2017-12-23 00:00:00', '2008000', '2');
INSERT INTO `tblventas` VALUES ('81', '35', '31', '1', '1', '2017-12-24 00:00:00', '2008100', '1');
INSERT INTO `tblventas` VALUES ('82', '36', '32', '2', '2', '2017-12-25 00:00:00', '2008200', '2');
INSERT INTO `tblventas` VALUES ('83', '37', '33', '3', '3', '2017-12-26 00:00:00', '2008300', '1');
INSERT INTO `tblventas` VALUES ('84', '38', '34', '2', '2', '2017-12-27 00:00:00', '2008400', '2');
INSERT INTO `tblventas` VALUES ('85', '39', '35', '2', '2', '2017-12-28 00:00:00', '2008500', '1');
INSERT INTO `tblventas` VALUES ('86', '37', '36', '2', '2', '2017-12-29 00:00:00', '2008600', '2');
INSERT INTO `tblventas` VALUES ('87', '37', '37', '2', '2', '2017-12-30 00:00:00', '2008700', '1');
INSERT INTO `tblventas` VALUES ('88', '37', '38', '2', '2', '2017-12-31 00:00:00', '2008800', '2');
INSERT INTO `tblventas` VALUES ('89', '37', '35', '2', '2', '2018-01-01 00:00:00', '2008900', '1');
INSERT INTO `tblventas` VALUES ('90', '37', '35', '2', '2', '2018-01-02 00:00:00', '2009000', '2');
INSERT INTO `tblventas` VALUES ('91', '37', '35', '2', '2', '2018-01-03 00:00:00', '2009100', '1');
INSERT INTO `tblventas` VALUES ('92', '37', '35', '3', '3', '2018-01-04 00:00:00', '2009200', '2');
INSERT INTO `tblventas` VALUES ('93', '22', '35', '3', '3', '2018-01-05 00:00:00', '2009300', '1');
INSERT INTO `tblventas` VALUES ('94', '22', '35', '3', '3', '2018-01-06 00:00:00', '2009400', '2');
INSERT INTO `tblventas` VALUES ('95', '22', '35', '3', '3', '2018-01-07 00:00:00', '2009500', '1');
INSERT INTO `tblventas` VALUES ('96', '22', '35', '3', '3', '2018-01-08 00:00:00', '2009600', '2');
INSERT INTO `tblventas` VALUES ('97', '22', '50', '2', '2', '2018-01-09 00:00:00', '2009700', '1');
INSERT INTO `tblventas` VALUES ('98', '22', '50', '3', '3', '2018-01-10 00:00:00', '2009800', '2');
INSERT INTO `tblventas` VALUES ('99', '22', '49', '1', '1', '2018-01-11 00:00:00', '2009900', '1');
INSERT INTO `tblventas` VALUES ('100', '22', '50', '2', '2', '2018-01-12 00:00:00', '2010000', '2');
