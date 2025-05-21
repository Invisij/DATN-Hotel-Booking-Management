-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2025 at 05:14 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `gender`, `job`, `birthdate`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', 'Hà Nội', 'Male', 'Công nhân', '2002-02-02', 4, '2025-04-29 19:08:10', '2025-04-29 19:08:10'),
(2, 'Nguyễn Văn B', 'Hà Nội', 'Male', 'Kỹ sư', '2003-03-03', 5, '2025-04-29 19:09:34', '2025-04-29 19:09:34'),
(3, 'Nguyễn Văn C', 'Hà Nội', 'Male', 'Sinh viên', '2004-04-04', 6, '2025-04-29 19:10:36', '2025-04-29 19:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `room_id`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'tc1.png', '2025-03-26 15:45:01', '2025-03-26 15:45:01'),
(2, 2, 'cc1.png', '2025-03-26 15:41:32', '2025-03-26 15:41:32'),
(3, 3, 'st1.png', '2025-03-26 15:44:35', '2025-03-26 15:44:35'),
(4, 4, 'hn1.png', '2025-03-26 15:43:22', '2025-03-26 15:43:22'),
(5, 5, 'hs1.png', '2025-03-26 15:44:03', '2025-03-26 15:44:03'),
(6, 6, 'tt1.png', '2025-03-26 15:45:55', '2025-03-26 15:45:55'),
(7, 7, 'd1.png', '2025-03-26 15:42:29', '2025-03-26 15:42:29'),
(8, 8, 'hgd1.png', '2025-03-26 15:40:15', '2025-03-26 15:40:15'),
(9, 9, 'gd1.png', '2025-03-26 15:40:50', '2025-03-26 15:40:50'),
(10, 10, 'b1.png', '2025-03-26 15:35:47', '2025-03-26 15:35:47'),
(11, 11, 'dcnkt1.png', '2025-03-26 15:48:09', '2025-03-26 15:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_03_28_000001_create_users_table', 1),
(2, '2024_03_28_000002_create_room_statuses_table', 1),
(3, '2024_03_28_000003_create_customers_table', 1),
(4, '2024_03_28_000004_create_types_table', 1),
(5, '2024_03_28_000005_create_rooms_table', 1),
(6, '2024_03_28_000006_create_transactions_table', 1),
(7, '2024_03_28_000007_create_payments_table', 1),
(8, '2024_03_28_000008_create_images_table', 1),
(9, '2024_03_28_000009_create_notifications_table', 1),
(10, '2024_03_28_000010_create_activity_log_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `transaction_id` bigint UNSIGNED NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `type_id` bigint UNSIGNED NOT NULL,
  `room_status_id` bigint UNSIGNED NOT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` bigint NOT NULL,
  `price` double NOT NULL,
  `view` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `type_id`, `room_status_id`, `number`, `capacity`, `price`, `view`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'TC1', 4, 500000, 'Thiết kế nhỏ gọn, tiện nghi đầy đủ, phù hợp với những khách hàng yêu thích sự riêng tư', '2025-03-26 14:54:54', '2025-03-26 14:54:54'),
(2, 2, 3, 'CC1', 4, 4000000, 'Quang cảnh độc đáo, bao gồm các yếu tố kiến trúc ấn tượng và sự kết hợp của phong cách cổ điển với hiện đại.', '2025-03-26 14:55:46', '2025-03-26 14:55:46'),
(3, 3, 4, 'ST1', 4, 3000000, 'Không gian tinh tế, nội thất sang trọng, ánh sáng tự nhiên hài hòa.', '2025-03-26 14:56:19', '2025-03-26 14:56:19'),
(4, 4, 2, 'HN1', 4, 1000000, 'Cảnh quan thanh bình, mang lại cảm giác thư giãn với ánh sáng ấm áp và sự kết hợp màu sắc hài hòa.', '2025-03-26 14:57:10', '2025-03-26 15:03:50'),
(5, 5, 2, 'HS1', 4, 3500000, 'Góc nhìn đẹp, phong cách trang nhã, không gian thoải mái và tiện nghi.', '2025-03-26 14:58:00', '2025-03-26 14:58:00'),
(6, 6, 3, 'TT1', 4, 7000000, 'Quang cảnh: Cao cấp, sang trọng.\\r\\nTiện nghi: Đầy đủ, hiện đại.\\r\\nTrải nghiệm: Dành cho khách hàng có yêu cầu cao về chất lượng dịch vụ.', '2025-03-26 14:59:10', '2025-03-26 14:59:10'),
(7, 7, 4, 'D1', 1, 400000, 'Thiết kế nhỏ gọn, tiện nghi đầy đủ, phù hợp với những khách hàng yêu thích sự riêng tư.', '2025-03-26 15:00:29', '2025-03-26 15:00:29'),
(8, 8, 2, 'HGD1', 4, 800000, 'Quang cảnh: Đẹp, thoáng đãng.\\r\\nTiện nghi: Đơn giản nhưng đầy đủ.\\r\\nTrải nghiệm: Phù hợp cho khách du lịch cần không gian tiện nghi cơ bản.', '2025-03-26 15:02:00', '2025-03-26 15:02:00'),
(9, 9, 2, 'GD1', 4, 800000, 'Quang cảnh: Đẹp, thoáng đãng.\\r\\nTiện nghi: Đơn giản nhưng đầy đủ.\\r\\nTrải nghiệm: Phù hợp cho khách du lịch cần không gian tiện nghi cơ bản.', '2025-03-26 15:03:01', '2025-03-26 15:03:01'),
(10, 10, 2, 'B1', 6, 1200000, 'Quang cảnh: Hiện đại, rộng rãi.\\r\\nTiện nghi: Đầy đủ, sang trọng.\\r\\nTrải nghiệm: Thích hợp cho gia đình hoặc nhóm nhỏ.', '2025-03-26 15:03:35', '2025-03-26 15:03:35'),
(11, 13, 5, 'DCNKT1', 2, 0, 'Không gian yên tính, đầy đủ vật chất, thiết bị hỗ trợ khách.', '2025-03-26 15:05:00', '2025-03-26 15:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_statuses`
--

CREATE TABLE `room_statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_statuses`
--

INSERT INTO `room_statuses` (`id`, `name`, `code`, `information`, `created_at`, `updated_at`) VALUES
(1, 'Đang có khách', 'DKK', 'Phòng đang có khách lưu trú.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(2, 'Phòng trống - Chưa kiểm tra', 'PT-CKT', 'Phòng trống đã được nhân viên kiểm tra và sẵn sàng cho khách.', '2025-03-24 18:11:56', '2025-03-26 14:44:55'),
(3, 'Phòng trống - Sẵn sàng', 'PT-SS', 'Phòng trống và sẵn sàng cho khách thuê.', '2025-03-24 18:11:56', '2025-03-26 14:45:42'),
(4, 'Phòng trống - Chưa sẵn sàng', 'PT-CSS', 'Phòng trống nhưng chưa sẵn sàng vì còn lý do nào đó.', '2025-03-24 18:11:56', '2025-03-26 14:46:35'),
(5, 'Miễn phí', 'MP', 'Phòng miễn phí cho khách đặc biệt.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(6, 'Sử dụng nội bộ', 'SDNB', 'Phòng được sử dụng cho mục đích nội bộ của khách sạn.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(7, 'Không làm phiền', 'KLP', 'Khách yêu cầu không làm phiền.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(8, 'Vắng mặt', 'VM', 'Khách vẫn lưu trú nhưng tạm thời rời khỏi khách sạn.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(9, 'Chưa thanh toán', 'CTT', 'Khách rời khỏi khách sạn mà không thanh toán.', '2025-03-24 18:11:56', '2025-03-26 14:47:36'),
(10, 'Đang bảo trì', 'DBT', 'Phòng đang được bảo trì, không thể sử dụng.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(11, 'Hỏng hóc', 'HH', 'Phòng bị hỏng hóc nặng, không thể sử dụng trong thời gian dài.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(12, 'Chuẩn bị trả phòng', 'CBTP', 'Phòng dự kiến sẽ có khách trả phòng hôm nay.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(13, 'Chuẩn bị nhận phòng', 'CBNP', 'Phòng dự kiến sẽ có khách nhận phòng hôm nay.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(14, 'Đã trả phòng', 'DTP', 'Khách đã trả phòng và hoàn tất thanh toán.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(15, 'Trả phòng muộn', 'TPM', 'Khách yêu cầu trả phòng trễ hơn giờ quy định.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(16, 'Không có hành lý', 'KHL', 'Khách đang lưu trú nhưng không có hành lý trong phòng.', '2025-03-24 18:11:57', '2025-03-24 18:11:57'),
(17, 'Khóa kép', 'KK', 'Khách yêu cầu khóa kép để bảo đảm riêng tư.', '2025-03-24 18:11:57', '2025-03-24 18:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `information`, `created_at`, `updated_at`) VALUES
(1, 'Phòng Tiêu Chuẩn', 'Phòng tiêu chuẩn có giá thành rẻ nhất, phù hợp với khách du lịch tiết kiệm.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(2, 'Phòng Cao Cấp', 'Phòng cao cấp có diện tích lớn hơn và nội thất tốt hơn phòng tiêu chuẩn.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(3, 'Phòng Sang Trọng', 'Phòng sang trọng có diện tích rộng rãi hơn với trang bị nội thất cao cấp.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(4, 'Phòng Hạng Nhỏ', 'Phòng hạng nhỏ có không gian phòng khách nhỏ gọn nhưng vẫn tiện nghi.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(5, 'Phòng Hạng Sang', 'Phòng hạng sang có phòng khách riêng biệt, đôi khi kèm theo bếp nhỏ.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(6, 'Phòng Tổng Thống', 'Phòng tổng thống là loại phòng cao cấp nhất, thường có nhiều phòng riêng biệt.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(7, 'Phòng Đơn', 'Phòng đơn có một giường nhỏ, phù hợp với khách đi một mình.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(8, 'Phòng Hai Giường Đơn', 'Phòng hai giường đơn có hai giường riêng biệt, phù hợp với bạn bè hoặc đồng nghiệp.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(9, 'Phòng Giường Đôi', 'Phòng giường đôi có giường lớn, thích hợp cho các cặp đôi hoặc vợ chồng.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(10, 'Phòng Ba', 'Phòng gia đình có không gian rộng, thường có nhiều giường để phù hợp với nhóm lớn.', '2025-03-24 18:11:56', '2025-03-26 14:35:41'),
(11, 'Phòng Thông Nhau', 'Phòng thông nhau có cửa kết nối giữa hai phòng riêng biệt, thuận tiện cho gia đình.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(12, 'Phòng Murphy', 'Phòng Murphy có giường gấp gọn vào tường hoặc thành ghế sofa.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(13, 'Phòng Dành Cho Người Khuyết Tật', 'Phòng dành cho người khuyết tật được thiết kế để dễ dàng di chuyển.', '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(14, 'Phòng Kính Rộng', 'Phòng có cửa kính rộng hướng ra ngoài.', '2025-03-24 18:11:56', '2025-03-26 14:39:09'),
(15, 'Phòng Cabana', 'Phòng Cabana có hồ bơi riêng hoặc tiếp giáp với hồ bơi chung.', '2025-03-24 18:11:56', '2025-03-24 18:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Admin','Super','Receptionist','Customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `random_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `role`, `email_verified_at`, `password`, `random_key`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 'Admin', NULL, '$2y$10$aprd.Kg7hZXHA8ASfwtRWuY3xn0I0YXNN1I1PIKQeryqPTQW9UNY2', 'sYHB1Cl8klEFcb9r9BBX28T3g4kl5DMnMwrp1ireyPq47GGy3RpEnbw3yECx', NULL, '2025-03-24 18:14:11', '2025-03-24 18:14:11'),
(2, 'Quản lý khách sạn', 'quanly@gmail.com', NULL, 'Super', NULL, '$2y$10$aprd.Kg7hZXHA8ASfwtRWuY3xn0I0YXNN1I1PIKQeryqPTQW9UNY2', 'U1oLyQQx3TxZsfoDzHDPj2siaERFqxrJXCXMQZEWOqA56n6WU9thbCXQ6Pm4', NULL, '2025-03-24 18:11:56', '2025-03-24 18:11:56'),
(3, 'Nhân viên', 'nhanvien@gmail.com', NULL, 'Receptionist', NULL, '$2y$10$aprd.Kg7hZXHA8ASfwtRWuY3xn0I0YXNN1I1PIKQeryqPTQW9UNY2', 'JHxsojDbU6Qs35ZiBk6Q7ACnHCKHfpiyz5ZXE1AiH7tqTYAm1U8ECGBP7QbD', NULL, '2025-03-26 15:06:34', '2025-03-26 15:06:35'),
(4, 'Nguyễn Văn A', 'nguyenvana@gmail.com', 'tv.jpg', 'Customer', NULL, '$2y$10$RqP60fUwfvez.Ut1XIX1au4i36f78KKTQwFqvvsd5jK2.m6UO0bXq', '2VxNRrfkuvMu9RrmjUI7AoNBhfGoixFl1kVs1LA37iVk20kvs5oxfGUQvVeK', NULL, '2025-04-29 19:08:09', '2025-04-29 19:08:10'),
(5, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', 'tulen.jpg', 'Customer', NULL, '$2y$10$g2NFIGs5N61pixLJEWStSuCjLgllcBbHb8iid3rYixh8Un9lQWdAe', 'RYJ1xHIpi3PNsFFUhLvM6w3N0lzBq7QvQul7Ph3SrCTiZVRBVn0510GxjUDv', NULL, '2025-04-29 19:09:34', '2025-04-29 19:09:34'),
(6, 'Nguyễn Văn C', 'nguyenvanc@gmail.com', 'kaine.jpg', 'Customer', NULL, '$2y$10$2k./ZnRE3JQfitQvdVMku.UZZu2i/5yS0.EXWE6Df3eWI/XS8zh.y', 'GWfG4wwaUV4FLSjl1nT4dHh9WaaApgzwUJsSilLmyC13Wq7chyIzpGH6BF8h', NULL, '2025-04-29 19:10:36', '2025-04-29 19:10:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_room_id_foreign` (`room_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_type_id_foreign` (`type_id`),
  ADD KEY `rooms_room_status_id_foreign` (`room_status_id`);

--
-- Indexes for table `room_statuses`
--
ALTER TABLE `room_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_customer_id_foreign` (`customer_id`),
  ADD KEY `transactions_room_id_foreign` (`room_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room_statuses`
--
ALTER TABLE `room_statuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_room_status_id_foreign` FOREIGN KEY (`room_status_id`) REFERENCES `room_statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rooms_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
