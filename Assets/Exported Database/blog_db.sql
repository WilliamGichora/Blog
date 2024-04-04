-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'History', 'History and Government'),
(2, 'Science and Technology', 'Science and Tech'),
(3, 'Art and Music', 'All to do with art and Music'),
(4, 'Wildlife', 'Animals and plants'),
(5, 'Family', 'Family issues'),
(6, 'Food', 'Food Manenoz');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_feautured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `author_id`, `is_feautured`) VALUES
(1, 'Importance of Family', 'Family is the cornerstone of our lives, providing support, love, and guidance through our journey. Beyond just blood relations, family encompasses a sense of belonging and togetherness that shapes our identity and values. Research consistently highlights the positive impact of strong familial bonds on mental health, emotional well-being, and even physical health. In times of joy, our family celebrates with us, and in times of sorrow, they provide solace and strength. The importance of family lies in its ability to nurture individuals, instill values, and create a sense of belonging that transcends any other relationship.', 'family.jpeg', '2024-04-03 11:30:46', 2, 1),
(2, 'Conservation of wildlife', 'Taking care of animals and nature is a big deal. Wildlife conservation is all about making sure we don\'t mess up the balance of nature. Every animal plays a part in keeping things running smoothly, so when we protect them and their habitats, we\'re helping to keep the planet healthy for everyone, including us humans.', 'wildlife.jpeg', '2024-04-03 11:30:46', 1, 0),
(3, 'History Of Germany', 'Germany boasts a rich and complex history that has shaped its cultural identity and global influence. From the medieval era to the present day, Germany has been a pivotal player in European politics, economics, and culture. Key historical events such as the Holy Roman Empire, the Protestant Reformation, and both World Wars have left indelible marks on the country\'s landscape and psyche. Today, Germany stands as a symbol of resilience, progress, and unity, drawing on its historical experiences to forge a path towards a brighter future.', 'history.jpg', '2024-04-03 11:33:55', 2, 0),
(4, 'Current Trends in the Tech Space:', 'The tech industry is ever-evolving, with new trends emerging at a rapid pace. From artificial intelligence and machine learning to blockchain and virtual reality, technological innovations continue to redefine how we live, work, and interact. Companies are investing heavily in research and development to stay ahead of the curve and capitalize on emerging opportunities. Moreover, there is a growing emphasis on ethical considerations and sustainability in tech, reflecting broader societal concerns. As we navigate the digital landscape, staying informed about current trends is essential for both professionals and consumers alike.', 'Tech.jpeg', '2024-04-03 11:33:55', 2, 0),
(5, 'Learning Music Theory:', 'Ever wondered how music works? Music theory is all about understanding the nuts and bolts of music, like how notes fit together to make a song sound good. Whether you\'re a musician or just someone who loves music, learning music theory can help you appreciate and create music even more.', 'musicPic.jpeg', '2024-04-03 11:33:55', 2, 0),
(6, 'How to Travel in 2024:', 'Traveling in 2024 presents unique challenges and opportunities in light of evolving global circumstances. With ongoing advancements in technology and changes in travel protocols, planning ahead and staying informed are more important than ever. From health and safety precautions to navigating entry requirements and travel restrictions, thorough research and flexibility are key. Embracing sustainable travel practices and respecting local cultures and environments can enhance the travel experience while minimizing ecological footprint. By staying adaptable and mindful, travelers can make the most of their journeys in 2024 while contributing to a more responsible and inclusive tourism industry.', 'travel.jpg', '2024-04-03 11:35:28', 2, 0),
(7, 'The view of kenyans on the hustler regime', 'HUSTLER POLITICS The fact that William Ruto has actually managed to convince some Kenyans that referring to themselves (or being referred to) as ‘hustlers’ is somehow self-empowering - and positive - just tells you how dangerous this man can be if left unchecked. Some of us are just unable to use the word in polite conversation! our problem is not our leaders, but us, we most of time \'buy\' what we think is good for us but not what is right, chances for a good leader to trying to guide us the right way, to make it in politics are very very slim.', 'politicsimg.jpeg', '2024-04-03 11:35:28', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(47) NOT NULL,
  `lastname` varchar(47) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(1, 'William', 'Gichora', 'Gichman', 'gich@gmail.com', '$2y$10$APJdzvc0J2LWCE7Suu0HluqBjcyIJ3yy.xfflROl4aKJbADIRB/HW', '1712088211avatar-1.jpg', 0),
(2, 'Iroh', 'Zemini', 'irohz', 'iroh@gmail.com', '$2y$10$hA8efOVDbUFTRqdBV2RYdecfNjODH1p3oBw/hsDF3836/gDGYNHkC', '1712133617avatar-1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
