-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 07:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge14`
--

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `id` int(10) UNSIGNED NOT NULL,
  `url_cover` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `subtitle` varchar(100) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `phone` int(32) DEFAULT NULL,
  `location` varchar(32) DEFAULT NULL,
  `service_product` varchar(16) DEFAULT NULL,
  `product1_photo` varchar(255) DEFAULT NULL,
  `product1_desc` text DEFAULT NULL,
  `product2_photo` varchar(255) DEFAULT NULL,
  `product2_desc` text DEFAULT NULL,
  `product3_photo` varchar(255) DEFAULT NULL,
  `product3_desc` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `tweeter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`id`, `url_cover`, `title`, `subtitle`, `about`, `phone`, `location`, `service_product`, `product1_photo`, `product1_desc`, `product2_photo`, `product2_desc`, `product3_photo`, `product3_desc`, `description`, `linkedin`, `facebook`, `tweeter`, `google_plus`) VALUES
(1, 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1362&q=80', 'Трафика', 'Coffee Shop', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni debitis, natus id reprehenderit at beatae tempora ex cumque quibusdam eveniet distinctio assumenda mollitia nobis impedit libero dignissimos rem vero praesentium quidem. Enim asperiores, beatae eveniet repudiandae dignissimos illo eos provident cum voluptatibus minima repellendus consequatur autem quam praesentium, voluptatem blanditiis earum, architecto perferendis dicta quas voluptas. Eius, recusandae voluptatem! Voluptates cupiditate officia sed quia tempore porro provident aut. Mollitia aspernatur nam vel est in atque placeat necessitatibus non. Adipisci, aspernatur. Dolorum consequuntur dolorem ipsa, recusandae voluptate reiciendis adipisci tempora, illum possimus vitae esse iusto quidem accusantium totam earum asperiores praesentium!', 40111222, 'Скопје', 'Продукти', 'https://images.unsplash.com/photo-1450024529642-858b23834369?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=863&q=80', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In accusantium necessitatibus ipsum voluptas. Possimus ipsam modi laborum accusantium aliquam animi voluptate atque, sequi tenetur similique iste vel error, eaque placeat dicta non voluptas rem velit nulla! Repellendus ratione laborum saepe adipisci quam consectetur tempora magnam reiciendis, illo facilis, fugiat temporibus.', 'https://globalassets.starbucks.com/assets/02e313dd98204b7380730e96f8d50c38.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In accusantium necessitatibus ipsum voluptas. Possimus ipsam modi laborum accusantium aliquam animi voluptate atque, sequi tenetur similique iste vel error, eaque placeat dicta non voluptas rem velit nulla! Repellendus ratione laborum saepe adipisci quam consectetur tempora magnam reiciendis, illo facilis, fugiat temporibus.', 'https://images.unsplash.com/photo-1506372023823-741c83b836fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In accusantium necessitatibus ipsum voluptas. Possimus ipsam modi laborum accusantium aliquam animi voluptate atque, sequi tenetur similique iste vel error, eaque placeat dicta non voluptas rem velit nulla! Repellendus ratione laborum saepe adipisci quam consectetur tempora magnam reiciendis, illo facilis, fugiat temporibus.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, non alias ullam aliquam, architecto ipsam voluptas labore deleniti vero sint et. Autem consequuntur, quia impedit nam pariatur nisi fuga a quo natus modi quae minima omnis laudantium tempore quis, aspernatur, maiores facilis quos quibusdam quam dolorum architecto corporis mollitia? Libero.', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://play.google.com/store/apps/details?id=com.google.android.apps.plus&hl=en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formdata`
--
ALTER TABLE `formdata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
