-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 07:25 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equiz2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `audiovideo`
--

CREATE TABLE `audiovideo` (
  `QID` int(11) NOT NULL,
  `QUESTION` text NOT NULL,
  `SOURCE` text NOT NULL,
  `ANSWER` char(100) NOT NULL,
  `FSFQ` int(11) NOT NULL,
  `FSFA` int(11) NOT NULL,
  `QSTID` int(11) NOT NULL COMMENT 'Question Status (Main or BackUp)',
  `STID` int(11) NOT NULL COMMENT 'Game Status (WordPOwer or Quiz)',
  `TID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audiovideo`
--

INSERT INTO `audiovideo` (`QID`, `QUESTION`, `SOURCE`, `ANSWER`, `FSFQ`, `FSFA`, `QSTID`, `STID`, `TID`, `RID`, `SESSID`) VALUES
(1, 'Name the singer of the song', '1.mp3', 'Atif Aslam', 25, 23, 1, 1, 7, 8, 2016),
(2, 'Which movie has the song been taken from?', '1.mp3', 'Badlapur', 25, 23, 1, 1, 7, 8, 2016),
(3, 'Who composed the sound track for this song?', '1.mp3', 'Sachin-Jigar', 25, 23, 2, 1, 7, 8, 2016),
(4, 'Which movie has the song been taken from?', '2.mp3', 'Teraa Surroor', 25, 23, 1, 1, 8, 8, 2016),
(5, 'Name the singer of the song', '2.mp3', 'Darshan Rawal', 25, 23, 1, 1, 8, 8, 2016),
(6, 'Who is the lyricist of this song?', '2.mp3', 'Sameer Anjan', 25, 23, 2, 1, 8, 8, 2016),
(7, 'Who has given music to this song?', '3.mp3', 'Ankit Tiwari', 25, 23, 1, 1, 9, 8, 2016),
(8, 'Which movie has the song been taken from?', '3.mp3', 'Roy', 25, 23, 1, 1, 9, 8, 2016),
(9, 'Name the singer of the song', '3.mp3', 'Ankit Tiwari', 25, 23, 2, 1, 9, 8, 2016),
(10, 'Who is the second male singer in the song except Farhan Akhtar?', '4.mp3', 'Vishal Dadlani', 25, 23, 1, 1, 10, 8, 2016),
(11, 'Which movie has the song been taken from?', '4.mp3', 'Dil Dhadakne Do', 25, 23, 1, 1, 10, 8, 2016),
(12, 'Who composed the sound track for this song?', '4.mp3', 'Shankar Ehsan Loy', 25, 23, 2, 1, 10, 8, 2016),
(13, 'Name the Singer of the Song', '5.mp3', 'Armaan Malik', 25, 23, 1, 1, 11, 8, 2016),
(14, 'Which movie has the song been taken from?', '5.mp3', 'Kapoor & Sons', 25, 23, 1, 1, 11, 8, 2016),
(15, 'Who gave the music to this song?', '5.mp3', 'Amaal Mallik', 25, 23, 2, 1, 11, 8, 2016),
(16, 'Who has written the lyrics to this song?', '6.mp3', 'Manoj Muntashir', 25, 23, 1, 1, 12, 8, 2016),
(17, 'Which movie has the song been taken from?', '6.mp3', 'Hate Story 3', 25, 23, 1, 1, 12, 8, 2016),
(18, 'Name the Singer of the Song', '6.mp3', 'Armaan Malik', 25, 23, 2, 1, 12, 8, 2016),
(19, 'From which movie has this clip been taken from?', '1.flv', 'Kya Dilli kya Lahore', 25, 23, 1, 1, 7, 10, 2016),
(20, 'Name the Director of the movie', '1.flv', 'Vijay Raaz', 25, 23, 1, 1, 7, 10, 2016),
(21, 'The story plot of this movie revloves around two characters. One of them is potrayed by Manu Rishi. Who potrays the other character?', '1.flv', 'Vijay Raaz', 25, 23, 2, 1, 7, 10, 2016),
(22, 'Name the Director of the movie', '2.flv', 'Shoojit Sircar', 25, 23, 1, 1, 8, 10, 2016),
(23, 'What was the full name of the character potrayed by Deepika Padukone?', '2.flv', 'Piku Banerjee', 25, 23, 1, 1, 8, 10, 2016),
(24, 'Who sung the title song \'Piku\' in the movie?', '2.flv', 'Sunidhi Chauhan', 25, 23, 2, 1, 8, 10, 2016),
(25, 'From which movie has this clip been taken from?', '3.flv', 'Bajrangi Bhaijaan', 25, 23, 1, 1, 9, 10, 2016),
(26, 'In which category did the film win in the 61st Filmfare Award 2015?', '3.flv', 'Best Story', 25, 23, 1, 1, 9, 10, 2016),
(27, 'Who played the role of \'Chand Nawab\', a famous Pakistani reporter?', '3.flv', 'Nawazuddin Siddiqui', 25, 23, 2, 1, 9, 10, 2016),
(28, 'From which movie has this clip been taken from?', '4.flv', 'Ankhon Dekhi', 25, 23, 1, 1, 10, 10, 2016),
(29, 'Who plays the lead role of Bauji in the movie?', '4.flv', 'Sanjay Mishra', 25, 23, 1, 1, 10, 10, 2016),
(30, 'Who directed the movie?', '4.flv', 'Rajat Kapoor', 25, 23, 2, 1, 10, 10, 2016),
(31, 'From which movie has this clip been taken from?', '5.flv', 'Pan Singh Tomar', 25, 23, 1, 1, 11, 10, 2016),
(32, 'Name the producer of the movie', '5.flv', 'Ronnie Screwvala', 25, 23, 1, 1, 11, 10, 2016),
(33, 'Who plays the role of Gopi in the movie?', '5.flv', 'Nawazuddin Siddiqui', 25, 23, 2, 1, 11, 10, 2016),
(34, 'Name the Director of the movie', '6.flv', 'Sanjay Leela Bhansali', 25, 23, 1, 1, 12, 10, 2016),
(35, 'Which actress replaced Rani Mukherji for the role of Kashibai in the movie?', '6.flv', 'Priyanka Chopra', 25, 23, 1, 1, 12, 10, 2016),
(36, 'From which movie has this clip been taken from?', '6.flv', 'Bajirao Mastani', 25, 23, 2, 1, 12, 10, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `game_status`
--

CREATE TABLE `game_status` (
  `STID` int(11) NOT NULL,
  `STATUS` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_status`
--

INSERT INTO `game_status` (`STID`, `STATUS`) VALUES
(1, 'QUIZ'),
(2, 'WORD POWER'),
(3, 'BUZZER'),
(4, 'ELIMINATION_Q'),
(5, 'ELIMINATION_W');

-- --------------------------------------------------------

--
-- Table structure for table `hangman`
--

CREATE TABLE `hangman` (
  `HNGID` int(11) NOT NULL,
  `QUESTION_` varchar(250) NOT NULL,
  `NO_OF_DASHES` int(11) NOT NULL,
  `CORRECT_CHAR` char(10) NOT NULL,
  `CHAR_PLACE` varchar(10) NOT NULL,
  `ANSWER_` varchar(25) NOT NULL,
  `CHANNCE` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `QSTID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hangman`
--

INSERT INTO `hangman` (`HNGID`, `QUESTION_`, `NO_OF_DASHES`, `CORRECT_CHAR`, `CHAR_PLACE`, `ANSWER_`, `CHANNCE`, `TID`, `RID`, `STID`, `QSTID`, `SESSID`) VALUES
(1, 'World Heritage Day is Officially recognized by which arm of the UN', 6, 'U,O', '0,5', 'UNESCO', 6, 1, 2, 2, 1, 2018),
(2, 'As per a report published on April 17 regarding Sex ratio in India the country will have 898 girls for 1,000 boys in', 4, '2,0', '0,1', '2031', 6, 1, 2, 2, 1, 2018),
(3, 'Evan Speigel is the head of', 8, 'S,A', '0,6', 'SNAPCHAT', 6, 2, 2, 2, 1, 2018),
(4, 'Kunal Bahl is the founder of', 8, 'S,A', '0,6', 'SNAPDEAL', 6, 2, 2, 2, 1, 2018),
(5, 'Emma Morano who passed away recently was world\'s oldest person. How old was she', 3, '7', '2', '117', 6, 3, 2, 2, 1, 2018),
(6, 'Cisco launched its fifth global cyber range lab in', 8, 'A,M', '6,7', 'GURUGRAM', 6, 3, 2, 2, 1, 2018),
(7, 'In what year was Google launched on the web', 4, '1,6', '0,3', '1996', 6, 4, 2, 2, 1, 2018),
(8, 'What Is the name of the network of computers from which the Internet has emerged', 7, 'N,E,T', '4,5,6', 'ARPANET', 6, 4, 2, 2, 1, 2018),
(9, 'What do dragonflies prefer to eat', 10, 'O,E,S', '7,8,9', 'MOSQUITOES', 6, 5, 2, 2, 1, 2018),
(10, 'What is called a fish with a snake-like body', 8, 'F,I,S,H', '4,5,6,7', 'EEL-FISH', 6, 5, 2, 2, 1, 2018),
(11, 'The biggest desert in the world is', 6, 'A,L', '2,5', 'BRAZIL', 6, 6, 2, 2, 1, 2018),
(12, 'The country known as the Sugar Bowl of the world is', 4, 'U,A', '1,3', 'CUBA', 6, 6, 2, 2, 1, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usr` varchar(10) NOT NULL,
  `pwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usr`, `pwd`) VALUES
('nitin', 'itm123');

-- --------------------------------------------------------

--
-- Table structure for table `question_status`
--

CREATE TABLE `question_status` (
  `QSTID` int(11) NOT NULL,
  `STATUS` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_status`
--

INSERT INTO `question_status` (`QSTID`, `STATUS`) VALUES
(1, 'MAIN'),
(2, 'FLIP');

-- --------------------------------------------------------

--
-- Table structure for table `q_a`
--

CREATE TABLE `q_a` (
  `QID` int(11) NOT NULL,
  `QUESTION` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `ANSWER` char(1) NOT NULL,
  `FSFQ` int(11) NOT NULL,
  `FSFA` int(11) NOT NULL,
  `QSTID` int(11) NOT NULL COMMENT 'Question Status (Main or BackUp)',
  `STID` int(11) NOT NULL COMMENT 'Game Status (WordPOwer or Quiz)',
  `TID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL,
  `THEME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `q_a`
--

INSERT INTO `q_a` (`QID`, `QUESTION`, `A`, `B`, `C`, `D`, `ANSWER`, `FSFQ`, `FSFA`, `QSTID`, `STID`, `TID`, `RID`, `SESSID`, `THEME`) VALUES
(1, 'Total number of seats in Lok Sabha for Uttarakhand is', '4', '5', '6', '2', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(2, 'The proposed number of Uttarakhand Vidhan Sabha members is', '60', '70', '75', '80', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(3, 'The first Chief Justice of Uttarakhand High Court is', 'Justice P C Verma', 'Justice M C Jain', 'Justice A A Desai', 'Justice A Vanketchalliya', 'C', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(4, 'The world famous \'Valley of flowers\' is situated at', 'Nainital', 'Chamoli', 'Uttar Kashi', 'Pauri', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(5, 'Where is the Building Research Institute and Structural Engineering Centres?', 'Nainital', 'Dehradun', 'Roorkee', 'Rishikesh', 'C', 25, 25, 2, 2, 1, 1, 2018, 'X'),
(6, 'Antibiotic medicines manufacturing factory with the collaboration of Russia is located in which of the following districts?', 'Rishikesh', 'Nainital', 'Dehradun', 'Tehri Garhwal', 'A', 25, 25, 2, 2, 1, 1, 2018, 'X'),
(7, 'Which of the following pilgrimage centres is a place of re-establishment of Hindu religion by Shankracharya?', 'Haridwar', 'Badri Nath', 'Kader Nath', 'Rishikesh', 'B', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(8, 'How many universities are there in Uttarakhand?', '5', '10', '3', '24', 'D', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(9, 'According to area which is the biggest district in Uttarakhand?', 'Uttarkashi', 'Chamoli', 'Nainital', 'Dehradun', 'A', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(10, 'Who was the leader of Utthan-Parishad in Uttarakhand?', 'Soban Singh Jeena', 'Taradutt Pandey', 'Badridatt Pandey', 'Daya Krishna', 'C', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(11, 'British woman \'Hielamen\' known as \'Sarla Bahen\' her working field was?', 'Reform in Uttarakhand state', 'Medical services in Uttarakhand state', 'Organisation of freedom fighting in the state', 'Propagation of Christianity in the state', 'C', 25, 25, 2, 2, 2, 1, 2018, 'X'),
(12, 'What is Pindari?', 'A pass', 'A mountainous range', 'A river', 'A Glacier', 'D', 25, 25, 2, 2, 2, 1, 2018, 'X'),
(13, 'Which of the following countries, boundaries touch the Uttarakhand state?', 'Nepal-Pakistan', 'Tibet-Pakistan', 'Tibet-China', 'Tibet-Nepal', 'D', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(14, 'How many district of Uttarakhand share boundary with Nainital?', '5', '4', '6', '9', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(15, 'From which year \'Almora Akhbaar\' published?', '1771', '1871', '1920', '1971', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(16, 'Where is Lal Bahadur Shastri Academy situated?', 'Dehradun', 'Mussoorie', 'Nainital', 'Almora', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(17, 'In which district of Uttarakhand is the state forest services college situated?', 'Nainital', 'Sri Nagar', 'Dehradun', 'Pauri', 'C', 25, 25, 2, 2, 3, 1, 2018, 'X'),
(18, 'Who is known as the Kumaon Kesari of the state?', 'Badri Prasad Pandey', 'Hemwati Nandan Bhauguna', 'Murli Manohar Joshi', 'Kashi Singh Airie', 'A', 25, 25, 2, 2, 3, 1, 2018, 'X'),
(19, 'Extent or coverage area of Uttarakhand state is - ', 'Length-East to West 258 km.  &amp; Breadth-North to South 420 km.', 'Length-East to West 358 km. &amp; Breadth-North to South 320 km.', 'Length-East to West 368 km. &amp; Breadth-North to South 325 km.', 'Length-East to West 370 km. &amp; Breadth-North to South 330 km.', 'B', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(20, 'Which of the following cities has maximum population in Uttarakhand?', 'Roorkee', 'Dehradun', 'Haldwani-Kathgodam', 'Haridwar', 'D', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(21, 'Who was the youngest soldier who got \'Victoria Cross\' award in Uttarakhand?', 'Gabar Singh Negi', 'Shyam Singh Bhandari', 'Chandra Singh Gadwali', 'Dr. Mukesh Joshi', 'A', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(22, 'Where is Nachiketa tal located in?', 'Bheemtal', 'Nainital', 'Uttar Kashi', 'Saat Tal', 'C', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(23, 'Who is the writer of Landour Days', 'Raskin Bond', 'G. R. C. Williams', 'Edwin Thomas Atkinson', 'Paruli Devi', 'A', 25, 25, 2, 2, 4, 1, 2018, 'X'),
(24, 'Who is the writer of the Himalayan Gazetteer', 'Edwin Thomas', 'Thakur Jodh Singh Negi', 'W.C. Doglus', 'Badri Dutt Pandey', 'A', 25, 25, 2, 2, 4, 1, 2018, 'X'),
(25, 'Who is the chief of \'Rajya Lok Sava Aayog\'', 'Dr. N. D. Tewari', 'Mr. Narendra Singh Bisht', 'Maj.Gen.(Retd) Anand Singh Rawat', 'Mr. S. P. Arya', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(26, 'Who is the Vice-Chancellor of UTU?', 'Dr. D. S. Chauhan', 'Prof. P. K. Garg', 'Dr. U. S. Rawat', 'Prof. H. S. Dhami', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(27, 'Where is the farming college in Uttarakhand?', 'Nainital', 'Pantnagar', 'Dehradun', 'Roorkie', 'B', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(28, 'Who was the chief minister of Uttarakhand, after the second time president Rule imposed', 'Dr. R. C. Pokhriyal', 'Nityanand Swami', 'Harish Rawat', 'B. C. Khandoori', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(29, 'Chipko Movement is related with -', 'Forest conservation', 'Wild life conservation', 'Air conservation', 'Water conservation', 'A', 25, 25, 2, 2, 5, 1, 2018, 'X'),
(30, 'Who has the record of being Protem speaker for maximum period i.e. (46 days) ?', 'Dharam Singh', 'InderSinghNamdhari', 'Kazi Mohiuddin', 'Rajendra Prasad Shukla', 'C', 25, 25, 2, 2, 5, 1, 2018, 'X'),
(31, 'Who availed the longest term of Chief Minister of Uttar Pradesh, elected from Uttarakhand ?', 'Chaudhari Charan Singh', 'Hemwati Nandan Bahuguna', 'Govind Ballabh Pant', 'Narain Dutt Tiwari', 'C', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(32, 'Who among the following has been the Vice-Chancellor of Kumaon University?', 'Dr. Ramsher Singh', 'M.D. Uppadhyay', 'G.L. Shah', 'Chand Lal Shah', 'B', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(33, 'Who is the present Chief Secretary of Uttarakhand?', 'Mr. Utpal Kumar', 'Sudha Rani Pandey', 'Gopal Singh Nayal', 'Mr. Anand Swaroop ', 'A', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(34, 'What Hemwati Nandan Bahuguna Garhwal University get the status of Central University', '(15-January-2009)', '(19-January-2010)', '(15-January-2008)', '(1-January-2012)', 'A', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(35, 'Who is famous as a name of varaksha manav', 'Vishwashwar  Dutt Saklani', 'B.D. Saklani', 'Sundal Lal bahuguna', 'Deep Chandra Pandey', 'A', 25, 25, 2, 2, 6, 1, 2018, 'X'),
(36, 'Which scheme is popular of the name of Gaura Devi.', 'Kanya Dhan Yojna', 'Sukanya Dhan Yojana', 'bati parov Bati Bachvo', 'None of these', 'A', 25, 25, 2, 2, 6, 1, 2018, 'X'),
(37, 'Which river is also called Lifeline of Kerala ?', 'Periyar', 'Pamba', 'Chaliyar', 'Kabini', 'A', 25, 25, 1, 2, 1, 3, 2018, 'X'),
(38, 'In 2014 who was the chosen captain of the ICC ODI team?', 'Anjalo Mathews ', 'Alister Cook ', 'Mahendra Singh Dhoni', 'Eoin Morgan ', 'C', 25, 25, 1, 2, 1, 3, 2018, 'X'),
(39, 'Who won the ICC Peoples Choice award in 2014?', 'Virat kohli ', 'Hashim Amla ', 'Steven Smith ', 'Bhuvaneshwar Kumar ', 'D', 25, 25, 2, 2, 1, 3, 2018, 'X'),
(40, 'The winner of 2013-14 European Golden Boot award ?', 'Cristiano Ronaldo ', 'Lionel Messi ', 'Gareth Bale ', 'David Villa ', 'A', 25, 25, 1, 2, 2, 3, 2018, 'X'),
(41, 'Which country won the Davis Cup title for the first time in 2014?', 'Switzerland ', 'Spain ', 'France ', 'Denmark ', 'A', 25, 25, 1, 2, 2, 3, 2018, 'X'),
(42, 'Who was the 2014 world Chess Champion?', 'Magnus karlsen ', 'Vishwanath Anand ', 'Peter leko ', 'Blamidir Karnamik ', 'A', 25, 25, 2, 2, 2, 3, 2018, 'X'),
(43, 'Who won the 2014 kabaddi world cup?', 'India ', 'Pakistan ', 'Spain ', 'France ', 'A', 25, 25, 1, 2, 3, 3, 2018, 'X'),
(44, 'Who is the fastest to score 12000 runs in test matches?', 'Kumar Sangakara ', 'Hashim Amla ', 'Alister Cook ', 'Sachin Tendulkar ', 'A', 25, 25, 1, 2, 3, 3, 2018, 'X'),
(45, 'Who is the 2015 ambassador for the International Cricket Council World Cup?', 'Sachin Tendulkar ', 'Ricky Ponting ', 'Bryan Lara ', 'Adam Gilchrist ', 'A', 25, 25, 2, 2, 3, 3, 2018, 'X'),
(46, 'Name the Indian sportsperson who announced to retire after 2016 Rio Olympic Games ?', 'Marry Com ', 'Sushil Kumar ', 'Sarita Devi ', 'Leander paes ', 'A', 25, 25, 1, 2, 4, 3, 2018, 'X'),
(47, 'Who made the record to hit 32 hat-trick in Spanish League?', 'Lionel Messi ', 'Barcelona ', 'luis Suarez ', 'Cristiano Ronaldo ', 'A', 25, 25, 1, 2, 4, 3, 2018, 'X'),
(48, 'Which is the International Dance?', 'Romantic Dance', 'Bibhu', 'Odissi', '  Chau', 'D', 25, 25, 2, 2, 4, 3, 2018, 'X'),
(49, 'When did Sachin Tendulkar make his Test debut? ', '1989', '1985', '1987', '1979', 'A', 25, 25, 1, 2, 5, 3, 2018, 'X'),
(50, 'First 3D animated film from India is', 'Roadside Romeo', 'Ghayab Aaya', 'Hanuman', 'Bal Ganesh', 'A', 25, 25, 1, 2, 5, 3, 2018, 'X'),
(51, 'The game of hockey originated in ?', 'France ', 'Canada ', 'England ', 'Germany ', 'A', 25, 25, 2, 2, 5, 3, 2018, 'X'),
(52, 'Who was the most expensive player at the pro kabbadi auctions 2016?', 'Anup Kumar ', 'Mohit chillar ', 'Sandeep Narwal', 'Jang-kun-lee ', 'B', 25, 25, 1, 2, 6, 3, 2018, 'X'),
(53, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', 'A', 25, 25, 1, 2, 6, 3, 2018, 'X'),
(54, 'Which Indian actress has won the best actress award at the 2017 International Film Festival and Awards of Australia IFFAA', 'Aishwarya Rai Bachchan', 'Priyanka Chopra', 'Deepika Padukone', 'Alia Bhatt', 'A', 25, 25, 2, 2, 6, 3, 2018, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `q_a_elimination`
--

CREATE TABLE `q_a_elimination` (
  `QID` int(11) NOT NULL,
  `QUESTION` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `ANSWER` char(1) NOT NULL,
  `QSTID` int(11) NOT NULL COMMENT 'Question Status (Main or BackUp)',
  `STID` int(11) NOT NULL COMMENT 'Game Status (WordPOwer or Quiz)',
  `TID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rounds`
--

CREATE TABLE `rounds` (
  `RID` int(11) NOT NULL,
  `NAME_` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(300) NOT NULL DEFAULT 'NA',
  `PAGE_` varchar(15) NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rounds`
--

INSERT INTO `rounds` (`RID`, `NAME_`, `DESCRIPTION`, `PAGE_`, `STID`, `SESSID`) VALUES
(1, 'BREAK THROUGH', 'NA', 'X', 2, 2018),
(2, 'HANG-MAN', 'NA', 'X', 2, 2018),
(3, 'WHEEL OF FORTUNE', 'x', 'x', 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `rules_general`
--

CREATE TABLE `rules_general` (
  `RULEID` int(11) NOT NULL,
  `RULE` text NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules_general`
--

INSERT INTO `rules_general` (`RULEID`, `RULE`, `STID`, `SESSID`) VALUES
(1, 'The E-Quiz is divided into <b>Three rounds</b> excluding elimination Round', 2, 2018),
(3, 'The Referee\'s decision will be final.', 2, 2018),
(4, 'The time keeper shall start timing from the moment the anchor finishes asking a question, including options if any.', 2, 2018),
(5, 'Rules for each round will be announced by the anchors before the round begins.', 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `rules_round`
--

CREATE TABLE `rules_round` (
  `RULEID` int(11) NOT NULL,
  `RULE_` text NOT NULL,
  `RID` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules_round`
--

INSERT INTO `rules_round` (`RULEID`, `RULE_`, `RID`, `STID`, `SESSID`) VALUES
(1, 'Every team will be asked 4 objective type questions.', 1, 2, 2018),
(2, 'Each question will have 4 options from which to answer. ', 1, 2, 2018),
(3, '5 marks will be given for every correct answer.', 1, 2, 2018),
(4, 'There shall be no negative marking in case of incorrect answers.', 1, 2, 2018),
(5, 'Time available for answering each question is 15 seconds.', 1, 2, 2018),
(6, 'Questions in this round cannot be passed.', 1, 2, 2018),
(7, 'Each team will be asked two questions.', 2, 2, 2018),
(8, 'An incomplete word will be displayed on the screen; the team has to guess the correct word. ', 2, 2, 2018),
(9, 'The time for answering each question is 15 seconds.', 2, 2, 2018),
(10, 'The correct answer carries 10 marks.', 2, 2, 2018),
(11, 'The incorrect answer will lead to the death of the hangman.  ', 2, 2, 2018),
(12, 'There will be no negative marking for incorrect answer.', 2, 2, 2018),
(13, 'Unanswered question will not be passed to the other teams.', 2, 2, 2018),
(14, 'Each Team has to bid for a number displayed on the wheel of fortune.', 3, 2, 2018),
(15, 'If the number on the screen coincides with the number bid for, the team can avail the bonus marks.', 3, 2, 2018),
(16, 'In case the number bid for does not coincide with number on the screen, the team will not be entitled to any bonus marks; however two questions will be asked to each team.', 3, 2, 2018),
(17, 'The time for answering each question is 15 seconds.', 3, 2, 2018),
(18, 'Each correct answer carries 10 marks.', 3, 2, 2018),
(19, 'There is no negative marking for incorrect answers.', 3, 2, 2018),
(20, 'And to make the round more sweet we have chocolates for you.', 3, 2, 2018),
(21, 'Unanswered question will not be passed to the other teams.', 3, 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `SESSID` int(11) NOT NULL,
  `SESSION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`SESSID`, `SESSION`) VALUES
(2018, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `table 15`
--

CREATE TABLE `table 15` (
  `COL 1` int(2) DEFAULT NULL,
  `COL 2` varchar(123) DEFAULT NULL,
  `COL 3` varchar(65) DEFAULT NULL,
  `COL 4` varchar(64) DEFAULT NULL,
  `COL 5` varchar(64) DEFAULT NULL,
  `COL 6` varchar(64) DEFAULT NULL,
  `COL 7` varchar(1) DEFAULT NULL,
  `COL 8` int(2) DEFAULT NULL,
  `COL 9` int(2) DEFAULT NULL,
  `COL 10` int(1) DEFAULT NULL,
  `COL 11` int(1) DEFAULT NULL,
  `COL 12` int(1) DEFAULT NULL,
  `COL 13` int(1) DEFAULT NULL,
  `COL 14` int(4) DEFAULT NULL,
  `COL 15` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table 15`
--

INSERT INTO `table 15` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`, `COL 14`, `COL 15`) VALUES
(1, 'Total number of seats in Lok Sabha for Uttarakhand is', '4', '5', '6', '2', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(2, 'The proposed number of Uttarakhand Vidhan Sabha members is', '60', '70', '75', '80', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(3, 'The first Chief Justice of Uttarakhand High Court is', 'Justice P C Verma', 'Justice M C Jain', 'Justice A A Desai', 'Justice A Vanketchalliya', 'C', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(4, 'The world famous \'Valley of flowers\' is situated at', 'Nainital', 'Chamoli', 'Uttar Kashi', 'Pauri', 'B', 25, 25, 1, 2, 1, 1, 2018, 'X'),
(5, 'Where is the Building Research Institute and Structural Engineering Centres?', 'Nainital', 'Dehradun', 'Roorkee', 'Rishikesh', 'C', 25, 25, 2, 2, 1, 1, 2018, 'X'),
(6, 'Antibiotic medicines manufacturing factory with the collaboration of Russia is located in which of the following districts?', 'Rishikesh', 'Nainital', 'Dehradun', 'Tehri Garhwal', 'A', 25, 25, 2, 2, 1, 1, 2018, 'X'),
(7, 'Which of the following pilgrimage centres is a place of re-establishment of Hindu religion by Shankracharya?', 'Haridwar', 'Badri Nath', 'Kader Nath', 'Rishikesh', 'B', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(8, 'How many universities are there in Uttarakhand?', '5', '10', '3', '24', 'D', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(9, 'According to area which is the biggest district in Uttarakhand?', 'Uttarkashi', 'Chamoli', 'Nainital', 'Dehradun', 'A', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(10, 'Who was the leader of Utthan-Parishad in Uttarakhand?', 'Soban Singh Jeena', 'Taradutt Pandey', 'Badridatt Pandey', 'Daya Krishna', 'C', 25, 25, 1, 2, 2, 1, 2018, 'X'),
(11, 'British woman \'Hielamen\' known as \'Sarla Bahen\' her working field was?', 'Reform in Uttarakhand state', 'Medical services in Uttarakhand state', 'Organisation of freedom fighting in the state', 'Propagation of Christianity in the state', 'C', 25, 25, 2, 2, 2, 1, 2018, 'X'),
(12, 'What is Pindari?', 'A pass', 'A mountainous range', 'A river', 'A Glacier', 'D', 25, 25, 2, 2, 2, 1, 2018, 'X'),
(13, 'Which of the following countries, boundaries touch the Uttarakhand state?', 'Nepal-Pakistan', 'Tibet-Pakistan', 'Tibet-China', 'Tibet-Nepal', 'D', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(14, 'How many district of Uttarakhand share boundary with Nainital?', '5', '4', '6', '9', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(15, 'From which year \'Almora Akhbaar\' published?', '1771', '1871', '1920', '1971', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(16, 'Where is Lal Bahadur Shastri Academy situated?', 'Dehradun', 'Mussoorie', 'Nainital', 'Almora', 'B', 25, 25, 1, 2, 3, 1, 2018, 'X'),
(17, 'In which district of Uttarakhand is the state forest services college situated?', 'Nainital', 'Sri Nagar', 'Dehradun', 'Pauri', 'C', 25, 25, 2, 2, 3, 1, 2018, 'X'),
(18, 'Who is known as the Kumaon Kesari of the state?', 'Badri Prasad Pandey', 'Hemwati Nandan Bhauguna', 'Murli Manohar Joshi', 'Kashi Singh Airie', 'A', 25, 25, 2, 2, 3, 1, 2018, 'X'),
(19, 'Extent or coverage area of Uttarakhand state is - ', 'Length-East to West 258 km.  &amp; Breadth-North to South 420 km.', 'Length-East to West 358 km. &amp; Breadth-North to South 320 km.', 'Length-East to West 368 km. &amp; Breadth-North to South 325 km.', 'Length-East to West 370 km. &amp; Breadth-North to South 330 km.', 'B', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(20, 'Which of the following cities has maximum population in Uttarakhand?', 'Roorkee', 'Dehradun', 'Haldwani-Kathgodam', 'Haridwar', 'D', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(21, 'Who was the youngest soldier who got \'Victoria Cross\' award in Uttarakhand?', 'Gabar Singh Negi', 'Shyam Singh Bhandari', 'Chandra Singh Gadwali', 'Dr. Mukesh Joshi', 'A', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(22, 'Where is Nachiketa tal located in?', 'Bheemtal', 'Nainital', 'Uttar Kashi', 'Saat Tal', 'C', 25, 25, 1, 2, 4, 1, 2018, 'X'),
(23, 'Who is the writer of Landour Days', 'Raskin Bond', 'G. R. C. Williams', 'Edwin Thomas Atkinson', 'Paruli Devi', 'A', 25, 25, 2, 2, 4, 1, 2018, 'X'),
(24, 'Who is the writer of the Himalayan Gazetteer', 'Edwin Thomas', 'Thakur Jodh Singh Negi', 'W.C. Doglus', 'Badri Dutt Pandey', 'A', 25, 25, 2, 2, 4, 1, 2018, 'X'),
(25, 'Who is the chief of \'Rajya Lok Sava Aayog\'', 'Dr. N. D. Tewari', 'Mr. Narendra Singh Bisht', 'Maj.Gen.(Retd) Anand Singh Rawat', 'Mr. S. P. Arya', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(26, 'Who is the Vice-Chancellor of UTU?', 'Dr. D. S. Chauhan', 'Prof. P. K. Garg', 'Dr. U. S. Rawat', 'Prof. H. S. Dhami', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(27, 'Where is the farming college in Uttarakhand?', 'Nainital', 'Pantnagar', 'Dehradun', 'Roorkie', 'B', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(28, 'Who was the chief minister of Uttarakhand, after the second time president Rule imposed', 'Dr. R. C. Pokhriyal', 'Nityanand Swami', 'Harish Rawat', 'B. C. Khandoori', 'C', 25, 25, 1, 2, 5, 1, 2018, 'X'),
(29, 'Chipko Movement is related with -', 'Forest conservation', 'Wild life conservation', 'Air conservation', 'Water conservation', 'A', 25, 25, 2, 2, 5, 1, 2018, 'X'),
(30, 'Who has the record of being Protem speaker for maximum period i.e. (46 days) ?', 'Dharam Singh', 'InderSinghNamdhari', 'Kazi Mohiuddin', 'Rajendra Prasad Shukla', 'C', 25, 25, 2, 2, 5, 1, 2018, 'X'),
(31, 'Who availed the longest term of Chief Minister of Uttar Pradesh, elected from Uttaranchal ?', 'Chaudhari Charan Singh', 'Hemwati Nandan Bahuguna', 'Govind Ballabh Pant', 'Narain Dutt Tiwari', 'C', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(32, 'Who availed the longest term of Chief Minister of Uttar Pradesh, elected from Uttaranchal ?', 'Chaudhari Charan Singh', 'Hemwati Nandan Bahuguna', 'Govind Ballabh Pant', 'Narain Dutt Tiwari', 'C', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(33, 'Who is the present chairman of Uttarakhand Public Service Commission ?', 'N.P.Navani', 'Sudha Rani Pandey', 'Gopal Singh Nayal', 'Mr. Anand Swaroop ', 'D', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(34, 'What Hemwati Nandan Bahuguna Garhwal University get the status of Central University', '(15-January-2009)', '(19-January-2010)', '(15-January-2008)', '(1-January-2012)', 'A', 25, 25, 1, 2, 6, 1, 2018, 'X'),
(35, 'Who is famous as a name of varaksha manav', 'Vishwashwar  Dutt Saklani', 'B.D. Saklani', 'Sundal Lal bahuguna', 'Deep Chandra Pandey', 'A', 25, 25, 2, 2, 6, 1, 2018, 'X'),
(36, 'Which scheme is popular of the name of Gaura Devi.', 'Kanya Dhan Yojna', 'Sukanya Dhan Yojana', 'bati parov Bati Bachvo', 'None of these', 'A', 25, 25, 2, 2, 6, 1, 2018, 'X'),
(37, 'Which river is also called Lifeline of Kerala ?', 'Periyar', 'Pamba', 'Chaliyar', 'Kabini', 'A', 25, 25, 1, 2, 1, 3, 2018, 'X'),
(38, 'In 2014 who was the chosen captain of the ICC ODI team?', 'Anjalo Mathews ', 'Alister Cook ', 'Mahendra Singh Dhoni', 'Eoin Morgan ', 'C', 25, 25, 1, 2, 1, 3, 2018, 'X'),
(39, 'Who won the ICC Peoples Choice award in 2014?', 'Virat kohli ', 'Hashim Amla ', 'Steven Smith ', 'Bhuvaneshwar Kumar ', 'D', 25, 25, 2, 2, 1, 3, 2018, 'X'),
(40, 'The winner of 2013-14 European Golden Boot award ?', 'Cristiano Ronaldo ', 'Lionel Messi ', 'Gareth Bale ', 'David Villa ', 'A', 25, 25, 1, 2, 2, 3, 2018, 'X'),
(41, 'Which country won the Davis Cup title for the first time in 2014?', 'Switzerland ', 'Spain ', 'France ', 'Denmark ', 'A', 25, 25, 1, 2, 2, 3, 2018, 'X'),
(42, 'Who was the 2014 world Chess Champion?', 'Magnus karlsen ', 'Vishwanath Anand ', 'Peter leko ', 'Blamidir Karnamik ', 'A', 25, 25, 2, 2, 2, 3, 2018, 'X'),
(43, 'Who won the 2014 kabaddi world cup?', 'India ', 'Pakistan ', 'Spain ', 'France ', 'A', 25, 25, 1, 2, 3, 3, 2018, 'X'),
(44, 'Who is the fastest to score 12000 runs in test matches?', 'Kumar Sangakara ', 'Hashim Amla ', 'Alister Cook ', 'Sachin Tendulkar ', 'A', 25, 25, 1, 2, 3, 3, 2018, 'X'),
(45, 'Who is the 2015 ambassador for the International Cricket Council World Cup?', 'Sachin Tendulkar ', 'Ricky Ponting ', 'Bryan Lara ', 'Adam Gilchrist ', 'A', 25, 25, 2, 2, 3, 3, 2018, 'X'),
(46, 'Name the Indian sportsperson who announced to retire after 2016 Rio Olympic Games ?', 'Marry Com ', 'Sushil Kumar ', 'Sarita Devi ', 'Leander paes ', 'A', 25, 25, 1, 2, 4, 3, 2018, 'X'),
(47, 'Who made the record to hit 32 hat-trick in Spanish League?', 'Lionel Messi ', 'Barcelona ', 'luis Suarez ', 'Cristiano Ronaldo ', 'A', 25, 25, 1, 2, 4, 3, 2018, 'X'),
(48, 'Which is the International Dance?', 'Romantic Dance', 'Bibhu', 'Odissi', '  Chau', 'D', 25, 25, 2, 2, 4, 3, 2018, 'X'),
(49, 'When did Sachin Tendulkar make his Test debut? ', '1989', '1985', '1987', '1979', 'A', 25, 25, 1, 2, 5, 3, 2018, 'X'),
(50, 'First 3D animated film from India is', 'Roadside Romeo', 'Ghayab Aaya', 'Hanuman', 'Bal Ganesh', 'A', 25, 25, 1, 2, 5, 3, 2018, 'X'),
(51, 'The game of hockey originated in ?', 'France ', 'Canada ', 'England ', 'Germany ', 'A', 25, 25, 2, 2, 5, 3, 2018, 'X'),
(52, 'Who was the most expensive player at the pro kabbadi auctions 2016?', 'Anup Kumar ', 'Mohit chillar ', 'Sandeep Narwal', 'Jang-kun-lee ', 'B', 25, 25, 1, 2, 6, 3, 2018, 'X'),
(53, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', 'A', 25, 25, 1, 2, 6, 3, 2018, 'X'),
(54, 'Which Indian actress has won the best actress award at the 2017 International Film Festival and Awards of Australia IFFAA', 'Aishwarya Rai Bachchan', 'Priyanka Chopra', 'Deepika Padukone', 'Alia Bhatt', 'A', 25, 25, 2, 2, 6, 3, 2018, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `TID` int(11) NOT NULL,
  `NAME_` varchar(25) NOT NULL,
  `COLLEGE` varchar(100) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`TID`, `NAME_`, `COLLEGE`, `CITY`, `STID`, `SESSID`) VALUES
(1, 'DURGA', 'KU', 'NAINITAL', 2, 2018),
(2, 'BHAGWATI', 'BIRLA', 'BHIMTAL', 2, 2018),
(3, 'ANNAPURNA', 'AMITY', 'HARYANA', 2, 2018),
(4, 'PARVATI', 'ROYAL COLLEGE', 'NAINITAL', 2, 2018),
(5, 'VAISHNAVI', 'DMS', 'BHIMTAL', 2, 2018),
(6, 'KATYAYANI', 'TEAM AGI', 'HALDWANI', 2, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `teamse`
--

CREATE TABLE `teamse` (
  `TID` int(11) NOT NULL,
  `NAME_` varchar(25) NOT NULL,
  `COLLEGE` varchar(100) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teamse`
--

INSERT INTO `teamse` (`TID`, `NAME_`, `COLLEGE`, `CITY`, `STID`, `SESSID`) VALUES
(1, 'Team 1', 'x', 'x', 4, 2018),
(2, 'Team 2', 'x', 'x', 4, 2018),
(3, 'Team 3', 'x', 'x', 4, 2018),
(4, 'Team 4', 'x', 'x', 4, 2018),
(5, 'Team 5', 'x', 'x', 4, 2018),
(6, 'Team 6', 'x', 'x', 4, 2018),
(7, 'Team 7', 'x', 'x', 4, 2018),
(8, 'Team 8', 'x', 'x', 4, 2018),
(9, 'Team 9', 'x', 'x', 4, 2018),
(10, 'Team 10', 'x', 'x', 4, 2018),
(11, 'Team 11', 'x', 'x', 4, 2018),
(12, 'Team 12', 'x', 'x', 4, 2018),
(13, 'Team 13', 'x', 'x', 4, 2018),
(14, 'Team 14', 'x', 'x', 4, 2018),
(15, 'Team 15', 'x', 'x', 4, 2018),
(16, 'Team 16', 'x', 'x', 4, 2018),
(17, 'Team 17', 'x', 'x', 4, 2018),
(18, 'Team 18', 'x', 'x', 4, 2018),
(19, 'Team 19', 'x', 'x', 4, 2018),
(20, 'Team 20', 'x', 'x', 4, 2018),
(21, 'Team 1', 'x', 'x', 5, 2018),
(22, 'Team 2', 'x', 'x', 5, 2018),
(23, 'Team 3', 'x', 'x', 5, 2018),
(24, 'Team 4', 'x', 'x', 5, 2018),
(25, 'Team 5', 'x', 'x', 5, 2018),
(26, 'Team 6', 'x', 'x', 5, 2018),
(27, 'Team 7', 'x', 'x', 5, 2018),
(28, 'Team 8', 'x', 'x', 5, 2018),
(29, 'Team 9', 'x', 'x', 5, 2018),
(30, 'Team 10', 'x', 'x', 5, 2018),
(31, 'Team 11', 'x', 'x', 5, 2018),
(32, 'Team 12', 'x', 'x', 5, 2018),
(33, 'Team 13', 'x', 'x', 5, 2018),
(34, 'Team 14', 'x', 'x', 5, 2018),
(35, 'Team 15', 'x', 'x', 5, 2018),
(36, 'Team 16', 'x', 'x', 5, 2018),
(37, 'Team 17', 'x', 'x', 5, 2018),
(38, 'Team 18', 'x', 'x', 5, 2018),
(39, 'Team 19', 'x', 'x', 5, 2018),
(40, 'Team 20', 'x', 'x', 5, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `team_score`
--

CREATE TABLE `team_score` (
  `SCID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `SCORE` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `SESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_score`
--

INSERT INTO `team_score` (`SCID`, `TID`, `RID`, `SCORE`, `STID`, `SESSID`) VALUES
(1, 1, 1, 0, 2, 2018),
(5, 1, 2, 0, 2, 2018),
(6, 1, 3, 0, 2, 2018),
(8, 2, 1, 0, 2, 2018),
(12, 2, 2, 0, 2, 2018),
(13, 2, 3, 0, 2, 2018),
(15, 3, 1, 0, 2, 2018),
(19, 3, 2, 0, 2, 2018),
(20, 3, 3, 0, 2, 2018),
(22, 4, 1, 0, 2, 2018),
(26, 4, 2, 0, 2, 2018),
(27, 4, 3, 0, 2, 2018),
(29, 5, 1, 0, 2, 2018),
(33, 5, 2, 0, 2, 2018),
(34, 5, 3, 0, 2, 2018),
(36, 6, 1, 0, 2, 2018),
(40, 6, 2, 0, 2, 2018),
(41, 6, 3, 0, 2, 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audiovideo`
--
ALTER TABLE `audiovideo`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `QSTID` (`QSTID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`),
  ADD KEY `TID` (`TID`,`RID`),
  ADD KEY `TID_2` (`TID`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `game_status`
--
ALTER TABLE `game_status`
  ADD PRIMARY KEY (`STID`);

--
-- Indexes for table `hangman`
--
ALTER TABLE `hangman`
  ADD PRIMARY KEY (`HNGID`),
  ADD KEY `TID` (`TID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`),
  ADD KEY `QSTID` (`QSTID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usr`);

--
-- Indexes for table `question_status`
--
ALTER TABLE `question_status`
  ADD PRIMARY KEY (`QSTID`);

--
-- Indexes for table `q_a`
--
ALTER TABLE `q_a`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `QSTID` (`QSTID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`),
  ADD KEY `TID` (`TID`,`RID`),
  ADD KEY `TID_2` (`TID`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `q_a_elimination`
--
ALTER TABLE `q_a_elimination`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `QSTID` (`QSTID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`),
  ADD KEY `TID` (`TID`),
  ADD KEY `TID_2` (`TID`);

--
-- Indexes for table `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `STATUS` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- Indexes for table `rules_general`
--
ALTER TABLE `rules_general`
  ADD PRIMARY KEY (`RULEID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- Indexes for table `rules_round`
--
ALTER TABLE `rules_round`
  ADD PRIMARY KEY (`RULEID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `STID` (`STID`,`SESSID`),
  ADD KEY `STID_2` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`SESSID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- Indexes for table `teamse`
--
ALTER TABLE `teamse`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- Indexes for table `team_score`
--
ALTER TABLE `team_score`
  ADD PRIMARY KEY (`SCID`),
  ADD KEY `TID` (`TID`,`RID`,`SCORE`,`STID`,`SESSID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `STID` (`STID`),
  ADD KEY `SESSID` (`SESSID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audiovideo`
--
ALTER TABLE `audiovideo`
  MODIFY `QID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `hangman`
--
ALTER TABLE `hangman`
  MODIFY `HNGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `q_a`
--
ALTER TABLE `q_a`
  MODIFY `QID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `q_a_elimination`
--
ALTER TABLE `q_a_elimination`
  MODIFY `QID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rounds`
--
ALTER TABLE `rounds`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rules_general`
--
ALTER TABLE `rules_general`
  MODIFY `RULEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rules_round`
--
ALTER TABLE `rules_round`
  MODIFY `RULEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `SESSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2018;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teamse`
--
ALTER TABLE `teamse`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `team_score`
--
ALTER TABLE `team_score`
  MODIFY `SCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hangman`
--
ALTER TABLE `hangman`
  ADD CONSTRAINT `hangman_ibfk_1` FOREIGN KEY (`TID`) REFERENCES `teams` (`TID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hangman_ibfk_2` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hangman_ibfk_3` FOREIGN KEY (`RID`) REFERENCES `rounds` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hangman_ibfk_4` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hangman_ibfk_5` FOREIGN KEY (`QSTID`) REFERENCES `question_status` (`QSTID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `q_a`
--
ALTER TABLE `q_a`
  ADD CONSTRAINT `id_for_game_category` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qid_for_question_status` FOREIGN KEY (`QSTID`) REFERENCES `question_status` (`QSTID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `q_a_ibfk_1` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `q_a_ibfk_2` FOREIGN KEY (`RID`) REFERENCES `rounds` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `q_a_elimination`
--
ALTER TABLE `q_a_elimination`
  ADD CONSTRAINT `q_a_elimination_ibfk_1` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `q_a_elimination_ibfk_2` FOREIGN KEY (`SESSID`) REFERENCES `teams` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `q_a_elimination_ibfk_3` FOREIGN KEY (`TID`) REFERENCES `teamse` (`TID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rounds`
--
ALTER TABLE `rounds`
  ADD CONSTRAINT `rounds_ibfk_1` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stid__for_game` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rules_general`
--
ALTER TABLE `rules_general`
  ADD CONSTRAINT `rules_general_ibfk_1` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_general_ibfk_2` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rules_round`
--
ALTER TABLE `rules_round`
  ADD CONSTRAINT `rules_round_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `rounds` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_round_ibfk_2` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_round_ibfk_3` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `stid_for_game` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teamse`
--
ALTER TABLE `teamse`
  ADD CONSTRAINT `teamse_ibfk_1` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teamse_ibfk_2` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_score`
--
ALTER TABLE `team_score`
  ADD CONSTRAINT `team_score_ibfk_1` FOREIGN KEY (`TID`) REFERENCES `teams` (`TID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `team_score_ibfk_2` FOREIGN KEY (`RID`) REFERENCES `rounds` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `team_score_ibfk_3` FOREIGN KEY (`STID`) REFERENCES `game_status` (`STID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `team_score_ibfk_4` FOREIGN KEY (`SESSID`) REFERENCES `sessions` (`SESSID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
