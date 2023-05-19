-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 19, 2023 at 02:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `CHAT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`CHAT_ID`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `USER_ID` int(11) NOT NULL,
  `CHAT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`USER_ID`, `CHAT_ID`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 1),
(3, 2),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `COMMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `POST_ID` int(11) NOT NULL,
  `CONTENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`COMMENT_ID`, `USER_ID`, `POST_ID`, `CONTENT`) VALUES
(1, 2, 4, 'Great'),
(2, 3, 4, 'Nice'),
(3, 5, 3, 'Right'),
(4, 2, 7, '+1'),
(5, 3, 4, 'W'),
(6, 2, 26, 'Right'),
(7, 2, 25, 'This man got it right'),
(8, 2, 26, 'Voluptate sed animi'),
(9, 2, 26, 'Aut labore incidunt'),
(10, 2, 26, 'Autem qui nisi dicta'),
(11, 2, 26, 'Quidem ullamco eaque'),
(12, 2, 26, 'Quidem ullamco eaque'),
(13, 2, 26, 'Consectetur placeat'),
(14, 2, 26, 'Great'),
(15, 2, 26, 'Great'),
(16, 2, 24, 'Nice'),
(17, 2, 26, 'Amet iure et necess'),
(18, 2, 21, 'nice'),
(19, 2, 21, 'Expedita aute qui an'),
(20, 2, 25, 'Ea incidunt delectu'),
(21, 2, 26, 'hossam'),
(22, 2, 27, 'hello'),
(23, 2, 1, 'Hello'),
(24, 1, 3, 'Great'),
(25, 5, 29, 'Right');

-- --------------------------------------------------------

--
-- Table structure for table `creates`
--

CREATE TABLE `creates` (
  `DATES` date NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `PAGE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creates`
--

INSERT INTO `creates` (`DATES`, `USER_ID`, `PAGE_ID`) VALUES
('2022-01-01', 1, 1),
('2022-01-02', 2, 1),
('2022-01-03', 3, 2),
('2022-01-04', 4, 2),
('2022-01-05', 5, 3),
('2023-05-18', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `PERSON1ID` int(11) NOT NULL,
  `PERSON2ID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`PERSON1ID`, `PERSON2ID`, `Time`) VALUES
(1, 3, '2023-05-16 09:30:07'),
(1, 5, '2023-05-18 21:00:00'),
(2, 1, '2023-05-17 21:00:00'),
(2, 4, '2023-05-16 09:30:07'),
(3, 4, '2023-05-16 09:30:07'),
(4, 5, '2023-05-16 09:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `friendrequests`
--

CREATE TABLE `friendrequests` (
  `REQEST_ID` int(11) NOT NULL,
  `RECEIVER_ID` int(11) NOT NULL,
  `SENDER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friendrequests`
--

INSERT INTO `friendrequests` (`REQEST_ID`, `RECEIVER_ID`, `SENDER_ID`) VALUES
(1, 2, 6),
(2, 2, 6),
(3, 2, 6),
(5, 2, 8),
(6, 2, 1),
(8, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `interacts`
--

CREATE TABLE `interacts` (
  `DATES` date NOT NULL,
  `INTERACTION` varchar(255) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `POST_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interacts`
--

INSERT INTO `interacts` (`DATES`, `INTERACTION`, `USER_ID`, `POST_ID`) VALUES
('2022-01-01', 'like', 1, 1),
('2022-01-02', 'comment', 2, 2),
('2022-01-03', 'share', 3, 3),
('2022-01-04', 'like', 4, 4),
('2022-01-05', 'comment', 5, 5),
('2023-05-18', 'comment', 1, 3),
('2023-05-18', 'like', 2, 1),
('2023-05-18', 'like', 2, 2),
('2023-05-18', 'like', 2, 3),
('2023-05-18', 'like', 2, 19),
('2023-05-18', 'comment', 2, 21),
('2023-05-18', 'like', 2, 22),
('2023-05-18', 'like', 2, 23),
('2023-05-18', 'like', 2, 24),
('2023-05-18', 'like', 2, 25),
('2023-05-18', 'comment', 2, 26),
('2023-05-18', 'comment', 2, 27),
('2023-05-19', 'share', 5, 3),
('2023-05-19', 'share', 5, 4),
('2023-05-19', 'share', 5, 6),
('2023-05-19', 'share', 5, 7),
('2023-05-19', 'share', 5, 16),
('2023-05-19', 'share', 5, 24),
('2023-05-19', 'comment', 5, 29);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MSG_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `CHAT_ID` int(11) NOT NULL,
  `MSG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MSG_ID`, `USER_ID`, `CHAT_ID`, `MSG`) VALUES
(6, 1, 1, 'Hello'),
(7, 2, 1, 'Did you hear about what happend ?'),
(8, 1, 1, 'No'),
(9, 3, 2, 'Bye'),
(10, 1, 2, 'See you !'),
(11, 5, 5, 'Eiusmod necessitatib'),
(12, 5, 5, 'How you doing ?'),
(13, 1, 5, 'Great'),
(14, 5, 5, 'Nice of you '),
(15, 5, 5, 'Nice'),
(16, 1, 5, 'Hey');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `PAGE_ID` int(11) NOT NULL,
  `COMPANY_EMAIL` varchar(255) NOT NULL,
  `PAGE_NAME` varchar(255) NOT NULL,
  `LIKES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`PAGE_ID`, `COMPANY_EMAIL`, `PAGE_NAME`, `LIKES`) VALUES
(1, 'company1@email.com', 'Page 1', 100),
(2, 'company2@email.com', 'Page 2', 51),
(3, 'company3@email.com', 'Page 3', 200),
(4, 'company4@email.com', 'Page 4', 75),
(5, 'company5@email.com', 'Page 5', 150),
(6, 'tugapubu@mailinator.com', 'FCDS', 0),
(7, 'tugapubu@mailinator.com', 'FCDS', 0),
(8, 'tugapubu@mailinator.com', 'FCDS', 0),
(9, 'tugapubu@mailinator.com', 'FCDS2', 0),
(10, 'tugapubu@mailinator.com', 'FCDS3', 0),
(11, 'tugapubu@mailinator.com', 'FCDS5', 4),
(12, 'nyco@mailinator.com', 'Alana Schmidt', 1),
(13, 'nyco@mailinator.com', 'Alana Schmidt', 0),
(14, 'nyco@mailinator.com', 'Alana Schmidt', 0),
(15, 'nyco@mailinator.com', 'Alana Schmidt', 0),
(16, 'nyco@mailinator.com', 'Alana Schmidt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `USER_ID` int(11) NOT NULL,
  `PHONE_NUM` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`USER_ID`, `PHONE_NUM`) VALUES
(1, '123-456-7890'),
(2, '234-567-8901'),
(3, '345-678-9012'),
(4, '456-789-0123'),
(5, '567-890-1234');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `POST_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `LIKES` int(11) NOT NULL,
  `CONTENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`POST_ID`, `USER_ID`, `TITLE`, `LIKES`, `CONTENT`) VALUES
(1, 1, 'Post 1', 12, ''),
(2, 1, 'Post 2', 6, ''),
(3, 2, 'Post 3', 23, 'Hello'),
(4, 2, 'Post 4', 15, 'Hey'),
(5, 3, 'Post 5', 8, 'Post'),
(6, 2, 'Voluptatem unde tene', 0, ''),
(7, 2, 'Voluptatem unde tene', 0, ''),
(8, 2, 'Voluptatem unde tene', 0, ''),
(9, 2, 'Voluptatem unde tene', 0, 'Et reiciendis quia a'),
(10, 2, 'Necessitatibus dolor', 0, 'Voluptatem dolores e'),
(11, 2, 'Necessitatibus dolor', 0, 'Voluptatem dolores e'),
(12, 2, 'Necessitatibus dolor', 0, 'Voluptatem dolores e'),
(13, 2, 'Elit rerum sed ea e', 0, 'Facilis eaque exerci'),
(14, 2, 'Elit rerum sed ea e', 0, 'Facilis eaque exerci'),
(15, 2, 'Elit rerum sed ea e', 0, 'Facilis eaque exerci'),
(16, 2, 'Elit rerum sed ea e', 0, 'Facilis eaque exerci'),
(17, 2, 'Elit rerum sed ea e', 0, 'Facilis eaque exerci'),
(18, 2, 'Elit rerum sed ea e', 1, 'Facilis eaque exerci'),
(19, 2, 'Elit rerum sed ea e', 1, 'Facilis eaque exerci'),
(20, 2, 'Elit rerum sed ea e', 5, 'Facilis eaque exerci'),
(21, 2, 'Elit rerum sed ea e', 19, 'Facilis eaque exerci'),
(22, 2, 'Elit rerum sed ea e', 18, 'Facilis eaque exerci'),
(23, 2, 'Omnis consectetur e', 3, 'Sint voluptas in pla'),
(24, 2, 'Quas nesciunt totam', 5, 'Qui quo elit eos a'),
(25, 2, 'Project', 5, 'hey'),
(26, 2, 'Tenetur magni aute q', 2, 'Delectus sunt quibu'),
(27, 2, 'Cum reprehenderit ne', 1, 'Eum aut esse laudan'),
(28, 5, 'Ut in et in veniam ', 0, 'Sapiente vel sit rep'),
(29, 5, 'Nice', 0, 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` int(11) NOT NULL,
  `FNAME` varchar(255) NOT NULL,
  `LNAME` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASS` varchar(32) NOT NULL,
  `ABOUT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `FNAME`, `LNAME`, `DOB`, `EMAIL`, `PASS`, `ABOUT`) VALUES
(1, 'John', 'Doe', '1990-05-15', 'johndoe@gmail.com', 'password123', NULL),
(2, 'Jane', 'Smith', '1995-08-21', 'janesmith@gmail.com', 'password456', NULL),
(3, 'Mike', 'Johnson', '1988-03-12', 'mikejohnson@gmail.com', 'password789', NULL),
(4, 'Sarah', 'Williams', '1992-11-30', 'sarahwilliams@gmail.com', 'passwordabc', NULL),
(5, 'Chris', 'Lee', '1985-07-04', 'chrislee@gmail.com', 'passworddef', NULL),
(6, 'Indigo Mcgowan', 'Meghan Powell', '1982-07-25', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Aliqua Omnis et ape'),
(7, 'Indigo Mcgowan', 'Meghan Powell', '1982-07-25', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Aliqua Omnis et ape'),
(8, 'Indigo Mcgowan', 'Meghan Powell', '1982-07-25', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Aliqua Omnis et ape'),
(9, 'Indigo Mcgowan', 'Meghan Powell', '1982-07-25', 'Pa$$w0rd!', 'Pa$$w0rd!', 'Aliqua Omnis et ape');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`CHAT_ID`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`USER_ID`,`CHAT_ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`COMMENT_ID`);

--
-- Indexes for table `creates`
--
ALTER TABLE `creates`
  ADD PRIMARY KEY (`DATES`,`USER_ID`,`PAGE_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `PAGE_ID` (`PAGE_ID`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`PERSON1ID`,`PERSON2ID`),
  ADD KEY `PERSON2ID` (`PERSON2ID`);

--
-- Indexes for table `friendrequests`
--
ALTER TABLE `friendrequests`
  ADD PRIMARY KEY (`REQEST_ID`);

--
-- Indexes for table `interacts`
--
ALTER TABLE `interacts`
  ADD PRIMARY KEY (`DATES`,`USER_ID`,`POST_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `POST_ID` (`POST_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MSG_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`PAGE_ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`USER_ID`,`PHONE_NUM`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`POST_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `CHAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `friendrequests`
--
ALTER TABLE `friendrequests`
  MODIFY `REQEST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MSG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `PAGE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `POST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`CHAT_ID`) REFERENCES `chat` (`CHAT_ID`);

--
-- Constraints for table `creates`
--
ALTER TABLE `creates`
  ADD CONSTRAINT `creates_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `creates_ibfk_2` FOREIGN KEY (`PAGE_ID`) REFERENCES `page` (`PAGE_ID`);

--
-- Constraints for table `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_1` FOREIGN KEY (`PERSON1ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`PERSON2ID`) REFERENCES `users` (`USER_ID`);

--
-- Constraints for table `interacts`
--
ALTER TABLE `interacts`
  ADD CONSTRAINT `interacts_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `interacts_ibfk_2` FOREIGN KEY (`POST_ID`) REFERENCES `post` (`POST_ID`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`CHAT_ID`) REFERENCES `chat` (`CHAT_ID`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
