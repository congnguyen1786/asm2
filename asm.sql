-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2025 lúc 07:31 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Thể thao'),
(2, 'Công nghệ'),
(3, 'Giải trí'),
(4, 'Kinh tế'),
(5, 'Giáo dục'),
(8, 'Chính trị - Xã hội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_28_023006_create_users_table', 2),
(5, '2025_03_29_065550_add_image_to_news_table', 3),
(6, '2025_04_16_061108_add_image_to_news_table', 4),
(7, '2025_04_16_081443_add_updated_at_to_news_table', 5),
(8, '2025_04_16_093016_add_role_to_users_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `views`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam vô địch AFF Cup 2026', 'Đội tuyển Việt Nam đã xuất sắc giành chức vô địch sau trận chung kết kịch tính.', 'https://tdtt.gov.vn/Portals/0/images/article/vo%20%C4%91ich.jpg', 800, 1, '2024-12-25 03:00:00', '2025-04-16 08:32:04'),
(2, 'iPhone 16 ra mắt với công nghệ đột phá', 'Apple công bố iPhone 16 với chip A18 mạnh mẽ.', 'https://shopdunk.com/images/uploaded/iPhone%2016/chip%20a18%20pro/danh-gia-chip-a18-pro-tren-iphone-16-pro-va-iphone-16-pro-max.jpg', 300, 2, '2024-09-15 01:30:00', '2024-09-15 01:30:00'),
(5, 'AI mới của xAI vượt xa ChatGPT', 'Grok 3 được đánh giá là bước tiến lớn trong lĩnh vực AI.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRra00X8Yc6NdpPevnNEDB3KWJifCyxvjgV7w&s', 350, 2, '2025-03-01 02:15:00', '2025-03-01 02:15:00'),
(6, 'Phim mới của Trấn Thành phá đảo phòng vé', 'Bộ phim đạt doanh thu 100 tỷ chỉ sau 3 ngày công chiếu.', 'https://cdn.baoquocte.vn/stores/news_dataimages/2025/012025/10/11/phim-chi-dau-can-moc-100-ty-doanh-thu-ban-ve-sau-3-tuan-cong-chieu-tai-rap-20250110110148.webp?rt=202504010041', 200, 3, '2024-12-01 13:30:00', '2024-12-01 13:30:00'),
(7, 'U23 Việt Nam vào chung kết SEA Games', 'Đội U23 thắng Thái Lan với tỷ số 2-1 đầy thuyết phục.', 'https://nld.mediacdn.vn/291774122806476800/2022/5/19/8-chot-trang-8-1652975891294723256369.jpg', 800, 1, '2024-08-25 10:00:00', '2024-08-25 10:00:00'),
(8, 'Tesla ra mắt xe điện giá rẻ', 'Mẫu xe mới của Tesla có giá dưới 30.000 USD.', 'https://cdn-i.vtcnews.vn/resize/th/upload/2025/03/16/tl-20343671.jpg', 281, 2, '2025-01-15 04:00:00', '2025-04-16 08:16:28'),
(9, 'Sao Việt hội tụ tại sự kiện thời trang', 'Dàn sao đình đám xuất hiện trong bộ sưu tập mới của NTK Công Trí.', 'https://sohanews.sohacdn.com/thumb_w/480/160588918557773824/2024/11/18/collages33-17319230362611487532586-253-0-3453-5120-crop-17319230490531298098672-1731923784267-17319237853281694906613.jpg', 220, 3, '2024-10-05 11:00:00', '2024-10-05 11:00:00'),
(11, 'Real Madrid vô địch Champions League 2025', 'Real Madrid đánh bại PSG trong trận chung kết đầy kịch tính.', 'https://image.baophapluat.vn/w840/Uploaded/2025/bcivvowk/2024_06_02/447296574-1001196098037741-8085267128327795184-n-6989.jpeg', 604, 1, '2025-05-28 14:00:00', '2025-04-16 03:51:25'),
(18, 'Phương án bố trí nơi làm việc cho cán bộ sau sáp nhập tỉnh', 'Khi sáp nhập tỉnh, các địa phương căn cứ tình hình thực tiễn có thể bố trí tỉ lệ hợp lý số lượng cán bộ làm việc đồng thời tại trụ sở hành chính của tỉnh cùng sáp nhập và tại trung tâm hành chính - chính trị của đơn vị mới.', 'https://cdn.24h.com.vn/upload/2-2025/images/2025-04-16/1744813394-y-do-bo-noi-vu-de-xuat-luat-hoa-viec-mien-trach-nhiem-voi-can-bo-dam-nghi-dam-lam-770-780-widthheight.webp', 200, 8, '2025-04-16 10:00:04', '2025-04-16 10:00:04'),
(19, 'Chờ gì ở trận đấu của ông Kim Sang-sik và ASEAN All-Stars?', 'Huấn luyện viên Kim Sang-sik sẽ có cơ hội để lại dấu ấn về mặt hình ảnh cũng như phần nào đó chuyên môn khi dẫn dắt đội “Các ngôi sao Đông Nam Á” đấu Man United.', 'https://cdn.24h.com.vn/upload/2-2025/images/2025-04-16//1744798439-hlv_kim_sang_sik30-1-width800height512.jpg', 100, 1, '2025-04-16 10:11:15', '2025-04-16 10:11:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tuETxdXusvnSlWCzDBgZNnkJaUQr8n4QXd37aGIq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieExiNnU4ck5rNXF5enAzUVdtVTFrellkREhYQzNRSkwzTVNRTnVBbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743601395);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'công nguyễn', 'cong08633@gmail.com', 1, '$2y$12$Nd/4rM2fz6lCo2CyjtB0Y.nbN7vVV8spfajp72dPVGyf0NEm0zsE.', NULL, NULL, '2025-04-16 09:54:43', '2025-04-16 09:54:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_news_category` (`category_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
