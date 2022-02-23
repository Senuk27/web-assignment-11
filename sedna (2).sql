-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 03:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sedna`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedpost`
--

CREATE TABLE `feedpost` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(2048) NOT NULL,
  `nearest_city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedpost`
--

INSERT INTO `feedpost` (`id`, `name`, `location`, `nearest_city`, `district`, `province`, `distance`, `description`, `image`) VALUES
(1, 'Harindi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.87988625684!2d79.8321774262083!3d7.2442569663299405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e94e1ff72b8f%3A0x701643d0aec2d650!2sNegombo%20Beach!5e0!3m2!1sen!2slk!4v1645357056388!5m2!1sen!2slk', 'Negombo', 'Gampaha', 'Western Province', '12 Km', 'I captured these photos when I was travelling at Negombo coastal\r\narea. I was so sorry to see this crisis. It does not matter how much we\r\nboast about our country\'s natural beauty if we cannot take a single\r\nstep in right direction to make things better.\r\n', 'noaa-lFak_kwlZBQ-unsplash.jpg'),
(2, 'Dewni', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.411178550312!2d79.8532666261709!3d6.848243920813774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b0f757d621f%3A0xd9189e54ea38dfbe!2sDehiwala%20Beach!5e0!3m2!1sen!2slk!4v1645357521516!5m2!1sen!2slk', 'Dehiwala', 'Colombo', 'Western Province', '8 Km', 'These photos were taken while I was returning to my campus. It\'s near the Dehiwala beach, just opposite to the ‘White Movie Theater’. It\'s really sad to see such a polluted beach like this, which is supposed to be beautiful and if someone can organize a cleaning campaign to clean this area it will be priceless.    ', 'dehiwala.jfif'),
(3, 'Chamali', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63491.36668303058!2d80.39204772861446!3d5.965729743712918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115eb9ed0cd65%3A0x2ae1016d4e7faf93!2sWeligama%20Bay!5e0!3m2!1sen!2slk!4v1645358359902!5m2!1sen!2slk', 'Weligama', 'Matara', 'Southern Province', '5 Km', 'This unfortunate situation has to be seen at the weligama bay ( in front of the People\'s bank tower). Please someone who lives around there, take a look before things get worse.   ', 'naja-bertolt-jensen-frWkCQZhe-I-unsplash.jpg'),
(4, 'Asela', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31707.09106493203!2d79.93362021491043!3d6.598809944580102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae237a6aab4fa25%3A0xe685fc7dbe356e1a!2sKalutara%20Beach!5e0!3m2!1sen!2slk!4v1645358917045!5m2!1sen!2slk', 'Kalutara', 'Kalutara', 'Western Province', '6 Km', 'There is a lot of garbage floating on the Kaluthara beach near the JMC building. I got to know that a lot of fish is dying due to this pollution now.   I think more support from the volunteers is needed at this moment to save this area. It’s necessary to take some serious actions to avoid this kind of situations.  ', 'naja-bertolt-jensen-FxnqdmKBJps-unsplash.jpg'),
(5, 'Senuk', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4344777228043!2d79.86083771472009!3d6.838399495057879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b1097b2d5a1%3A0x6d72bfb938a8f677!2sMount%20Lavinia%20Beach!5e0!3m2!1sen!2slk!4v1645359247342!5m2!1sen!2slk', 'Mount Lavinia', 'Colombo', 'Western Province', '9 Km', 'While I was traveling on train, I saw that there was a lot of garbage in the bins at the Mount Lavinia beach. But the thing is those bins were full. And also, there was garbage all over the beach. The most heart-broken situation was, birds were eating those. If someone can look into this, it would be great.  ', 'birds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `location` varchar(200) NOT NULL,
  `feed_no` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `description`, `location`, `feed_no`, `image`) VALUES
(1, 'Isuru', 'Thanks to sedna i noticed that the weligama bay has been polluted with the garbage and oil marks on it.therefore with the help of  nawala metro leo club we  cleaned the entire bay within a short period of time .and i am happy to say we were able to achive our all cleaning program targets  successfully.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63491.36668303058!2d80.39204772861446!3d5.965729743712918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115eb9ed0cd65%3A0x2ae1016d4e7faf9', '3', 'Screenshot_20220220-134548_Instagram.jpg'),
(2, 'Arosha', 'we are Rotaract club of negambo and  we saw your last unfortunate post about negambo bay. immediately we took some steps to avoid the relevant incident. with the urgent actions we managed to minimize the coral reef damage.so our next mission is to replant coral reefs and stop the beach erosion. therefore we need your  support to turn this into a reality. we already got the support from SL navy but still we need your support to do this if someone is interesting about this please contact us : 0777', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.87988625684!2d79.8321774262083!3d7.2442569663299405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e94e1ff72b8f%3A0x701643d0aec2d65', '1', 'Screenshot_20220220-134607_Instagram.jpg'),
(3, 'Nishanthi', 'I organized a beach cleaning programme at Negombo coastal area yesterday\r\nwith my family members. I felt so sorry seeing a post in Sedna Feed and I thought of organizing a beach cleaning campaign at that beach side. I am so proud to post this in Sedna Contribution since I have the feeling that I fulfilled\r\nmy responsibility to a certain extent towards mother nature. I hope this will be an encouragement for all who wish to bring a change to the world.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.87988625684!2d79.8321774262083!3d7.2442569663299405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e94e1ff72b8f%3A0x701643d0aec2d65', '1', 'Screenshot_20220220-134637_Instagram.jpg'),
(4, 'Wasantha', 'We were able to organize a beach cleaning campaign at the beach of Weligama. We thought of doing this by seeing a post in Sedna Feed Here you can see what we collected. Do you think that they are supposed to be here or somewhere else? ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63491.36668303058!2d80.39204772861446!3d5.965729743712918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115eb9ed0cd65%3A0x2ae1016d4e7faf9', '3', 'IMG-3101.PNG'),
(5, 'Sampath', 'Yesterday was my wife\'s birthday and she was thinking of doing something meaningful and useful. With that desire we came up with the idea to clean a polluted beach near us. Here I have uploaded some photographs of what we did.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31707.09106493203!2d79.93362021491043!3d6.598809944580102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae237a6aab4fa25%3A0xe685fc7dbe356e1', '4', 'Screenshot_20220220-134515_Instagram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `Email`, `Password`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'Kate', 'Rowlin', 'dewniseneviratne@gmail.com', 'dewni@2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedpost`
--
ALTER TABLE `feedpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedpost`
--
ALTER TABLE `feedpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
