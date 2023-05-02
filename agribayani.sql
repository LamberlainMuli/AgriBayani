-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 12:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluehacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_borrower` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `picture_url`, `first_name`, `last_name`, `phone_number`, `location`, `password`, `is_borrower`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'beaux.consunji@obf.ateneo.edu', 'profile_pictures/644dfe0aa5181.png', 'Beaux', 'Consunji', '09311896243', 'Taguig', '$2y$10$sLk.TCdjPuLDJJQ.PTNakes5kctZXPXqUb1h8vDBsVKP2c9W59soG', 1, NULL, '2023-04-29 21:35:07', '2023-04-29 21:35:07'),
(11, 'thaniel.lee@obf.ateneo.edu', 'profile_pictures/644dfe3b373fd.png', 'Thaniel', 'Lee', '09123456789', 'Quezon', '$2y$10$2z1mYyR7zfYmyTdaopfAnOFgTSQ18ygN7OT1pW.Cl2lrjYvA4bAmK', 0, NULL, '2023-04-29 21:35:55', '2023-04-29 21:35:55'),
(12, 'james.francisco@obf.ateneo.edu', 'profile_pictures/644dfe6a1e93a.png', 'Bryan', 'Francisco', '09123456789', 'Marikina', '$2y$10$PAGe1N65w3JwdRwaI7XAWuLRFTDuQCFTVxDzFZdH9SSWz3oAg7diK', 1, NULL, '2023-04-29 21:36:42', '2023-04-29 21:36:42'),
(13, 'james.mostajo@obf.ateneo.edu', 'profile_pictures/644dfe922e43c.png', 'James', 'Mostajo', '0912345678', 'Marikina', '$2y$10$r3lntwsiz7nnVxKKFDiwDe3XK40hoZzGs6ECCPlkTqa.Ng/fmG5Jq', 1, NULL, '2023-04-29 21:37:22', '2023-04-29 21:37:22'),
(14, 'lamberlain.muli@obf.ateneo.edu', 'profile_pictures/644dfed206502.png', 'Lamberlain', 'Muli', '09123456789', 'Bataan', '$2y$10$Qa/V01N1ZmDaRMek49PDj.4ghgRfo469qkSkihdcs/UnOYLngzRMi', 1, NULL, '2023-04-29 21:38:26', '2023-04-29 21:38:26'),
(15, 'joshua.zapico@obf.ateneo.edu', 'profile_pictures/644dff042620b.png', 'Zapi', 'Zapico', '09123456789', 'San Juan', '$2y$10$QyDrvAnxMLvqvWEukKLZUuuwizfOAhaU8aK87HhfsYpv1Ueud9xVq', 0, NULL, '2023-04-29 21:39:16', '2023-04-29 21:39:16'),
(17, 'thaniel.c.lee@gmail.com', 'profile_pictures/644e1553bb5b7.png', 'Thaniel', 'Lee', '09123456789', 'Bataan', '$2y$10$ZUchBZ.I41e6Jxx3yiVLu.TqtTwsc3iCEWUsYcusNQ9zt6TQbKwW6', 1, NULL, '2023-04-29 23:14:27', '2023-04-29 23:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `goal_amount` double NOT NULL,
  `amount_received` double NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `description`, `goal_amount`, `amount_received`, `account_id`, `created_at`, `updated_at`) VALUES
(7, 'Beaux has always dreamed of becoming the top banana farmer in her province, but the lack of funds is holding her back. She works tirelessly on her farm in the Cordillera region, planting and nurturing her banana crops with care and dedication. Despite being a prominent farmer in her area, she knows she needs financial assistance to achieve her goal. Beaux spends every spare moment researching loan options and seeking advice from fellow farmers, determined to find a way to make her dream a reality.', 10000, 7254, 10, '2023-04-29 21:35:07', '2023-05-01 01:45:41'),
(8, 'Bryan is a hardworking farmer who is dedicated to providing for his family and improving his farm. With nine children to take care of, he knows the importance of not overworking them and ensuring they have a proper education. Despite his best efforts, Bryan struggles to keep up with the demands of his farm and knows he needs extra help. However, with no funds to pay for hired helpers, he feels stuck in a difficult situation.', 50000, 25000, 12, '2023-04-29 21:36:42', '2023-04-29 21:47:58'),
(9, 'Ivan had built his farming business from the ground up, and it had been thriving for years until the pandemic hit. Despite his best efforts, the business collapsed, leaving him with nothing. Ivan refused to give up and came up with a new business plan, but he needed financial support to make it happen. He tried to secure a loan, but no bank wanted to take a risk on someone with a history of bankruptcy. Ivan felt hopeless, but he was determined to find a way to start again.', 27500, 13700, 13, '2023-04-29 21:37:22', '2023-04-29 23:16:09'),
(10, 'Lamberlain had always dreamt of owning a vast and efficient farm that could sustainably provide for his family and the community. He wanted to venture into husbandry and mechanize his farming operations to increase production and reduce labor costs. However, his current financial situation was a hindrance to his dreams. Lamberlain was determined to achieve his goals and started to explore different funding options that could help him turn his vision into reality.', 60000, 16546, 14, '2023-04-29 21:38:26', '2023-05-01 01:45:23'),
(11, '', 0, 0, 17, '2023-04-29 23:14:27', '2023-04-29 23:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lenders`
--

CREATE TABLE `lenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount_lended` double NOT NULL,
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lenders`
--

INSERT INTO `lenders` (`id`, `amount_lended`, `account_id`, `created_at`, `updated_at`) VALUES
(3, 44520, 11, '2023-04-29 21:35:55', '2023-04-29 23:16:09'),
(4, 17980, 15, '2023-04-29 21:39:16', '2023-05-01 01:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `borrower_id` bigint(20) UNSIGNED NOT NULL,
  `lender_id` bigint(20) UNSIGNED NOT NULL,
  `amount_loaned` double NOT NULL,
  `amount_paid` double NOT NULL,
  `is_fully_paid` tinyint(1) NOT NULL,
  `interest` double NOT NULL,
  `amount_to_pay_total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `borrower_id`, `lender_id`, `amount_loaned`, `amount_paid`, `is_fully_paid`, `interest`, `amount_to_pay_total`, `created_at`, `updated_at`) VALUES
(13, 7, 3, 6000, 0, 0, 0, 6000, '2023-04-29 21:47:02', '2023-04-29 21:47:02'),
(14, 8, 3, 25000, 0, 0, 0, 25000, '2023-04-29 21:47:58', '2023-04-29 21:47:58'),
(15, 10, 3, 11120, 0, 0, 0, 11120, '2023-04-29 21:48:18', '2023-04-29 21:48:18'),
(16, 10, 4, 3880, 0, 0, 0, 3880, '2023-04-29 21:49:58', '2023-04-29 21:49:58'),
(17, 9, 4, 12500, 0, 0, 0, 12500, '2023-04-29 21:50:11', '2023-04-29 21:50:11'),
(18, 10, 4, 100, 0, 0, 0, 100, '2023-04-29 22:14:46', '2023-04-29 22:14:46'),
(19, 10, 3, 1200, 0, 0, 0, 1200, '2023-04-29 23:15:49', '2023-04-29 23:15:49'),
(20, 9, 3, 1200, 0, 0, 0, 1200, '2023-04-29 23:16:09', '2023-04-29 23:16:09'),
(21, 10, 4, 123, 0, 0, 0, 123, '2023-05-01 01:45:22', '2023-05-01 01:45:22'),
(22, 10, 4, 123, 0, 0, 0, 123, '2023-05-01 01:45:23', '2023-05-01 01:45:23'),
(23, 7, 4, 1254, 0, 0, 0, 1254, '2023-05-01 01:45:41', '2023-05-01 01:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2023_04_29_095145_create_accounts_table', 1),
(33, '2023_04_29_095145_create_lenders_table', 1),
(34, '2023_04_29_095146_create_borrowers_table', 1),
(35, '2023_04_29_095146_create_loans_table', 1),
(36, '2023_04_29_095146_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `borrower_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `borrower_id`, `created_at`, `updated_at`) VALUES
(15, 'From Small Beginnings to Prominent Banana Farmer', '\"I still can\'t believe it. It feels like only yesterday when I started planting banana crops in my farm. I remember how I used to wake up early in the morning, work tirelessly under the scorching sun, and come back home exhausted. But now, after years of hard work and determination, I have finally become the most prominent banana farmer in our region.\n\nMy farm is now thriving, and people come from far and wide to buy my bananas. I feel proud of what I have achieved and grateful for the support of my family and friends. It wasn\'t easy, but I never gave up on my dreams, and I am so glad that I didn\'t. I can\'t wait to see what the future holds for me and my farm.\n<img class=\"img-fluid\" src=\"https://img.freepik.com/premium-photo/asian-female-farmer-is-holding-raw-bananas-collecting-products-her-banana-plantation_140555-579.jpg?w=1480\" alt=\"Asian female farmer is holding raw bananas collecting products from her banana plantation\">', 7, '2023-04-29 21:52:57', '2023-04-29 21:52:57'),
(16, 'Growth and Prosperity: A Farmer\'s Journey to a Better Life', '\"I used to spend all my days tending to my farm and worrying about how to make ends meet for my nine children. But with the help of some hired hands, I can now finally breathe a little easier. I can afford to spend more time with my family and watch my kids grow up. It\'s been a tough journey, but seeing my farm grow and my family thrive makes it all worth it.\n\n<img class=\"img-fluid\" src=\"https://borgenproject.org/wp-content/uploads/Electricity-in-the-Philippines.jpg\" alt=\"Electricity in the Philippines\">\n\"', 8, '2023-04-29 21:53:58', '2023-04-29 21:53:58'),
(17, 'Overcoming Challenges: A Business Owner\'s Road to Recovery', '\"I had hit rock bottom after his business collapsed due to the pandemic. But I didn\'t give up hope, and after much effort, but thanks to AgriBayani i was able to gain funds for my business. With the money, I was able to restart my business and pay off my debts. It wasn\'t easy, but with hard work and determination, I was able to turn my life around.\n\n<img class=\"img-fluid\" src=\"https://asiasociety.org/sites/default/files/styles/1200w/public/2021-09/a263775d-b83e-410f-ae6a-e2c2dd81a6da_327e0884.jpg\" alt=\"Asia Society building\" />', 9, '2023-04-29 21:54:45', '2023-04-29 21:54:45'),
(18, 'Modern Farming: Revolutionizing Agriculture with Technology', '\"I was ecstatic when I received the news that my AgriBayani application had been approved. With the funds, I was finally able to purchase the machines and equipment that I had been eyeing for years. The tractors, threshers, and other gadgets made it possible for me to expand my farm and increase my production.\n\nGone were the days when I had to work under the scorching sun for hours on end. With the help of the machines, I was able to get more work done in less time. As a result, my farm became more efficient and profitable.\n\nIt was amazing to see how the machines revolutionized my work on the farm. I no longer had to worry about getting tired or being inefficient. With the machines, I was able to work faster, smarter, and better. I felt like a modern farmer with a vision for the future, and it was all thanks to the funds that I received.\n\n<img class=\"img-fluid\" src=\"https://www.agriculture.com.ph/wp-content/uploads/2020/11/tractor_JVDeGuzman_DA-RAFIS-6-1200x800.jpg\" alt=\"A tractor on a farm\" width=\"1200\" height=\"800\">', 10, '2023-04-29 21:55:46', '2023-04-29 21:55:46'),
(19, 'Title', 'Body', 11, '2023-04-29 23:14:50', '2023-04-29 23:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowers_account_id_foreign` (`account_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lenders`
--
ALTER TABLE `lenders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lenders_account_id_foreign` (`account_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_borrower_id_foreign` (`borrower_id`),
  ADD KEY `loans_lender_id_foreign` (`lender_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_borrower_id_foreign` (`borrower_id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lenders`
--
ALTER TABLE `lenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD CONSTRAINT `borrowers_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lenders`
--
ALTER TABLE `lenders`
  ADD CONSTRAINT `lenders_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_borrower_id_foreign` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `loans_lender_id_foreign` FOREIGN KEY (`lender_id`) REFERENCES `lenders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_borrower_id_foreign` FOREIGN KEY (`borrower_id`) REFERENCES `borrowers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
