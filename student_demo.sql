-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 08:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `a_id` int(25) NOT NULL,
  `a_user` text NOT NULL,
  `a_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`a_id`, `a_user`, `a_password`) VALUES
(1, 'rohan', '123456789'),
(2, 'rutvik', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_contact` bigint(10) NOT NULL,
  `u_degree` text NOT NULL,
  `u_college` text NOT NULL,
  `u_dur` varchar(20) DEFAULT NULL,
  `u_tech` text NOT NULL,
  `u_guide` text NOT NULL,
  `u_jdate` date NOT NULL,
  `u_NOC` text NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_name`, `u_email`, `u_contact`, `u_degree`, `u_college`, `u_dur`, `u_tech`, `u_guide`, `u_jdate`, `u_NOC`, `u_id`) VALUES
('Jayesh', 'jayesh@gmail.com', 9898125589, 'B.Tech(CL)', 'xyz', '2 Week', 'IOT', 'kamal patel', '2019-06-03', 'Yes', 1),
('JEEL RAJESHKUMAR JETHLOJA', 'jethlojarohan29@gmail.com', 9999999999, 'B.Tech(CE)', 'a', '2 Week', 'PHP', 'vishal patel', '2017-12-31', 'Yes', 2),
('Jethloja Rohan R.', 'jethlojarohan29@gmail.com', 9909194973, 'B.Tech(CE)', 'CSPIT', '8 Week', 'IOT', 'vishal patel', '2019-05-15', 'Yes', 3),
('chirag padaliya', 'chirag12090@gmail.com', 7575812090, 'B.Tech(IT)', 'deptar', '12 Week', 'Java', 'sidharth patel ', '2019-05-23', 'Yes', 4),
('Bhalani Yash ', 'yash@gmail.com', 9106827673, 'B.Tech(EC)', 'stan ford university', '6 Week', 'Web Development', 'Jitendra Bhimani', '2019-06-10', 'Yes', 5),
('Ishan Ladva', 'ishan@gmail.com', 7575845278, 'B.Tech(ME)', 'Charusat ', '8 Week', 'IOT', 'ronak patel', '2019-06-25', 'No', 6),
('jayesh fultariya', 'jayesh@gmail.com', 7425898989, 'B.Tech(EE)', 'LD Collage ', '4 Week', 'Java', 'Radhika Patel', '2019-05-13', 'No', 7),
('Saumya Shah', 'saha@gmail.com', 9898128248, 'B.Tech(CL)', 'DAIICT', '8 Week', 'Cloud Computing', 'Hardik Mandora', '2019-06-26', 'Yes', 8),
('Dharti Kaila', 'dharti@gmail.com', 9909012090, 'B.Tech(CL)', 'BVM ', '8 Week', 'GIS', 'Chirag Padaliya', '2019-06-17', 'Yes', 9),
('Prachi desai', 'prachi@gmail.com', 9033342248, 'B.Tech(IT)', 'GCET', '4 Week', 'Android', 'ronak patel', '2019-04-18', 'No', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `a_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
