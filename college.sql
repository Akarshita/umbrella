SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `database_procedure`()
BEGIN
 

END$$

DELIMITER ;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `userid` int(15) AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `usertype`enum('T','S') NOT NULL,
   Primary key(`userid`)
);

INSERT INTO `userdetails` (`userid`, `firstname`, `lastname`, `address`, `city`, `uname`,`pword`,`usertype`) VALUES
(1, 'Akarshita', 'Gunturu', 'shelly circle', 'EW', 'Akar12','Akkiakki9','Administrator'),
(2, 'shreya', 'bala', 'manahattan', 'NY', 'Shreya12','Shreya123','S'),
(3, 'John', 'legend', 'Wallstreet', 'NY', 'John12','John123','T'),
(4, 'Ross', 'Geller', '23 rd street', 'NY', 'Ross12','Ross123','T'),
(5, 'Miley', 'gong', 'shell road', 'NJ', 'Miley12','Miley123','S'),
(6, 'Yuna', 'Im', 'guilt street', 'NJ', 'Yuna12','Yuna123','S');


CREATE TABLE IF NOT EXISTS `courses_prof` (
   `professorid` int(20) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `course_description` varchar(50) NOT NULL,
  `course_start_date` date NOT NULL,
  `course_end_date` date NOT NULL,
  `course_time` time NOT NULL,
  `profname` varchar(50),
   Primary key(`course_code`) 
);

INSERT INTO `courses_prof` (`professorid`,`course_code`, `course_description`, `course_start_date`, `course_end_date`, `course_time`, `profname`) VALUES
(3,633, 'Database Administration', '2016-01-06', '2016-05-08', '08:00', 'John'),
(4,696, 'Network security', '2016-02-01', '2016-06-07', '01:00', 'Ross');


CREATE TABLE IF NOT EXISTS `courses_student` (
  `course_code` varchar(15) primary key,
  `course_description` varchar(50) NOT NULL,
  `course_start_date` date NOT NULL,
  `course_end_date` date NOT NULL,
  `course_time` time NOT NULL,
  `profname` varchar(50),
  `studentid` varchar(50)
);

INSERT INTO `courses_student` (`course_code`, `course_description`, `course_start_date`, `course_end_date`, `course_time`, `profname`,`studentid`) VALUES
(635, 'Database Administration', '2016-01-06', '2016-05-08', '08:00', 'John','5'),
(695, 'Network security', '2016-02-01', '2016-06-07', '01:00', 'Ross','5'),
(640, 'web administration', '2016-05-16', '2016-09-12', '09:00', 'N/A','6');


