USE `studyCentral`;

CREATE TABLE IF NOT EXISTS `studyGuides` (
  `pageClassVar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `studyGuideName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submitName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submitEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submitLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submitText` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `studyGuides` (`pageClassVar`, `studyGuideName`, `submitName`, `submitEmail`, `submitLink`, `submitText`) VALUES('algebra2honorskappel', 'A NEW Study Guide', 'John Papili', 'jsmith@gmail.com', 'http://www.quizlet.com', 'Hello internet');


****
USE `studyCentral`;
ALTER TABLE studyGuides
ADD `submitTime` datetime