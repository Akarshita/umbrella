SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
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
(1, 'Akarshita', 'Gunturu', 'shelly circle', 'EW', 'Akar12','Akkiakki9','Admin'),
(2, 'shreya', 'bala', 'manahattan', 'NY', 'Shrey12','Akkiakki9','student'),
(3, 'John', 'legend', 'Wallstreet', 'NY', 'John12','Akkiakki9','prof');

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
(1,635, 'Database Administration', '2016-01-06', '2016-05-08', '08:00', 'John'),
(2,696, 'Network security', '2016-02-01', '2016-06-07', '01:00', 'Amanda'),
(3,640,'web administration', '2016-05-16', '2016-09-12', '18:00', 'Nill');

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
(635, 'Database Administration', '2016-01-06', '2016-05-08', '08:00', 'John','Nill'),
(696, 'Network security', '2016-02-01', '2016-06-07', '01:00', 'Nill','Nill'),
(640, 'web administration', '2016-05-16', '2016-09-12', '18:00', 'Nill','Nill');


