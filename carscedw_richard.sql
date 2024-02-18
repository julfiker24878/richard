-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2022 at 05:54 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carscedw_richard`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `des`, `year`) VALUES
(1, 'Just trust me.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered', '8');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `btn_text` varchar(100) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `description`, `btn_text`, `banner_image`, `status`) VALUES
(1, 'Hey, I am Julfiker.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 'LETS TALK', 'banner1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `posted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `des`, `blog_image`, `posted_at`) VALUES
(1, 'How to work from home', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'blog1.jpg', '2022-03-19 00:00:00'),
(2, 'Welcome to my page!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'blog2.jpg', '2022-03-19 00:00:00'),
(3, 'Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'blog3.jpg', '2022-03-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brandings`
--

CREATE TABLE `brandings` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandings`
--

INSERT INTO `brandings` (`id`, `brand_name`, `brand_image`) VALUES
(1, 'Herrywood Co', 'branding1.png'),
(2, 'FAST LANE', 'branding2.png'),
(3, 'GOLDEN', 'branding3.png'),
(4, 'RJ', 'branding4.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'September Watson', 'digufyzi@mailinator.com', 'Nam quis fugiat vol There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:29:44'),
(2, 'Ivana Buchanan', 'qiwasuze@mailinator.com', 'Voluptatem totam qui There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:20'),
(3, 'Quinn Holland', 'pafysak@mailinator.com', 'Ut dolor tenetur qui There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:26'),
(4, 'Iliana Mcintosh', 'tubeduq@mailinator.com', 'Deserunt eligendi om There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:31'),
(5, 'Colt Brown', 'wukezapeji@mailinator.com', 'Eiusmod est minus iu There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:37'),
(6, 'Sonia Salinas', 'pasolafu@mailinator.com', 'Non nulla sequi cumq There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:43'),
(7, 'Galena Robbins', 'macubu@mailinator.com', 'Magnam proident cul There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:30:49'),
(8, 'Allistair Booker', 'niliqezug@mailinator.com', 'In ex commodi mollit There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:31:26'),
(9, 'Micah Kidd', 'risi@mailinator.com', 'Tempora sequi nemo iThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:31:31'),
(10, 'Ignacia Stephens', 'kojiqina@mailinator.com', 'Voluptatem Veniam  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '2022-03-19 11:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `duration`, `company`, `designation`, `des`) VALUES
(1, '2017-2020', 'FACEBOOK', 'JUNIOR UX/UIX DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the'),
(2, '2012-2017', 'APPLE INC.', 'SENIOR PRODUCT DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the'),
(3, '2006-2012', 'TWITTER', 'ART DIRECTOR DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the'),
(4, '2017-2020', 'FACEBOOK', 'JUNIOR UX/UIX DESIGNER', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `phone`, `email`, `credit`) VALUES
(1, '+8801641806155', 'julfiker24878@gmail.com', '© Copyright 2022 Julfiker Ali. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_text`) VALUES
(1, 'Richard.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`) VALUES
(1, 'home', '#home'),
(2, 'about', '#about'),
(3, 'experience', '#experience'),
(4, 'projects', '#projects'),
(5, 'testimonials', '#testimonials');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `clients` varchar(255) NOT NULL,
  `completion` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `project_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `clients`, `completion`, `type`, `authors`, `budget`, `project_image`) VALUES
(1, 'Neuro', 'Ethan Hunt, John Doe', 'February 5th, 2020', 'Laravel', 'Julfiker Ali', '$12000', 'project1.jpg'),
(2, 'Unero', 'Ethan Hunt, John Doe', 'February 5th, 2020', 'WordPress', 'Logan Cee, Paul', '1000', 'project2.jpg'),
(3, 'Guino', 'Ethan Hunt, John Doe', 'February 5th, 2020', 'Raw PHP', 'Julfiker Ali', '2000', 'project3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `des`, `service_icon`, `status`) VALUES
(1, 'SAAS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys', 'logo-sass', 1),
(2, 'web design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys', 'code', 1),
(3, 'HTML', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys', 'logo-html5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percentage`) VALUES
(1, 'WEB DESIGN', '90'),
(2, 'PHOTOSHOP', '60'),
(3, 'MEDIA & CONTENT', '80');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `account_name`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'logo-facebook', '#', 1),
(2, 'Twitter', 'logo-twitter', '#', 1),
(3, 'Linkedin', 'logo-linkedin', '#', 1),
(4, 'Pinterest', 'logo-pinterest', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`) VALUES
(1, 'jidire@mailinator.com', '2022-03-19 11:25:56'),
(2, 'cetaryja@mailinator.com', '2022-03-19 11:26:10'),
(3, 'qajeho@mailinator.com', '2022-03-19 11:26:17'),
(4, 'bavel@mailinator.com', '2022-03-19 11:26:22'),
(5, 'xawo@mailinator.com', '2022-03-19 11:26:27'),
(6, 'xipuperoho@mailinator.com', '2022-03-19 11:26:33'),
(7, 'gulidohoc@mailinator.com', '2022-03-19 11:26:38'),
(8, 'giwepu@mailinator.com', '2022-03-19 11:26:44'),
(9, 'zefytim@mailinator.com', '2022-03-19 11:26:49'),
(10, 'siqater@mailinator.com', '2022-03-19 11:26:54'),
(11, 'joly@gmail.com', '2022-03-21 07:58:10'),
(12, 'hasan@gmail.com', '2022-03-23 09:47:47'),
(13, 'shekh@gmial.com', '2022-03-23 07:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `registered_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `email`, `role`, `password`, `profile_image`, `registered_at`) VALUES
(1, 'Julfiker Ali', 'julfiker24878@gmail.com', 1, '$2y$10$XGKT7wRC6eYh5TX65LxifezEHNGc9SkJjDiDiPvwYCNSdk.T7o0fC', '1.png', '2022-03-19 10:55:24'),
(4, 'Mr. Shekh Mithu', 'editor@gmail.com', 3, '$2y$10$IOhUCEFktSYAikXrInsqHeZfXXtVH/GwWLsSGAWMS6fpLQd/Nulxi', '4.jpg', '2022-03-19 11:01:58'),
(5, 'Mr. Khaled Islam', 'moderator@gmail.com', 2, '$2y$10$eiJWSLzT30u/AqR4b0eeb.iMqH/h3yVRIL.ux8MS5jYrhWAT6IIny', '5.jpg', '2022-03-19 11:02:57'),
(6, 'IK Imran Khan', 'subscriber@gmail.com', 0, '$2y$10$fRct3ABhJ2WFuPGJ70be7Od42JvMx8HXkhrtlr7YrFZ9USSmhCFmC', '6.jpg', '2022-03-19 11:03:27'),
(7, 'Tashya Mcknight', 'subscriber2@gmail.com', 0, '$2y$10$xhFxETjBiTxw6slC9.BTpeTa2t/3eJxfvVChhTmdokioEyJpwN.QW', '7.JPG', '2022-03-19 11:10:31'),
(8, 'Lavinia Stanton', 'subscriber3@gmail.com', 0, '$2y$10$6kor6Soon20lMP3UPEm1AOkl2LjRXJirMq.gsCK5vLLze72h3yYqy', '8.JPG', '2022-03-19 11:10:51'),
(9, 'Clare Garcia', 'subscriber4@gmail.com', 0, '$2y$10$iWaORtuMujMIwtnrXaHZKeWEdKzkcA0iBo5rV9om1ECBqDg2e2BAG', '9.JPG', '2022-03-19 11:11:36'),
(10, 'Jillian Hurley', 'subscriber5@gmail.com', 0, '$2y$10$f/I2/3cyiqznJyTtZDqCU.cic6Pbqu.0XOCxnq65d0OmRC178RIt.', '10.JPG', '2022-03-19 11:11:55'),
(11, 'Quinlan Mosley', 'subscriber6@gmail.com', 0, '$2y$10$X3ht66hCBWhluW.llbur0OGOxgX0wbXh5oJwRzkOSRbOakjNu8FIe', '11.JPG', '2022-03-19 11:12:46'),
(12, 'Melanie Henderson', 'subscriber7@gmail.com', 0, '$2y$10$RXGCeRoD1./NJdGgKY4AV.KA2EEDbGtiw8wOsbLvnH0ZqHzy2hbDG', '12.JPG', '2022-03-19 11:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `comment`, `name`, `designation`) VALUES
(1, 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer', 'Richard', 'Adobe sales manager'),
(2, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'Paul', 'CEO of Appler'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s', 'Joy Chowdhury', 'Web Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandings`
--
ALTER TABLE `brandings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brandings`
--
ALTER TABLE `brandings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
