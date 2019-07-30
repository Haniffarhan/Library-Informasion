-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 09:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library-information`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_book` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `book_title`, `author`, `publisher`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Keara Labadie II', 'Emmet Sanford', 'Mueller-Mertz', 'Nihil velit iste et eum fugit. Impedit eos harum ab et. Qui iure culpa est excepturi nihil.', NULL, NULL),
(2, 'Eloise Oberbrunner DDS', 'Andreanne Lind', 'Hoppe, Stroman and Kautzer', 'Aut et maxime a blanditiis. Mollitia neque voluptas delectus enim veniam. Voluptatem ea rerum harum sed. Blanditiis qui quasi in ratione aut ipsum sunt.', NULL, NULL),
(3, 'Georgette Rath', 'Miss Jazmin Cummerata II', 'Zboncak and Sons', 'Animi in est veniam qui quia tempora. Iste ratione et fugiat excepturi fuga est voluptatibus sint. Est expedita animi cum. Minus voluptatibus tempora eius quis et provident.', NULL, NULL),
(4, 'Dr. Adeline Goodwin Jr.', 'Mr. Dan Rodriguez Sr.', 'Mraz Group', 'Porro itaque voluptas exercitationem nisi nobis. Dolores fugiat ut non aut temporibus quos quos. Id quod et et quae non quia. Voluptates saepe quae cumque sapiente.', NULL, NULL),
(5, 'Sadie Labadie', 'Ms. Tianna Gerlach Sr.', 'Gutkowski, McGlynn and Ebert', 'Laborum nemo libero sit animi accusamus voluptate. Voluptatem amet rerum neque deleniti soluta assumenda. Deleniti fuga dolorum iure.', NULL, NULL),
(6, 'Lou Gerhold', 'Prof. Tomas Murray', 'Lind, Zboncak and Bernier', 'Suscipit voluptas inventore consectetur qui adipisci atque error. Non laborum dicta totam. Voluptatem dolorem debitis fuga totam. Molestias unde expedita voluptatem aspernatur commodi reiciendis in.', NULL, NULL),
(7, 'Dion Cronin', 'Sydnie Bins Jr.', 'Langosh, Corkery and Hirthe', 'Itaque quisquam magnam eveniet suscipit dolor et in. Repellat et a explicabo quo laudantium nihil. Voluptatum repellat aut facere doloremque et. Ut nobis laborum voluptatibus eveniet iusto.', NULL, NULL),
(8, 'Carlos Schulist', 'Lisa Donnelly', 'Gutmann Group', 'Deleniti culpa mollitia in quam error. Esse asperiores quo nihil placeat et eligendi soluta. Quod consequatur esse qui ea quibusdam saepe.', NULL, NULL),
(9, 'Dr. Mertie Hackett DDS', 'Danika Toy', 'Kuhn Ltd', 'Autem ullam eaque enim. Ipsam omnis quisquam voluptatem architecto. Rerum est pariatur consectetur odio.', NULL, NULL),
(10, 'Elijah Abshire IV', 'Edythe Nicolas', 'Cronin Inc', 'Nesciunt modi eum assumenda possimus aut nihil. Et voluptatem ut recusandae quas. Blanditiis minus perspiciatis dolore sit inventore voluptatem voluptatum quos.', NULL, NULL),
(11, 'Prof. Stephon Herman', 'Miss Maryam Smitham', 'Brown, Frami and Auer', 'Fugiat necessitatibus incidunt a cumque doloremque iusto. Commodi sit id rerum a similique.', NULL, NULL),
(12, 'Madyson Bechtelar', 'Lorine Nienow', 'Marks, Daugherty and Rohan', 'Labore modi consequatur laudantium architecto qui aperiam. Nisi vel beatae qui molestiae. Qui molestiae molestias omnis inventore et.', NULL, NULL),
(13, 'Devan Bechtelar', 'Dudley O\'Hara', 'Becker, Abernathy and Nicolas', 'Quibusdam iste repellat beatae autem. Omnis quo quasi recusandae sunt fuga nisi. Perferendis nostrum doloribus rem molestias non sint numquam.', NULL, NULL),
(14, 'Rosemarie VonRueden', 'Aileen Pollich', 'Keeling, Anderson and Ritchie', 'Necessitatibus quo ipsam facilis id sint. Velit ut commodi sint labore numquam doloribus. Corporis eum soluta nesciunt maiores eius. Repudiandae magni adipisci iusto quibusdam. Et facere a nisi ad.', NULL, NULL),
(15, 'Creola Hoppe', 'Tatum Stoltenberg', 'Gutmann PLC', 'Cum sint voluptas sapiente sit dolor. Aut quas maxime molestiae et accusamus aut. Aut non est ratione quibusdam unde. Libero est nisi aspernatur eos voluptate eveniet molestias.', NULL, NULL),
(16, 'Karine Bradtke', 'Bryana Kautzer I', 'McDermott-Klocko', 'Natus eos repellat possimus. Ex deleniti hic dolorem aperiam in. Rerum exercitationem itaque blanditiis.', NULL, NULL),
(17, 'Mariane Tremblay', 'Mrs. Laurence Schaefer V', 'Grant-Krajcik', 'Perspiciatis amet modi et quasi voluptatibus id. Aut laudantium culpa enim laborum neque. Ea et praesentium in incidunt eius asperiores. Earum ab harum ea et eius quia.', NULL, NULL),
(18, 'Annabell Towne', 'Mrs. Anabel Cassin', 'Legros, Murazik and Eichmann', 'Dolorem qui est harum. Fugit sint voluptatem excepturi vero. Eos ea dolor voluptatem vitae vitae aliquam occaecati inventore.', NULL, NULL),
(19, 'Kade Schowalter V', 'Prof. Isobel Braun Jr.', 'Gusikowski-Bergnaum', 'Sed fuga voluptatum debitis beatae consequuntur. Eum quis nam magnam saepe culpa quia. Ut a debitis eum et. Possimus omnis in quo quis accusantium labore consequatur.', NULL, NULL),
(20, 'Lizeth Miller', 'Mr. Geo Pfeffer', 'Bernier-Ortiz', 'Et est aut optio facere. Similique sunt mollitia voluptates exercitationem eligendi. Ut voluptates rerum quaerat et. Consectetur voluptatem illum vitae explicabo provident aspernatur.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id_borrow` bigint(20) UNSIGNED NOT NULL,
  `id_book` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `borrow_date_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrow_date_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrow_date_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_date_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id_borrow`, `id_book`, `id_user`, `borrow_date_day`, `borrow_date_month`, `borrow_date_year`, `return_date_day`, `return_date_month`, `return_date_year`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '11', '2011', '15', '4', '1998', NULL, NULL),
(2, 2, 2, '14', '5', '2003', '1', '3', '2019', NULL, NULL),
(3, 3, 3, '22', '7', '2001', '21', '10', '2001', NULL, NULL),
(4, 4, 4, '17', '4', '1999', '16', '10', '2000', NULL, NULL),
(5, 5, 5, '27', '12', '1997', '23', '7', '2011', NULL, NULL),
(6, 6, 6, '18', '1', '2015', '5', '2', '2017', NULL, NULL),
(7, 7, 7, '29', '12', '1991', '6', '5', '1988', NULL, NULL),
(8, 8, 8, '23', '3', '2019', '10', '8', '1983', NULL, NULL),
(9, 9, 9, '24', '8', '1995', '21', '8', '2014', NULL, NULL),
(10, 10, 10, '13', '9', '1982', '27', '1', '1995', NULL, NULL),
(11, 11, 11, '5', '9', '1984', '5', '1', '2000', NULL, NULL),
(12, 12, 12, '19', '9', '1995', '6', '1', '1995', NULL, NULL),
(13, 13, 13, '19', '1', '1989', '2', '7', '2000', NULL, NULL),
(14, 14, 14, '14', '9', '2003', '28', '1', '2001', NULL, NULL),
(15, 15, 15, '31', '7', '1998', '11', '1', '1981', NULL, NULL),
(16, 16, 16, '2', '6', '2017', '17', '7', '2005', NULL, NULL),
(17, 17, 17, '28', '5', '2000', '14', '1', '2003', NULL, NULL),
(18, 18, 18, '14', '5', '2000', '4', '9', '1998', NULL, NULL),
(19, 19, 19, '7', '2', '1990', '9', '11', '2008', NULL, NULL),
(20, 20, 20, '19', '4', '1994', '24', '12', '2015', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_12_063333_create_books_table', 1),
(4, '2019_07_12_063539_create_role_table', 1),
(5, '2019_07_12_063634_create_borrows_table', 1),
(6, '2019_07_12_064524_add_foreign_keys_to_users_table', 1),
(7, '2019_07_12_064659_add_foreign_keys_to_borrows_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Head Staff', NULL, NULL),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `gender`, `born_place`, `born_date_day`, `born_date_month`, `born_date_year`, `address`, `email`, `phone_number`, `id_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Gender Admin', 'Born Place Admin', '1', '12', '1998', 'Jakarta', 'admin@example.com', '085258369147', 1, NULL, '$2y$10$xp0K8W3pcJmq.Rb2QGCVpOsE7GsguAYUgn7UhPVKzAhsWDzMVHE4C', NULL, NULL, NULL),
(2, 'Head Staff', 'Gender Head Staff', 'Born Place Head Staff', '1', '12', '1980', 'Jakarta', 'headstaff@example.com', '085258369147', 2, NULL, '$2y$10$SlosJcxUduqXXQORY5lKCOzG4aDWSWFMsFB12EQMLJNwkPGTkw9ay', NULL, NULL, NULL),
(3, 'User', 'Gender User', 'Born Place User', '1', '12', '1980', 'Jakarta', 'user@example.com', '085258369147', 3, NULL, '$2y$10$q5P96.orAAnZ8lOf.S4nJeFhV71XFD8JUFPLamaAiKRkrIPmzHGLC', NULL, NULL, NULL),
(4, 'Dr. Werner Larson', 'Male', 'Kuala Lumpur', '28', '1', '1996', '262 Swaniawski Curve Suite 940\nWest Neha, ID 74965', 'dessie97@mills.com', '585.655.8528', 3, NULL, '$2y$10$CA6XHisu064hb3AX//h/w..JWl/7lCKKx4GF.2/0csAyVl0Sc6cHC', NULL, NULL, NULL),
(5, 'Ines Lynch', 'Male', 'Kuala Lumpur', '3', '8', '1986', '9683 Reynolds Valleys Apt. 765\nLake Octavia, MS 32389-9943', 'pankunding@gmail.com', '336.971.8838', 2, NULL, '$2y$10$0eSluHe4WBDFg3U0uXnH3Ova9lIBIAUuZw14dYV2ICNAPLLkXjR7e', NULL, NULL, NULL),
(6, 'Greg Auer', 'Female', 'Jakarta', '17', '8', '1986', '58901 Maurice Heights\nLake Zitachester, IA 28579', 'marks.cyrus@pfannerstill.org', '1-817-298-4816', 2, NULL, '$2y$10$eQ1codVvbNjOuE.VA84hh.v/tF5GkbdTP7372oUNdwLsmxcw6R.8O', NULL, NULL, NULL),
(7, 'Ivah Nader', 'Female', 'Singapore', '16', '8', '2005', '96445 Nikita Pass\nWest Presley, TN 93362', 'ian.bailey@cassin.net', '997.891.2211', 1, NULL, '$2y$10$uWt05qoBjKmsXG048Cejd.QOApPcXGP0QrPca8qKpezl4TqHouS/a', NULL, NULL, NULL),
(8, 'Leonardo Parker', 'Male', 'Singapore', '20', '11', '2018', '750 Nikki Unions Suite 374\nWavaland, IN 88804-3361', 'heffertz@yahoo.com', '792-423-8144 x4468', 2, NULL, '$2y$10$Xzzmyfu4QXfZKUVcUrqSS.T8SxZr3hbInjZ489P8yyqLIMgGvS7Ky', NULL, NULL, NULL),
(9, 'Miss Jolie Heathcote DVM', 'Male', 'Singapore', '26', '5', '1999', '86803 Retha Harbor Apt. 395\nJanaebury, UT 43836-2871', 'lschaefer@dickinson.net', '+1.824.478.9102', 2, NULL, '$2y$10$T0oowXt24j/NI8S87BG9NesrPVZ8sWVxGha6hSudK.JmR.NlvNW1m', NULL, NULL, NULL),
(10, 'George Koch MD', 'Male', 'Hanoi', '14', '1', '2006', '8227 Kareem Lodge Suite 505\nLake Torrey, AR 17496-7006', 'istanton@hotmail.com', '996-415-0756', 3, NULL, '$2y$10$VydWWu59HRK6qakYP1lHw.VhBNVBkzt3pRVCV3MkuKkzlluuLT4Pm', NULL, NULL, NULL),
(11, 'Prof. Noah Lindgren DDS', 'Female', 'Hanoi', '12', '6', '2012', '88174 Kerluke Haven\nNorth Orrinton, IN 68543', 'xcollins@terry.biz', '684-792-8854 x849', 2, NULL, '$2y$10$TIHFh1LWUaGNf8zYOfzBmOZT41H48TP95U0RxAB.JuSTKbKugPRx.', NULL, NULL, NULL),
(12, 'Sheldon Corwin', 'Male', 'Hanoi', '30', '1', '1989', '13480 Althea Square\nPort Francestown, NE 89184', 'vturcotte@beatty.com', '841-891-5825 x77517', 1, NULL, '$2y$10$E.1G5D5DquC4q2relzsxi.aC/LAGro2YFNaVhQYy2OUqu5wRILxMi', NULL, NULL, NULL),
(13, 'Leo Yost', 'Male', 'Jakarta', '28', '12', '2017', '4614 Alek Grove Suite 272\nIsobelshire, WY 23882', 'rafael56@hotmail.com', '1-335-687-5696', 2, NULL, '$2y$10$TymUc1svJ4bvkyDEpUOmd.z6R6yMeqwQ3/pwLhBY566qkpnfPic9K', NULL, NULL, NULL),
(14, 'Zachariah Reinger', 'Male', 'Kuala Lumpur', '31', '8', '2009', '81844 Emard Course Suite 875\nLake Francesshire, FL 26875-0009', 'thomas.wolf@okeefe.com', '+1-435-635-8893', 1, NULL, '$2y$10$lWlV5CCj2FTWXGcsAI7DrOss.JHToZIwfzl0GUkZ1rduQD32gxBC.', NULL, NULL, NULL),
(15, 'Chad McDermott', 'Male', 'Hanoi', '18', '6', '2018', '868 Brekke Point\nWest Joana, CT 33291-7035', 'kkreiger@hotmail.com', '380.592.5985 x835', 2, NULL, '$2y$10$IiWQPfPeOg37Ibm/JSgVMuE8qDhu7ftUguSsnjV4IdsJ0MwVTRm/S', NULL, NULL, NULL),
(16, 'Jovan Ziemann', 'Female', 'Kuala Lumpur', '9', '8', '1982', '23479 Morissette Neck\nNorth Beaulahhaven, WI 60593', 'aschmitt@yahoo.com', '997.694.3969 x7485', 1, NULL, '$2y$10$mNc3LSlXFRhBU6u.Olk9L.f6ez3.ULg.G0JVdsB6GXhLA6Eg3GC0m', NULL, NULL, NULL),
(17, 'Abigale Stroman Jr.', 'Female', 'Singapore', '1', '11', '2018', '412 Spinka Ways Suite 290\nPort Soledadmouth, NM 79965', 'osinski.abdullah@gmail.com', '1-624-680-0176', 3, NULL, '$2y$10$XcGWpazwKzadVIAd0uYor./i6ZOPS1QcIYjpaUEsjWZ5CQeATdnfm', NULL, NULL, NULL),
(18, 'Mario Mertz', 'Female', 'Jakarta', '19', '5', '1993', '8924 Chesley Mill Suite 583\nKundeview, LA 35042-1088', 'lindgren.kimberly@effertz.info', '(489) 657-3486 x048', 3, NULL, '$2y$10$HI/XNFn3QfwmRd1g4n4FRullMiBgnlqisWiO3vbWcWQ3zMvgT/cgO', NULL, NULL, NULL),
(19, 'Fermin Jaskolski', 'Male', 'Kuala Lumpur', '11', '10', '2007', '299 Allene Island\nKielland, WA 37263', 'cale.borer@gmail.com', '(967) 796-3533', 3, NULL, '$2y$10$DMlIbAnyWJToI8wSiEbBS.NIfpbilwI41876kg.s4PVtNPshKcSxm', NULL, NULL, NULL),
(20, 'Friedrich Prohaska II', 'Female', 'Jakarta', '1', '12', '2009', '792 Janick Rapids\nEast Luiston, MD 17995-2613', 'roma.schiller@yahoo.com', '240-562-6532 x340', 3, NULL, '$2y$10$jikdKZ2fIkWG/Du9zl3QwehamRiUU/SuKdf2me35jIoTOeJHeWzuu', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id_borrow`),
  ADD KEY `borrows_id_book_foreign` (`id_book`),
  ADD KEY `borrows_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_book` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id_borrow` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `borrows_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
