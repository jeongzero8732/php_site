1. wamp https://bitnami.com/stack/wamp/installer
2. 버전 : 7.3.18-1
3. mysql username : root
4. mysql password : 123123
5. schema : eclass
6. user_create_table_query :
  CREATE TABLE `user` (
  `userID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPasswd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userSex` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userID`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

7. evaluation_create_query :
  CREATE TABLE `evaluation` (
  `evalutionID` int NOT NULL AUTO_INCREMENT,
  `writer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectureName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professorName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lectureYear` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture_kinds` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evalutionTitle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evalutionContent` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecskill` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leclevel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalScore` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`evalutionID`),
  KEY `writer` (`writer`),
  CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`writer`) REFERENCES `user` (`userID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

8. ci_sessions_create_query :
 CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` int unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
