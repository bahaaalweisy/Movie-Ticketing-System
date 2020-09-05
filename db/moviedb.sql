-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2020 at 04:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `movieId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) NOT NULL,
  `Rated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movieId`, `Name`, `Genre`, `Director`, `Description`, `image`, `imdb`, `video_url`, `Rated`) VALUES
(14, 'Sonic the Hedgehog 2020', 'Action', 'Jeff Fowler', 'After discovering a small, blue, fast hedgehog, a small-town police officer must help it defeat an evil genius who wants to do experiments on it. ', 'sonic.jpg', '6.9', 'Sonic The Hedgehog (2020).mp4', 'PG-13'),
(15, 'Fantasy Island 2020', 'Drama', ' Jeff Wadlow', 'A horror adaptation of the popular \'70s TV show about a magical island resort. ', 'index.jpg', '4.6', 'y2mate.com - FANTASY ISLAND.mp4', 'PG-18'),
(16, 'Dolittle 2020', 'Action', ' Stephen Gaghan', 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets. ', '0000_348220_highres.jpg', '5.5', 'y2mate.com - Dolittle - Official Trailer_FEf412bSPLs_1080p.mp4', 'PG-13'),
(17, 'Brahms: The Boy II 2020', 'Drama', ' William Brent Bell', 'After a family moves into the Heelshire Mansion, their young son soon makes friends with a life-like doll called Brahms. ', 'brahms-the-boy-.jpg', '4.3', 'Brahms_ The Boy s.mp4', 'PG-18'),
(18, 'Elcano & Magallanes: First Trip Around the World 2019', 'Adventure', ' Ángel Alonso', 'Story of one of the most incredible adventures ever happened: the first trip around the world. ', 'a5f9494c6-1.jpg', '4.1', 'around the World - Official Trailer (English)_WjNptclqr0c_1080p.mp4', 'PG-13'),
(19, 'Emma 2020', 'Drama', ' Autumn de Wilde', 'In 1800s England, a well meaning but selfish young woman meddles in the love lives of her friends.', 'emma-movie.jpg', '6.8', 'y2mate.com - EMMA. - Official Trailer [HD] - In Theaters February 21_qsOwj0PR5Sk_1080p.mp4', 'PG-18'),
(22, 'Little Women 2019', 'Drama', 'Greta Gerwig', 'Jo March reflects back and forth on her life, telling the beloved story of the March sisters - four young women each determined to live life on their own terms. ', 'little.jpg', '8.0', 'Little Women _ Official Trailer _ In Cinemas Januar080p.mp4', 'PG-18');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `fname`, `rating`) VALUES
(5, 'bahaa', 'The Call of the Wild 2020', '5'),
(6, 'bahaa', 'Dolittle 2020', '5'),
(7, 'cena', 'frozen', '5'),
(8, 'bahaa alwaisi', 'Dolittle 2020', '5'),
(9, 'bahaa', 'frozen', '5'),
(10, 'bahaa alwaisi', 'Dolittle 2020', '5'),
(11, 'anas', 'frozen', '5'),
(12, 'bahaa', '7', '5'),
(13, 'bahaa', 'Fantasy Island 2020', '5'),
(14, 'bahaa', 'Sonic the Hedgehog 2020', '5');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `seat` longtext NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `movie`, `seat`, `user`) VALUES
(124, 'Dolittle 2020', 'A1', 'bahaa alwaisi'),
(125, 'frozen', 'A4', 'bahaa alwaisi'),
(126, 'Sonic the Hedgehog 2020', 'C1', 'alweisyb@gmail.com'),
(127, 'Fantasy Island 2020', 'C1', 'alwisin23@gmail.com'),
(128, 'Dolittle 2020', 'H4', 'Ahmad'),
(129, 'Sonic the Hedgehog 2020', 'C1', 'alweisyb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `showorder`
--

CREATE TABLE `showorder` (
  `showOrderId` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showorder`
--

INSERT INTO `showorder` (`showOrderId`, `date`, `timeslot`, `theater`, `movieName`, `seat`, `user`) VALUES
(47, '2020-04-16', '7:00  - 9:00 PM', 'BlockBluster', 'Dolittle 2020', '-1', 'bahaa alwaisi'),
(48, '2020-04-01', '02:30 PM', 'Balaka Cineplex', 'frozen', '-1', 'anas'),
(49, '2020-04-23', '9.00', 'Shamoly Cineplex', 'Sonic the Hedgehog 2020', '-1', 'bahaa alwaisi'),
(50, '2020-04-16', '02:30 PM', 'Movie House Cinemas', 'Sonic the Hedgehog 2020', '-1', 'alwisin23@gmail.com'),
(51, '2020-04-07', '02:30 PM', 'Movie House Cinemas', 'Dolittle 2020', '-1', 'alwisin23@gmail.com'),
(52, '2020-04-09', '7:00  - 9:00 PM', 'Movie House Cinemas', 'Dolittle 2020', '-1', 'alwisin23@gmail.com'),
(53, '', '11.00', 'Basundhara Cineplex', 'Sonic the Hedgehog 2020', '50', 'bahaa alwaisi'),
(54, '2020-05-20', '7:00  - 9:00 PM', 'prime cienma', 'Sonic the Hedgehog 2020', '-1', '70522@.com');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `theaterId` int(11) NOT NULL,
  `theaterName` varchar(255) DEFAULT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`theaterId`, `theaterName`, `seat`) VALUES
(1, 'Basundhara Cineplex', 50),
(2, 'BlockBluster', 45),
(3, 'Balaka Cineplex', 60),
(4, 'Shamoly Cineplex', 70),
(5, 'prime cienma', 0),
(6, 'irbid prime cienma', 0),
(7, 'prime cienma', 0),
(8, 'irbid prime cienma', 0),
(9, 'irbid prime cienma', 0),
(10, 'irbid prime cienma', 0),
(11, 'prime cienma', 0),
(12, 'Movie House Cinemas', 0),
(13, 'Movie House Cinemas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `timeslotId` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`timeslotId`, `time`) VALUES
(1, '11.00'),
(2, '2.00'),
(3, '5.00'),
(4, '8.00'),
(5, '9.00'),
(6, '02:30 PM'),
(7, '7:00  - 9:00 PM'),
(8, '02:30 PM'),
(9, '02:30 PM'),
(10, '02:30 PM'),
(11, '02:30 PM'),
(12, '9:00 - 11:00 PM'),
(13, '2:00 - 5:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL,
  `forgotten_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `status`, `forgotten_answer`) VALUES
(1, 'admin', '1998bahaa', 101, 'ahmad'),
(3, 'user', '123456789', 202, ''),
(6, 'bahaa', '31619001069h', 202, 'anas'),
(7, 'momo', '123456789', 202, ''),
(8, 'ahmad', '123456789', 202, 'anas'),
(9, 'cena', '1998b', 202, ''),
(10, 'anas', '1998@bahaa', 202, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showorder`
--
ALTER TABLE `showorder`
  ADD PRIMARY KEY (`showOrderId`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theaterId`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`timeslotId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `showorder`
--
ALTER TABLE `showorder`
  MODIFY `showOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `theaterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `timeslotId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
