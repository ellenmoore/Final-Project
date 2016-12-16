--
-- Table structure for table `taskss`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Task` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Task` (`Task`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`ID`, `Task`) VALUES
(1, 'Homework'),
(2, 'Take out trash'),
(3, 'Clean car'),
(4, 'Go to work'),
(5, 'Get groceries');

-- --------------------------------------------------------

