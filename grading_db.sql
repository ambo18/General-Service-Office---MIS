

CREATE TABLE `equip_pro` (
  `ID` int(60) NOT NULL AUTO_INCREMENT,
  `PROGRAM_ID` int(60) NOT NULL,
  `EQUIP_QUANTITY` int(11) NOT NULL,
  `UNIT` varchar(100) NOT NULL,
  `ARTICLE` varchar(60) NOT NULL,
  `EQUIP_DESCRIPTION` varchar(255) NOT NULL,
  `PROPERTY_NO` varchar(100) NOT NULL,
  `AVAILABILITY` varchar(60) NOT NULL,
  `COST` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO equip_pro VALUES("1","6","2","pieces","2 way-radio","sdf","2012-75","OUT OF STOCK/UNAVAILABLE","75");
INSERT INTO equip_pro VALUES("2","6","2","UNITS","cELLPHONE","NOKIA 3315","2023-CP-890","OUT OF STOCK/UNAVAILABLE","8990");
INSERT INTO equip_pro VALUES("3","7","5","Unit","Isuzu 4x4","6 cylinders disel engine, 10 wheels, chassis #89687698","2023-11-321385","OUT OF STOCK/UNAVAILABLE","1400000");
INSERT INTO equip_pro VALUES("4","8","105","reams","Paper One","Plain bond paper","2023-11-168413","92","250");
INSERT INTO equip_pro VALUES("5","7","2","Unit","Mitsubishi Lancer 2X4","Four Wheel vehicle for DRR","2024-01-VH01","2","1,214,000.00");



CREATE TABLE `grade` (
  `grade_id` int(10) NOT NULL AUTO_INCREMENT,
  `grade` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO grade VALUES("1","7","");
INSERT INTO grade VALUES("2","8","");
INSERT INTO grade VALUES("3","9","");
INSERT INTO grade VALUES("4","10","");



CREATE TABLE `history_log` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `transaction` varchar(255) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=462 DEFAULT CHARSET=latin1;

INSERT INTO history_log VALUES("361","logged out","1","2023-11-17 21:41:37");
INSERT INTO history_log VALUES("362","logged in","1","2023-11-17 21:41:45");
INSERT INTO history_log VALUES("363","ID No. 3?prog=COM E?desc=used for communication. updated in the Type of Equipment list","0","2023-11-17 21:41:52");
INSERT INTO history_log VALUES("364","ID No. 3?prog=?desc= updated in the Type of Equipment list","0","2023-11-17 21:41:59");
INSERT INTO history_log VALUES("365","ID No. 3?prog=?desc= updated in the Type of Equipment list","0","2023-11-17 21:43:04");
INSERT INTO history_log VALUES("366","ID No. 3?prog=?desc= updated in the Type of Equipment list","0","2023-11-17 21:43:11");
INSERT INTO history_log VALUES("367","ID No. 3?prog=?desc= updated in the Type of Equipment list","0","2023-11-17 21:43:50");
INSERT INTO history_log VALUES("368","ID No. 3 updated in the Type of Equipment list","0","2023-11-17 21:44:02");
INSERT INTO history_log VALUES("369","delete type of equipment list where ID is 3","0","2023-11-17 21:44:49");
INSERT INTO history_log VALUES("370","ID No. 4?prog=COM E?desc=used for communication. updated in the Type of Equipment list","0","2023-11-17 21:44:56");
INSERT INTO history_log VALUES("371","delete type of equipment list where ID is 4","0","2023-11-17 21:45:07");
INSERT INTO history_log VALUES("372","added 2 way-radio as new Propert/Equipment","1","2023-11-17 21:47:06");
INSERT INTO history_log VALUES("373","added 2 way-radio as new Propert/Equipment","1","2023-11-17 21:52:57");
INSERT INTO history_log VALUES("374","added 2 way-radio as new Propert/Equipment","1","2023-11-18 10:07:44");
INSERT INTO history_log VALUES("375","added 2 way-radio 6 2 pieces fxthdg 2012-75 75 as new Property/Equipment","1","2023-11-18 10:16:02");
INSERT INTO history_log VALUES("376","added 2 way-radio 6 2 pieces zdg 2012-75 75 as new Property/Equipment","1","2023-11-18 10:26:32");
INSERT INTO history_log VALUES("377","added 2 way-radio 6 2 pieces sdf 2012-75 75 as new Property/Equipment","1","2023-11-18 10:36:14");
INSERT INTO history_log VALUES("378","added cELLPHONE as new Property/Equipment","1","2023-11-18 11:16:29");
INSERT INTO history_log VALUES("379","logged out","1","2023-11-20 13:13:41");
INSERT INTO history_log VALUES("380","logged in","1","2023-11-20 15:30:25");
INSERT INTO history_log VALUES("381","logged out","1","2023-11-20 15:59:49");
INSERT INTO history_log VALUES("382","logged in","1","2023-11-21 20:24:11");
INSERT INTO history_log VALUES("383","updated 1 in the student list","0","2023-11-22 15:12:03");
INSERT INTO history_log VALUES("384","updated 1 in the student list","0","2023-11-22 15:12:13");
INSERT INTO history_log VALUES("385","updated 1 in the student list","0","2023-11-22 16:26:15");
INSERT INTO history_log VALUES("386","updated 1 in the student list","0","2023-11-22 16:28:46");
INSERT INTO history_log VALUES("387","updated 1 in the student list","0","2023-11-22 16:51:19");
INSERT INTO history_log VALUES("388","issue order/MR to NECTOR P. GABORNES","1","2023-11-22 18:53:39");
INSERT INTO history_log VALUES("389","issue order/MR to NECTOR P. GABORNES","1","2023-11-22 18:58:09");
INSERT INTO history_log VALUES("390","issue order/MR to NECTOR P. GABORNES","1","2023-11-22 20:10:42");
INSERT INTO history_log VALUES("391","issue order/MR to NECTOR P. GABORNES","1","2023-11-22 20:24:33");
INSERT INTO history_log VALUES("392","issue order/MR to NECTOR P. GABORNES","1","2023-11-22 20:33:06");
INSERT INTO history_log VALUES("393","printed   permanent record","1","2023-11-22 23:29:40");
INSERT INTO history_log VALUES("394","printed   permanent record","1","2023-11-22 23:46:16");
INSERT INTO history_log VALUES("395","printed   permanent record","1","2023-11-22 23:48:24");
INSERT INTO history_log VALUES("396","printed   permanent record","1","2023-11-22 23:49:18");
INSERT INTO history_log VALUES("397","printed   permanent record","1","2023-11-22 23:57:26");
INSERT INTO history_log VALUES("398","logged in","1","2023-11-23 06:55:51");
INSERT INTO history_log VALUES("399","logged out","1","2023-11-23 06:58:35");
INSERT INTO history_log VALUES("400","logged in","0","2023-11-23 06:58:42");
INSERT INTO history_log VALUES("401","logged out","0","2023-11-23 07:03:03");
INSERT INTO history_log VALUES("402","logged in","1","2023-11-23 07:03:12");
INSERT INTO history_log VALUES("403","logged in","1","2023-11-23 11:12:53");
INSERT INTO history_log VALUES("404","added Isuzu 4x4 as new Property/Equipment","1","2023-11-23 11:16:53");
INSERT INTO history_log VALUES("405","added Paper One as new Property/Equipment","1","2023-11-23 11:19:01");
INSERT INTO history_log VALUES("406","issue order/MR to Carl Anos","1","2023-11-23 11:22:44");
INSERT INTO history_log VALUES("407","issue order/MR to Nector Gabornes","1","2023-11-23 11:23:35");
INSERT INTO history_log VALUES("408","logged out","1","2023-11-23 11:25:33");
INSERT INTO history_log VALUES("409","logged in","0","2023-11-23 11:25:39");
INSERT INTO history_log VALUES("410","logged out","0","2023-11-23 11:26:22");
INSERT INTO history_log VALUES("411","logged in","1","2023-11-23 11:26:28");
INSERT INTO history_log VALUES("412","logged in","0","2024-01-05 21:07:36");
INSERT INTO history_log VALUES("413","logged out","0","2024-01-05 21:08:00");
INSERT INTO history_log VALUES("414","logged in","1","2024-01-05 21:08:20");
INSERT INTO history_log VALUES("415","logged out","1","2024-01-05 21:31:51");
INSERT INTO history_log VALUES("416","logged in","1","2024-01-05 21:32:02");
INSERT INTO history_log VALUES("417","logged out","1","2024-01-05 21:32:06");
INSERT INTO history_log VALUES("418","logged in","1","2024-01-05 21:39:05");
INSERT INTO history_log VALUES("419","logged out","1","2024-01-05 22:44:20");
INSERT INTO history_log VALUES("420","added Nector P. Gabornes as new requester","0","2024-01-06 00:33:58");
INSERT INTO history_log VALUES("421","added Nector P. Gabornes as new requester","0","2024-01-06 00:35:44");
INSERT INTO history_log VALUES("422","added Nector P. Gabornes as new requester","0","2024-01-06 00:36:27");
INSERT INTO history_log VALUES("423","added Dessaryl D. Elgar as new requester","0","2024-01-06 00:37:39");
INSERT INTO history_log VALUES("424","logged in","1","2024-01-06 00:38:10");
INSERT INTO history_log VALUES("425","added Mitsubishi Lancer 2X4 as new Property/Equipment","1","2024-01-06 00:51:23");
INSERT INTO history_log VALUES("426","issue order/MR to ","0","2024-01-06 01:45:11");
INSERT INTO history_log VALUES("427","issue order/MR to Nector P. Gabornes","0","2024-01-06 02:04:43");
INSERT INTO history_log VALUES("428","issue order/MR to Nector P. Gabornes","0","2024-01-06 02:16:34");
INSERT INTO history_log VALUES("429","issue order/MR to Nector P. Gabornes","0","2024-01-06 02:17:39");
INSERT INTO history_log VALUES("430","issue order/MR to Dessaryl D. Elgar","0","2024-01-06 02:18:01");
INSERT INTO history_log VALUES("431","added Nector P. Gabornes as new requester","0","2024-01-06 03:28:42");
INSERT INTO history_log VALUES("432","logged in","1","2024-01-13 09:00:54");
INSERT INTO history_log VALUES("433","added Joezyl Tanquion as new requester","0","2024-01-13 09:09:31");
INSERT INTO history_log VALUES("434","logged out","1","2024-01-13 09:26:46");
INSERT INTO history_log VALUES("435","logged in","1","2024-01-13 09:31:03");
INSERT INTO history_log VALUES("436","added Dessaryl D. Elgar as new requester","0","2024-01-13 09:35:53");
INSERT INTO history_log VALUES("437","issue order/MR to Joezyl Tanquion","0","2024-01-13 09:44:26");
INSERT INTO history_log VALUES("438","added Nector P. Gabornes as new requester","0","2024-01-13 09:49:37");
INSERT INTO history_log VALUES("439","issue order/MR to Nector P. Gabornes","0","2024-01-13 09:49:53");
INSERT INTO history_log VALUES("440","logged out","1","2024-01-13 09:59:08");
INSERT INTO history_log VALUES("441","logged in","1","2024-01-13 09:59:20");
INSERT INTO history_log VALUES("442","logged out","1","2024-01-13 09:59:40");
INSERT INTO history_log VALUES("443","logged in","0","2024-01-13 09:59:50");
INSERT INTO history_log VALUES("444","logged out","0","2024-01-13 10:00:25");
INSERT INTO history_log VALUES("445","logged in","1","2024-01-13 10:00:31");
INSERT INTO history_log VALUES("446","logged out","1","2024-01-13 10:01:08");
INSERT INTO history_log VALUES("447","logged in","1","2024-01-13 10:01:18");
INSERT INTO history_log VALUES("448","logged out","1","2024-01-13 10:02:53");
INSERT INTO history_log VALUES("449","logged in","0","2024-01-13 10:03:02");
INSERT INTO history_log VALUES("450","logged out","0","2024-01-13 10:03:44");
INSERT INTO history_log VALUES("451","logged in","1","2024-01-13 10:03:51");
INSERT INTO history_log VALUES("452","logged out","1","2024-01-13 10:04:32");
INSERT INTO history_log VALUES("453","logged in","1","2024-01-23 20:13:24");
INSERT INTO history_log VALUES("454","logged out","1","2024-01-23 20:14:54");
INSERT INTO history_log VALUES("455","logged in","0","2024-01-23 20:15:00");
INSERT INTO history_log VALUES("456","logged out","0","2024-01-23 20:17:22");
INSERT INTO history_log VALUES("457","logged in","1","2024-01-23 20:17:33");
INSERT INTO history_log VALUES("458","logged out","1","2024-01-23 20:30:34");
INSERT INTO history_log VALUES("459","logged in","0","2024-01-23 20:30:40");
INSERT INTO history_log VALUES("460","logged out","0","2024-01-23 20:31:01");
INSERT INTO history_log VALUES("461","logged in","1","2024-01-23 20:31:08");



CREATE TABLE `material_requisition` (
  `MR_ID` int(60) NOT NULL AUTO_INCREMENT,
  `EQUIP_ID` int(60) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `DETAILS` varchar(255) NOT NULL,
  `MR_DATE` datetime NOT NULL,
  `QUANTITY` varchar(60) NOT NULL,
  PRIMARY KEY (`MR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO material_requisition VALUES("4","2","NECTOR P. GABORNES","ASSESSOR OFFICE","2023-11-22 20:24:33","2");
INSERT INTO material_requisition VALUES("5","2","NECTOR P. GABORNES","ASSESSOR OFFICE","2023-11-22 20:33:06","2");
INSERT INTO material_requisition VALUES("6","4","Carl Anos","Mayor Office","2023-11-23 11:22:44","5");
INSERT INTO material_requisition VALUES("7","3","Nector Gabornes","MDRRMO","2023-11-23 11:23:35","5");
INSERT INTO material_requisition VALUES("10","4","Nector P. Gabornes","DILG","2024-01-06 02:16:34","3");
INSERT INTO material_requisition VALUES("11","4","Nector P. Gabornes","DILG","2024-01-06 02:17:39","3");
INSERT INTO material_requisition VALUES("12","1","Dessaryl D. Elgar","Treasurer","2024-01-06 02:18:01","1");
INSERT INTO material_requisition VALUES("13","4","Joezyl Tanquion","Health Unit","2024-01-13 09:44:26","2");
INSERT INTO material_requisition VALUES("14","1","Nector P. Gabornes","DILG","2024-01-13 09:49:53","1");



CREATE TABLE `program` (
  `PROGRAM_ID` int(20) NOT NULL AUTO_INCREMENT,
  `EQUIP_TYPE` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  PRIMARY KEY (`PROGRAM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO program VALUES("6","COM E","dfgdfgd");
INSERT INTO program VALUES("7","Vehicle","this is used for transportation.");
INSERT INTO program VALUES("8","Office Supplies","this is used for the processing of offices and departments.");



CREATE TABLE `promotion_candidates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `STUDENT_ID` int(10) NOT NULL,
  `SY` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;




CREATE TABLE `request` (
  `REQUEST_ID` int(60) NOT NULL AUTO_INCREMENT,
  `EQUIP_ID` int(60) NOT NULL,
  `REQUEST_QUANTITY` varchar(60) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `CONTACT` varchar(60) NOT NULL,
  `OFFICE` varchar(100) NOT NULL,
  PRIMARY KEY (`REQUEST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO request VALUES("7","4","2","Dessaryl D. Elgar","09662444960","DILG");
INSERT INTO request VALUES("8","1","1","Nector P. Gabornes","09662444960","Treasurer");



CREATE TABLE `school_year` (
  `SY_ID` int(10) NOT NULL AUTO_INCREMENT,
  `school_year` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`SY_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO school_year VALUES("1","2016-2017","No");
INSERT INTO school_year VALUES("2","2017-2018","No");
INSERT INTO school_year VALUES("3","2018-2019","No");
INSERT INTO school_year VALUES("4","2019-2020","Yes");
INSERT INTO school_year VALUES("5","2017-2018","No");



CREATE TABLE `students` (
  `STUDENT_ID` int(50) NOT NULL AUTO_INCREMENT,
  `LRN_NO` int(12) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `MIDDLENAME` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `PROVINCE` varchar(30) NOT NULL,
  `TOWN` varchar(30) NOT NULL,
  `BRGY` varchar(30) NOT NULL,
  `PARENT_GUARDIAN` varchar(50) NOT NULL,
  `P_ADDRESS` varchar(60) NOT NULL,
  `INT_COURSE_COMP` varchar(50) NOT NULL,
  `SCHOOL_YEAR` varchar(10) NOT NULL,
  `GEN_AVE` int(6) NOT NULL,
  `TOTAL_NO_OF_YEAR` int(5) NOT NULL,
  `PROGRAM` varchar(20) NOT NULL,
  `BIRTH_PLACE` varchar(50) NOT NULL,
  PRIMARY KEY (`STUDENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `USER` varchar(10) NOT NULL,
  `PASSWORD` text NOT NULL,
  `USER_TYPE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","admin","0192023a7bbd73250516f069df18b500","ADMINISTRATOR");
INSERT INTO user VALUES("2","staff","staff","staff","de9bf5643eabf80f4a56fda3bbb84483","STAFF");
INSERT INTO user VALUES("0","Joezyl","Tanquion","staff","1253208465b1efa876f982d8a9e73eef","STAFF");

