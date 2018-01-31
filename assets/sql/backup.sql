-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 08:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u286673737_dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `venue` text NOT NULL,
  `participants_no` int(11) NOT NULL,
  `description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name`, `date`, `time`, `venue`, `participants_no`, `description`, `timestamp`) VALUES
(1, 'International Coding League', '1<sup>st</sup> February - 2<sup>nd</sup> February', '10:00 PM - 2:00 AM', '<a target="_blank" style="color: aqua;" href="https://www.hackerrank.com/icl">www.hackerrank.com/icl</a>', 0, '<p>Whether you want to uncover the secrets of the Universe or pursue a Career, Programming, today has become an essential skill. And the Competition is equally tough. You might have the knowledge to ascend to the top. But do you have what it takes to be the Ultimate Programmer?</p> \r\n<br />\r\n<p>It\'s time to find out, once and for all, who is the Greatest among the Great! The Global Elite. </p>\r\n<br />\r\n<p>The event will be held for a period of 2 days. Beginning at 10pm each day, programming questions will be given to the participants to solve. Then, at 12 midnight, and 1 AM one question will be added per hour. The event will conclude at 2AM. The winner is the participant who solves the maximum number of questions in the minimum amount of time. All rules of International Coding League will apply.</p>\r\n<br />\r\n<p>Fight your battle in ICL-Online this PRODIGY 18!</p>', '2018-01-30 17:49:31'),
(2, 'Frame of Reference', '1<sup>st</sup> February', '11:30 AM onwards', 'New Amphitheatre', 56, '<p>This prodigy, we are coming with an event for all the photography lovers. \'Frame of reference\' is a two-day event, the participants will have to shoot the video of entire Day 1 of prodigy and submit the edited videos on Day 2. The video should not exceed 120 seconds and should include at least 5 photographs and 3 video shots of the entire day.  The participants can then edit their videos using the allowed software. The rules of the event will be presented on Day 1. There will be two awards, one for best photographs and other for best video.</p>', '2018-01-30 17:49:31'),
(3, 'Glitch', '1<sup>st</sup> February - 2<sup>nd</sup> Gebruary', 'R1: 11:30 AM, R2: 12:30 PM', 'R1: 7005, R2:8107', 98, '<p>This Prodigy, we are coming with a fun- filled technical event named `Glitch` in which participating students will be given a task to develop game of their own choice. This is a 2- day event which is headed by Amisha Bhardwaj and Amit Mishra, members of UPES ACM Student Chapter. On the first day, event heads will give all the required instructions of the respective event to all the participants and cater their doubts. Information related to declaration of winners and prize distribution will also be given on the first day of the event itself. Game development will commence on the second day. After developing their respective games, participants will present those in front of the judges for evaluation. Glitch is an exciting event jam-packed with goodies and many prizes for the winners.</p>', '2018-01-30 17:49:31'),
(4, 'Enggage', '1<sup>st</sup> February - 2<sup>nd</sup> February', '10:30 AM onwards', 'New Amphitheatre', 43, '<p>Ever had a competitive gaming itch you just can`t seem to scratch ?   \r\nWell, get ready for the ultimate battle royale to prove once and for all who`s the King.</p>\r\n<p>Compete solo on the fields of FIFA 18, or showcase your team`s talent in Tom Clancy`s Rainbow Six Siege.</>\r\n<br />\r\n<br />\r\n<h1>Rules:</h1>\r\n<br />\r\n<ul>\r\n<li><h3>FIFA 18</h3>\r\nKnockout style individual participation tournament, with the last man standing being crowned as the victor.</li>\r\n<br />\r\n<li><h3>Tom Clancy`s Rainbow Six Siege</h3>\r\nKnockout style five-man team tournament, with only the maps mentioned below included, for the elimination of which tosses will be held before each match.</li>\r\n', '2018-01-30 17:49:31'),
(5, 'Echo', '1<sup>st</sup> February', '2:30 PM', '8107, 7005', 0, '<p>ECHO is a unique technical event that will be conducted in this PRODIGY under the supervision of Durva Tiwari and Neha Agarwal. This event will test the participant\'s sound technical and speaking skills. The event will span over two days with 3 rounds comprising of it. In the first two rounds (SPEAK TO LEAD and ELEVATOR SPEECH respectively), the participants will be given a topic from a list of varied topics to speak on for 2-3 minutes and then pitch in their ideas for the same. The topics will be given fairly beforehand for the participants to prepare. The final round (FACE-OFF) will have only 4 finalists proceeding to it. This will be a 3 on 1 round, where one participant has to defend their pitch against the other three. ECHO is a fun-filled, one of a kind event that will keep the participants on their toes and it comes with lots of good prizes! </p>', '2018-01-31 20:06:00'),
(6, 'Capture The Flag (CTF)', '31<sup>st</sup> January', '11:30 PM onwards', 'Online', 0, '<p>For the first time ever, we are coming with a technical information security competition in Prodigy 2018.  </p>\r\n<p>Capture the flag is an interesting event with the same concept as implemented in cyberspace. The players can take part in Jeopardy-style CTF, this round will have a series of tasks of categories like Web, Forensic, Crypto. The players must complete the previous task only then the next task can be opened. The value of points will increase as the complexity increases.</p>\r\n<br />\r\n<p>The player with highest points will ace the game. Alternatively, players can form a team and take part in Attack-Defence CTF, where one team must play defensive and debug their network while the other team will play offensive and try to gain access of their network.</p>', '2018-01-31 20:08:34'),
(7, 'Braille Code', 'R1: 1<sup>st</sup> February, R2,3: 2<sup>nd</sup> February', 'R1: 10:30 AM, R2,3: 12:30 - 3:30 PM', 'R1: 7005, R2,3: IT Lab 001', 0, '**Description goes here**', '2018-01-31 20:11:40'),
(8, 'Tuning Fork', '1<sup>st</sup> February', '12:30 - 4:00 PM', '10005', 0, '<p>The tuning fork is a team event testing quiz skills alongside your listening capabilities. The quiz relies on the advances of latest technology, general awareness. However it’s not that easy.</p>\r\n<br />\r\n<p>The twist comes in when one team member needs to guess the proper answer of asked question in three attempts so whisper the solution to the opposite mate who would be listening to loud music. If the team with success completes the task they\'ll be the winner of the battlefield.</p>\r\n<br />\r\n<p>Just in case of a tie there\'ll be a rapid fire round of quiz questions the team who answers quickly and correctly are declared as winner.</p>', '2018-01-31 20:13:25'),
(9, 'Travelling Salesman', '2<sup>nd</sup> February', '11:30 AM onwards', 'New Amphitheatre', 0, '<p>This Prodigy, we are coming with a big treasure hunt event named ‘Travelling Salesman’. It is a one-day event headed by Arshiya Ahuja (CCVT, 2nd Year) and Abhishek Sharma (CCVT, 1st Year). It is an app based event in which participants will require to download the ACM app and then they will get clues based in the college of which they have to find answers to get to the treasure box. Participants will take pictures, record videos, scan QR codes etc. to get to the next clue. Though clues will come in a random order but the last clue will be same for all the teams. </p>\r\n<br />\r\n<p>\r\nAfterwards teams will be ranked according to the parameter that how quickly they reached the last clue. Then the first, second and the third prize will be displayed in a transparent box and teams will have to decode the lock to these boxes. The clue to these boxes is related to all the previous given clues. Top 3 teams will be given a chance to unlock these boxes and the team which will be able to unlock the box first will be declared as winner of the respective prize.</p>', '2018-01-31 20:15:15'),
(10, 'Augmented Reality W/S', 'TBA', 'TBA', 'TBA', 0, '**Description goes here**', '2018-01-31 20:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `user_1` text NOT NULL,
  `user_2` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`user_1`, `user_2`, `timestamp`) VALUES
('aishray9', 'thedoctor', '2018-01-31 20:41:37'),
('crimson_carnival', 'thedoctor', '2018-01-31 20:24:56'),
('crimson_carnival', 'uttu', '2018-01-31 20:23:57'),
('uttu', 'thedoctor', '2018-01-31 20:23:43'),
('aishray9', 'crimson_carnival', '2018-01-31 20:41:37'),
('uttu', 'crimson_carnival', '2018-01-31 20:22:59'),
('aishray9', 'uttu', '2018-01-31 20:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `hits_count`
--

CREATE TABLE `hits_count` (
  `uri` text NOT NULL,
  `ip_address` text NOT NULL,
  `username` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `branch` text NOT NULL,
  `year` int(1) NOT NULL,
  `sap` int(9) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `whatsapp` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `branch`, `year`, `sap`, `email`, `gender`, `contact`, `whatsapp`, `timestamp`) VALUES
('aishray9', 'c90df296683b711bc0d3efc7453ca791', 'Aishray', 'Suryawanshi', 'mech', 3, 500045657, 'test@gmail.com', 'male', '95965621626264', '65166464454', '2018-01-30 20:05:15'),
('crimson_carnival', '098f6bcd4621d373cade4e832627b4f6', 'Vyom', 'Maitreya', 'OSS', 3, 500045350, 'vyommaitreya@gmail.com', 'male', '9756180936', '9756180936', '2018-01-29 14:28:29'),
('thedoctor', '098f6bcd4621d373cade4e832627b4f6', 'John', 'Smith', 'CCVT', 4, 500046712, 'thedoctor@gmail.com', 'male', '9756180936', '9756180936', '2018-01-30 06:49:01'),
('uttu', '5f27dde10bfa8adadfd122521b0a01ef', 'Utkarsh', 'Agarwal', 'ape up', 3, 5000, 'uttu@gmail.com', 'male', '8181', '8181', '2018-01-30 15:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

CREATE TABLE `user_events` (
  `username` text NOT NULL,
  `event_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_events`
--

INSERT INTO `user_events` (`username`, `event_id`, `timestamp`) VALUES
('aishray9', 3, '2018-01-31 20:41:56'),
('aishray9', 6, '2018-01-31 20:41:50'),
('aishray9', 8, '2018-01-31 20:41:46'),
('crimson_carnival', 1, '2018-01-31 20:44:09'),
('crimson_carnival', 2, '2018-01-31 20:23:48'),
('crimson_carnival', 4, '2018-01-31 20:24:37'),
('crimson_carnival', 5, '2018-01-31 20:23:50'),
('crimson_carnival', 9, '2018-01-31 20:23:54'),
('thedoctor', 3, '2018-01-31 20:24:28'),
('thedoctor', 9, '2018-01-31 20:25:22'),
('uttu', 1, '2018-01-31 20:23:08'),
('uttu', 4, '2018-01-31 20:25:29'),
('uttu', 5, '2018-01-31 20:25:11'),
('uttu', 9, '2018-01-31 20:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`user_1`(40),`user_2`(40));

--
-- Indexes for table `hits_count`
--
ALTER TABLE `hits_count`
  ADD PRIMARY KEY (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`(40));

--
-- Indexes for table `user_events`
--
ALTER TABLE `user_events`
  ADD PRIMARY KEY (`username`(40),`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
