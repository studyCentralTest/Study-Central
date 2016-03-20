USE `studyCentral`;

CREATE TABLE IF NOT EXISTS `classPages` (
  `classVar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `className` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `levelName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `teacherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `classPages` (`classVar`, `className`, `levelName`, `teacherName`) VALUES('algebra2honorskappel', 'Algebra 2', 'Honors', 'Kappel');
