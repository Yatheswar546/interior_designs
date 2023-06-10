-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 06:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interior`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `role` text DEFAULT NULL,
  `employeeid` text DEFAULT NULL,
  `joinedat` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `experience`, `role`, `employeeid`, `joinedat`) VALUES
(2, 'Harshi', 'harshi@gmail.com', '8345796120', 10, 'HR', '95a7640990a7f1c7ad90f447e346e64a', '2023-03-14 11:32:55'),
(3, 'Rishi', 'rishi@gmail.com', '+91 9491790227', 5, 'Fresher', '653b36609a2e98b39cf578599ab0cf17', '2023-03-14 11:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(1, 'Rishi', 'rishi@gmail', '7702929626', 'Hello!!!!!!!!!!', '2023-03-13 16:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `size` text NOT NULL,
  `image` longblob NOT NULL,
  `discription` text NOT NULL,
  `posted_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `size`, `image`, `discription`, `posted_at`) VALUES
(2, 'Hall2', '15*10*8', 0x35663832623665393064363231376233373739383565353462336139636262342e6a7067, 'U4_9ARCHITECTS is best add doing all kind of interior works', '2023-03-18 22:25:58'),
(3, 'Hall3', '10*7*10', 0x39663536666666326433306561356637366233353738633239303935396665392e6a7067, 'U4_9ARCHITECTS is best add doing all kind of interior works', '2023-03-18 22:26:17'),
(4, 'Hall4', '8*7*9', 0x65323838633864386162663965633334396132663130366430633661333435382e6a7067, 'U4_9ARCHITECTS is best add doing all kind of interior works', '2023-03-18 22:26:55'),
(5, 'Bedroom1', '8*7*9', 0x37343863633031383862643330386665346164653636313863376265633932652e6a7067, 'U4_9ARCHITECTS is best add doing all kind of interior works', '2023-03-18 22:27:18'),
(6, 'Trending Hall', '23*20', 0x63343364356463353435326466636633356633653132646462623030303837612e6a7067, 'Brief description about design. ', '2023-03-19 16:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `dimensions` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `type`, `dimensions`, `image`, `description`, `price`, `createdat`) VALUES
(1, 'Modular Kitchen1', 'Modular Kitchen', '20*15*10', 0x66623537393063653261363762323038383665386334366363663561333865382e6a7067, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aspernatur quas? Blanditiis, repellendus reiciendis ullam magni reprehenderit dolor tenetur exercitationem velit, similique libero eveniet ex iure sequi vel quasi unde.                 Ratione eveniet laboriosam ipsum rem, adipisci, vero commodi architecto odio aliquam maiores dolore fuga. Voluptates ipsum distinctio nulla, ullam officiis et, soluta iste possimus dolores cum itaque suscipit molestiae nisi.                 Saepe dolor labore, minus ipsum iure quaerat a repudiandae totam, nesciunt iusto non neque? Officia velit, nostrum id corrupti obcaecati incidunt tempora quia sapiente eius laboriosam? Incidunt nostrum sunt commodi?', '$55.00', '2023-03-18 18:40:28'),
(2, 'Modular Kitchen2', 'Modular Kitchen', '20*15*10', 0x35663832623665393064363231376233373739383565353462336139636262342e6a7067, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aspernatur quas? Blanditiis, repellendus reiciendis ullam magni reprehenderit dolor tenetur exercitationem velit, similique libero eveniet ex iure sequi vel quasi unde.                 Ratione eveniet laboriosam ipsum rem, adipisci, vero commodi architecto odio aliquam maiores dolore fuga. Voluptates ipsum distinctio nulla, ullam officiis et, soluta iste possimus dolores cum itaque suscipit molestiae nisi.                 Saepe dolor labore, minus ipsum iure quaerat a repudiandae totam, nesciunt iusto non neque? Officia velit, nostrum id corrupti obcaecati incidunt tempora quia sapiente eius laboriosam? Incidunt nostrum sunt commodi?', '$90.00', '2023-03-18 18:41:04'),
(3, 'Foyer Designs1', 'Foyer Designs', '20*15*10', 0x35663832623665393064363231376233373739383565353462336139636262342e6a7067, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aspernatur quas? Blanditiis, repellendus reiciendis ullam magni reprehenderit dolor tenetur exercitationem velit, similique libero eveniet ex iure sequi vel quasi unde.                 Ratione eveniet laboriosam ipsum rem, adipisci, vero commodi architecto odio aliquam maiores dolore fuga. Voluptates ipsum distinctio nulla, ullam officiis et, soluta iste possimus dolores cum itaque suscipit molestiae nisi.                 Saepe dolor labore, minus ipsum iure quaerat a repudiandae totam, nesciunt iusto non neque? Officia velit, nostrum id corrupti obcaecati incidunt tempora quia sapiente eius laboriosam? Incidunt nostrum sunt commodi?', '$150.00', '2023-03-18 18:41:55'),
(4, 'Kids Bedroom 1', 'kids Bedroom', '20*15*10', 0x37343863633031383862643330386665346164653636313863376265633932652e6a7067, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, aspernatur quas? Blanditiis, repellendus reiciendis ullam magni reprehenderit dolor tenetur exercitationem velit, similique libero eveniet ex iure sequi vel quasi unde.                 Ratione eveniet laboriosam ipsum rem, adipisci, vero commodi architecto odio aliquam maiores dolore fuga. Voluptates ipsum distinctio nulla, ullam officiis et, soluta iste possimus dolores cum itaque suscipit molestiae nisi.                 Saepe dolor labore, minus ipsum iure quaerat a repudiandae totam, nesciunt iusto non neque? Officia velit, nostrum id corrupti obcaecati incidunt tempora quia sapiente eius laboriosam? Incidunt nostrum sunt commodi?', '$200.00', '2023-03-18 18:42:21'),
(5, 'Foyer Design', 'Foyer Designs', '8*7', 0x62636132366233353135316132333234653364623865383661653434373731612e6a7067, 'A fancy rocking chair.', '$30.00', '2023-03-19 11:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `typesofservice`
--

CREATE TABLE `typesofservice` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `createdat` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typesofservice`
--

INSERT INTO `typesofservice` (`id`, `name`, `image`, `createdat`) VALUES
(1, 'Modular Kitchen', 0x63386566626435653232366334303237636432343732343338313637306165662e706e67, '2023-03-19 07:28:27'),
(2, 'Foyer Designs', 0x32653464653836643766633939336333373733663332393832313232633233612e706e67, '2023-03-19 07:28:58'),
(3, 'Crpokery Units', 0x36323435306536363965636634633937303331386539626533396262336636652e706e67, '2023-03-19 07:29:47'),
(4, 'Space Saving Furniture', 0x31643062393764656533333638336435333761323631643739393932653139392e706e67, '2023-03-19 07:30:06'),
(5, 'TV Units', 0x66363731306634386438646134626131303832636534626439333232373731322e706e67, '2023-03-19 07:30:23'),
(6, 'Study Tables', 0x31666133396461303532646433666565363264356633643036633637656237322e706e67, '2023-03-19 07:39:45'),
(7, 'False Ceiling', 0x33386633323630366436613563623539643232663863613064313837663961332e706e67, '2023-03-19 10:38:36'),
(8, 'Lights', 0x66323731376638663834383836393364356630386438313335613631643633352e706e67, '2023-03-19 10:38:56'),
(9, 'Wallpaper', 0x61633062333333613836363961626636396563633832353462366162646233612e706e67, '2023-03-19 10:39:47'),
(10, 'Wallpaint', 0x38623165323963313339316634306564356531383331643864633334616536662e706e67, '2023-03-19 10:40:06'),
(11, 'Bathroom', 0x63653165373761316636346539633664653436363732643038343133353864342e706e67, '2023-03-19 10:40:30'),
(12, 'Pooja Unit', 0x36323136376335616564336264313561333366366532383833643831386439392e706e67, '2023-03-19 10:41:02'),
(13, 'Storage and Wardrobe', 0x65393562373362383563623861323831376238313431303236613834626433352e706e67, '2023-03-19 10:42:10'),
(14, 'Movable Furniture', 0x31643062393764656533333638336435333761323631643739393932653139392e706e67, '2023-03-19 10:43:05'),
(15, 'kids Bedroom', 0x65633632306137356235616564363063336366326666613330663933643262632e706e67, '2023-03-19 10:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Goharshitha Madarapu', 'goharshitha.madarapu@gmail.com', '22eea0261b348c6edaac4307901af5c4', 'user'),
(2, 'rishika', 'rishika@gmail.com', '63d9354bd5fcd35c9b9a92902452de45', 'admin'),
(3, 'yathi', 'yathi@gmail.com', '0e73463a69a62dc4ff207f85127a3260', 'user'),
(4, 'Karthik ', 'karthik@gmail.com', '02adcec2263d2127269fcd769c33f029', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typesofservice`
--
ALTER TABLE `typesofservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `typesofservice`
--
ALTER TABLE `typesofservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
