-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 01:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystic`
--

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` tinyint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timeStamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `name`, `timeStamp`) VALUES
(1, 'games', 'current_timestamp()'),
(2, 'music', 'current_timestamp()'),
(3, 'movies', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` tinyint(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT 0,
  `timeStamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `userid`, `link`, `name`, `thumbnail`, `description`, `genre`, `downloads`, `timeStamp`) VALUES
(1, '2', 'uploads/games/files/undisputed.zip', 'Undisputed', 'uploads/games/thumbnails/undisputed.png', 'Undisputed formerly known as eSports Boxing Club (ESBC) is a boxing game developed by Steel City Interactive. It offers players an opportunity to experience authentic and strategic gameplay within the world of boxing. The game aims to capture the essence of the sport, focusing on realism and the strategic aspect of boxing rather than just throwing punches. This content was copied from https://www.g2a.com/undisputed-pc-steam-key-global-i10000338119001. It is protected by copyright, all rights reserved. If you want to use it, you are obligated to leave the link to the original source.', 'Action', 0, 'current_timestamp()'),
(2, '2', 'uploads/games/files/rollerdrone.zip', 'Rollerdrome', 'uploads/games/thumbnails/rollerdrone.png', 'Rollerdrome is lush. It’s incredibly stylish, taking cues from 1970s Hollywood sci-fi but with an attractive cel-shaded filter over every scene. Even better than its stunning visuals, Rollerdrome has smooth, precise mechanics that allow players to fall into a flow in every level. The game is all about gliding through the environments on rollerblades, picking up speed and doing tricks while dodging and shooting enemies, managing weapons and controlling time – and it all comes together in a thrilling dystopian bloodsport.\r\n\r\nIt’s a joy to dodge, dodge, dodge and then leap into the air, slow down time and take out the people shooting at you, refilling ammo and collecting health in the process. Meanwhile, an unsettling story of corporate greed unfolds naturally beneath the rollerblading bloodshed, keeping the stakes high. Rollerdrome was a sleeper hit of 2022, so if you’ve been napping on this one, now’s the time to wake up and play.', 'action', 0, 'current_timestamp()'),
(3, '1', 'uploads/games/files/overwatch2.zip', 'Overwatch 2', 'uploads/games/thumbnails/overwatch2.jpeg', 'Even though Blizzard has improved the onramp for new players this time around, Overwatch 2 still has a steep learning curve. Stick with it, though, and you’ll get to indulge in perhaps the best team shooter around. Overwatch 2 has a deceptively simple goal — stand on or near an objective and keep the other team away long enough to win. It’s much more complex in practice. To the untrained eye, matches may seem like colorful chaos, but Overwatch 2 has a deceptively simple goal — stand on or near an objective and keep the other team away long enough to win.\r\n\r\nIt’s much more complex in practice. Blizzard reduced the number of players on each team from six to five. That, along with across-the-board character tweaks, has made gameplay faster-paced and more enjoyable compared with the original Overwatch. There\'s a greater emphasis on individual impact, but you\'ll still need to work well with your teammates to secure a victory.', 'Action,Shooter', 0, 'current_timestamp()'),
(4, '1', 'uploads/games/files/fifa23.zip', 'Fifa 23', 'uploads/games/thumbnails/fifa23.jpg', '\r\nDescription\r\nEA SPORTS™ FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology that delivers even more gameplay realism, both the men’s and women’s FIFA World Cup™, the addition of women’s club teams, cross-play features, and more.\r\nSystem requirements\r\nWindows minimum requirements\r\nOS: 64-bit Windows 10\r\nProcessor (AMD): Ryzen 5 1600 or Equivalent\r\nProcessor (Intel): Core i5 6600k or Equivalent\r\nMemory: 8 GB\r\nGraphics card (AMD): Radeon RX 570 or Equivalent\r\nGraphics card (NVIDIA): GeForce GTX 1050 Ti or Equivalent\r\nDirectX: 12 Compatible video card or equivalent (feature level 12_0)\r\nOnline Connection Requirements: 512 KBPS or faster Internet connection\r\nHard-drive space: 100 GB\r\nWindows recommended requirements\r\nOS: 64-bit Windows 10\r\nProcessor (AMD): Ryzen 7 2700X or Equivalent\r\nProcessor (Intel): Core i7 6700 or Equivalent\r\nMemory: 12 GB\r\nGraphics card (AMD): Radeon RX 5600 XT or Equivalent\r\nGraphics card (NVIDIA): GeForce GTX 1660 or Equivalent\r\nDirectX: 12 Compatible video card or equivalent (feature level 12_0)\r\nOnline Connection Requirements: 512 KBPS or faster Internet connection\r\nHard-drive space: 100 GB', 'sports', 0, 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` tinyint(255) NOT NULL,
  `forumId` varchar(255) NOT NULL,
  `senderId` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `downloads` int(10) NOT NULL DEFAULT 0,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `userId`, `link`, `name`, `thumbnail`, `description`, `genre`, `downloads`, `timeStamp`) VALUES
(1, '2', 'uploads/movies/files/avatar.zip', 'Avatar', 'uploads/movies/thumbnails/avatar.jpeg', 'Jake Sully and Ney\'tiri have formed a family and are doing everything to stay together. However, they must leave their home and explore the regions of Pandora. When an ancient threat resurfaces, Jake must fight a difficult war against the humans.', 'Adventure', 0, '2023-04-23 23:03:20'),
(2, '1', 'uploads/movies/files/johnwick.zip', 'John wick', 'uploads/movies/thumbnails/John-wick.jpg', 'No way back, one way out. With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'action', 0, '2023-04-23 23:03:20'),
(3, '2', 'uploads/movies/movie/files/shazam2.zip', 'Shazam fury of the gods', 'uploads/movies/thumbnails/shazam2.jpg', 'The film continues the story of teenage Billy Batson who, upon reciting the magic word \"SHAZAM!\" is transformed into his adult Super Hero alter ego, Shazam.', 'fiction', 0, '2023-04-23 23:03:20'),
(4, '2', 'uploads/movies/files/blackpanther2.zip', 'black panther wakanda forever', 'uploads/movies/thumbnails/blackpanther2.jpg', 'Queen Ramonda (Angela Bassett), Shuri (Letitia Wright), M’Baku (Winston Duke), Okoye (Danai Gurira) and the Dora Milaje (including Florence Kasumba), fight to protect their nation from intervening world powers in the wake of King T’Challa’s death. As the Wakandans strive to embrace their next chapter, the heroes must band together with the help of War Dog Nakia (Lupita Nyong’o) and Everett Ross (Martin Freeman) and forge a new path for the kingdom of Wakanda.', 'fiction', 0, '2023-04-23 23:03:20');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `downloads` varchar(255) DEFAULT NULL,
  `timeStamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `forum` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userId`, `topicId`, `forum`, `message`, `img`, `timeStamp`) VALUES
(1, 5, 1, '1', 'I don\'t like the new game personally it sucks', '\"\"', '2023-04-21 22:37:35'),
(2, 6, 2, '2', 'Drake album is under par', NULL, '2023-04-21 22:40:43'),
(3, 6, 1, '1', 'I agree with you ', '\"\"', '2023-04-21 23:29:22'),
(4, 5, 2, '2', 'He should redo it', NULL, '2023-04-22 23:44:48'),
(5, 5, 10, '1', 'Say something ', NULL, '2023-04-22 23:45:27'),
(6, 5, 1, '1', 'Hi here', NULL, '2023-04-24 19:51:40'),
(7, 5, 12, '2', 'The ama music', NULL, '2023-04-24 20:00:01'),
(8, 5, 13, '3', 'The african movie\r\n', NULL, '2023-04-24 20:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `forumId` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `userId`, `forumId`, `timeStamp`) VALUES
(1, 'Thor new game sucks', '', 1, '2023-04-21 21:29:09'),
(2, 'Drakes new Album', '', 2, '2023-04-21 21:56:26'),
(10, 'working form', '5', 1, '2023-04-22 21:58:00'),
(11, 'Travis scott', '5', 2, '2023-04-22 22:02:03'),
(12, 'Amapiano', '5', 2, '2023-04-24 13:29:21'),
(13, 'The black panter', '5', 3, '2023-04-24 20:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profilePicture` varchar(255) DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `loginedIn` tinyint(1) DEFAULT NULL,
  `timeStamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profilePicture`, `admin`, `loginedIn`, `timeStamp`) VALUES
(1, 'admin', '$2y$10$n9pM4gMOrY0rVDrURZJDpe3vg98mjLzZqmnyRPZgVJTm8jCZu/fmO', 'thabangsoulo@gmail.com', 'uploads/profileImages/james.png', 1, NULL, '2023-04-02 22:16:16'),
(5, 'james', '$2y$10$n9pM4gMOrY0rVDrURZJDpe3vg98mjLzZqmnyRPZgVJTm8jCZu/fmO', 'james@gmail.com', NULL, 0, NULL, '2023-04-21 15:02:56'),
(6, 'thabo', '$2y$10$LTRZZQk64TsdXUIW5NhuvuP588nfLGWLuKNzbAar.UY9.g.payJoe', 'thabo@gmail.com', 'uploads/profileImages/james.png', 0, NULL, '2023-04-21 16:46:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` tinyint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` tinyint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` tinyint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
