-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 06:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_planner1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `checkin_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_place`
--

CREATE TABLE `comment_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_place`
--

INSERT INTO `comment_place` (`id`, `place_id`, `user_id`, `rating`, `comment`, `date`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, 'This was a fun climb up that was worth it for the climb alone, not including the great views you get from the top! It might be a bit challenging for some people nearing the top of the climb. ', NULL, '2018-06-12 02:04:45', NULL),
(5, 4, 3, NULL, 'Well worth the time. The views are outstanding through the jungle to the mountains. The age of the area, and history is haunting.', NULL, '2018-06-12 03:15:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_property`
--

CREATE TABLE `comment_property` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_property`
--

INSERT INTO `comment_property` (`id`, `property_id`, `user_id`, `rating`, `comment`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 3, NULL, 'Navinda is a great host and will go out of his way in his hospitality. I’d recommend staying at Navinda’s place anytime!', NULL, '2018-06-12 04:27:20', NULL),
(3, 2, 1, NULL, 'Very easy and comfortable stay at Navinda’s place. He was great at communicating details about how to find the place - very proactive and precise. The view was spectacular and the breakfasts were tasty and filling. It’s an easy walk to Kandy’s town center. Definitely recommended!', NULL, '2018-06-12 04:55:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(56, '2014_10_12_000000_create_users_table', 1),
(57, '2014_10_12_100000_create_password_resets_table', 1),
(58, '2018_05_03_072454_create_bookings_table', 1),
(59, '2018_05_03_072512_create_faqs_table', 1),
(60, '2018_05_03_072542_create_comment_place_table', 1),
(61, '2018_05_03_072614_create_places_table', 1),
(62, '2018_05_03_075130_create_properties_table', 1),
(63, '2018_05_03_075210_create_comment_property_table', 1),
(64, '2018_05_03_075238_create_tourplans_table', 1),
(65, '2018_05_24_053719_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `title`, `description`, `time`, `tags`, `photo1`, `photo2`, `admin_id`, `created_at`, `updated_at`) VALUES
(4, 'ELLA', 'Ella, often described as ‘’lonely planet’’ and ‘’waterfall’’ is a congested town located in Sri Lanka. Ella is pure natural beauty, with its waterfalls, greenery, and hills it is just jaw-dropping. It has views that one hasn’t witnessed before, scenes one hasn\'t seen before and nature one hasn\'t felt before. Ella is the perfect place to go to if one wants to refresh the brain. It has many famous places and has been under the attention of tourist for a decent amount of time now.', NULL, 'waterfalls, nature, mountain view', '1528731293ella.jpg', NULL, NULL, '2018-06-11 10:04:53', NULL),
(5, 'MIRISSA', 'Mirissa is a small heaven located in the South Coast of Sri Lanka, only about 200km away from the Equator. The small town is ever-famous for it\'s natural beaches which are mostly untouched by any man-made modernization, which makes it well-loved and very sought after when it comes to holidays and vacations, even—honeymoons.\r\n\r\nMirissa\'s sandy beaches gives life to your fantasies of a tropical heaven, the secluded crescent shaped beach is like a reclusive hidden Island that is a hideaway for many. The town\'s sunsets and sunrises are said to be one of the finest ever, the peace that surrounds people spending time in the hotels set aback from the actual beach is quiet unmeasured. The gentle waves of the ocean crashing and building into a crescendo, coconuts falling and birds chirping. Mirissa is a tourist heaven and must not be missed!', NULL, 'beach, nature, whale watching', '1528739608mirissa-beach.jpg', NULL, NULL, '2018-06-11 12:23:28', NULL),
(6, 'LITTLE ADAM\'S PEAK', 'Ella in Sri Lanka is a very well known worldwide for it’s breathtaking view and scenery, Little Adam’s Peak is just one of it. The eye catching, jaw dropping and conspicuous peak is the one not to miss, Situated in Ella, Sri Lanka, it has been attracting tourists for a long time now. The reason for its popularity is the amazing view that never fails to attract and impress the visitors.\r\n\r\nIt may be a long journey, but it helps the travellers interact with nature in a different way. Little Adam’s Peak is visited mainly because of the great hiking experience it gives to its climbers. It never falls short of beauty. It is filled with greenery and beautiful trees and plants. Resorts and hotels have been built to serve the climbers that may be tired after the long walk. The walk may be long, but once one reaches the top, it is just worth the struggle. The path is straight making the walk less complicated.', NULL, 'nature, waterfalls, mountain view', '1528739730little-adams-peak.jpg', NULL, NULL, '2018-06-11 12:25:30', NULL),
(7, 'DAMBULLA', 'Sri Lanka is rich and overflowing when it comes to colourful history, many came and went, the essence of the dominance still lingers about in the cities and buildings. From Portuguese to Dutch, Sri Lanka has suffered and bloomed through many events.\r\n\r\nDamulla is a large town situated in the Matale district, pretty near to Colombo. It is also given the title of a World Heritage Site. The town\'s most fascinated fact seems to be the time period of it\'s construction, it was built in just 167 days. Bursting with beautiful sites like the ironwood forest, rose quartz mountain, Rangiri Stadium and Na Uyana Aranya, one can\'t exactly pinpoint what this town is most known for.', NULL, 'religious, historical, ancient', '1528739851dambulla.jpg', NULL, NULL, '2018-06-11 12:27:31', NULL),
(8, 'KUMANA', 'Fostering within it a combination of wild-life that\'s not only beautiful but an opener for a common man to the wonderful beauty of this world, Sri Lanka is a country known to many but it\'s hidden gems it\'s places who lock within themselves the rhymes of beauty and God\'s exquisite nature. \r\nSri Lanka is not only a beautiful place but is rich with history that dates back to many centuries. Every city has it\'s specialty and offers a person many activities that they wouldn\'t have dreamed of doing otherwise. \r\nGolden sandy beaches, tropical heavens, mountains that touch the sky, a landscape to steal your breath, rainforests and the wildlife that it\'s the habitat. Sri Lanka is heaven on Earth.', NULL, 'wildlife, nature, safari', '1528739946kumana.jpg', NULL, NULL, '2018-06-11 12:29:06', NULL),
(9, 'HIKKADUWA', 'Hikkaduwa Beach and Surfing Hikkaduwa beach is one of the most popular tourist places in Sri lanka Known for the harmonized and calm environment. The Beach is considered to be one of the finest places in the country for surfing and it is also well known for seafood currie which gives an extraordinary touch while having the perfect day on the beach. You can enjoy Surfing to the fullest in the months of November to March when waves rise up. Many tourists have recommended surfing in these months.', NULL, 'beach, coral, nature', '1528740012hikkaduwa.jpg', NULL, NULL, '2018-06-11 12:30:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_persons` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_beds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `admin_permission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `type`, `no_of_persons`, `no_of_beds`, `bathrooms`, `no`, `street`, `city`, `zipcode`, `photo1`, `photo2`, `summery`, `title`, `status`, `admin_permission`, `date`, `contact_no`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2255', '2255', '2255', '2255', '2255', '2255', '2255', NULL, '1.PNG', NULL, '2255', '2255', '0', '0', NULL, '2255', NULL, NULL, NULL),
(2, 'Villa', '2', '2', '1', '238/A', 'Franklands Estate', 'Veyangoda', NULL, '1528794734b5f75fa9-e9d6-40e4-83da-a196b53a1bcc.webp', NULL, 'Villa Nine is Home stay and it is located in the historic city of Veyangoda in an extremely characteristic area with a blended view of the city and tropical verdure. It is within a short walk distance to all sites and is surrounded by the extraordinary beauty of the lake, ancient buildings and monuments. Villa Nine is only 10 minutes from the Temple of the Tooth and 15 minutes walk from the Veyangoda city and railway station.We offer separate Room by Room, Bedroom schedule is following space category.', 'Villa Nine Estate', '0', '0', NULL, '0775864868', 3, '2018-06-12 03:42:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tourplans`
--

CREATE TABLE `tourplans` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_ids` date NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dharshitha', '222@222.com', '$2y$10$8Bm2X7lIGwP0YWCsPV2LSOd6Grnii3GxZvM.3g1usnDlBx6ECFllu', 'Afghanistan', 0, 'kJhMewNNCAvDFSqBqIkLKdGNTgCYBf0kZZwR9T1i0gOu7t1pqxVMXKykKDsa', '2018-06-10 14:29:38', '2018-06-10 14:29:38'),
(2, 'Charinda', '111@111.com', '$2y$10$Sey5mPSlttqbgs.Qx6sjhewk2xs.FiwzIqtSax2rFjhTU/ugZXESq', 'Algeria', 1, 'Fi16GplY1aHj0RavZWmLx1HwQUKzT6Gh0ViBt8Do7WIvSjbGnOhAMG6LLe6c', '2018-06-10 22:32:13', '2018-06-10 22:32:13'),
(3, 'Pasan', '333@333.com', '$2y$10$zUYZhHJA.V1Ar9Iag0T0.OafdwCLokK29pF6IFPjM.ttq8Vgyrmrm', 'Afghanistan', 0, 'wCzmrY6guexQ1CocRNPkrSstBPCNSLndIXgESxn53X8weRsJSnFc4bFkngPT', '2018-06-12 03:15:31', '2018-06-12 03:15:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_place`
--
ALTER TABLE `comment_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_property`
--
ALTER TABLE `comment_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourplans`
--
ALTER TABLE `tourplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_place`
--
ALTER TABLE `comment_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment_property`
--
ALTER TABLE `comment_property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tourplans`
--
ALTER TABLE `tourplans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
