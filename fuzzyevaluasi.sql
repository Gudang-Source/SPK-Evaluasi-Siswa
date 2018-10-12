/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : fuzzyevaluasi

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-01-25 17:53:16
*/

SET FOREIGN_KEY_CHECKS=0;
-- Dumping database structure for fuzzyevaluasi
DROP DATABASE IF EXISTS `fuzzyevaluasi`;
CREATE DATABASE IF NOT EXISTS `fuzzyevaluasi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fuzzyevaluasi`;

-- ----------------------------
-- Table structure for `evaluasi`
-- ----------------------------
DROP TABLE IF EXISTS `evaluasi`;
CREATE TABLE `evaluasi` (
  `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL DEFAULT '0',
  `prestasi` float DEFAULT '0',
  `keaktifan` float DEFAULT '0',
  `kehadiran` float DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_evaluasi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of evaluasi
-- ----------------------------
INSERT INTO evaluasi VALUES ('1', '1', '100', '100', '100', '2015-01-25 17:10:18');
INSERT INTO evaluasi VALUES ('2', '2', '66.6', '66.6', '66.6', '2015-01-19 11:09:17');
INSERT INTO evaluasi VALUES ('3', '3', '100', '100', '80', '2015-01-25 17:27:10');
INSERT INTO evaluasi VALUES ('4', '4', '100', '66.6', '33.3', '2015-01-25 17:13:57');
INSERT INTO evaluasi VALUES ('7', '6', '33.3', '66.6', '100', '2015-01-25 17:15:31');
INSERT INTO evaluasi VALUES ('8', '5', '100', '33.3', '33.3', '2015-01-25 17:15:49');

-- ----------------------------
-- Table structure for `kelas`
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(100) NOT NULL DEFAULT '0',
  `tingkatan` int(11) NOT NULL DEFAULT '0',
  `id_walikelas` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO kelas VALUES ('5', '2A', '2', '1', '2015-01-13 20:17:37');
INSERT INTO kelas VALUES ('3', '1A', '1', '1', '2015-01-13 20:17:39');

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL AUTO_INCREMENT,
  `rulename` varchar(50) NOT NULL DEFAULT '0',
  `prestasi` varchar(50) NOT NULL DEFAULT '0',
  `kegiatan` varchar(50) NOT NULL DEFAULT '0',
  `kehadiran` varchar(100) NOT NULL DEFAULT '0',
  `fuzzy_output` varchar(100) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO rules VALUES ('1', 'R1', 'Buruk', 'Pasif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('2', 'R2', 'Buruk', 'Pasif', 'Sedang', 'Sedang', '2015-01-19 10:26:23');
INSERT INTO rules VALUES ('3', 'R3', 'Buruk', 'Pasif', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('4', 'R4', 'Buruk', 'Sedang', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('5', 'R5', 'Buruk', 'Sedang', 'Sedang', 'Sedang', '2015-01-19 10:26:18');
INSERT INTO rules VALUES ('6', 'R6', 'Buruk', 'Sedang', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('7', 'R7', 'Buruk', 'Aktif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('8', 'R8', 'Buruk', 'Aktif', 'Sedang', 'Sedang', '2015-01-19 10:26:14');
INSERT INTO rules VALUES ('9', 'R9', 'Buruk', 'Aktif', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('10', 'R10', 'Sedang', 'Pasif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('11', 'R11', 'Sedang', 'Pasif', 'Sedang', 'Sedang', '2015-01-19 10:26:10');
INSERT INTO rules VALUES ('12', 'R12', 'Sedang', 'Pasif', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('13', 'R13', 'Sedang', 'Sedang', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('14', 'R14', 'Sedang', 'Sedang', 'Sedang', 'Sedang', '2015-01-19 10:25:58');
INSERT INTO rules VALUES ('15', 'R15', 'Sedang', 'Sedang', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('16', 'R16', 'Sedang', 'Aktif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('17', 'R17', 'Sedang', 'Aktif', 'Sedang', 'Sedang', '2015-01-19 10:25:51');
INSERT INTO rules VALUES ('18', 'R18', 'Sedang', 'Aktif', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('19', 'R19', 'Baik', 'Pasif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('20', 'R20', 'Baik', 'Pasif', 'Sedang', 'Sedang', '2015-01-19 10:25:46');
INSERT INTO rules VALUES ('21', 'R21', 'Baik', 'Pasif', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('22', 'R22', 'Baik', 'Sedang', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('23', 'R23', 'Baik', 'Sedang', 'Sedang', 'Sedang', '2015-01-19 10:25:40');
INSERT INTO rules VALUES ('24', 'R24', 'Baik', 'Sedang', 'Rajin', 'Baik', '2015-01-19 10:25:22');
INSERT INTO rules VALUES ('25', 'R25', 'Baik', 'Aktif', 'Sering Bolos', 'Buruk', '2015-01-19 10:27:15');
INSERT INTO rules VALUES ('26', 'R26', 'Baik', 'Aktif', 'Sedang', 'Sedang', '2015-01-19 10:25:37');
INSERT INTO rules VALUES ('27', 'R27', 'Baik', 'Aktif', 'Rajin', 'Baik', '2015-01-19 10:25:22');

-- ----------------------------
-- Table structure for `siswa`
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `j_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`,`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO siswa VALUES ('1', '98032', 'Jackly', '3', 'L', 'kjh', '', '2015-01-25 17:12:02');
INSERT INTO siswa VALUES ('2', '12312', 'Ahmad', '5', 'P', 'asd', '', '2015-01-25 17:11:46');
INSERT INTO siswa VALUES ('3', '23456', 'Wawan', '3', 'L', 'asd', '', '2015-01-25 17:12:58');
INSERT INTO siswa VALUES ('4', '3454', 'Minda', '3', 'L', '34', '', '2015-01-25 17:12:10');
INSERT INTO siswa VALUES ('5', '98798', 'Andik Herman', '5', 'L', '', '', '2015-01-25 17:14:35');
INSERT INTO siswa VALUES ('6', '123124', 'Brodin', '5', 'P', '', '', '2015-01-25 17:15:11');

-- ----------------------------
-- Table structure for `walikelas`
-- ----------------------------
DROP TABLE IF EXISTS `walikelas`;
CREATE TABLE `walikelas` (
  `id_walikelas` int(11) NOT NULL AUTO_INCREMENT,
  `nik_walikelas` varchar(20) DEFAULT NULL,
  `nama_walikelas` varchar(50) DEFAULT NULL,
  `jab_fungsional` varchar(100) DEFAULT NULL,
  `guru_matpel` varchar(100) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_walikelas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of walikelas
-- ----------------------------
INSERT INTO walikelas VALUES ('1', '12312', 'namas', 'fungsis', 'as', null);

-- ----------------------------
-- View structure for `01-view-evaluasi`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-evaluasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `01-view-evaluasi` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`b`.`nim` AS `nim`,`b`.`nama_siswa` AS `nama_siswa`,`a`.`prestasi` AS `prestasi`,`a`.`keaktifan` AS `keaktifan`,`a`.`kehadiran` AS `kehadiran` from (`evaluasi` `a` left join `siswa` `b` on((`b`.`id_siswa` = `a`.`id_siswa`)));

-- ----------------------------
-- View structure for `01-view-himpunan-keaktifan`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-keaktifan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `01-view-himpunan-keaktifan` AS select `a`.`id_evaluasi` AS `ideval`,`a`.`keaktifan` AS `keaktifan`,if((`a`.`keaktifan` = 33.3),1,if(((`a`.`keaktifan` >= 0) and (`a`.`keaktifan` <= 66.5)),1,0)) AS `min`,if((`a`.`keaktifan` = 66.6),1,if(((`a`.`keaktifan` >= 33.3) and (`a`.`keaktifan` < 100)),1,0)) AS `mid`,if((`a`.`keaktifan` = 100),1,if((`a`.`keaktifan` between 66.6 and 100),1,0)) AS `max` from `evaluasi` `a`;

-- ----------------------------
-- View structure for `01-view-himpunan-kehadiran`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-kehadiran`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `01-view-himpunan-kehadiran` AS select `a`.`id_evaluasi` AS `ideval`,`a`.`kehadiran` AS `kehadiran`,if((`a`.`kehadiran` = 33.3),1,if(((`a`.`kehadiran` >= 0) and (`a`.`kehadiran` <= 66.5)),1,0)) AS `min`,if((`a`.`kehadiran` = 66.6),1,if(((`a`.`kehadiran` >= 33.3) and (`a`.`kehadiran` < 100)),1,0)) AS `mid`,if((`a`.`kehadiran` = 100),1,if((`a`.`kehadiran` between 66.6 and 100),1,0)) AS `max` from `evaluasi` `a`;

-- ----------------------------
-- View structure for `01-view-himpunan-prestasi`
-- ----------------------------
DROP VIEW IF EXISTS `01-view-himpunan-prestasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `01-view-himpunan-prestasi` AS select `a`.`id_evaluasi` AS `ideval`,`a`.`prestasi` AS `prestasi`,if((`a`.`prestasi` = 33.3),1,if(((`a`.`prestasi` >= 0) and (`a`.`prestasi` <= 66.5)),1,0)) AS `min`,if((`a`.`prestasi` = 66.6),1,if(((`a`.`prestasi` >= 33.3) and (`a`.`prestasi` < 100)),1,0)) AS `mid`,if((`a`.`prestasi` = 100),1,if((`a`.`prestasi` between 66.6 and 100),1,0)) AS `max` from `evaluasi` `a`;

-- ----------------------------
-- View structure for `02-view-himpunan`
-- ----------------------------
DROP VIEW IF EXISTS `02-view-himpunan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `02-view-himpunan` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`a`.`prestasi` AS `prestasi`,`a`.`keaktifan` AS `keaktifan`,`a`.`kehadiran` AS `kehadiran`,`b`.`min` AS `pmin`,`b`.`mid` AS `pmid`,`b`.`max` AS `pmax`,`c`.`min` AS `amin`,`c`.`mid` AS `amid`,`c`.`max` AS `amax`,`d`.`min` AS `hmin`,`d`.`mid` AS `hmid`,`d`.`max` AS `hmax` from (((`evaluasi` `a` join `01-view-himpunan-prestasi` `b` on((`b`.`ideval` = `a`.`id_evaluasi`))) join `01-view-himpunan-keaktifan` `c` on((`c`.`ideval` = `a`.`id_evaluasi`))) join `01-view-himpunan-kehadiran` `d` on((`d`.`ideval` = `a`.`id_evaluasi`)));

-- ----------------------------
-- View structure for `02-view-rules`
-- ----------------------------
DROP VIEW IF EXISTS `02-view-rules`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `02-view-rules` AS select `rules`.`rule_id` AS `rule_id`,`rules`.`rulename` AS `rulename`,`rules`.`prestasi` AS `prestasi`,`rules`.`kegiatan` AS `kegiatan`,`rules`.`kehadiran` AS `kehadiran`,`rules`.`fuzzy_output` AS `fuzzy_output` from `rules`;

-- ----------------------------
-- View structure for `03-view-fuzzyfikasi`
-- ----------------------------
DROP VIEW IF EXISTS `03-view-fuzzyfikasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `03-view-fuzzyfikasi` AS select `mx`.`id_evaluasi` AS `id_evaluasi`,`mx`.`nim` AS `nim`,`mx`.`nama_siswa` AS `nama_siswa`,`mx`.`prestasi` AS `p`,`mx`.`keaktifan` AS `a`,`mx`.`kehadiran` AS `h`,if((`a`.`min` = 1),round((`mx`.`prestasi` / 33.3),2),0) AS `fuzz_pmin`,if((`a`.`mid` = 1),round(((100 - `mx`.`prestasi`) / 33.3),2),0) AS `fuzz_pmid`,if((`a`.`max` = 1),round(((`mx`.`prestasi` - 66.6) / 33.3),2),0) AS `fuzz_pmax`,if((`b`.`min` = 1),round((`mx`.`keaktifan` / 33.3),2),0) AS `fuzz_amin`,if((`b`.`mid` = 1),round(((100 - `mx`.`keaktifan`) / 33.3),2),0) AS `fuzz_amid`,if((`b`.`max` = 1),round(((`mx`.`keaktifan` - 66.6) / 33.3),2),0) AS `fuzz_amax`,if((`c`.`min` = 1),round((`mx`.`kehadiran` / 33.3),2),0) AS `fuzz_hmin`,if((`c`.`mid` = 1),round(((100 - `mx`.`kehadiran`) / 33.3),2),0) AS `fuzz_hmid`,if((`c`.`max` = 1),round(((`mx`.`kehadiran` - 66.6) / 33.3),2),0) AS `fuzz_hmax` from (((`01-view-evaluasi` `mx` left join `01-view-himpunan-prestasi` `a` on((`a`.`ideval` = `mx`.`id_evaluasi`))) left join `01-view-himpunan-keaktifan` `b` on((`b`.`ideval` = `mx`.`id_evaluasi`))) left join `01-view-himpunan-kehadiran` `c` on((`c`.`ideval` = `mx`.`id_evaluasi`)));

-- ----------------------------
-- View structure for `03-view-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `03-view-rulebase`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `03-view-rulebase` AS select `b`.`id_evaluasi` AS `id_evaluasi`,`b`.`prestasi` AS `prestasi`,`b`.`keaktifan` AS `keaktifan`,`b`.`kehadiran` AS `kehadiran`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`prestasi` AS `p`,`a`.`kegiatan` AS `a`,`a`.`kehadiran` AS `h`,`a`.`fuzzy_output` AS `fuzzy_output` from (`02-view-rules` `a` join `02-view-himpunan` `b`) where ((if((`b`.`pmax` = 1),(`a`.`prestasi` = 'Baik'),'') or if((`b`.`pmid` = 1),(`a`.`prestasi` = 'Sedang'),'') or if((`b`.`pmin` = 1),(`a`.`prestasi` = 'Buruk'),'')) and (if((`b`.`amax` = 1),(`a`.`kegiatan` = 'Aktif'),'') or if((`b`.`amid` = 1),(`a`.`kegiatan` = 'Sedang'),'') or if((`b`.`amin` = 1),(`a`.`kegiatan` = 'Pasif'),'')) and (if((`b`.`hmax` = 1),(`a`.`kehadiran` = 'Rajin'),'') or if((`b`.`hmid` = 1),(`a`.`kehadiran` = 'Sedang'),'') or if((`b`.`hmin` = 1),(`a`.`kehadiran` = 'Sering Bolos'),''))) order by `b`.`id_evaluasi`,`a`.`rule_id`;

-- ----------------------------
-- View structure for `04-view-fuzzy-rulebase`
-- ----------------------------
DROP VIEW IF EXISTS `04-view-fuzzy-rulebase`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `04-view-fuzzy-rulebase` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`a`.`prestasi` AS `prestasi`,`a`.`keaktifan` AS `keaktifan`,`a`.`kehadiran` AS `kehadiran`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`p` AS `prule`,`a`.`a` AS `arule`,`a`.`h` AS `hrule`,if((`a`.`p` = 'Baik'),`b`.`fuzz_pmax`,if((`a`.`p` = 'Sedang'),`b`.`fuzz_pmid`,`b`.`fuzz_pmin`)) AS `fuz_prestasi`,if((`a`.`a` = 'Aktif'),`b`.`fuzz_amax`,if((`a`.`a` = 'Sedang'),`b`.`fuzz_amid`,`b`.`fuzz_amin`)) AS `fuz_aktif`,if((`a`.`h` = 'Rajin'),`b`.`fuzz_hmax`,if((`a`.`h` = 'Sedang'),`b`.`fuzz_hmid`,`b`.`fuzz_hmin`)) AS `fuz_hadir` from (`03-view-rulebase` `a` left join `03-view-fuzzyfikasi` `b` on((`b`.`id_evaluasi` = `a`.`id_evaluasi`)));

-- ----------------------------
-- View structure for `04-view-min-alphapredikat`
-- ----------------------------
DROP VIEW IF EXISTS `04-view-min-alphapredikat`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `04-view-min-alphapredikat` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`fuz_prestasi` AS `fuz_prestasi`,`a`.`fuz_aktif` AS `fuz_aktif`,`a`.`fuz_hadir` AS `fuz_hadir`,least(`a`.`fuz_prestasi`,`a`.`fuz_aktif`,`a`.`fuz_hadir`) AS `min_alpha` from `04-view-fuzzy-rulebase` `a`;

-- ----------------------------
-- View structure for `05-view-diagramz`
-- ----------------------------
DROP VIEW IF EXISTS `05-view-diagramz`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `05-view-diagramz` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`c`.`prestasi` AS `prestasi`,`c`.`keaktifan` AS `keaktifan`,`c`.`kehadiran` AS `kehadiran`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`b`.`fuzzy_output` AS `fuzzy_output`,`a`.`min_alpha` AS `min_alpha`,if((`b`.`fuzzy_output` = 'Baik'),100,if((`b`.`fuzzy_output` = 'Sedang'),60,10)) AS `z`,(if((`b`.`fuzzy_output` = 'Baik'),100,if((`b`.`fuzzy_output` = 'Sedang'),60,10)) * `a`.`min_alpha`) AS `alphaz` from ((`04-view-min-alphapredikat` `a` left join `02-view-rules` `b` on((`b`.`rule_id` = `a`.`rule_id`))) left join `01-view-evaluasi` `c` on((`c`.`id_evaluasi` = `a`.`id_evaluasi`)));

-- ----------------------------
-- View structure for `06-view-weighted-average`
-- ----------------------------
DROP VIEW IF EXISTS `06-view-weighted-average`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `06-view-weighted-average` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`a`.`rule_id` AS `rule_id`,`a`.`rulename` AS `rulename`,`a`.`min_alpha` AS `min_alpha`,`a`.`alphaz` AS `alphaz`,`a`.`z` AS `z`,sum(`a`.`min_alpha`) AS `sum_apredikat`,sum(`a`.`alphaz`) AS `sum_apredikat_z` from `05-view-diagramz` `a` group by `a`.`id_evaluasi`;

-- ----------------------------
-- View structure for `07-view-fuzzy_output`
-- ----------------------------
DROP VIEW IF EXISTS `07-view-fuzzy_output`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `07-view-fuzzy_output` AS select `b`.`id_evaluasi` AS `id_evaluasi`,`b`.`min_alpha` AS `min_alpha`,`b`.`alphaz` AS `alphaz`,`b`.`z` AS `z`,`b`.`sum_apredikat` AS `sum_apredikat`,`b`.`sum_apredikat_z` AS `sum_apredikat_z`,round((`b`.`sum_apredikat_z` / `b`.`sum_apredikat`),2) AS `defuzz` from `06-view-weighted-average` `b`;

-- ----------------------------
-- View structure for `08-view-fuzzy-sugeno`
-- ----------------------------
DROP VIEW IF EXISTS `08-view-fuzzy-sugeno`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `08-view-fuzzy-sugeno` AS select `a`.`id_evaluasi` AS `id_evaluasi`,`a`.`nim` AS `nim`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`prestasi` AS `prestasi`,`a`.`keaktifan` AS `keaktifan`,`a`.`kehadiran` AS `kehadiran`,`b`.`defuzz` AS `defuzz`,if((`b`.`defuzz` <= 10),'Buruk',if(((`b`.`defuzz` > 10) and (`b`.`defuzz` <= 60)),'Sedang','Baik')) AS `fuzzy_output`,`b`.`sum_apredikat_z` AS `sum_apredikat_z`,`b`.`sum_apredikat` AS `sum_apredikat`,`b`.`z` AS `z` from (`07-view-fuzzy_output` `b` left join `01-view-evaluasi` `a` on((`b`.`id_evaluasi` = `a`.`id_evaluasi`))) order by `b`.`defuzz` desc,`a`.`prestasi` desc,`a`.`keaktifan` desc,`a`.`kehadiran` desc;
