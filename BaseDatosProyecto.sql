/*
SQLyog - Free MySQL GUI v5.19
Host - 5.0.45-community-nt-log : Database - proyecto
*********************************************************************
Server version : 5.0.45-community-nt-log
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `proyecto`;

USE `proyecto`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `anx_documentos` */

DROP TABLE IF EXISTS `anx_documentos`;

CREATE TABLE `anx_documentos` (
  `idConse` int(11) NOT NULL auto_increment,
  `idRadicado` int(11) default NULL,
  `idUsuario` int(2) default NULL,
  `fecha_anexo` timestamp NULL default CURRENT_TIMESTAMP,
  `nombre` varchar(50) default NULL,
  `descripcion` varchar(250) default NULL,
  PRIMARY KEY  (`idConse`),
  KEY `id_imagen` (`idRadicado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `anx_documentos` */

/*Table structure for table `archivadores` */

DROP TABLE IF EXISTS `archivadores`;

CREATE TABLE `archivadores` (
  `consecu` int(11) NOT NULL auto_increment,
  `identif` varchar(100) default NULL COMMENT 'identificador del archivador',
  `archivador` varchar(30) default NULL COMMENT 'nombre del archivador',
  `path_escan` varchar(200) default NULL COMMENT 'path de scaneo',
  PRIMARY KEY  (`consecu`),
  UNIQUE KEY `archivador` (`archivador`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `archivadores` */

insert into `archivadores` (`consecu`,`identif`,`archivador`,`path_escan`) values (1,'DOCUMENTOS','ARC_DOCUMENTOS','E:\\DIGITALIZACION_GESTION_WF\\');

/*Table structure for table `archivos` */

DROP TABLE IF EXISTS `archivos`;

CREATE TABLE `archivos` (
  `codArc` int(11) NOT NULL auto_increment,
  `codRadArc` int(11) NOT NULL,
  `tipoArchivo` varchar(10) default NULL,
  `rutaArchivo` varchar(100) default NULL,
  PRIMARY KEY  (`codArc`),
  KEY `codRadArc` (`codRadArc`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `archivos` */

insert into `archivos` (`codArc`,`codRadArc`,`tipoArchivo`,`rutaArchivo`) values (1,1,'PDF','D:REPOSITORIO2019PDF\001.PDF');
insert into `archivos` (`codArc`,`codRadArc`,`tipoArchivo`,`rutaArchivo`) values (2,1,'DOC','D:REPOSITORIO2019DOC\001.DOC');
insert into `archivos` (`codArc`,`codRadArc`,`tipoArchivo`,`rutaArchivo`) values (3,2,'PDF','D:REPOSITORIO2019PDF\001.PDF');
insert into `archivos` (`codArc`,`codRadArc`,`tipoArchivo`,`rutaArchivo`) values (4,3,'PDF','D:REPOSITORIO2019PDF\003.PDF');
insert into `archivos` (`codArc`,`codRadArc`,`tipoArchivo`,`rutaArchivo`) values (5,4,'PDF','D:REPOSITORIO2019PDF\004.PDF');

/*Table structure for table `auditoria` */

DROP TABLE IF EXISTS `auditoria`;

CREATE TABLE `auditoria` (
  `idconse` int(11) NOT NULL auto_increment,
  `anterior` varchar(200) default NULL,
  `nuevo` varchar(200) default NULL,
  `tabla` varchar(20) default NULL,
  `fecha` datetime default NULL,
  `usuario` varchar(20) default NULL,
  PRIMARY KEY  (`idconse`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `auditoria` */

insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (1,'LUIS CARLOS AMAYA-carloama@servidor.com-bfed191e5f5a9616a3c2b55fc2e733-1','LUIS CARLOS AMAYA-carloama@servidor.com-bfed191e5f5a9616a3c2b55fc2e733-1','usuario','2020-03-31 17:28:04','root');
insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (2,'LUIS CARLOS AMAYA-carloama@servidor.com-bfed191e5f5a9616a3c2b55fc2e733-1','LUIS CARLOS AMAYA VELASQUEZ-carloama@servidor.com-bfed191e5f5a9616a3c2b55fc2e733-1','usuario','2020-03-31 17:28:14','root');
insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (3,'79748285-DIEGO VELASQUEZ-2','79285748-DIEGO FERNANDO VELAQUEZ-1','remitente','2020-03-31 17:41:05','root');
insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (4,'Anula Radicado: 7',NULL,'radicado','2020-03-31 17:47:50','root');
insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (5,'Anula Usuario: DIEGO VELASQUEZ',NULL,'usuario','2020-03-31 17:50:16','root');
insert into `auditoria` (`idconse`,`anterior`,`nuevo`,`tabla`,`fecha`,`usuario`) values (6,'Anula Remitente: JULIO MORILLO',NULL,'remitente','2020-03-31 17:53:12','root');

/*Table structure for table `dependencia` */

DROP TABLE IF EXISTS `dependencia`;

CREATE TABLE `dependencia` (
  `CodDependencia` int(11) NOT NULL auto_increment,
  `NomDependencia` varchar(50) default NULL,
  PRIMARY KEY  (`CodDependencia`),
  UNIQUE KEY `NomDependencia` (`NomDependencia`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `dependencia` */

insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (1,'CONTABILIDAD');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (2,'FACTURACION');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (3,'CONTROL INTERNO');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (4,'GESTION DE CALIDAD');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (5,'GESTION JURIDICA');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (6,'GESTION HUMANA');
insert into `dependencia` (`CodDependencia`,`NomDependencia`) values (9,'QUEJAS Y RECLAMOS');

/*Table structure for table `entrada` */

DROP TABLE IF EXISTS `entrada`;

CREATE TABLE `entrada` (
  `id_conse` int(11) NOT NULL auto_increment,
  `no_radicado` varchar(20) default NULL,
  `fecha_radicado` datetime default '0000-00-00 00:00:00',
  `no_expediente` varchar(20) default ' ',
  `no_documento` varchar(20) default ' ',
  `fecha_documento` date default '0000-00-00',
  `tipo_documento` int(11) default '0',
  `valor` int(11) default '0',
  `ciudad` int(11) default '0',
  `sucursal` int(11) default '0',
  `empresa_rte` varchar(20) default '0',
  `funcionario_rte` varchar(50) default NULL,
  `empaque` int(11) default '0',
  `guia` varchar(50) default NULL,
  `empresa_mensajeria` int(11) default '0',
  `asunto` varchar(150) default NULL,
  `dependencia` int(11) default '0',
  `serie` int(11) default '0',
  `subserie` int(11) default '0',
  `funcionario` int(11) default '0',
  `observaciones` varchar(150) default NULL,
  `imagen` varchar(150) default NULL,
  `archivador` varchar(50) default NULL,
  `id_imagen` varchar(50) default NULL,
  `usuario` varchar(40) default NULL,
  `fecha_registro` datetime default '0000-00-00 00:00:00',
  `estado` int(11) default '0',
  `fecha_entrega` datetime default '0000-00-00 00:00:00',
  `id_planilla` int(11) default '0',
  `fisico` int(1) default '0',
  `usu_reg` varchar(20) default ' ',
  PRIMARY KEY  (`id_conse`),
  UNIQUE KEY `no_radicado` (`no_radicado`),
  KEY `dependencia` (`dependencia`),
  KEY `funcionario` (`funcionario`),
  KEY `archivador` (`archivador`),
  KEY `usuario` (`usuario`),
  KEY `id_planilla` (`id_planilla`),
  KEY `fecha_radicado` (`fecha_radicado`),
  KEY `estado` (`estado`),
  KEY `id_imagen` (`id_imagen`),
  KEY `no_expediente` (`no_expediente`),
  KEY `tipo_documento` (`tipo_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `entrada` */

/*Table structure for table `entrada_anx` */

DROP TABLE IF EXISTS `entrada_anx`;

CREATE TABLE `entrada_anx` (
  `id_anexo` int(11) NOT NULL auto_increment,
  `no_radicado` varchar(20) default NULL,
  `usuario` varchar(20) default '',
  `fecha_anexo` datetime default NULL,
  `descripcion` varchar(100) default '',
  `ruta_anexo` varchar(250) default '',
  `estado` int(11) default '0',
  PRIMARY KEY  (`id_anexo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `entrada_anx` */

/*Table structure for table `estadocorrespondencia` */

DROP TABLE IF EXISTS `estadocorrespondencia`;

CREATE TABLE `estadocorrespondencia` (
  `CodEstadoCor` int(11) NOT NULL auto_increment,
  `NomEstadoCor` varchar(30) default NULL,
  PRIMARY KEY  (`CodEstadoCor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `estadocorrespondencia` */

insert into `estadocorrespondencia` (`CodEstadoCor`,`NomEstadoCor`) values (1,'EN TRAMITE');
insert into `estadocorrespondencia` (`CodEstadoCor`,`NomEstadoCor`) values (2,'CERRADO');
insert into `estadocorrespondencia` (`CodEstadoCor`,`NomEstadoCor`) values (3,'ANULADO');

/*Table structure for table `expediente` */

DROP TABLE IF EXISTS `expediente`;

CREATE TABLE `expediente` (
  `id_conse` int(11) NOT NULL auto_increment,
  `expediente` varchar(50) default NULL,
  `nombre` varchar(100) default NULL,
  `dependencia` varchar(20) default '0',
  `estado` int(1) default '0',
  PRIMARY KEY  (`id_conse`),
  UNIQUE KEY `expediente` (`expediente`),
  KEY `nombre` (`nombre`),
  KEY `estado` (`estado`),
  KEY `dependencia` (`dependencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `expediente` */

/*Table structure for table `gradocorrespondencia` */

DROP TABLE IF EXISTS `gradocorrespondencia`;

CREATE TABLE `gradocorrespondencia` (
  `codgradoCor` int(11) NOT NULL auto_increment,
  `nomGradoCor` varchar(30) default NULL,
  PRIMARY KEY  (`codgradoCor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `gradocorrespondencia` */

insert into `gradocorrespondencia` (`codgradoCor`,`nomGradoCor`) values (1,'CATEGORIA 1');
insert into `gradocorrespondencia` (`codgradoCor`,`nomGradoCor`) values (2,'CATEGORIA 2');
insert into `gradocorrespondencia` (`codgradoCor`,`nomGradoCor`) values (3,'CATEGORIA 3');

/*Table structure for table `log_eventos` */

DROP TABLE IF EXISTS `log_eventos`;

CREATE TABLE `log_eventos` (
  `ID_CONSE` int(15) NOT NULL auto_increment,
  `ARCHIVADOR` varchar(50) default NULL,
  `IP_PC` varchar(50) default ' ',
  `NOMBRE_PC` varchar(50) default ' ',
  `LLAVE_1` varchar(50) default NULL,
  `LLAVE_2` varchar(50) default NULL,
  `ID_IMAGEN` varchar(50) default NULL,
  `USUARIO` varchar(50) default NULL,
  `EVENTO` int(3) default NULL,
  `DATO` varchar(150) default NULL,
  `PAGINAS` int(4) default NULL,
  `FECHA` datetime default NULL,
  PRIMARY KEY  (`ID_CONSE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `log_eventos` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL auto_increment,
  `nom_menu` varchar(255) default NULL,
  `fecha_creacion` datetime default NULL,
  `estado` int(1) default NULL,
  PRIMARY KEY  (`id_menu`),
  UNIQUE KEY `nom_menu` (`nom_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert into `menu` (`id_menu`,`nom_menu`,`fecha_creacion`,`estado`) values (1,'EXTERNA','2020-03-24 19:30:53',1);
insert into `menu` (`id_menu`,`nom_menu`,`fecha_creacion`,`estado`) values (3,'SALIDA','2020-04-08 18:59:32',1);
insert into `menu` (`id_menu`,`nom_menu`,`fecha_creacion`,`estado`) values (9,'HERRAMIENTAS','2020-03-25 19:56:01',1);

/*Table structure for table `paciente` */

DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente` (
  `pacidentificacion` varchar(20) NOT NULL,
  `pacnombres` varchar(20) NOT NULL,
  `pacapellidos` varchar(20) NOT NULL,
  `pacfechanacimiento` date default NULL,
  `pacgenero` enum('M','F') default NULL,
  PRIMARY KEY  (`pacidentificacion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `paciente` */

insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('52123456','SARA ANGELICA','VELASQUEZ','2020-05-04','F');
insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('52440987','LILIAM ANGELICA','GARCIA ORTIZ','1978-07-10','F');
insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('52456789','Carolina','Villalobos','1978-01-14','F');
insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('79123456','Santiago ','Velasquez','2000-01-05','M');
insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('79741258','FERNANDO','ECHEVERRI','1977-07-01','M');
insert into `paciente` (`pacidentificacion`,`pacnombres`,`pacapellidos`,`pacfechanacimiento`,`pacgenero`) values ('79748285','DIEGO FERNANDO','VELASQUEZ ECHEVERRI','1977-06-01','M');

/*Table structure for table `pagina` */

DROP TABLE IF EXISTS `pagina`;

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL auto_increment,
  `id_menu` int(11) default NULL,
  `nom_pagina` varchar(255) default NULL,
  `archivo` varchar(255) default NULL,
  `orden` int(11) default NULL,
  `adicional` varchar(255) default NULL,
  `imagen` varchar(255) default NULL,
  `fecha_creacion` datetime default NULL,
  `estado` int(11) default NULL,
  PRIMARY KEY  (`id_pagina`),
  UNIQUE KEY `nom_pagina` (`nom_pagina`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `pagina` */

insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (1,1,'Pendientes','./externa/pendientes.php',1,'Radicados pendientes por tramitar.','','2020-03-24 19:30:53',1);
insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (6,1,'Consulta Documentos','./externa/consulta.php',2,'Consulta','','2020-03-25 19:56:01',1);
insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (7,9,'Cambiar Clave','./claves/claves.php',1,'Modificar Clave','','2020-03-25 19:56:01',1);
insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (8,3,'Crear Salida','./externa/salida.php',1,'Crear Salida','','2020-04-08 18:59:32',1);
insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (9,3,'Consulta Salida','./externa/ConsSalida.php',2,'Consultar Salida','','2020-04-08 18:59:32',1);
insert into `pagina` (`id_pagina`,`id_menu`,`nom_pagina`,`archivo`,`orden`,`adicional`,`imagen`,`fecha_creacion`,`estado`) values (10,1,'Consulta Respuesta','./externa/ConsRespuesta.php',3,'Consulta Respuestas','','2020-04-13 09:52:23',1);

/*Table structure for table `parametros` */

DROP TABLE IF EXISTS `parametros`;

CREATE TABLE `parametros` (
  `id_conse` int(1) default '0',
  `nombre_empresa` varchar(60) default NULL,
  `direccion` varchar(60) default NULL,
  `telefono` varchar(60) default NULL,
  `pagina_web` varchar(60) default NULL,
  `mail` varchar(60) default NULL,
  `prefijo_entrada` varchar(50) default NULL,
  `conse_entrada` int(11) default '0',
  `prefijo_salida` varchar(50) default NULL,
  `conse_salida` int(11) default '0',
  `anio_activo` int(11) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `parametros` */

insert into `parametros` (`id_conse`,`nombre_empresa`,`direccion`,`telefono`,`pagina_web`,`mail`,`prefijo_entrada`,`conse_entrada`,`prefijo_salida`,`conse_salida`,`anio_activo`) values (1,'ESE HOSPITAL DEPARTAMENTAL SAN ANTONIO DE PADUA             ','AV LIBERTADORES SALIDA NEIVA                                ','8370170-8370148                                             ',NULL,NULL,'CPDE                                              ',1,'CPDS                                              ',0,2020);

/*Table structure for table `perfil` */

DROP TABLE IF EXISTS `perfil`;

CREATE TABLE `perfil` (
  `codigoPerfil` int(11) NOT NULL auto_increment,
  `nomPerfil` varchar(30) NOT NULL,
  PRIMARY KEY  (`codigoPerfil`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `perfil` */

insert into `perfil` (`codigoPerfil`,`nomPerfil`) values (1,'ADMINISTRADOR');
insert into `perfil` (`codigoPerfil`,`nomPerfil`) values (2,'FUNCIONARIO');
insert into `perfil` (`codigoPerfil`,`nomPerfil`) values (3,'CONSULTA');

/*Table structure for table `radicado` */

DROP TABLE IF EXISTS `radicado`;

CREATE TABLE `radicado` (
  `numeroRadicado` int(11) NOT NULL auto_increment,
  `fechaRadicado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `CodRemiteRad` int(11) NOT NULL,
  `CodDestinoRad` int(11) NOT NULL,
  `CodTpDocRad` int(11) NOT NULL,
  `NumDocumento` varchar(20) NOT NULL,
  `fechaDocumento` date NOT NULL,
  `valor` int(11) NOT NULL,
  `UsuarioRadica` int(2) NOT NULL,
  `Observaciones` varchar(250) default NULL,
  `CodGradRad` int(1) NOT NULL default '2',
  `CodEstadoRad` int(1) NOT NULL default '1',
  PRIMARY KEY  (`numeroRadicado`),
  KEY `CodRemiteRad` (`CodRemiteRad`),
  KEY `CodDestinoRad` (`CodDestinoRad`),
  KEY `CodTpDocRad` (`CodTpDocRad`),
  KEY `UsuarioRadica` (`UsuarioRadica`),
  KEY `CodGradRad` (`CodGradRad`),
  KEY `CodEstadoRad` (`CodEstadoRad`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `radicado` */

insert into `radicado` (`numeroRadicado`,`fechaRadicado`,`CodRemiteRad`,`CodDestinoRad`,`CodTpDocRad`,`NumDocumento`,`fechaDocumento`,`valor`,`UsuarioRadica`,`Observaciones`,`CodGradRad`,`CodEstadoRad`) values (1,'2020-06-14 16:20:53',22,2,2,'123456','2020-06-14',150000,1,'Precio Aguilon.',2,1);
insert into `radicado` (`numeroRadicado`,`fechaRadicado`,`CodRemiteRad`,`CodDestinoRad`,`CodTpDocRad`,`NumDocumento`,`fechaDocumento`,`valor`,`UsuarioRadica`,`Observaciones`,`CodGradRad`,`CodEstadoRad`) values (2,'2020-06-14 16:21:35',27,4,18,'74711258963','2020-06-14',7895247,1,'Solicitud de certificado de antecedentes.',1,1);
insert into `radicado` (`numeroRadicado`,`fechaRadicado`,`CodRemiteRad`,`CodDestinoRad`,`CodTpDocRad`,`NumDocumento`,`fechaDocumento`,`valor`,`UsuarioRadica`,`Observaciones`,`CodGradRad`,`CodEstadoRad`) values (3,'2020-06-16 13:04:23',27,10,247,'789654','2020-06-17',125000,1,'oBSERVACIONES',2,1);
insert into `radicado` (`numeroRadicado`,`fechaRadicado`,`CodRemiteRad`,`CodDestinoRad`,`CodTpDocRad`,`NumDocumento`,`fechaDocumento`,`valor`,`UsuarioRadica`,`Observaciones`,`CodGradRad`,`CodEstadoRad`) values (4,'2020-06-17 10:20:21',14,4,95,'4598744','2020-06-25',120000,1,'PRUEBAS DE SISTEMAS',2,1);

/*Table structure for table `remitente` */

DROP TABLE IF EXISTS `remitente`;

CREATE TABLE `remitente` (
  `CodRemite` int(11) NOT NULL auto_increment,
  `cedulaNit` varchar(20) NOT NULL,
  `nomRemite` varchar(50) NOT NULL,
  `dirRemite` varchar(50) NOT NULL,
  `telRemite` varchar(50) NOT NULL,
  `mailRemite` varchar(50) NOT NULL,
  `tipoRemite` int(11) NOT NULL,
  PRIMARY KEY  (`CodRemite`),
  UNIQUE KEY `cedulaNit` (`cedulaNit`),
  KEY `TipoRemite` (`tipoRemite`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `remitente` */

insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (1,'79285748','DIEGO FERNANDO VELAQUEZ','','','',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (2,'101123369','FERNANDO GOMEZ OROZCO','','','',2);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (3,'101789456','CHRISTIAN OSPINA','','','',2);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (4,'89139901','ALCALDIA DE PEREIRA','Tranv43 3-56 apto 306','3216598','dennis.ortega@gmail.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (5,'891180177','COMPENSAR','','','',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (6,'800256161','ARP SURA','','','',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (7,'52440123','GINA PAOLA GARCIA','','','',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (9,'52456963','IGAMCOL','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (10,'987654621-1','ALKOSTO','CRA 30 7-36','3216598','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (11,'794123658','Colombiana de Comercio','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (12,'3216549974','Coca cola','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (13,'52456963-9','POSTOBON','CALLE 3 25 69','3216549874','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (14,'79741852-87','BAVARIA','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (15,'987654621-10','POLAR','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (16,'52456963-8','HEINEKEN','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (17,'3216549974-8','MODELO','CALLE 3 25 69','3216549874','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (18,'79741852-2','CORONA','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (19,'52456963-5','BUDWAISER LIGHT','CALLE 3 25 69','3216598','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (20,'987654621-9','BBC','CRA 30 7-36','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (21,'79741852-9','POKER','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (22,'52456963-2','AGUILA','CALLE 3 25 69','32165498745','info@igamcol.com',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (23,'52456963-4','CLARITA','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (25,'52456963-6','COSTE√ëITA','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (26,'52456963-7','LEONA','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (27,'79741852-1','BRAVA','CRA 30 7-36','3216549874','info@alkosto.com.co',1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (28,'52789456','Fanny Ortega ','Call 56 45-98','320124578','frosa@gmail.com',-1);
insert into `remitente` (`CodRemite`,`cedulaNit`,`nomRemite`,`dirRemite`,`telRemite`,`mailRemite`,`tipoRemite`) values (29,'79741852','LILIAM ANGELICA GARCA','Tranv43 3-56 apto 306','32165498745','geliangar@yahoo.es',2);

/*Table structure for table `salida` */

DROP TABLE IF EXISTS `salida`;

CREATE TABLE `salida` (
  `id_conse` int(11) NOT NULL auto_increment,
  `radicado_respuesta` varchar(20) default '0',
  `no_radicado` varchar(20) default NULL,
  `fecha_radicado` datetime default '0000-00-00 00:00:00',
  `no_expediente` varchar(20) default ' ',
  `no_documento` varchar(20) default ' ',
  `fecha_documento` date default '0000-00-00',
  `tipo_documento` int(11) default '0',
  `valor` int(11) default '0',
  `ciudad` int(11) default '0',
  `empresa_dst` varchar(20) default '0',
  `funcionario_dst` varchar(50) default NULL,
  `guia` varchar(50) default NULL,
  `empresa_mensajeria` int(11) default '0',
  `empaque` int(11) default '0',
  `direccion` varchar(100) default NULL,
  `telefono` varchar(20) default NULL,
  `asunto` varchar(150) default NULL,
  `dependencia` int(11) default '0',
  `serie` int(11) default '0',
  `subserie` int(11) default '0',
  `funcionario` int(11) default '0',
  `observaciones` varchar(150) default NULL,
  `ods` varchar(20) default '0',
  `imagen` varchar(150) default NULL,
  `archivador` varchar(50) default NULL,
  `id_imagen` varchar(50) default NULL,
  `usuario` varchar(40) default NULL,
  `fecha_registro` datetime default '0000-00-00 00:00:00',
  `estado` int(11) default '0',
  `fecha_entrega` datetime default '0000-00-00 00:00:00',
  `id_planilla` int(11) default '0',
  `usu_reg` varchar(20) default ' ',
  PRIMARY KEY  (`id_conse`),
  UNIQUE KEY `no_radicado` (`no_radicado`),
  KEY `dependencia` (`dependencia`),
  KEY `funcionario` (`funcionario`),
  KEY `archivador` (`archivador`),
  KEY `usuario` (`usuario`),
  KEY `id_planilla` (`id_planilla`),
  KEY `fecha_radicado` (`fecha_radicado`),
  KEY `estado` (`estado`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `salida` */

/*Table structure for table `salida_anx` */

DROP TABLE IF EXISTS `salida_anx`;

CREATE TABLE `salida_anx` (
  `id_anexo` int(11) NOT NULL auto_increment,
  `id_salida` int(11) default '0',
  `usuario` varchar(20) default '',
  `fecha_anexo` datetime default NULL,
  `descripcion` varchar(100) default '',
  `ruta_anexo` varchar(250) default '',
  `estado` int(11) default '0',
  PRIMARY KEY  (`id_anexo`),
  KEY `id_salida` (`id_salida`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `salida_anx` */

/*Table structure for table `tipo_documento` */

DROP TABLE IF EXISTS `tipo_documento`;

CREATE TABLE `tipo_documento` (
  `id_tipo` int(11) NOT NULL auto_increment,
  `nombre` varchar(250) default NULL,
  PRIMARY KEY  (`id_tipo`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=259 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_documento` */

insert into `tipo_documento` (`id_tipo`,`nombre`) values (1,'NO APLICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (2,'ACTAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (3,'ACTA DE APERTURA DE BUZON');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (4,'ACTAS DE INCIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (5,'ACTA DE INICIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (6,'ACTA DE LIQUIDACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (7,'ACTA DE POSESION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (8,'ACTA DE TERMINACION Y LIQUIDACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (9,'ACTUALIZACION DE HOJA DE VIDA  FORMATO UNICO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (10,'AFILIACIONES A SISTEMA DE SEGURIDAD SOCIAL   FORMULARIOS DE SALUD, PENSION, ARP, CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (11,'AGENDA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (12,'AGENDA-VISITA DE REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (13,'ANALISIS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (14,'ANEXO 2 DE LA RESOLUCION 710 DE 2012');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (15,'ANEXOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (16,'ANTECEDENTES DISCIPLINARIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (17,'ANTECEDENTES FISCALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (18,'ANTECEDENTES POLICIVOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (19,'ATENCION DE URGENCIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (20,'ATENCION GENERAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (21,'AUDITORIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (22,'AUTO DE ALEGATOS DE CONCLUSION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (23,'AUTO DE APERTURA DE INVESTIGACION O DE ARCHIVO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (24,'AUTO DE COMISION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (25,'AUTO DE CONSECION O NEGACION DE LA SOLICITUD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (26,'AUTO DE INDAGACION PRELIMINAR O DE INHIBICION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (27,'AUTO DECISORIO DE LA SEGUNDA INSTANCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (28,'AUTO REMISORIO DEL PROCESO A LA PROCURADURIA CUANDO DECIDA EJERCER PODER PREFERENTE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (29,'AUTOLIQUIDACION CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (30,'BALANCE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (31,'BALANCE DE LIQUIDOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (32,'BOLETIN');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (33,'CERTIFICACION DE ESTUDIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (34,'CERTIFICACION DE SALARIO BASE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (35,'CERTIFICACION LABORAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (36,'CERTIFICADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (37,'CERTIFICADO DE ANTECEDENTES DISCIPLINARIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (38,'CERTIFICADO DE ANTECEDENTES FISCALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (39,'CERTIFICADO DE APTITUD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (40,'CERTIFICADO DE CUMPLIMIENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (41,'CERTIFICADO DE DISPONIBILIDAD PRESUPUESTAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (42,'CERTIFICADO DE EXISTENCIA Y REPRESENTACION LEGAL DE LA ENTIDAD  SI ES PRIVADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (43,'CERTIFICADO DE INCAPACIDAD O LICENCIA DE MATERNIDAD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (44,'CERTIFICADO DE INFORMACION LABORAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (45,'CERTIFICADO DE SALARIO MES A MES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (46,'CERTIFICADO DE SERIVICIOS  JURADO  O DE VOTANTE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (47,'CERTIFICADOS DE EXPERIENCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (48,'CIRCULAR');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (49,'CITACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (50,'COMPROBANTE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (51,'COMUNICACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (52,'COMUNICACION A LA OFICINA DE REGISTRO Y CONTROL - PROCURADURIA GENERAL DE LA NACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (53,'COMUNICACION A LA PROCURADURIA PARA EJERCER O NO EL PODER PREFERENTE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (54,'COMUNICACION DE ARCHIVO DEFINITIVO AL QUEJOSO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (55,'COMUNICACION DE INHIBICION AL QUEJOSO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (56,'COMUNICACION DE LA DECISION AL QUEJOSO  PARA FALLO ABSOLUTORIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (57,'COMUNICACION DE QUEJA O ACTUACION DE OFICIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (58,'COMUNICACION DEL AUTO AL COMISIONADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (59,'COMUNICACION DEL FALLO A PROCURADURIA GENERAL DE LA NACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (60,'COMUNICACION DEL FALLO A RESPONSABLE DEL RECURSO HUMANO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (61,'COMUNICADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (62,'CONCENTIMIENTO INFORMADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (63,'CONCEPTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (64,'CONSIGNACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (65,'CONSTANCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (66,'CONSTANCIAS LABORALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (67,'CONTESTACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (68,'CONVENIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (69,'CONVENIO O PROYECTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (70,'COPIA CEDULA DE CIUDADANIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (71,'COTIZACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (72,'CRONOGRAMA DE ACTIVIDADES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (73,'CUADRO DE PRESUPUESTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (74,'CUADROS DE TURNOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (75,'CUENTA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (76,'DECLARACION DE BIENES Y RENTAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (77,'DECRETO DE TRASLADO A O ASCENSO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (78,'DEFENSA JUDICIAL Y EXTRAJUDICIAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (79,'DEMANDA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (80,'DESACATO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (81,'DESCARGOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (82,'DESIGNACION DEL SUPERVISOR');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (83,'DOCUMENTO OBJETO DE AJUSTE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (84,'ENCUESTA DE NECESIDADES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (85,'ENTRADA DE ALMACEN');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (86,'EPICRISIS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (87,'ESCALA DE RESULTADOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (88,'ESTRACTOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (89,'ESTUDIOS PREVIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (90,'EVALUACION DEL DESEMPENO DEL PERIODO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (91,'EVALUACION ENTREVISTA DE REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (92,'EVOLUCION MEDICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (93,'EXAMEN DE APTITUD MEDICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (94,'EXAMENES AUXILIARES DE DIAGNOSTICO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (95,'FACTURA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (96,'FACTURA DE COMPRA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (97,'FALLO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (98,'FICHA DE TRABAJO Y ALCANCE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (99,'FORMATO AUXILIAR DE BANCO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (100,'FORMATO DE INSCRIPCION EN EL PROCESO DE REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (101,'FORMATO DE PQRS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (102,'FORMATO DE RADICADO DE QUEJAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (103,'FORMATO DE REGISTRO PRESUPUESTAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (104,'FORMATO DE SOLICITUD DE CDP');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (105,'FORMATO VERIFICACION DE ESTADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (106,'FORMULARIO DE AFILIACION COMO INDEPENDIENTE A SALUD, PENSION Y RIESGOS PROFESIONALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (107,'FORMULARIO DE DECLARACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (108,'FOTOCOPIA CARNE DE VACUNACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (109,'FOTOCOPIA CERTIFICADO VIGENTE CURSO BLS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (110,'FOTOCOPIA DE ACTA DE GRADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (111,'FOTOCOPIA DE CEDULA DE CIUDADANIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (112,'FOTOCOPIA DE DIPLOMA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (113,'FOTOCOPIA DE LA RESOLUCION DE LA SECRETARIA DE SALUD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (114,'HOJA DE ANESTESIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (115,'HOJA DE PROCEDIMIENTOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (116,'HOJA DE PROCEDIMIENTOS Y-O INFORME QUIRURGICO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (117,'HOJA DE REGISTRO DE GLUCOMETRIAS Y OXIMETRIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (118,'HOJA DE TRATAMIENTOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (119,'HOJA DE VIDA FORMATO UNICO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (120,'HOJA DE VIDA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (121,'HOJA NEUROLOGICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (122,'IDENTIFICACION Y RESUMEN DE ATENCIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (123,'IMPUGNACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (125,'INFORME DE SUPERVISION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (126,'INFORME DEL COMISIONADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (127,'INFORME REFERENCIACION COMPETITIVA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (128,'INFORMES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (129,'INSTRUCTIVO DE CALIFICACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (130,'INSTRUCTIVO DE REPORTE DE ACCIDENTES DE TRABAJO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (131,'INVENTARIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (132,'JUSTIFICACION TECNICO CIENTIFICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (133,'LIBRETA MILITAR');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (134,'LIBRO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (135,'LICENCIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (136,'LIQUIDACION DE  RECARGOS NOCTURNOS, DOMINICALES Y FESTIVOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (137,'LIQUIDACION DEFINITIVA DE CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (138,'LIQUIDACION DEFINITIVA DE PENSIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (139,'LIQUIDACION PARCIAL DE CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (140,'LISTA DE CHEQUEO REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (141,'LISTADO DE ASISTENCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (142,'MANUAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (143,'MATRIZ DE CALIFICACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (144,'MINUTA DE CONTRATO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (145,'NOMINA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (146,'NOTA CREDITO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (147,'NOTAS DE CONTABILIDAD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (148,'NOTAS DE ENFERMERIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (149,'NOTIFICACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (150,'NOTIFICACION DE AUTO DE INDAGACION AL PRESUNTO RESPONSABLE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (151,'NOTIFICACION DE INSCRITO EN CARRERA ADMINISTRATIVA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (152,'NOTIFICACION DE NOMBRAMIENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (153,'NOTIFICACION DE RESOLUCION DE ACTUALIZACION EN ESCALAFON');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (154,'NOTIFICACION DE TRASLADO A O ASCENSO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (155,'NOTIFICACION DE VACACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (156,'NOTIFICACION DEL AUTO DE APERTURA DE INVESTIGACION O COMUNICACION DE ARCHIVO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (157,'NOTIFICACION DEL AUTO DE ARCHIVO AL QUEJOSO O EDICTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (158,'NOTIFICACION DEL AUTO DE CONSECION O NEGACION DE LA SOLICITUD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (159,'NOTIFICACION PERSONAL O EDICTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (160,'NOTIFICACION PERSONAL O EDICTO DE PLIEGO DE CARGOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (161,'NOVEDADES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (162,'OFICIO RESPUESTA 1 DIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (163,'OFICIO DE ACEPTACION DE NOMBRAMIENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (164,'OFICIOS DE AMONESTACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (165,'OFICIOS DE REQUERIMIENTO DE PRUEBAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (166,'ORDEN DE COMPRA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (167,'ORDENES MEDICAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (168,'PAGO DE ESTAMPILLAS Y PUBLICACIONES   CUANDO APLIQUE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (169,'PASADO JUDICIAL - CERTIFICADO DE ANTECEDENTES PENALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (170,'PLAN');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (171,'PLAN DE ACCION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (172,'PLAN DE BIENESTAR');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (173,'PLAN DE CAPACITACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (174,'PLAN DE COMPRA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (175,'PLAN DE EMERGENCIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (176,'PLANILLA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (177,'PLANILLA UNICA DE PAGO, SALUD, PENSION Y RIESGOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (178,'PLIEGO DE CARGOS O AUTO DE ARCHIVO DEFINITIVO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (179,'POLIZAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (180,'PORTAFOLIO DE SERVICIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (181,'PRACTICA DE PRUEBAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (182,'PROGRAMA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (183,'PROPUESTA DE SERVICIOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (184,'RECIBO A SATISFACCION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (185,'RECURSO DE APELACION DEL DISCIPLINADO  PARA FALLO SANCIONATORIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (186,'RECURSO DE APELACION DEL QUEJOSO  PARA FALLO ABSOLUTORIO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (187,'REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (188,'REGISTRO DE EXAMENES PARACLINICOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (189,'REGISTRO DE LA SECRETARIA DE SALUD DEPARTAMENTAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (190,'REGISTRO EN EL SISTEMA DE ACTIVOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (191,'REGISTRO PRESUPUESTAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (192,'REGLAMENTO HIGIENE Y SEGURIDAD INDUSTRIAL');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (193,'RELACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (194,'RELACION DE CHEQUES GIRADOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (195,'RELIQUIDACION DE CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (196,'RELIQUIDACION DE PENSIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (197,'REMISION-CONTRARREFERENCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (198,'REQUERIMIENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (199,'RESOLUCION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (200,'RESOLUCION 209 DE 2013 - COPASO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (201,'RESOLUCION DE ACTUALIZACION EN ESCALAFON DE CARRERA ADMINISTRATIVA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (202,'RESOLUCION DE ADOPCION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (203,'RESOLUCION DE APLAZAMIENTO DE VACACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (204,'RESOLUCION DE BAJA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (205,'RESOLUCION DE DESVINCULACION, DESTITUCION, SUPRESION DE CARGOS, DECLARATORIA DE INSUBSISTENCIA O ACEPTACION DE RENUNCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (206,'RESOLUCION DE LICENCIA DE MATERNIDAD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (207,'RESOLUCION DE NOMBRAMIENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (208,'RESOLUCION DE PAGO DE PRIMA U OFICIO DE NEGACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (209,'RESOLUCION DE VACACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (210,'RESPUESTA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (211,'RUT');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (212,'SIGNOS VITALES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (213,'SOLICITUD');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (214,'SOLICITUD AL RESPONSABLE DEL RECURSO HUMANO DE DATOS DE HISTORIA LABORAL DEL DISCIPLINADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (215,'SOLICITUD DE ANTECEDENTES DISCIPLINARIOS A PROCURADURIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (216,'SOLICITUD DE CESANTIAS DEFINITIVAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (217,'SOLICITUD DE COMPRA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (218,'SOLICITUD DE INSCIPCION EN CARRERA ADMINISTRATIVA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (219,'SOLICITUD DE LICENCIA O COMPENSACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (220,'SOLICITUD DE PRUEBAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (221,'SOLICITUD DE PRUEBAS DEL DISCIPLINADO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (222,'SOLICITUD DE RECONOCIMIENTO DE PRIMAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (223,'SOLICITUD DE REFERENCIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (224,'SOLICITUD DE VACACIONES');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (225,'SOLICITUD PARCIAL DE CESANTIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (226,'SOPORTE OTROS ESTUDIOS REALIZADOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (227,'SOPORTES DE SISTEMAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (228,'TRASLADO A SEGUNDA INSTANCIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (229,'TRIAGE');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (230,'VALORACIONES MEDICAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (231,'DERECHO DE PETICION  CORRIENTE 15 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (232,'GLOSA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (233,'DERECHO DE PETICION DOCUMENTAL 10 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (234,'DERECHO DE PETICION DE CONCEPTO 30 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (235,'DERECHO DE PETICION URGENTE 2 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (236,'OFICIO RESPUESTA 3 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (237,'OFICIO RESPUESTA 5 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (238,'OFICIO RESPUESTA 8 DIAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (239,'SOLICITUD HISTORIAS CLINICAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (240,'OFICIOS   INFORMATIVOS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (241,'DEVOLUCION GLOSA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (242,'SOLICITUD COPIA HISTORIA CLINICA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (243,'RADICADO CUENTAS DE COBRO EMPRESAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (244,'RESPUESTAS COBRO PREJURIDICO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (245,'ACTA JUNTA DIRECTIVA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (246,'ACTA CAPACITACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (247,'ACTA REUNI√ìN');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (248,'MEMORANDO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (249,'SOLICITUD REUNION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (250,'INVITACION EVENTO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (251,'PERMISO');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (252,'NOTIFICACION VISITA AUDITORIA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (253,'GIROS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (254,'ACCION DE TUTELAS');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (255,'CONCILIACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (256,'RATIFICACION GLOSA');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (257,'COTIZACION');
insert into `tipo_documento` (`id_tipo`,`nombre`) values (258,'SOPORTES DE DESARROLLO');

/*Table structure for table `tipocorrespondencia` */

DROP TABLE IF EXISTS `tipocorrespondencia`;

CREATE TABLE `tipocorrespondencia` (
  `CodTpCor` int(11) NOT NULL auto_increment,
  `NomTpCor` varchar(30) NOT NULL,
  PRIMARY KEY  (`CodTpCor`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tipocorrespondencia` */

insert into `tipocorrespondencia` (`CodTpCor`,`NomTpCor`) values (1,'EXTERNA');
insert into `tipocorrespondencia` (`CodTpCor`,`NomTpCor`) values (2,'INTERNA');
insert into `tipocorrespondencia` (`CodTpCor`,`NomTpCor`) values (3,'SALIDA');

/*Table structure for table `tiporemitente` */

DROP TABLE IF EXISTS `tiporemitente`;

CREATE TABLE `tiporemitente` (
  `CodTipoRemite` int(11) NOT NULL auto_increment,
  `nomTpRemite` varchar(30) NOT NULL,
  PRIMARY KEY  (`CodTipoRemite`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tiporemitente` */

insert into `tiporemitente` (`CodTipoRemite`,`nomTpRemite`) values (1,'EMPRESA');
insert into `tiporemitente` (`CodTipoRemite`,`nomTpRemite`) values (2,'PERSONA NATURAL');

/*Table structure for table `trazabilidad` */

DROP TABLE IF EXISTS `trazabilidad`;

CREATE TABLE `trazabilidad` (
  `CodTraza` int(11) NOT NULL auto_increment,
  `CodRadTraza` int(11) NOT NULL,
  `UsuEnvia` int(11) NOT NULL,
  `MensajeEnvia` varchar(250) default NULL,
  `fechaIngresa` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `UsuRecibe` int(11) NOT NULL,
  `estado` int(1) default '0',
  PRIMARY KEY  (`CodTraza`),
  KEY `CodRadTraza` (`CodRadTraza`),
  KEY `UsuEnvia` (`UsuEnvia`),
  KEY `UsuRecibe` (`UsuRecibe`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `trazabilidad` */

insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (2,1,1,'FACTURACION OCTUBRE','2020-03-25 17:31:04',2,1);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (3,1,2,'FACTURACION REVISADA, PROCESAR EL PAGO.','2020-03-26 17:31:08',3,1);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (4,1,3,'PAGO PROCESADO Y APROBADO.','2020-03-29 17:31:08',1,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (5,7,3,'PROCESAR EL PAGO','2020-03-29 17:31:08',1,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (6,2,1,'GENERAR INFORME DE AUDITORIA','2020-03-29 17:31:08',3,1);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (7,2,3,'INFORME ENTREGADO VIA MAIL','2020-03-29 17:31:08',1,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (8,3,1,'SOLICITUD DE CERTIFICADO DE AFILIACION','2020-03-29 17:31:08',2,1);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (9,3,2,'CERTIFICADO PARA ENTREGAR EN 1 DIA HABIL','2020-03-29 17:31:08',1,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (10,4,1,'INFORMATIVO ACTA DE COMITE','2020-03-29 17:31:08',2,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (11,5,1,'INFORMATIVO ACTA DE COMITE','2020-03-29 17:31:08',3,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (12,6,2,'ENTERADO','2020-03-29 17:31:08',1,0);
insert into `trazabilidad` (`CodTraza`,`CodRadTraza`,`UsuEnvia`,`MensajeEnvia`,`fechaIngresa`,`UsuRecibe`,`estado`) values (13,7,3,'ENTERADO','2020-03-29 17:31:08',1,0);

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL auto_increment,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `perfil` int(11) NOT NULL,
  `clave` blob NOT NULL,
  `dependencia` int(11) NOT NULL,
  `estado` int(1) default '1',
  PRIMARY KEY  (`codusuario`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `codperfilU` (`perfil`),
  KEY `CodDepUsu` (`dependencia`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (1,'JJPEREZ','JUAN JOSE PEREZ','jjperes@servidor.com',1,'c‘UYt6òóTîÔzê',1,1);
insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (2,'CARLOSA','LUIS CARLOS AMAYA VELASQUEZ','carloama@servidor.com',2,'“Àé13örñdäƒ\'Ë¿Ø',1,1);
insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (3,'LILOGAR','LILIAM GARCIA','lilogar@servidor.com',3,'‡6˜@Dÿœµ≈8]ØµÌﬂ/',2,1);
insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (4,'KROVILLA','CAROLINA VILLALOBOS','kartio.villa@hotmail.com',1,'R¨ Mu	¿í®«ø±©õ-',3,1);
insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (6,'CARMENCITA','MARIA DEL CARMEN','maricarmen@hotmail.com',2,'Ú≥\'9Õ8òŸãâç}≥wc',4,1);
insert into `usuario` (`codusuario`,`usuario`,`nombre`,`correo`,`perfil`,`clave`,`dependencia`,`estado`) values (10,'VELAS01','DIEGO FERNANDO VELASQUEZ','DIEGO.CELTA@HOTMAIL.COM',1,'/+˙A\rµﬁ‘I˛C6˛œ',1,1);

/*Table structure for table `wf_documentos` */

DROP TABLE IF EXISTS `wf_documentos`;

CREATE TABLE `wf_documentos` (
  `id_wf` int(11) NOT NULL auto_increment,
  `id_imagen` varchar(20) default NULL,
  `usu_origen` varchar(20) default NULL,
  `fecha_origen` datetime default NULL,
  `comentario` varchar(254) default NULL,
  `usu_destino` varchar(20) default NULL,
  `fecha_destino` datetime default NULL,
  `fecha_limite` datetime default NULL,
  `actividad` int(11) default NULL,
  `estado` int(11) default '0',
  PRIMARY KEY  (`id_wf`),
  KEY `id_imagen` (`id_imagen`),
  KEY `usu_destino` (`usu_destino`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `wf_documentos` */

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
