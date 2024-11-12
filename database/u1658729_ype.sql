-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 04:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_ype`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `heading_id` varchar(16) DEFAULT NULL,
  `heading_en` varchar(16) DEFAULT NULL,
  `section_id` varchar(64) DEFAULT NULL,
  `section_en` varchar(64) DEFAULT NULL,
  `title_id` varchar(32) DEFAULT NULL,
  `title_en` varchar(32) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `year_title_id` varchar(16) DEFAULT NULL,
  `year_title_en` varchar(16) DEFAULT NULL,
  `destination_number` int(11) DEFAULT NULL,
  `destination_number_title_id` varchar(64) DEFAULT NULL,
  `destination_number_title_en` varchar(64) DEFAULT NULL,
  `rating` varchar(16) DEFAULT NULL,
  `rating_title_id` varchar(64) DEFAULT NULL,
  `rating_title_en` varchar(64) DEFAULT NULL,
  `section_message_id` varchar(16) DEFAULT NULL,
  `section_message_en` varchar(16) DEFAULT NULL,
  `title_message_id` varchar(64) DEFAULT NULL,
  `title_message_en` varchar(64) DEFAULT NULL,
  `message_id` text DEFAULT NULL,
  `message_en` text DEFAULT NULL,
  `image_founder` varchar(255) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `founder` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `heading_id`, `heading_en`, `section_id`, `section_en`, `title_id`, `title_en`, `description_id`, `description_en`, `image`, `year`, `year_title_id`, `year_title_en`, `destination_number`, `destination_number_title_id`, `destination_number_title_en`, `rating`, `rating_title_id`, `rating_title_en`, `section_message_id`, `section_message_en`, `title_message_id`, `title_message_en`, `message_id`, `message_en`, `image_founder`, `name`, `founder`) VALUES
(1, 'Tentang Kami | Tour Organizer & DMC | Your Private Europe', '', 'Didirikan oleh pecinta traveling, kami memberikan pelayanan private & group tour yang disesuaikan dengan kebutuhan wisatawan Asia di Eropa.', '', 'TENTANG KAMI', 'ABOUT US', 'WHO ARE WE?', 'WHO ARE WE?', 'Traveling Expert Di Eropa', 'Traveling Expert In Europe', '<p style=\"text-align: start;font-size: 18px;\">Kami adalah <strong>Tour Organizer dan Destination Management Company</strong> yang menyediakan pelayanan <strong>VIP Services, MICE, private tour & group tour</strong> di Eropa, khususnya untuk pelaku perjalanan dan wisatawan dari Indonesia dan Asia.</p>\r\n                                            <p style=\"text-align: start;font-size: 18px;\">Komitmen kami adalah mengutamakan keinginan dan kebutuhan Anda selama berkunjung di Eropa, dan memberikan Anda pelayanan yang extra maksimal.</p>                                                     ', '<p style=\"text-align: start;font-size: 18px;\">We are a Tour Organizer and Destination Management Company that provides VIP Services, MICE, private & group tour services in Europe, especially for clients from Indonesia and Asia.</p>\r\n                                            <p style=\"text-align: start;font-size: 18px;\" class=\" translation-block\">Our commitment is to put your wishes and needs in the first place while visiting Europe and to provide you with an extra maximum service.</p>                                      ', 'feature-4.png', 2017, 'Tahun Berdiri', 'Inception Year', 25, 'Destinasi Negara di Eropa Yang Sudah Dilayani', 'Country in Europe We Have Served', '4.5/5', 'Rating Kepuasan Tamu Kami', 'OUR GUEST SATISFACTION RATING', 'PESAN KAMI', 'OUR MESSAGE', 'Dengan Hormat Kami Perkenalkan Secara Pribadi …', 'With All Respect, Let Us Introduce Personally ...', '<p><strong>Bapak/Ibu Yang Terhormat,</strong></p>\n<p>Nama saya Chris. Selain pendiri Your Private Europe, saya juga salah satu guide pribadi untuk Tour Anda di Eropa. Sebagai tour leader dan guide, saya sudah berpengalaman dan memegang <strong><em>Tour Guide Certificate</em> </strong>dari <strong><a href=\"https://www.etoa.org/\">European Tourism Association (ETOA)</a></strong>. Saya sudah tinggal di Eropa lebih dari 17 tahun, tetapi masih menganggap Surabaya dan Indonesia sebagai <em>hometown.</em></p>\n<p>Alasan saya mendirikan Your Private Europe adalah karena saya melihat bahwa saat ini tidak ada tour dari Indonesia ke Eropa yang sepenuhnya&nbsp;<span><strong>tailor-made</strong></span>, menurut keinginan, budget dan jadwal dari setiap klien.&nbsp;Dengan konsep kami, Anda menentukan 100% apa yang Anda mau, dan kami akan membantu Anda untuk mewujudkannya!</p>\n<p>Saya seorang pecinta traveling dan mengenal Eropa dengan baik. Setelah mengunjungi 30+ negara dan tinggal di 3 benua yang berbeda, saya merasa bahwa konsep yang kami tawarkan adalah cara yang paling terbaik untuk traveling dan untuk mengenal Eropa lebih baik lagi.</p>\n<p>Saya mengundang Bapak/Ibu untuk memilih pelayanan kami, dan saya berkomitmen untuk membuat liburan Anda di Eropa menjadi pengalaman yang tak terlupakan!</p>', '<p><strong>Dear Sir/Madam,</strong></p>\n<p>Nama saya Chris. Selain pendiri Your Private Europe, saya juga salah satu guide pribadi untuk Tour Anda di Eropa. Sebagai tour leader dan guide, saya sudah berpengalaman dan memegang <strong><em>Tour Guide Certificate</em> </strong>dari <strong><a href=\"https://www.etoa.org/\">European Tourism Association (ETOA)</a></strong>. Saya sudah tinggal di Eropa lebih dari 17 tahun, tetapi masih menganggap Surabaya dan Indonesia sebagai <em>hometown.</em></p>\n<p class=\" translation-block\">The reason why I started Your Private Europe is because I see that there is currently no tour offering available from Asia to Europe that is completely tailor-made, according to your wishes, budgets and schedules. With our concept, you define 100% what you want, and we will help you to make it happen!</p>\n<p>I am a travel lover and know Europe very well. Having visited 30+ countries and lived in 3 different continents, I am convinced that the service concept we offer is the best way to explore and discover Europe.</p>\n<p>I invite you to choose our services, and it is my personal commitment to make your visit to Europe to become an unforgettable experience!</p>', 'Chris.jpg', 'CHRIS SUHARTONO', 'Founder & Lead Guide');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `writer` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `cover_image`, `alt_image`, `destination_id`, `title_id`, `title_en`, `slug`, `date`, `description_id`, `description_en`, `writer`) VALUES
(1, 'Blog', 'Blog', 'Temukan beragam artikel menarik dan informatif di blog kami. Dapatkan informasi terbaru tentang teknologi, bisnis, gaya hidup, dan banyak lagi. Jelajahi dan temukan wawasan yang bermanfaat untuk membantu Anda tetap terinformasi dan terinspirasi.', 'Discover a variety of engaging and informative articles on our blog. Get the latest insights on technology, business, lifestyle, and more. Explore and find valuable insights to help you stay informed and inspired', 'blog-3.jpg', '', NULL, 'Menikmati Keindahan Alam di Puncak Gunung: Petualangan yang Mengesankan', 'Enjoying Nature\'s Beauty at the Mountain Peak: An Unforgettable Adventure', 'enjoying-natures-beauty-at-the-mountain-peak-an-unforgettable-adventure', '2024-03-31', '<p>Dengan luas hampir satu juta acre, Taman Nasional Olympic adalah salah satu taman nasional terbesar di 48 negara bagian bagian dan merupakan rumah bagi berbagai ekosistem yang kaya biodiversitas. Dari Hutan Hujan Hoh yang dilapisi lumut hingga kolam air pasang psikedelik di Rialto Beach dan puncak-puncak bersalju yang menjulang di cakrawala, memilih hanya satu tempat untuk meletakkan topi Anda di akhir hari bisa terasa membingungkan.</p>\n\n<p>Ini semua bagus untuk pemula tetapi ketika blog-blog ini berkembang, kebanyakan blogger lupa tentang desain dan malah fokus pada SEO dan pemasaran.</p>', '<p>At nearly one million acres, Olympic National Park is one of the largest national parks in the lower 48 and is home to a wide range of biodiverse ecosystems. From the moss-laden Hoh Rainforest to the psychedelic tide pools of Rialto Beach and the far-flung glaciated peaks that hug the skyline, choosing just one place to hang your hat at the end of the day can feel overwhelming.</p>\n\n\n\n<p>This is all good for beginners but when these blogs grow, most bloggers forgot about design and instead doubled down on SEO and marketing.</p>\n', 'Anonymous'),
(2, 'Blog', 'Blog', 'Temukan beragam artikel menarik dan informatif di blog kami. Dapatkan informasi terbaru tentang teknologi, bisnis, gaya hidup, dan banyak lagi. Jelajahi dan temukan wawasan yang bermanfaat untuk membantu Anda tetap terinformasi dan terinspirasi.', 'Discover a variety of engaging and informative articles on our blog. Get the latest insights on technology, business, lifestyle, and more. Explore and find valuable insights to help you stay informed and inspired', 'blog-1.jpg', '', NULL, 'Keindahan Alam yang Menakjubkan: Inspirasi dari Alam untuk Hidup Lebih Sehat dan Bahagia', 'The Stunning Beauty of Nature: Inspiration from Nature for a Healthier and Happier Life', 'The-stunning-beauty-of-nature-inspiration-from-nature-for-a-healthier-and-happier-life', '2024-03-30', '<p>Dengan luas hampir satu juta acre, Taman Nasional Olympic adalah salah satu taman nasional terbesar di 48 negara bagian bagian dan merupakan rumah bagi berbagai ekosistem yang kaya biodiversitas. Dari Hutan Hujan Hoh yang dilapisi lumut hingga kolam air pasang psikedelik di Rialto Beach dan puncak-puncak bersalju yang menjulang di cakrawala, memilih hanya satu tempat untuk meletakkan topi Anda di akhir hari bisa terasa membingungkan.</p>\n\n<p>Ini semua bagus untuk pemula tetapi ketika blog-blog ini berkembang, kebanyakan blogger lupa tentang desain dan malah fokus pada SEO dan pemasaran.</p>', '<p>At nearly one million acres, Olympic National Park is one of the largest national parks in the lower 48 and is home to a wide range of biodiverse ecosystems. From the moss-laden Hoh Rainforest to the psychedelic tide pools of Rialto Beach and the far-flung glaciated peaks that hug the skyline, choosing just one place to hang your hat at the end of the day can feel overwhelming.</p>\r\n\r\n\r\n\r\n<p>This is all good for beginners but when these blogs grow, most bloggers forgot about design and instead doubled down on SEO and marketing.</p>\r\n', 'Anonymous'),
(3, 'Blog', 'Blog', 'Temukan beragam artikel menarik dan informatif di blog kami. Dapatkan informasi terbaru tentang teknologi, bisnis, gaya hidup, dan banyak lagi. Jelajahi dan temukan wawasan yang bermanfaat untuk membantu Anda tetap terinformasi dan terinspirasi.', 'Discover a variety of engaging and informative articles on our blog. Get the latest insights on technology, business, lifestyle, and more. Explore and find valuable insights to help you stay informed and inspired', 'blog-2.jpg', '', NULL, 'Keindahan Langit Malam yang Memukau: Pesona Bintang dan Galaksi', 'The Enchanting Beauty of the Night Sky: A Glimpse of Stars and Galaxies', 'keindahan-langit-malam-yang-memukau-pesona-bintang-dan-galaksi', '2024-03-31', '<p>Dengan luas hampir satu juta acre, Taman Nasional Olympic adalah salah satu taman nasional terbesar di 48 negara bagian bagian dan merupakan rumah bagi berbagai ekosistem yang kaya biodiversitas. Dari Hutan Hujan Hoh yang dilapisi lumut hingga kolam air pasang psikedelik di Rialto Beach dan puncak-puncak bersalju yang menjulang di cakrawala, memilih hanya satu tempat untuk meletakkan topi Anda di akhir hari bisa terasa membingungkan.</p>', '<p>At nearly one million acres, Olympic National Park is one of the largest national parks in the lower 48 and is home to a wide range of biodiverse ecosystems. From the moss-laden Hoh Rainforest to the psychedelic tide pools of Rialto Beach and the far-flung glaciated peaks that hug the skyline, choosing just one place to hang your hat at the end of the day can feel overwhelming.</p>', 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `banner_homepage`
--

CREATE TABLE `banner_homepage` (
  `id` int(11) NOT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commitment`
--

CREATE TABLE `commitment` (
  `id` int(11) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `slug` varchar(64) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commitment`
--

INSERT INTO `commitment` (`id`, `title_id`, `title_en`, `slug`, `image`, `alt_image`) VALUES
(1, 'Akomodasi Berkualitas', 'Quality Accommodation', 'quality-accommodation', 'quality-accommodation-26032024085035.svg', ''),
(2, 'Transportasi Yang Nyaman', 'Convenient Transportation', 'convenient-transportation', 'convenient-transportation.svg', ''),
(3, 'Guide Berbahasa Indonesia', 'Indonesian Speaking Guide', 'Indonesian Speaking Guide', 'indonesian-speaking-guide.svg', ''),
(4, 'Jadwal Yang Seru & Informatif', 'Engaging & Fun Itinerary', 'camera-retro-solid.svg', 'camera-retro-solid.svg', ''),
(5, 'Pelayanan Maksimal', 'Maximum Service', 'star-solid.svg', 'star-solid.svg', ''),
(6, 'Mengutamakan Keamanan', 'Put Your Safety First', 'lock-solid.svg', 'lock-solid.svg', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `heading_id` varchar(16) DEFAULT NULL,
  `heading_en` varchar(16) DEFAULT NULL,
  `section_id` varchar(64) DEFAULT NULL,
  `section_en` varchar(64) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `phone_number_eu` varchar(32) DEFAULT NULL,
  `phone_number_id` varchar(32) DEFAULT NULL,
  `title_form_id` varchar(255) NOT NULL,
  `title_form_en` varchar(255) NOT NULL,
  `title_contact_id` varchar(255) NOT NULL,
  `title_contact_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `heading_id`, `heading_en`, `section_id`, `section_en`, `title_id`, `title_en`, `phone_number_eu`, `phone_number_id`, `title_form_id`, `title_form_en`, `title_contact_id`, `title_contact_en`) VALUES
(1, 'Hubungi Kami untuk Perjalanan ke Eropa | Your Private Europe', '', 'Hubungi Your Private Europe untuk perjalanan tak terlupakan ke Eropa. Kami melayani individu, agen travel, corporate, dan acara pemerintah.  ', '', 'HUBUNGI KAMI', 'CONTACT US', 'KAMI SENANG MENDENGAR DARI ANDA', 'WE\'D LOVE TO HEAR FROM YOU', 'Gunakan Cara Kontak Dibawah Ini & Kami Akan Menjawab Secepatnya', 'Use These Contact Options & We Will Respond As Soon As Possible', '+(31) 061-6564-256', '+(62) 0895-1425-3344', 'ISI INFORMASI ANDA DI FORMULIR INI SELENGKAP-LENGKAPNYA', 'PLEASE FILL IN THIS FORM AS COMPLETE AS POSSIBLE', 'CARA KONTAK LAINNYA …', 'OTHER CONTACT OPTIONS …');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_agent`
--

CREATE TABLE `corporate_agent` (
  `id` int(11) NOT NULL,
  `heading_id` varchar(16) DEFAULT NULL,
  `heading_en` varchar(16) DEFAULT NULL,
  `section_id` varchar(64) DEFAULT NULL,
  `section_en` varchar(64) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `alt_image` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `type_of_tour_id` varchar(255) DEFAULT NULL,
  `type_of_tour_en` varchar(255) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `price_en` int(11) DEFAULT NULL,
  `duration_id` varchar(32) DEFAULT NULL,
  `duration_en` varchar(32) DEFAULT NULL,
  `location_id` varchar(255) DEFAULT NULL,
  `location_en` varchar(255) DEFAULT NULL,
  `includes_id` text DEFAULT NULL,
  `includes_en` text DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `route_id` varchar(255) DEFAULT NULL,
  `route_en` varchar(255) DEFAULT NULL,
  `accomodation_id` varchar(255) DEFAULT NULL,
  `accomodation_en` varchar(255) DEFAULT NULL,
  `itinerary_notes_id` text DEFAULT NULL,
  `itinerary_notes_en` text DEFAULT NULL,
  `hotel_flights_id` text DEFAULT NULL,
  `hotel_flights_en` text DEFAULT NULL,
  `tour_period_id` text DEFAULT NULL,
  `tour_period_en` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `title`, `slug`, `alt_image`, `sub_title`, `type_of_tour_id`, `type_of_tour_en`, `price_id`, `price_en`, `duration_id`, `duration_en`, `location_id`, `location_en`, `includes_id`, `includes_en`, `description_id`, `description_en`, `route_id`, `route_en`, `accomodation_id`, `accomodation_en`, `itinerary_notes_id`, `itinerary_notes_en`, `hotel_flights_id`, `hotel_flights_en`, `tour_period_id`, `tour_period_en`, `created_at`, `updated_at`) VALUES
(1, 'Destinasi', 'Destination', 'Temukan destinasi wisata impian Anda dengan layanan pemandu wisata kami. Nikmati pengalaman perjalanan yang tak terlupakan ke tempat-tempat eksotis dan budaya yang kaya', 'Discover your dream travel destinations with our tour guide services. Enjoy unforgettable travel experiences to exotic locations and rich cultures', 'Best Of Balkan', 'best-of-balkan', '', 'Discover the Untouched Beauty of Europe', 'Tur Daratan', 'Land Tour', 10000000, 632, '15 Hari - 14 Malam', '15 Days - 14 Nights', 'Inggris', 'England', '<ul class=\"plan-list1\">\n    <li>Wisata Terbaik Gratis</li>\n    <li>Pesan Gratis</li>\n    <li>Tidak Ada Biaya Pemesanan</li>\n    <li>Jaminan Tarif Terbaik</li>\n</ul>', '<ul class=\"plan-list1\">\n                                                                        <li>Free Best Tour Guided</li>\n                                                    <li>Free Messages</li>\n                                                    <li>No Booking Charge</li>\n                                                    <li>Best Rate Gurantee</li>\n                                                            </ul>', 'Ingin mengunjungi London dan menjelajahi keindahan dari jantung negara Inggris dalam waktu singkat?\n\nTour Heart Of England dalam 7 hari ini kami buat khusus untuk Anda!\n\nKami akan mengajak Anda mengagumi London dan daerah sekitarnya yang terletak di jantung negara Inggris.\n\nKami akan membawa Anda mengunjungi tempat-tempat iconic di London, dari Big Ben sampai Istana Buckingham. Anda akan diberi kesempatan berbelanja dengan bebas di Oxford Street, menyusuri Sungai Thames diatas kapal dan menikmati gemerlapnya kota metropolitan London. Di samping itu, dengan menggunakan London sebagai markas, dalam tour ini Anda kami akan mengajak Anda melakukan day trips ke Windsor Castle dan tempat-tempat indah lainnya di jantung negara Inggris.\n\nHubungi kami segera dan bergabunglah dengan kami di Tour Heart of England!\n\nAmfiteater Flavian, lebih dikenal oleh dunia sebagai Koloseum, adalah ikon paling dikenal secara universal di Roma. Anda dapat menjelajahi objek wisata populer ini sendiri atau mengikuti tur berpemandu untuk informasi lebih lanjut dan kesempatan untuk bertanya saat Anda menjelajah.\n\nMeskipun rusak akibat kebakaran, gempa bumi, dan kelalaian, serta konversinya menjadi benteng keluarga Frangipani, penjarahan batunya untuk pembangunan istana-istana,', 'Tired of the same old scenery in Europe? Do you want to discover another beautiful, untouched side of Europe?\r\n\r\nWe invite you to explore Eastern Europe and the Balkans with us!\r\n\r\nIn this Tour, we will take you to the former Yugoslavia Federation countries, which have not been touched by many foreign tourists, and also much misunderstood. We will show to you how beautiful and unique the cultural diversity in this area is.\r\n\r\nWe will take you to visit the modern capital of Serbia, Belgrade. Then we will take you to visit Dubrovnik in Croatia, famous from “Game of Thrones”, the old town of Kotor in Montenegro and admire the cultural mix between East and West in Bosnia Herzegovina. Beside that, we will also invite you to admire the natural beauty of the Balkans, such as in Plitvice National Park, Croatia.\r\n\r\nContact us now and join us in this Best of Balkans Tour!', 'Belgrade → Sofia', 'Belgrade → Sofia', 'Hotel Bintang 4', '4-Star Hotel', 'Mari jelajahi Balkan bersama kami dan rasakan keunikan keindahan Eropa yang tak tersentuh ini.\r\n\r\nCatatan: Anda dapat menyesuaikan itinerary di sini di bawah ini sesuai keinginan. Rencana perjalanan dapat berubah tiba-tiba karena keterbatasan yang diberlakukan oleh pemerintah setempat atau perubahan situasi yang tidak terduga di lokasi.', 'Let\'s explore the Balkans with us and experience the uniqueness of this untouched European beauty.\r\n\r\nNote: you can customize the itinerary here below as you wish. Itinerary can change suddenly due to limitations imposed by local governments or unexpected change in situation on site.', 'Hotel selama Tour\r\nApabila Anda ingin merubah type hotel atau jenis akomodasi, silakan beritahukan keinginan Anda kepada kami. Kira-kira 1 bulan sebelum tanggal keberangkatan, kami akan mengeluarkan daftar akhir nama-nama hotel yang akan Anda tempati.\r\n\r\nPenerbangan\r\nSaat ini tiket penerbangan tidak termasuk dalam Tour kami ini. Apabila Anda ingin menyerahkan pelayanan pemesanan tiket penerbangan kepada kami, silakan beritahukan kepada kami.', 'Hotel during Tour\r\nIf you would like to change type of accommodation or hotel, please submit your request to us. Around 1 month before the departure date, we will issue the final list of hotels where you will stay.\r\n\r\nFlights\r\nAt the moment, flights are not included in this Tour. If you would like us to arrange your flights, please let us know.', 'Periode penawaran Tour\r\nKami menawarkan Tour Heart of England ini sepanjang tahun.\r\n\r\nPeriode terbaik untuk berkunjung\r\nAntara bulan Maret dan November adalah waktu yang baik untuk mengunjungi Inggris dan UK. Tetapi, untuk benar-benar menikmati kunjungan Anda secara maximal, bulan April, Mei, September, Oktober dan November bisa dikatakan adalah waktu yang terbaik dikarenakan cuaca yang baik, tidak terlalu ramai dan banyak tempat wisata yang aktif. Apabila Anda tidak keberatan dengan suhu yang dingin, kunjungi Inggris dan UK di bulan Desember untuk menikmati suasana Natal.', 'Tour offering period\r\nWe offer this Best of Balkans Tour all year round.\r\n\r\nBest time to visit\r\nBetween March and November is a good time to visit the Balkans. However, in order to fully enjoy your visit, April, May, September and October are arguably the best times due to the good weather, not too crowded and many tourist spots are open.', '2024-03-26 05:40:51', NULL),
(2, 'Destinasi', 'Destination', 'Temukan destinasi wisata impian Anda dengan layanan pemandu wisata kami. Nikmati pengalaman perjalanan yang tak terlupakan ke tempat-tempat eksotis dan budaya yang kaya', 'Discover your dream travel destinations with our tour guide services. Enjoy unforgettable travel experiences to exotic locations and rich cultures', 'Best Of Switzerland', 'best-of-switzerland', '', 'Marvel At Europe\'s Unrivaled Natural Beauty', 'Tur Daratan', 'Land Tour', 9500000, 625, '11 Hari - 10 Malam', '11 Days - 10 Nights', 'Swiss', 'Switzerland', '<ul class=\"plan-list1\">\n    <li>Wisata Terbaik Gratis</li>\n    <li>Pesan Gratis</li>\n    <li>Tidak Ada Biaya Pemesanan</li>\n    <li>Jaminan Tarif Terbaik</li>\n</ul>', '<ul class=\"plan-list1\">\n                                                                        <li>Free Best Tour Guided</li>\n                                                    <li>Free Messages</li>\n                                                    <li>No Booking Charge</li>\n                                                    <li>Best Rate Gurantee</li>\n                                                            </ul>', 'Apakah Anda ingin bersenang-senang di atas Alpen dan kagum dengan keindahan alam Swiss?\r\n\r\nTur Terbaik di Swiss selama 11 hari ini dibuat khusus untuk Anda!\r\n\r\nKami akan membawa Anda untuk menjelajahi dan mengagumi keanekaragaman keindahan alam di Swiss.\r\n\r\nMulai dari bersenang-senang di atas Alpen hingga mengagumi air jernih berwarna biru toska danau-danau, tur ini memberikan Anda kesempatan yang sangat baik untuk melihat panorama alam di Swiss, seperti yang ada di kalender atau kartu pos. Dalam tur ini, kami juga akan membawa Anda ke desa-desa kecil yang tinggi di atas gunung yang jarang dikunjungi wisatawan, sambil menikmati fondue keju asli Swiss.\r\n\r\nHubungi kami sekarang dan bergabunglah dengan kami dalam Tur Terbaik di Swiss ini!', 'Do you want to have a snow fun on the top of the Alps and marvel at the natural beauty of Switzerland?\r\n\r\nThis Best of Switzerland Tour in 11 days is made especially for you!\r\n\r\nWe will bring you to explore and admire the diversity of natural beauties in Switzerland.\r\n\r\nFrom having snow fun on top of the Alps to admiring the clear turquoise water of the lakes, this tour provides you with an excellent opportunity to see the natural panorama in Switzerland, like those in a calendar or postcard. In this tour, we will also bring you to small villages high up on the mountains that are seldom visited by tourists, while tasting Swiss\' authentic cheese fondue\r\n\r\nContact us now and join us in this Best of Switzerland Tour!', 'Zurich → Zurich', 'Zurich → Zurich', 'Hotel Bintang 4', '4-Star Hotel ', 'Dengan Best of Switzerland Tour ini, kami mengundang Anda untuk mengagumi keindahan alam Swiss yang tak tertandingi.\r\n\r\nCatatan: Anda dapat menyesuaikan itinerary di sini di bawah ini sesuai keinginan. Rencana perjalanan dapat berubah tiba-tiba karena keterbatasan yang diberlakukan oleh pemerintah setempat atau perubahan situasi yang tidak terduga di lokasi.', 'With this Best of Switzerland Tour, we invite you to marvel at the unrivaled natural beauty of Switzerland.\r\n\r\nNote: you can customize the itinerary here below as you wish. Itinerary can change suddenly due to limitations imposed by local governments or unexpected change in situation on site.', 'Hotel selama Tour\r\nJika Anda ingin mengubah jenis akomodasi atau hotel, silakan kirimkan permintaan Anda kepada kami. Sekitar 1 bulan sebelum tanggal keberangkatan, kami akan mengeluarkan daftar akhir hotel tempat Anda akan menginap.\r\n\r\nPenerbangan\r\nSaat ini, penerbangan tidak termasuk dalam Tur ini. Jika Anda ingin kami mengatur penerbangan Anda, beri tahu kami.', 'Hotel during Tour\r\nIf you would like to change type of accommodation or hotel, please submit your request to us. Around 1 month before the departure date, we will issue the final list of hotels where you will stay.\r\n\r\nFlights\r\nAt the moment, flights are not included in this Tour. If you would like us to arrange your flights, please let us know.', 'Periode Penawaran Tur\r\nKami menawarkan Tur Terbaik di Swiss ini sepanjang tahun.\r\n\r\nAntara Maret dan November adalah waktu yang baik untuk mengunjungi Swiss. Namun, untuk benar-benar menikmati kunjungan Anda secara maksimal, bulan April, Mei, September, Oktober, dan November adalah waktu yang paling baik karena cuaca yang bagus, tidak terlalu ramai, dan banyak tempat wisata yang buka. Jika Anda tidak keberatan dengan suhu dingin, datanglah ke Swiss pada bulan Desember untuk menikmati suasana Natal dengan mengunjungi Pasar Natal di banyak kota di Swiss.', 'Tour offering period\r\nWe offer this Best of Switzerland Tour all year round.\r\n\r\nBetween March and November is a good time to visit Switzerland. However, in order to really enjoy your visit to the fullest, April, May, September, October and November are arguably the best times because the good weather, not too crowded and many tourist spots are open. If you don\'t mind cold temperatures, head to Switzerland in December to enjoy the Christmas atmosphere by visiting the Christmas Markets in many cities in Switzerland.', NULL, NULL),
(3, 'Destinasi', 'Destination', 'Temukan destinasi wisata impian Anda dengan layanan pemandu wisata kami. Nikmati pengalaman perjalanan yang tak terlupakan ke tempat-tempat eksotis dan budaya yang kaya', 'Discover your dream travel destinations with our tour guide services. Enjoy unforgettable travel experiences to exotic locations and rich cultures', 'Best Of Italy', 'best-of-italy', '', 'Experience the \"La Dolce Vita\" In Italy', 'Land Tour', 'Land Tour', 10000000, 500, '12 Hari – 11 Malam', '11 Days - 11 Nights', 'Italy', 'Italy', '<ul>\n<li>Transport (mobil atau (mini)bus) sesuai kapasitas</li>\n<li>Akomodasi hotel 3* – 4* incl. breakfast</li>\n<li>Sopir &amp; guide selama tour berlangsung (max. 9 jam/hari)</li>\n<li>Biaya BBM, parking, toll</li>\n<li>Biaya akomodasi &amp; makan untuk sopir &amp; guide</li>\n</ul>', '<ul>\r\n<li>Transportation (car or (mini)bus) according to capacity</li>\r\n<li>Hotel 3* – 4* incl. breakfast</li>\r\n<li>Driver &amp; guide for the whole tour (max. 9 hours/day)</li>\r\n<li>Fuel, parking &amp; toll costs</li>\r\n<li>Accommodation &amp; food expenses for driver &amp; guide</li>\r\n</ul>', '<p><span style=\"font-size: large;\"><strong>Apakah Anda ingin mengunjungi negara yang romantis, bersejarah, dan memiliki harta kuliner luar biasa?</strong></span></p>\n<p>Tour Terbaik Italia selama 12 hari ini pasti untuk Anda!</p>\n<p class=\"translation-block\">Dalam Tur ini, kami akan membawa Anda menikmati kehidupan yang indah di Italia (La Dolce Vita): kagum pada tempat-tempat ikonik dan bersejarah, menikmati pizza, pasta yang disertai dengan gelato, espresso, cappuccino, atau anggur Italia terkenal.</p>\n<p class=\"translation-block\">Kami akan membawa Anda mengunjungi Venice yang romantis, melihat Colosseum di Roma, dan mengagumi karya seni dari era Renaissance di Florence. Selain itu, kami juga akan membawa Anda merasakan keindahan alam Italia, seperti Gunung Vesuvius di Pompeii, Pantai Amalfi yang mempesona, dan pulau indah Capri di Laut Mediterania.</p>\n<p>Hubungi kami sekarang dan bergabunglah dengan kami dalam Tur Terbaik Italia ini!</p>', '<p><span style=\"font-size: large;\"><strong>Do you want to visit a country that is romantic, historical, and has extraordinary culinary treasures?</strong></span></p>\r\n<p>This Best of Italy Tour in 12 days is definitely for you!</p>\r\n<p class=\" translation-block\">In this Tour, we will take you to enjoy the beautiful life in Italy (La Dolce Vita): marvel at the <em> iconic </em> and historical places, enjoy <em> pizza, pasta </em> accompanied by <em> gelato, espresso, cappuccino </em> or famous Italian wines.</p>\r\n<p class=\" translation-block\">We will take you to visit romantic Venice, see the Colosseum in Rome and admire works of art from the <em> Renaissance </em> era in Florence. In addition, we will also take you to soak the natural beauty of Italy, such as Mount Vesuvius in Pompeii, the enchanting Amalfi Coast and the beautiful island of Capri in the Mediterranean Sea.</p>\r\n<p>Contact us now and join us in this Best of Italy Tour!</p>', 'Milan → Milan', 'Milan → Milan', 'Hotel Bintang 4', '4-Star Hotel', '<p>Nikmatilah kehidupan indah (La Dolce Vita) di Italia bersama Tour Best of Italy kami.</p>\r\n<p><em><strong>Catatan:&nbsp;</strong></em>Anda bisa merubah itinerary dibawah ini apabila Anda inginkan. Itinerary juga bisa berubah sewaktu-waktu apabila ada pembatasan dari pemerintah setempat atau keadaan di lapangan tidak memungkinkan.</p>', '<p>Enjoy the wonderful life (La Dolce Vita) in Italy with our Best of Italy Tour.</p>\r\n<p class=\" translation-block\"><em><strong>Note:&nbsp;</strong></em>you can customize the itinerary here below as you wish. Itinerary can change suddenly due to limitations imposed by local governments or unexpected change in situation on site.</p>', '<p><strong>Hotel selama Tour</strong><br> Apabila Anda ingin merubah type hotel atau jenis akomodasi, silakan beritahukan keinginan Anda kepada kami. Kira-kira 1 bulan sebelum tanggal keberangkatan, kami akan mengeluarkan daftar akhir nama-nama hotel yang akan Anda tempati.</p>\r\n<p><b>Penerbangan</b><br> Saat ini tiket penerbangan tidak termasuk dalam Tour kami ini. Apabila Anda ingin menyerahkan pelayanan pemesanan tiket penerbangan kepada kami, silakan beritahukan kepada kami.</p>', '<p><strong>Hotels during the Tour</strong><br> If you wish to change the hotel type or accommodation type, please inform us of your preferences. Approximately 1 month before the departure date, we will issue the final list of hotel names that you will be staying at.</p>\r\n<p><b>Flights</b><br> Currently, flight tickets are not included in our Tour. If you would like us to handle the flight ticket booking service for you, please let us know.</p>', '<p><strong>Periode penawaran Tour</strong><br> Kami menawarkan Best of Italy Tour sepanjang tahun.</p>\r\n<p><strong>Periode terbaik untuk berkunjung</strong><br> Antara bulan April sampai November adalah waktu yang baik untuk mengunjungi Italia. Tetapi, untuk benar-benar menikmati kunjungan Anda secara maximal, bulan April, Mei, September dan Oktober bisa dikatakan adalah waktu yang terbaik dikarenakan cuaca yang baik, tidak terlalu ramai dan banyak tempat wisata yang aktif.</p>\r\n<p>&nbsp;</p>', '<p><strong>Tour offering period</strong><br> We offer this Best of Italy Tour all year round.</p>\r\n<p><strong>Best time to visit</strong><br> Between April and November is a good time to visit Italy. However, in order to really enjoy your visit to the fullest, April, May, September and October are arguably the best times because the good weather, not too crowded and many tourist spots are open.</p>\r\n<p>&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_corporate_agent`
--

CREATE TABLE `detail_corporate_agent` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `section_id` varchar(64) NOT NULL,
  `section_en` varchar(64) NOT NULL,
  `section_title_id` varchar(255) NOT NULL,
  `section_title_en` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_corporate_agent`
--

INSERT INTO `detail_corporate_agent` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `section_id`, `section_en`, `section_title_id`, `section_title_en`, `image`, `title_id`, `title_en`, `description_id`, `description_en`) VALUES
(1, 'Layanan Wisata dan Acara Bisnis di Eropa | Your Private Europe', 'Travel and Business Event Services in Europe | Your Private Europe', 'Your Private Europe adalah mitra terpercaya untuk travel agent dan perusahaan yang merencanakan perjalanan wisata dan acara bisnis di Eropa.', 'Your Private Europe is a trusted partner for travel agents and companies planning leisure and business trips and events in Europe', 'Mitra Kerja Terpercaya', 'Trusted Partner', 'Percayakan Kebutuhan Perusahaan Anda Di Eropa Kepada Kami', 'Trust Us With Your Organizational Needs in Europe', '1.jpeg', 'Incentives Group Tour', 'Incentives Group Tour', '<p>Ingin merencanakan Incentives Group Tour ke Eropa? Atau Anda butuh solusi custom-made private &amp; group tour untuk klien Anda?</p>\r\n<p>Apakah Anda travel agent atau perusahaan multinasional, kami berpengalaman bekerjasama dengan Anda untuk memberikan solusi yang terbaik.</p>\r\n<p>Sesuai dengan keinginan dan budget Anda, kami akan membuat program khusus yang pasti akan membuat klien Anda puas, makin mendorong ambisi dan memotivasi para pencetak prestasi terbaik Anda.</p>\r\n<p>Kami siap melayani Anda dalam pengadaan:</p>\r\n<ul>\r\n<li>Itinerary &amp; program</li>\r\n<li>Tiket pesawat &amp; visa</li>\r\n<li>Akomodasi</li>\r\n<li>Venue</li>\r\n<li>Transport</li>\r\n<li>Staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p>Do you want to plan an Incentives Group Tour to Europe? Or do you need a custom-made private &amp; group tour solutions for your clients?</p>\r\n<p>Whether you are a travel agent or a multinational company, we are experienced in working with you to provide the best solution.</p>\r\n<p>According to your wishes and budget, we will create a special program that would surely satisfy your clients, further boost your ambition and motivate your top performers.</p>\r\n<p>We are ready to serve you with:</p>\r\n<ul>\r\n<li>Itinerary &amp; program</li>\r\n<li>Airplane tickets &amp; visa</li>\r\n<li>Accommodation</li>\r\n<li>Venue</li>\r\n<li>Transportation</li>\r\n<li>Staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(2, 'Layanan Wisata dan Acara Bisnis di Eropa | Your Private Europe', 'Travel and Business Event Services in Europe | Your Private Europe', 'Your Private Europe adalah mitra terpercaya untuk travel agent dan perusahaan yang merencanakan perjalanan wisata dan acara bisnis di Eropa.', 'Your Private Europe is a trusted partner for travel agents and companies planning leisure and business trips and events in Europe', 'Mitra Kerja Terpercaya', 'Trusted Partner', 'Percayakan Kebutuhan Perusahaan Anda Di Eropa Kepada Kami', 'Trust Us With Your Organizational Needs in Europe', '2.jpg', 'Event Management & Logistics', 'Event Management & Logistics', '<p>Percayakan Event Anda di Eropa kepada kami. Kami siap membantu persiapan dan pelaksanaan Event Anda, dari pemikiran konsep, eksekusi, hingga hal-hal logistik lainnya.</p>\r\n<p>Mulai dari <strong>Gala Dinner,</strong> <strong>Brand/Product Launching</strong>, <strong>Company Party</strong> hingga Event bisnis lainnya, kami telah berpengalaman dan selalu menerapkan cara kerja yang holistik, dan melihat Event Anda secara end-to-end.</p>\r\n<p>Kami siap melayani dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue</li>\r\n<li>Akomodasi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Event staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Gifts &amp; teasers</li>\r\n</ul>', '<p>Trust us with organizing your event in Europe. We are ready to help with the preparation and implementation of your event, from conceptual thinking, execution, to other logistical items.</p>\r\n<p>Mulai dari <strong>Gala Dinner,</strong> <strong>Brand/Product Launching</strong>, <strong>Company Party</strong> hingga Event bisnis lainnya, kami telah berpengalaman dan selalu menerapkan cara kerja yang holistik, dan melihat Event Anda secara end-to-end.</p>\r\n<p>Kami siap melayani dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue</li>\r\n<li>Accommodation</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Event staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Gifts &amp; teasers</li>\r\n</ul>'),
(3, 'Layanan Wisata dan Acara Bisnis di Eropa | Your Private Europe', 'Travel and Business Event Services in Europe | Your Private Europe', 'Your Private Europe adalah mitra terpercaya untuk travel agent dan perusahaan yang merencanakan perjalanan wisata dan acara bisnis di Eropa.', 'Your Private Europe is a trusted partner for travel agents and companies planning leisure and business trips and events in Europe', 'Mitra Kerja Terpercaya', 'Trusted Partner', 'Percayakan Kebutuhan Perusahaan Anda Di Eropa Kepada Kami', 'Trust Us With Your Organizational Needs in Europe', '3.jpg', 'Pameran, Expo & Exhibition', 'Fair, Expo & Exhibition', '<p>Apakah perusahaan Anda ingin menyelenggarakan <strong>pameran</strong> di Eropa? Atau berpartisipasi dalam <strong>Expo</strong> <strong>atau Trade Fair</strong>&nbsp;berskala internasional di Eropa?</p>\r\n<p>Gunakan pengalaman dan <em>know-how</em> dari team kami, yang sudah terbiasa merencanakan, merancang, dan mengelola Pameran &amp; Exhibition dalam berbagai ukuran di seluruh Eropa.</p>\r\n<p>Kami siap membantu dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue &amp; akomodasi</li>\r\n<li>Desain, logistik dan konstruksi stand pameran</li>\r\n<li>Branding dan signage</li>\r\n<li>Lighting, rigging dan special effects lainnya</li>\r\n<li>Jaringan internet dan elektrik</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p class=\" translation-block\">Does your organization want to host <strong> exhibitions </strong> in Europe? Or do you want to participate in the <strong>Expo</strong> <strong>or International Trade Fair</strong> in Europe?</p>\r\n<p class=\" translation-block\">Leverage the experience and <em>know-how </em>of our team, who are used to planning, designing, and managing Fairs &amp; Exhibitions of various sizes across Europe.</p>\r\n<p>We are ready to serve you with:</p>\r\n<ul>\r\n<li>Venue &amp; accommodation</li>\r\n<li>Design, logistics and construction of exhibition stand</li>\r\n<li>Branding and signage</li>\r\n<li>Lighting, rigging and other special effects</li>\r\n<li>Internet connection and electricity network</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(4, 'Layanan Wisata dan Acara Bisnis di Eropa | Your Private Europe', 'Travel and Business Event Services in Europe | Your Private Europe', 'Your Private Europe adalah mitra terpercaya untuk travel agent dan perusahaan yang merencanakan perjalanan wisata dan acara bisnis di Eropa.', 'Your Private Europe is a trusted partner for travel agents and companies planning leisure and business trips and events in Europe', 'Mitra Kerja Terpercaya', 'Trusted Partner', 'Percayakan Kebutuhan Perusahaan Anda Di Eropa Kepada Kami', 'Trust Us With Your Organizational Needs in Europe', '4.jpg', 'Conference & Meetings', 'Conference & Meetings', '<p>Dengan menggabungkan pengalaman kami dan mendengarkan kebutuhan Anda, kami yakin kami sanggup memberikan solusi untuk Conference &amp; Meetings yang optimal.</p>\r\n<p>Kami menerapkan cara kerja yang kolaboratif, terstruktur dan mencakup proses pelaksanaan yang efisien, terperinci dan terpadu.</p>\r\n<p>Kami akan membantu Anda dengan:</p>\r\n<ul>\r\n<li>Pemilihan venue</li>\r\n<li>Pengaturan Conference Room, Audio Visual &amp; refreshments</li>\r\n<li>Pengaturan agenda &amp; pelaksanaan eksekusi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Akomodasi</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p>By combining our experience and listening to your needs, we believe we can provide an optimal solution for your Conference &amp; Meetings.</p>\r\n<p>We adopt a collaborative, structured way of working and include an efficient, detailed and integrated implementation process.</p>\r\n<p>We are ready to help you with:</p>\r\n<ul>\r\n<li>Venue selection</li>\r\n<li>Conference Room, Audio Visual &amp; refreshments</li>\r\n<li>Agenda &amp; execution</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Accommodation</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(5, 'Layanan Wisata dan Acara Bisnis di Eropa | Your Private Europe', 'Travel and Business Event Services in Europe | Your Private Europe', 'Your Private Europe adalah mitra terpercaya untuk travel agent dan perusahaan yang merencanakan perjalanan wisata dan acara bisnis di Eropa.', 'Your Private Europe is a trusted partner for travel agents and companies planning leisure and business trips and events in Europe', 'Mitra Kerja Terpercaya', 'Trusted Partner', 'Percayakan Kebutuhan Perusahaan Anda Di Eropa Kepada Kami', 'Trust Us With Your Organizational Needs in Europe', '5.jpg', 'Site Visit & Team Building', 'Site Visit & Team Building', '<p>Ingin menyelenggarakan acara&nbsp;<strong>Site Visit, Off-Site Training, atau Team Building</strong> di Eropa bersama karyawan Anda? Rencanakan aktivitas Anda bersama kami.</p>\r\n<p>Dengan pengalaman, keterampilan, dan kreativitas kami yang luas dan unik, Anda bisa yakin bahwa acara Anda terorganisir dengan baik, dan team Anda akan dibekali dengan aktivitas yang tepat.</p>\r\n<p>Beri motivasi dan energi kepada karyawan Anda. Kami akan bekerja sama dengan Anda dan memberikan solusi sesuai dengan budget dan tujuan organisasi Anda.</p>\r\n<p>Kami akan membantu Anda dengan:</p>\r\n<ul>\r\n<li>Pemilihan aktivitas &amp; venue</li>\r\n<li>Pengaturan agenda dan pelaksanaan eksekusi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Pemilihan pembicara</li>\r\n<li>Akomodasi</li>\r\n<li>Hal-hal logistik lainnya.</li>\r\n</ul>', '<p class=\" translation-block\">Do you want to host a <strong> Site Visit, Off-Site Training, or Team Building </strong> in Europe with your employees? Plan your activities with us.</p>\r\n<p>With our experience, skills and creativity, you can be sure that your event is well organized, and that your team will be equipped with the right activities.</p>\r\n<p>Give motivation and energy to your team. We will work with you and provide solutions according to your organization\'s budget and goals.</p>\r\n<p>We are ready to help you with:</p>\r\n<ul>\r\n<li>Venue &amp; activity selections</li>\r\n<li>Agenda &amp; execution</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Speaker selection</li>\r\n<li>Accommodation</li>\r\n<li>Other logistical items</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `detail_other_services`
--

CREATE TABLE `detail_other_services` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `faq_section_id` varchar(255) NOT NULL,
  `faq_section_en` varchar(255) NOT NULL,
  `faq_title_id` varchar(255) NOT NULL,
  `faq_title_en` varchar(255) NOT NULL,
  `id_faq_category` int(11) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `faq_section_id`, `faq_section_en`, `faq_title_id`, `faq_title_en`, `id_faq_category`, `title_id`, `title_en`, `description_id`, `description_en`) VALUES
(1, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 1, 'Bagaimana caranya untuk memesan pelayanan tour di Your Private Europe?', 'How do I book a tour in Your Private Europe?', 'Untuk pemesanan pelayanan, silakan hubungi kami melalui cara kontak di halaman <strong><a href=\"https://yourprivateeurope.eu/hubungi-kami/\">Hubungi Kami</a></strong>.<p></p>\r\n<p>Jangan ragu untuk menghubungi kami juga, apabila Anda ingin bertanya lebih lanjut tentang layanan kami.</p>', 'To book our service, please contact us through page <strong><a href=\"https://yourprivateeurope.eu/en/hubungi-kami/\">Contact Us</a></strong>.<p></p>\r\n<p>Don\'t hesitate to also contact us, if you have further questions about our services.</p>\r\n'),
(2, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 1, 'Apakah saya bisa memesan pelayanan  secara mendadak?', 'Can I make a last-minute booking for your service?', '<p>Ya tentu saja, tetapi dengan syarat Anda harus sudah memiliki visa Schengen yang masih berlaku. Selambat-lambatnya Anda bisa memesan pelayanan kami sampai <strong>7 hari kerja</strong> sebelum tanggal keberangkatan.&nbsp;</p>', '<p class=\" translation-block\">Yes of course, but only if you already possess a valid Schengen visa. At the latest, you can book our services up to <strong>7 working days</strong> before the departure date.</p>\r\n'),
(3, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 2, 'Bagaimana cara sistem pembayaran untuk pelayanan Your Private Europe?', 'How does your payment scheme look like?', '<p>Sistem pembayaran untuk pelayanan kami terdiri dari 2 tahap:</p>\r\n<ul>\r\n<li>Pembayaran uang muka (DP) sebesar 50% setelah persetujuan proposal</li>\r\n<li>Pembayaran sisa 50%</li>\r\n</ul>\r\n<p>Pembayaran uang muka (DP) sebesar 50% harus dilunasi <strong>dalam 3 hari kerja</strong> setelah persetujuan proposal. Sedangkan pembayaran sisa 50% bisa dicicil/dilunasi sampai <strong>3 hari kerja sebelum </strong>tanggal keberangkatan tour.</p>\r\n', '<p>Our payment scheme consists of 2 stages:</p>\r\n<ul>\r\n<li>Down Payment (DP) of 50% after the approval of the proposal</li>\r\n<li>Payment of the remaining 50%</li>\r\n</ul>\r\n<p class=\" translation-block\">Down Payment (DP) of 50% must be paid within <strong>3 working days</strong> after proposal approval. The payment of remaining 50% can be paid in installments until <strong>3 working days </strong> before the departure date.</p>\r\n'),
(4, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 2, 'Apakah pembayaran harus dalam bentuk Euro?', 'Do I have to pay in Euro?', '<p>Tidak. Proposal harga kami memang dalam mata uang Euro, tetapi Anda bisa membayar dalam bentuk Euro maupun Rupiah.&nbsp;Kami akan menentukan jumlah pembayaran dalam Rupiah menurut kurs EUR/IDR yang berlaku pada hari pembayaran.</p>', '<p>No. We will issue our price quote in Euro, but you can choose to pay either in Euro or Rupiah. We will determine the amount to be paid in Rupiah according to the EUR/IDR exchange rate on the day of payment.</p>\r\n'),
(5, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 2, 'Apa saja cara pembayaran yang bisa diterima?', 'What kind of payment methods are accepted?', '<p>Untuk sekarang, pembayaran hanya bisa diterima melalui bank transfer.&nbsp;Pembayaran dapat dilakukan melalui bank transfer ke nomor rekening dibawah ini.</p>\r\n<p><strong>Euro Account</strong></p>\r\n<p>Nama bank:&nbsp; &nbsp; &nbsp; OCBC NISP<br>No. rekening:&nbsp; &nbsp; 52800014830<br>Atas nama:&nbsp; &nbsp; &nbsp; &nbsp; PT. Mitrawisata Jelajah Buana<br>Alamat:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Dharmahusada Mas VII AB-22, 60115 Surabaya</p>\r\n<p><strong>Rupiah Account</strong></p>\r\n<p>Nama bank:&nbsp; &nbsp; &nbsp; Bank Central Asia<br>No. rekening:&nbsp; &nbsp; 7230537555<br>Atas nama:&nbsp; &nbsp; &nbsp; &nbsp; PT. Mitrawisata Jelajah Buana<br>Alamat:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Dharmahusada Mas VII AB-22, 60115 Surabaya</p>', '<p>For now, payment can only be accepted via bank transfer. Payment can be made to below accounts.</p>\r\n<p><strong>Euro Account</strong></p>\r\n<p>Nama bank:&nbsp; &nbsp; &nbsp; OCBC NISP<br>No. rekening:&nbsp; &nbsp; 52800014830<br>Atas nama:&nbsp; &nbsp; &nbsp; &nbsp; PT. Mitrawisata Jelajah Buana<br>Alamat:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Dharmahusada Mas VII AB-22, 60115 Surabaya</p>\r\n<p><strong>Rupiah Account</strong></p>\r\n<p>Bank name:&nbsp; &nbsp; &nbsp; Bank Central Asia<br>No. rekening:&nbsp; &nbsp; 7230537555<br>Atas nama:&nbsp; &nbsp; &nbsp; &nbsp; PT. Mitrawisata Jelajah Buana<br>Alamat:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Jl. Dharmahusada Mas VII AB-22, 60115 Surabaya</p>'),
(6, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 1, 'Apakah Your Private Europe menawarkan paket tour All-Inclusive?', 'Does Your Private Europe offer All-Inclusive tour packages?', '<p>Ya, untuk saat ini kami menawarkan beberapa paket All-Inclusive (tiket, visa, makan, akomodasi, transport dll.) untuk Private &amp; Group Tour yang Anda bisa pilih. <strong><a href=\"https://yourprivateeurope.eu/hubungi-kami/\">Hubungi kami</a></strong> untuk mengetahui lebih lanjut tentang paket All-Inclusive yang kami tawarkan.</p>', '<p>Yes, currently we offer several All-Inclusive packages (tickets, visas, meals, accommodation, transport etc.) for Private &amp; Group Tours that you can choose from. <strong><a href=\"https://yourprivateeurope.eu/en/hubungi-kami/\">Contact us</a></strong> to find out more about the All-Inclusive packages we currently offer.</p>'),
(7, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 1, 'Apakah saya bisa mengubah (customize) paket tour yang sudah ada?', 'Can I customize the available tour packages?', '<p>Tentu saja! Konsep pelayanan kami yang flexible memungkinkan Anda untuk mengubah paket tour yang kami tawarkan. Silakan <a href=\"https://yourprivateeurope.eu/hubungi-kami/\"><strong>hubungi kami</strong> </a>dengan mencantumkan paket tour yang Anda minati, dan cantumkan perubahan-perubahan yang Anda inginkan.</p>', '<p class=\" translation-block\">Of course! Our flexible service concept allows you to customize any tour packages we currently offer. Please <a href=\"https://yourprivateeurope.eu/hubungi-kami/\" target=\"_self\"><strong>hubungi kami</strong> </a> and mention the tour package you are interested in, and inform us the customization that you want.</p>'),
(8, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 2, 'Apakah saya bisa membayar secara kontan, sesudah saya sampai di Eropa?', 'Can I pay in cash upon my arrival in Europe?', '<p>Sayang sekali tidak. Untuk alasan keamanan, kami memilih untuk tidak menerima pembayaran secara kontan waktu Anda tiba di Eropa. Jadi Anda juga tidak perlu ambil risiko keamanan, dengan membawa uang kontan yang berlebihan dari Indonesia masuk ke Eropa.</p>', '<p>Unfortunately no. For security reasons, we prefer not to accept payments in cash when you arrive in Europe. Therefore, you also don\'t have to take any risk by bringing excessive cash from Indonesia into Europe.</p>'),
(9, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 3, 'Apakah saya bisa merubah/membatalkan tour yang sudah saya pesan?', 'Can I change/cancel the tour that is already booked?', '<p>Meskipun tidak diinginkan, tetapi kami mengerti apabila rencana kunjungan Anda ke Eropa dapat berubah.</p>\r\n<p>Perubahan/pembatalan tour harus dilakukan <strong>60 hari</strong> <strong>sebelum</strong> tanggal keberangkatan. Tolong hubungi kami secepatnya apabila ada perubahan/pembatalan mengenai waktu keberangkatan, jadwal, jumlah orang, dan lain sebagainya.</p>', '<p>Although it is not desirable, we understand that your plans for visiting Europe may change.</p>\r\n<p class=\" translation-block\">Changes/cancellation of tour has to be done <strong>60 days</strong> before the departure date. Please contact us as soon as possible if there is any change on departure time, schedule, number of people etc.</p>'),
(10, 'Questions & Answer | Your Private Europe', 'Questions & Answer | Your Private Europe', 'Temukan jawaban atas pertanyaan yang sering diajukan tentang layanan perjalanan, pemesanan, dan lainnya. Temukan bagaimana agen perjalanan kami dapat membuat perjalanan Anda berikutnya tak terlupakan', 'Discover answers to frequently asked questions about travel services, bookings, and more. Find out how our travel agency can make your next trip unforgettable', 'PERTANYAAN YANG SERING DIAJUKAN', 'FREQUENTLY ASKED QUESTIONS', 'Bila Pertanyaan Anda Tidak Dibawah Ini, Silakan Hubungi Kami', 'If You Cannot Find Your Answer Here Below, Please Contact Us', 3, 'Apakah saya bisa mendapat refund untuk tour yang saya batalkan?', 'Can I get a refund if I cancel my tour?', '<p>Meskipun kami mengerti pembatalan bisa terjadi karena satu dan lain hal, sayang sekali kami tidak bisa memberikan refund untuk tour yang Anda batalkan.</p>\r\n<p>Kami hanya memberikan refund apabila permohonan visa Schengen Anda ditolak. Dalam situasi ini, kami akan memberikan refund pembayaran uang muka (DP) <strong><em>minus:</em></strong></p>\r\n<ul>\r\n<li>Ongkos pengurusan visa Schengen (hanya apabila Anda mengambil layanan pengurusan visa kami)</li>\r\n<li>Ongkos administrasi sebesar 10% dari jumlah uang muka (DP)</li>\r\n</ul>', '<p>Although we understand that cancellations can happen for one reason or another, unfortunately we cannot provide refunds for tours that you have canceled.</p>\r\n<p class=\" translation-block\">We will provide refund only in case that your Schengen visa application is rejected. In this particular situation, we will refund your Down Payment (DP) <strong><em>minus:</em></strong></p>\r\n<ul>\r\n<li>Schengen visa application cost (only if you arrange your visa with us)</li>\r\n<li>Administration cost amounted to 10% of the Down Payment (DP)</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `id_faq_category` int(11) NOT NULL,
  `name_id` varchar(64) DEFAULT NULL,
  `name_en` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_category`
--

INSERT INTO `faq_category` (`id_faq_category`, `name_id`, `name_en`) VALUES
(1, 'Reservasi', 'Reservation'),
(2, 'Pembayaran', 'Payment'),
(3, 'Pembatalan & Refund', 'Cancellation & Refund');

-- --------------------------------------------------------

--
-- Table structure for table `founder_social_media`
--

CREATE TABLE `founder_social_media` (
  `id` int(11) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) NOT NULL,
  `seo_tag_title_en` varchar(255) NOT NULL,
  `seo_description_id` varchar(255) NOT NULL,
  `seo_description_en` varchar(255) NOT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `sub_title_id` varchar(255) DEFAULT NULL,
  `sub_title_en` varchar(255) DEFAULT NULL,
  `description_id` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `our_services_section_id` varchar(64) NOT NULL,
  `our_services_section_en` varchar(64) NOT NULL,
  `our_services_title_id` varchar(64) DEFAULT NULL,
  `our_services_title_en` varchar(64) NOT NULL,
  `testimonial_section_id` varchar(64) NOT NULL,
  `testimonial_section_en` varchar(255) NOT NULL,
  `testimonial_title_id` varchar(64) NOT NULL,
  `testimonial_title_en` varchar(255) NOT NULL,
  `commitment_section_id` varchar(255) DEFAULT NULL,
  `commitment_section_en` varchar(255) DEFAULT NULL,
  `commitment_title_id` varchar(64) DEFAULT NULL,
  `commitment_title_en` varchar(64) DEFAULT NULL,
  `trending_destination_section_id` varchar(64) DEFAULT NULL,
  `trending_destination_section_en` varchar(64) DEFAULT NULL,
  `trending_destination_title_id` varchar(64) DEFAULT NULL,
  `trending_destination_title_en` varchar(64) DEFAULT NULL,
  `upcoming_events_section_id` varchar(64) NOT NULL,
  `upcoming_events_section_en` varchar(255) NOT NULL,
  `upcoming_events_title_id` varchar(64) NOT NULL,
  `upcoming_events_title_en` varchar(255) NOT NULL,
  `target_market_section_id` varchar(64) DEFAULT NULL,
  `target_market_section_en` varchar(64) DEFAULT NULL,
  `target_market_title_id` varchar(64) DEFAULT NULL,
  `target_market_title_en` varchar(64) DEFAULT NULL,
  `usp_section_id` varchar(64) DEFAULT NULL,
  `usp_section_en` varchar(64) DEFAULT NULL,
  `usp_title_id` varchar(255) DEFAULT NULL,
  `usp_title_en` varchar(255) DEFAULT NULL,
  `three_pillars_section_id` varchar(64) DEFAULT NULL,
  `three_pillars_section_en` varchar(64) DEFAULT NULL,
  `three_pillars_title_id` varchar(255) DEFAULT NULL,
  `three_pillars_title_en` varchar(255) DEFAULT NULL,
  `how_it_works_section_id` varchar(64) DEFAULT NULL,
  `how_it_works_section_en` varchar(64) DEFAULT NULL,
  `how_it_works_title_id` varchar(255) DEFAULT NULL,
  `how_it_works_title_en` varchar(255) DEFAULT NULL,
  `article_section_id` varchar(64) DEFAULT NULL,
  `article_section_en` varchar(64) DEFAULT NULL,
  `article_title_id` varchar(64) DEFAULT NULL,
  `article_title_en` varchar(64) DEFAULT NULL,
  `instagram_section_id` varchar(64) DEFAULT NULL,
  `instagram_section_en` varchar(64) DEFAULT NULL,
  `instagram_title_id` varchar(64) NOT NULL,
  `instagram_title_en` varchar(64) NOT NULL,
  `faq_section_id` varchar(64) DEFAULT NULL,
  `faq_section_en` varchar(64) DEFAULT NULL,
  `faq_title_id` varchar(64) DEFAULT NULL,
  `faq_title_en` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `title_id`, `title_en`, `sub_title_id`, `sub_title_en`, `description_id`, `description_en`, `our_services_section_id`, `our_services_section_en`, `our_services_title_id`, `our_services_title_en`, `testimonial_section_id`, `testimonial_section_en`, `testimonial_title_id`, `testimonial_title_en`, `commitment_section_id`, `commitment_section_en`, `commitment_title_id`, `commitment_title_en`, `trending_destination_section_id`, `trending_destination_section_en`, `trending_destination_title_id`, `trending_destination_title_en`, `upcoming_events_section_id`, `upcoming_events_section_en`, `upcoming_events_title_id`, `upcoming_events_title_en`, `target_market_section_id`, `target_market_section_en`, `target_market_title_id`, `target_market_title_en`, `usp_section_id`, `usp_section_en`, `usp_title_id`, `usp_title_en`, `three_pillars_section_id`, `three_pillars_section_en`, `three_pillars_title_id`, `three_pillars_title_en`, `how_it_works_section_id`, `how_it_works_section_en`, `how_it_works_title_id`, `how_it_works_title_en`, `article_section_id`, `article_section_en`, `article_title_id`, `article_title_en`, `instagram_section_id`, `instagram_section_en`, `instagram_title_id`, `instagram_title_en`, `faq_section_id`, `faq_section_en`, `faq_title_id`, `faq_title_en`) VALUES
(1, 'Europe Tour Organizer & Destination Management | Your Private Europe', 'Europe Tour Organizer & Destination Management | Your Private Europe', 'Temukan informasi terbaru dan terpercaya tentang produk dan layanan kami di halaman tentang kami. Jelajahi sejarah, visi, dan misi perusahaan kami yang membedakan.', 'Discover the latest and most reliable information about our products and services on our about us page. Explore our company\'s history, vision, and mission that sets us apart', 'Tour Organizer & Destination Management Company Di Eropa', 'Tour Organizer & Destination Management Company In Europe', 'Lets Feel Your Trip', 'Lets Feel Your Trip', 'VIP Services | Private Tour | MICE', 'VIP Services | Private Tour | MICE', 'Layanan Kami', 'Our Services', 'Temukan Pengalaman Eksklusif Tak Terlupakan Bersama Kami', 'Discover Unforgettable Exclusive Experiences With Us', 'Testimoni', 'Testimonial', 'Apa Kata Tamu-Tamu Kami Tentang Pelayanan Yang Kami Berikan', 'What Did Our Guests Say About Our Service', 'KOMITMEN KAMI', 'OUR COMMITMENTS', 'Ini Komitmen Kami Yang Bisa Anda Andalkan', 'It\'s Our Commitment You Can Count On', 'DESTINASI TERPOPULER', 'TRENDING DESTINATIONS', 'Tujuan Populer Yang Kami Pilihkan Untuk Kunjungan Anda Ke Eropa', 'Popular Destinations We Choose For Your Visit To Europe', 'Event Yang Akan Datang', 'Upcoming Event', 'Pantau Agenda Kegiatan Kami Untuk Acara Mendatang', 'Stay Tuned to Our Future Events Agenda', 'EROPA DIMULAI DENGAN ANDA', 'EUROPE STARTS WITH YOU', 'Dengan Siapapun & Tujuan Apapun, Anda Adalah Tamu Kami Di Eropa', 'With Anyone & Any Purpose, You Are Our Guest In Europe', 'MENGAPA KAMI BERBEDA', 'WHY WE\'RE DIFFERENT', 'Konsep Pelayanan Yang Mengutamakan Keinginan Anda', 'Service Concepts That Put Your Desires First', 'PILIH TUR ANDA', 'CHOOSE YOUR TOUR', 'Kami Siap Melayani Kunjungan Anda di Eropa Dengan 3 Pilar Pelayanan', 'We Are Ready to Serve Your Visit in Europe With 3 Pillars of Service', 'CARA KERJA', 'HOW IT WORKS', 'Tertarik Dengan Pelayanan Kami? Ikuti 3 Langkah Mudah Ini', 'Interested In Our Services? Follow These 3 Easy Steps', 'ARTIKEL', 'ARTICLE', 'Mengenal Pengalaman Perjalanan', 'Get to Know Travel Experience', 'BERMITRA DENGAN YOUR PRIVATE EUROPE', 'PARTNER YOUR PRIVATE EUROPE', 'FOLLOW INSTAGRAM KAMI UNTUK MELIHAT KENANGAN BERSAMA TAMU KAMI', 'FOLLOW OUR INSTAGRAM TO SEE MEMORIES WITH OUR GUESTS', 'INFORMASI PENTING LAINNYA', 'OTHER IMPORTANT INFORMATION', '5 Pertanyaan Yang Sering Diajukan Oleh Tamu-Tamu Kami', '5 Frequently Asked Questions By Our Guests');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` int(11) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `title_id`, `title_en`, `description_id`, `description_en`, `image`, `slug`, `alt_image`) VALUES
(1, 'Step 1: Hubungi Kami', 'Step 1: Contact Us', 'Hubungi kami dan cantumkan informasi Anda selengkap mungkin: jumlah orang, budget & tempat-tempat yang ingin dikunjungi', 'Contact us and include your information as fully as possible: number of participants, budget & places you want to visit', 'step-1-contact-us.svg', 'step-1-contact-us', ''),
(2, 'Step 2: Penerimaan Proposal', 'Step 2: Proposal Appliance', 'Dalam waktu 24 jam, Anda akan menerima proposal dari kami dengan travel itinerary tempat-tempat yang ingin Anda tuju dan harga', 'Within 24 hours, you will receive a proposal from us with a travel itinerary of the places you want to go and prices', 'step-2-proposal-appliance.svg', 'step-2-proposal-appliance', ''),
(3, 'Step 3: Persetujuan Proposal', 'Step 3: Proposal Acceptance', 'Setelah Anda menyetujui proposal dan travel itinerary, kami akan memulai pelayanan kami untuk mewujudkan kunjungan impian Anda di Eropa!', 'Once you have approved your proposal and travel itinerary, we will start our service to make your dream visit in Europe come true!', 'step-3-proposal-acceptance.svg', 'step-3-proposal-acceptance', '');

-- --------------------------------------------------------

--
-- Table structure for table `image_article`
--

CREATE TABLE `image_article` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_article`
--

INSERT INTO `image_article` (`id`, `article_id`, `slug`, `alt_image`, `url`) VALUES
(2, 1, 'blog-4.png', '', 'blog-4.png'),
(3, 1, 'blog-5.png', '', 'blog-5.png'),
(4, 1, 'blog-6.png', '', 'blog-6.png'),
(5, 1, 'blog-7.jpg', '', 'blog-7.jpg'),
(6, 1, 'blog-8.jpg', '', 'blog-8.jpg'),
(7, 1, 'blog-9.jpg', '', 'blog-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_description_destination`
--

CREATE TABLE `image_description_destination` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_description_destination`
--

INSERT INTO `image_description_destination` (`id`, `destination_id`, `title_id`, `title_en`, `slug`, `alt_image`, `url`) VALUES
(1, 3, 'italy-1.jpg', 'italy-1.jpg', 'italy-1.jpg', '', 'italy-1.jpg'),
(2, 3, 'italy-2.jpg', 'italy-2.jpg', 'italy-2.jpg', '', 'italy-2.jpg'),
(3, 3, 'italy-3.jpg', 'italy-3.jpg', 'italy-3.jpg', '', 'italy-3.jpg'),
(4, 3, 'italy-4.jpg', 'italy-4.jpg', 'italy-4.jpg', '', 'italy-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image_destination`
--

CREATE TABLE `image_destination` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `image_name_id` varchar(255) DEFAULT NULL,
  `image_name_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_destination`
--

INSERT INTO `image_destination` (`id`, `destination_id`, `image_name_id`, `image_name_en`, `slug`, `image`, `alt_image`) VALUES
(1, 1, 'gambar best of balkan', 'image best of balkan', 'image-heart-of-england', 'balkan-1.jpg', ''),
(2, 1, 'gambar best of balkan', 'image best of balkan', 'image-heart-of-england-2', 'balkan-2.jpg', ''),
(3, 2, 'image swiss', 'image swiss', 'image-swiss', 'swiss-1.jpg', ''),
(4, 2, 'swiss-1.jpg', 'swiss-1.jpg', 'swiss-1.jpg', 'swiss-2.jpg', ''),
(5, 3, 'italy-1.jpg', 'italy-1.jpg', 'italy-1.jpg', 'italy-1.jpg', ''),
(6, 3, 'italy-2.jpg', 'italy-2.jpg', 'italy-2.jpg', 'italy-2.jpg', ''),
(7, 1, 'balkan-3.jpg', 'balkan-3.jpg', 'balkan-3.jpg', 'balkan-3.jpg', ''),
(8, 1, 'balkan-4.jpg', 'balkan-4.jpg', 'balkan-4.jpg', 'balkan-4.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `instagram_partners`
--

CREATE TABLE `instagram_partners` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagram_partners`
--

INSERT INTO `instagram_partners` (`id`, `link`) VALUES
(1, 'https://www.instagram.com/reel/C348_e0sMxT/?utm_source=ig_web_copy_link'),
(2, 'https://www.instagram.com/reel/C3z_BF0MJxX/?utm_source=ig_web_copy_link'),
(3, 'https://www.instagram.com/reel/C3xIQv4s_YC/?utm_source=ig_web_copy_link');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL,
  `destination_slug` varchar(255) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description_id` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `destination_slug`, `day`, `title_id`, `title_en`, `description_id`, `description_en`) VALUES
(1, 'best-of-balkan', 1, 'ARRIVAL DI BELGRADE', 'ARRIVAL DI BELGRADE', 'Arrival Belgrade & City Tour', 'Arrival Belgrade & City Tour'),
(2, 'best-of-balkan', 2, 'SIGHTSEEING DI BELGRADE', 'SIGHTSEEING DI BELGRADE', 'City Tour Belgrade', 'City Tour Belgrade'),
(3, 'best-of-balkan', 3, 'MENUJU KE ZAGREB', 'MENUJU KE ZAGREB', 'Belgrade – Zagreb', 'Belgrade – Zagreb'),
(4, 'best-of-balkan', 4, 'DAY TRIP KE PLITVICE', 'DAY TRIP KE PLITVICE', 'Zagreb – Plitvice – Zagreb', 'Zagreb – Plitvice – Zagreb'),
(5, 'best-of-balkan', 5, ' MENUJU KE SPLIT', ' MENUJU KE SPLIT', 'Zagreb – Split', 'Zagreb – Split');

-- --------------------------------------------------------

--
-- Table structure for table `other_footer`
--

CREATE TABLE `other_footer` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) DEFAULT NULL,
  `seo_tag_title_en` varchar(255) DEFAULT NULL,
  `seo_description_id` varchar(255) DEFAULT NULL,
  `seo_description_en` varchar(255) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `desc_id` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `other_footer`
--

INSERT INTO `other_footer` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `title_id`, `title_en`, `desc_id`, `desc_en`, `slug`) VALUES
(1, '', '', '', '', 'Syarat & Ketentuan', 'Terms & Conditions', '<p style=\"text-align: start; font-size: 18px;\">\r\n    Berdasarkan pembelian paket untuk dan/atau berpartisipasi dalam tour perjalanan yang ditawarkan oleh Your Private Europe (“Perusahaan”), dan dengan pertimbangan untuk diizinkan membeli tour perjalanan tersebut, dan untuk pertimbangan barang dan berharga lainnya, tanda terima dan kecukupan yang mana diakui, pembeli/peserta tour tersebut (“Peserta”) memahami, mengakui, mewakili, menjamin, dan menyetujui sebagai berikut, dengan pengetahuan bahwa Perusahaan akan mengandalkan hal yang sama:\r\n</p>\r\n\r\n<ol style=\"text-align: start; font-size: 18px;\">\r\n    <li>Peserta berkeinginan untuk berpartisipasi dalam tour perjalanan dengan pemandu yang ditawarkan oleh Perusahaan (“Tour”).</li>\r\n\r\n    <li>Peserta dalam keadaan sehat dan tidak menderita cedera fisik atau mental ringan atau serius, penyakit, atau kecacatan yang akan membuat peserta sangat rentan terhadap cedera atau kecacatan saat melakukan aktivitas apa pun yang dimaksud dalam Pengesampingan dan Pelepasan Klaim ini.</li>\r\n\r\n    <li>Peserta sepenuhnya memahami dan menerima semua risiko yang terkait dengan partisipasinya dalam Tour termasuk, tanpa batasan, kondisi cuaca yang tidak menguntungkan, penyakit makanan, cedera (misalnya, tanpa batasan, yang timbul dari kecelakaan yang ditimbulkan sendiri atau kecelakaan, peserta lain, mobil, pejalan kaki, dan sejenisnya), dan kematian.</li>\r\n\r\n    <li>Peserta memberikan kepada Perusahaan dan Perusahaan hak dan kewenangan yang tidak dapat dibatalkan dan disublisensikan untuk menggunakan nama, rupa, foto, dan/atau gambar peserta untuk setiap dan semua tujuan komersial atau non-komersial yang sekarang dikenal atau dikembangkan untuk selamanya di seluruh alam semesta tanpa kewajiban atau kompensasi lebih lanjut kepada peserta.</li>\r\n\r\n    <li>PARTISIPASI PESERTA DALAM TOUR ADALAH RISIKO PESERTA SENDIRI. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU ORANG ATAU BADAN APA PUN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, DENGAN INI SELAMANYA DAN SECARA TIDAK SENGAJA MERILIS PERUSAHAAN, SERTA BADAN AFILIASI, PERUSAHAAN ORANG TUA, ANAK PERUSAHAAN, PEMILIK SAAT INI DAN MANTAN ANGGOTA, MANAJER, MITRA, KONTRAKTOR, ASURANSI, PEMEGANG SAHAM, DAN DIREKTUR DI ATAS (TERMASUK, TANPA BATAS, ANDY SUHARTONO & PT. MITRAWISATA JELAJAH BUANA) (SECARA BERSAMA, “PIHAK YANG DIBEBASKAN”), DARI SETIAP DAN SEMUA KEWAJIBAN, KERUGIAN, BIAYA, DAN BEBAN DALAM CARA APA PUN YANG TIMBUL KARENA, ATAU AKIBAT DARI, PARTISIPASI PESERTA DALAM TOUR, TERMASUK, TANPA BATASAN, SETIAP DAN SEMUA KLAIM, TINDAKAN, DAN KEWAJIBAN ATAS KEMATIAN, CEDERA, KERUSAKAN, ATAU KERUSAKAN SETIAP ORANG LAIN, ATAU ATAS PROPERTI APA PUN, KECUALI CEDERA, KEHILANGAN, ATAU KERUSAKAN TERSEBUT YANG DISEBABKAN OLEH KELALAIAN ATAU PERILAKU YANG SENGAJA DARI PERUSAHAAN ATAU SALAH SATU PIHAK YANG DIBEBASKAN.PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU SIAPA PUN ATAU BADAN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, LEBIH LANJUT SETUJU UNTUK MEMBELA DAN MENGGANTI PIHAK YANG DIBEBASKAN, DAN UNTUK MEMEGANG GANGGUAN PIHAK YANG DIBEBASKAN, DARI SETIAP DAN SEMUA KLABILITAS, TINDAKAN , KERUSAKAN, BEBAN (TERMASUK, TANPA BATASAN, BIAYA PENGACARA) DAN KEHILANGAN DALAM BENTUK APA PUN, APA PUN DALAM CARA APA PUN YANG TIMBUL DARI, ATAU AKIBAT PARTISIPASI PESERTA DALAM TUR.</li>\r\n\r\n\r\n    <li>Pengesampingan dan Pelepasan Klaim ini merupakan keseluruhan perjanjian dan pemahaman antara peserta dan pihak yang dirilis, dan membatalkan, mengakhiri, dan menggantikan setiap perjanjian atau pemahaman sebelumnya yang berkaitan dengan pokok bahasan di sini.</li>\r\n\r\n    <li>Tidak ada ketentuan dari Pengesampingan dan Pelepasan Klaim ini yang dapat dikesampingkan atau diubah kecuali secara tegas ditandatangani oleh peserta dan pihak yang menjadi sasaran pengesampingan atau modifikasi tersebut. Kegagalan salah satu pihak yang dirilis untuk menegakkan hak mereka di bawah ini kapan saja tidak akan bertindak sebagai pengesampingan untuk menegakkan hak mereka berdasarkan pengesampingan ini dan pelepasan untuk tindakan yang sama atau serupa di waktu berikutnya.</li>\r\n</ol>\r\n', '<p style=\"text-align: start; font-size: 18px;\">\r\n    Berdasarkan pembelian paket untuk dan/atau berpartisipasi dalam tour perjalanan yang ditawarkan oleh Your Private Europe (“Perusahaan”), dan dengan pertimbangan untuk diizinkan membeli tour perjalanan tersebut, dan untuk pertimbangan barang dan berharga lainnya, tanda terima dan kecukupan yang mana diakui, pembeli/peserta tour tersebut (“Peserta”) memahami, mengakui, mewakili, menjamin, dan menyetujui sebagai berikut, dengan pengetahuan bahwa Perusahaan akan mengandalkan hal yang sama:\r\n</p>\r\n\r\n<ol style=\"text-align: start; font-size: 18px;\">\r\n    <li>Peserta berkeinginan untuk berpartisipasi dalam tour perjalanan dengan pemandu yang ditawarkan oleh Perusahaan (“Tour”).</li>\r\n\r\n    <li>Peserta dalam keadaan sehat dan tidak menderita cedera fisik atau mental ringan atau serius, penyakit, atau kecacatan yang akan membuat peserta sangat rentan terhadap cedera atau kecacatan saat melakukan aktivitas apa pun yang dimaksud dalam Pengesampingan dan Pelepasan Klaim ini.</li>\r\n\r\n    <li>Peserta sepenuhnya memahami dan menerima semua risiko yang terkait dengan partisipasinya dalam Tour termasuk, tanpa batasan, kondisi cuaca yang tidak menguntungkan, penyakit makanan, cedera (misalnya, tanpa batasan, yang timbul dari kecelakaan yang ditimbulkan sendiri atau kecelakaan, peserta lain, mobil, pejalan kaki, dan sejenisnya), dan kematian.</li>\r\n\r\n    <li>Peserta memberikan kepada Perusahaan dan Perusahaan hak dan kewenangan yang tidak dapat dibatalkan dan disublisensikan untuk menggunakan nama, rupa, foto, dan/atau gambar peserta untuk setiap dan semua tujuan komersial atau non-komersial yang sekarang dikenal atau dikembangkan untuk selamanya di seluruh alam semesta tanpa kewajiban atau kompensasi lebih lanjut kepada peserta.</li>\r\n\r\n    <li>PARTISIPASI PESERTA DALAM TOUR ADALAH RISIKO PESERTA SENDIRI. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU ORANG ATAU BADAN APA PUN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, DENGAN INI SELAMANYA DAN SECARA TIDAK SENGAJA MERILIS PERUSAHAAN, SERTA BADAN AFILIASI, PERUSAHAAN ORANG TUA, ANAK PERUSAHAAN, PEMILIK SAAT INI DAN MANTAN ANGGOTA, MANAJER, MITRA, KONTRAKTOR, ASURANSI, PEMEGANG SAHAM, DAN DIREKTUR DI ATAS (TERMASUK, TANPA BATAS, ANDY SUHARTONO & PT. MITRAWISATA JELAJAH BUANA) (SECARA BERSAMA, “PIHAK YANG DIBEBASKAN”), DARI SETIAP DAN SEMUA KEWAJIBAN, KERUGIAN, BIAYA, DAN BEBAN DALAM CARA APA PUN YANG TIMBUL KARENA, ATAU AKIBAT DARI, PARTISIPASI PESERTA DALAM TOUR, TERMASUK, TANPA BATASAN, SETIAP DAN SEMUA KLAIM, TINDAKAN, DAN KEWAJIBAN ATAS KEMATIAN, CEDERA, KERUSAKAN, ATAU KERUSAKAN SETIAP ORANG LAIN, ATAU ATAS PROPERTI APA PUN, KECUALI CEDERA, KEHILANGAN, ATAU KERUSAKAN TERSEBUT YANG DISEBABKAN OLEH KELALAIAN ATAU PERILAKU YANG SENGAJA DARI PERUSAHAAN ATAU SALAH SATU PIHAK YANG DIBEBASKAN.PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU SIAPA PUN ATAU BADAN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, LEBIH LANJUT SETUJU UNTUK MEMBELA DAN MENGGANTI PIHAK YANG DIBEBASKAN, DAN UNTUK MEMEGANG GANGGUAN PIHAK YANG DIBEBASKAN, DARI SETIAP DAN SEMUA KLABILITAS, TINDAKAN , KERUSAKAN, BEBAN (TERMASUK, TANPA BATASAN, BIAYA PENGACARA) DAN KEHILANGAN DALAM BENTUK APA PUN, APA PUN DALAM CARA APA PUN YANG TIMBUL DARI, ATAU AKIBAT PARTISIPASI PESERTA DALAM TUR.</li>\r\n\r\n\r\n    <li>Pengesampingan dan Pelepasan Klaim ini merupakan keseluruhan perjanjian dan pemahaman antara peserta dan pihak yang dirilis, dan membatalkan, mengakhiri, dan menggantikan setiap perjanjian atau pemahaman sebelumnya yang berkaitan dengan pokok bahasan di sini.</li>\r\n\r\n    <li>Tidak ada ketentuan dari Pengesampingan dan Pelepasan Klaim ini yang dapat dikesampingkan atau diubah kecuali secara tegas ditandatangani oleh peserta dan pihak yang menjadi sasaran pengesampingan atau modifikasi tersebut. Kegagalan salah satu pihak yang dirilis untuk menegakkan hak mereka di bawah ini kapan saja tidak akan bertindak sebagai pengesampingan untuk menegakkan hak mereka berdasarkan pengesampingan ini dan pelepasan untuk tindakan yang sama atau serupa di waktu berikutnya.</li>\r\n</ol>\r\n', 'terms-conditions'),
(2, '', '', '', '', 'Kebijakan Privasi', 'Privacy Policy', '<h1>HAK PRIVASI ANDA DARI YOURPRIVATEEUROPE.EU (“Situs”)</h1>\r\n\r\n<p>Tanggal Berlaku: 1 Des 2017</p>\r\n\r\n<p>Your Private Europe (“Perusahaan”) berusaha untuk menawarkan banyak keuntungan dari teknologi Internet kepada para pengunjungnya dan untuk memberikan pengalaman yang interaktif dan personal. Kami dapat menggunakan nama, alamat email, alamat jalan, dan nomor telepon Anda (“Informasi Identitas Pribadi”) sesuai dengan ketentuan Kebijakan Privasi ini. Kebijakan Privasi ini hanya berlaku untuk informasi yang dikumpulkan melalui Situs dan tidak memengaruhi informasi yang dikumpulkan atau digunakan oleh Perusahaan atau afiliasinya melalui cara lain.</p>\r\n\r\n<ol>\r\n    <li>\r\n        <strong>Bagaimana kami mengumpulkan informasi dari pengguna?</strong>\r\n        <p>Kami mengumpulkan dan menyimpan informasi bergantung pada halaman atau bagian dari Situs yang Anda kunjungi, aktivitas yang Anda pilih untuk berpartisipasi, dan layanan yang diberikan. Anda dapat mengunjungi banyak halaman di Situs tanpa memberikan informasi apa pun, namun, halaman lain mungkin meminta Anda untuk memberikan informasi saat mendaftar, meminta fitur tertentu, atau melakukan pembelian.</p>\r\n        <p>Informasi yang diperlukan mungkin mencakup nama depan dan belakang Anda, alamat, nomor telepon, dan alamat email. Dalam hal pembelian, informasi kartu kredit dan tanggal kedaluwarsa juga diperlukan. Nama pengguna dan kata sandi mungkin diminta untuk fitur tertentu.</p>\r\n        <p>Kami juga mengumpulkan informasi secara otomatis melalui alat elektronik, seperti \"cookie.\" Ini membantu menyimpan informasi seperti nama pengguna dan kata sandi sehingga Anda tidak perlu memasukkannya setiap kali mengunjungi Situs. Penggunaan teknologi tambahan mungkin diperkenalkan di masa depan.</p>\r\n    </li>\r\n    \r\n    <li>\r\n        <strong>Apa yang kami lakukan dengan informasi yang kami kumpulkan?</strong>\r\n        <p>Informasi yang dikumpulkan dapat digunakan dengan cara-cara tertentu sesuai dengan hukum. Informasi yang tidak mengidentifikasi pengguna secara pribadi (\"Informasi Gabungan\") dapat digunakan untuk menganalisis pola penggunaan dan dibagikan dengan pengiklan dan mitra bisnis.</p>\r\n        <p>Kami juga dapat mengungkapkan informasi sebagai tanggapan atas perintah pengadilan atau untuk memenuhi kewajiban hukum. Selain itu, informasi pengguna mungkin termasuk dalam aset yang ditransfer selama transaksi bisnis.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Keamanan Informasi Pribadi:</strong>\r\n        <p>Situs telah melakukan tindakan keamanan untuk melindungi informasi dari kehilangan, penyalahgunaan, atau perubahan. Kami menerapkan prosedur fisik, elektronik, dan manajerial untuk menjaga keamanan data.</p>\r\n        <p>Meskipun kami berusaha melindungi informasi pribadi, tidak ada transmisi data melalui Internet yang dapat dijamin 100% aman. Karyawan dan profesional yang dipekerjakan harus mematuhi kebijakan privasi untuk menjalankan fungsi bisnis.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Situs Afiliasi, Situs Terkait, dan Iklan:</strong>\r\n        <p>Situs ini berinteraksi dengan pihak ketiga, seperti mitra, pengiklan, dan afiliasi. Pihak ketiga memiliki kebijakan privasi mereka sendiri dan Situs tidak bertanggung jawab atas tindakan mereka.</p>\r\n        <p>Pengguna disarankan untuk memeriksa kebijakan privasi pihak ketiga sebelum memberikan informasi pada fitur atau halaman yang dioperasikan oleh pihak ketiga.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Anak-anak:</strong>\r\n        <p>Situs tidak dengan sengaja mengumpulkan informasi pribadi dari anak-anak di bawah usia 13 tahun, kecuali sebagaimana diizinkan oleh hukum. Jika ditemukan, informasi akan segera dihapus.</p>\r\n        <p>Orang tua dapat meninjau dan meminta penghapusan informasi anak-anak mereka dengan menghubungi alamat email yang tercantum di bagian 6.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Menghubungi kami:</strong>\r\n        <p>Pengguna dapat menghubungi perusahaan melalui alamat email: contact@yourprivateeurope.eu.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Perubahan Kebijakan:</strong>\r\n        <p>Kebijakan Privasi ini dapat berubah sewaktu-waktu. Pengguna diharapkan untuk memeriksa halaman ini secara berkala untuk melihat perubahan terbaru. Informasi yang dikumpulkan sebelum perubahan akan digunakan sesuai aturan dan undang-undang yang berlaku pada saat informasi dikumpulkan.</p>\r\n    </li>\r\n</ol>', '<h1>HAK PRIVASI ANDA DARI YOURPRIVATEEUROPE.EU (“Situs”)</h1>\r\n\r\n<p>Tanggal Berlaku: 1 Des 2017</p>\r\n\r\n<p>Your Private Europe (“Perusahaan”) berusaha untuk menawarkan banyak keuntungan dari teknologi Internet kepada para pengunjungnya dan untuk memberikan pengalaman yang interaktif dan personal. Kami dapat menggunakan nama, alamat email, alamat jalan, dan nomor telepon Anda (“Informasi Identitas Pribadi”) sesuai dengan ketentuan Kebijakan Privasi ini. Kebijakan Privasi ini hanya berlaku untuk informasi yang dikumpulkan melalui Situs dan tidak memengaruhi informasi yang dikumpulkan atau digunakan oleh Perusahaan atau afiliasinya melalui cara lain.</p>\r\n\r\n<ol>\r\n    <li>\r\n        <strong>Bagaimana kami mengumpulkan informasi dari pengguna?</strong>\r\n        <p>Kami mengumpulkan dan menyimpan informasi bergantung pada halaman atau bagian dari Situs yang Anda kunjungi, aktivitas yang Anda pilih untuk berpartisipasi, dan layanan yang diberikan. Anda dapat mengunjungi banyak halaman di Situs tanpa memberikan informasi apa pun, namun, halaman lain mungkin meminta Anda untuk memberikan informasi saat mendaftar, meminta fitur tertentu, atau melakukan pembelian.</p>\r\n        <p>Informasi yang diperlukan mungkin mencakup nama depan dan belakang Anda, alamat, nomor telepon, dan alamat email. Dalam hal pembelian, informasi kartu kredit dan tanggal kedaluwarsa juga diperlukan. Nama pengguna dan kata sandi mungkin diminta untuk fitur tertentu.</p>\r\n        <p>Kami juga mengumpulkan informasi secara otomatis melalui alat elektronik, seperti \"cookie.\" Ini membantu menyimpan informasi seperti nama pengguna dan kata sandi sehingga Anda tidak perlu memasukkannya setiap kali mengunjungi Situs. Penggunaan teknologi tambahan mungkin diperkenalkan di masa depan.</p>\r\n    </li>\r\n    \r\n    <li>\r\n        <strong>Apa yang kami lakukan dengan informasi yang kami kumpulkan?</strong>\r\n        <p>Informasi yang dikumpulkan dapat digunakan dengan cara-cara tertentu sesuai dengan hukum. Informasi yang tidak mengidentifikasi pengguna secara pribadi (\"Informasi Gabungan\") dapat digunakan untuk menganalisis pola penggunaan dan dibagikan dengan pengiklan dan mitra bisnis.</p>\r\n        <p>Kami juga dapat mengungkapkan informasi sebagai tanggapan atas perintah pengadilan atau untuk memenuhi kewajiban hukum. Selain itu, informasi pengguna mungkin termasuk dalam aset yang ditransfer selama transaksi bisnis.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Keamanan Informasi Pribadi:</strong>\r\n        <p>Situs telah melakukan tindakan keamanan untuk melindungi informasi dari kehilangan, penyalahgunaan, atau perubahan. Kami menerapkan prosedur fisik, elektronik, dan manajerial untuk menjaga keamanan data.</p>\r\n        <p>Meskipun kami berusaha melindungi informasi pribadi, tidak ada transmisi data melalui Internet yang dapat dijamin 100% aman. Karyawan dan profesional yang dipekerjakan harus mematuhi kebijakan privasi untuk menjalankan fungsi bisnis.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Situs Afiliasi, Situs Terkait, dan Iklan:</strong>\r\n        <p>Situs ini berinteraksi dengan pihak ketiga, seperti mitra, pengiklan, dan afiliasi. Pihak ketiga memiliki kebijakan privasi mereka sendiri dan Situs tidak bertanggung jawab atas tindakan mereka.</p>\r\n        <p>Pengguna disarankan untuk memeriksa kebijakan privasi pihak ketiga sebelum memberikan informasi pada fitur atau halaman yang dioperasikan oleh pihak ketiga.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Anak-anak:</strong>\r\n        <p>Situs tidak dengan sengaja mengumpulkan informasi pribadi dari anak-anak di bawah usia 13 tahun, kecuali sebagaimana diizinkan oleh hukum. Jika ditemukan, informasi akan segera dihapus.</p>\r\n        <p>Orang tua dapat meninjau dan meminta penghapusan informasi anak-anak mereka dengan menghubungi alamat email yang tercantum di bagian 6.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Menghubungi kami:</strong>\r\n        <p>Pengguna dapat menghubungi perusahaan melalui alamat email: contact@yourprivateeurope.eu.</p>\r\n    </li>\r\n\r\n    <li>\r\n        <strong>Perubahan Kebijakan:</strong>\r\n        <p>Kebijakan Privasi ini dapat berubah sewaktu-waktu. Pengguna diharapkan untuk memeriksa halaman ini secara berkala untuk melihat perubahan terbaru. Informasi yang dikumpulkan sebelum perubahan akan digunakan sesuai aturan dan undang-undang yang berlaku pada saat informasi dikumpulkan.</p>\r\n    </li>\r\n</ol>', 'privacy-policy'),
(3, '', '', '', '', 'Disclaimer', 'Disclaimer', '<h1>Pengesampingan dan Pelepasan Klaim dari Your Private Europe</h1>\r\n\r\n<p>Berdasarkan pembelian paket untuk dan/atau berpartisipasi dalam tour perjalanan yang ditawarkan oleh Your Private Europe (“Perusahaan”), Peserta menyetujui dan mengakui ketentuan berikut:</p>\r\n\r\n<ol>\r\n    <li>\r\n        Peserta ingin berpartisipasi dalam tour perjalanan dengan pemandu yang ditawarkan oleh Perusahaan (“Tour”).\r\n    </li>\r\n\r\n    <li>\r\n        Peserta dalam keadaan sehat dan tidak menderita cedera fisik atau mental yang akan membuat Peserta sangat rentan terhadap cedera saat mengikuti Tour.\r\n    </li>\r\n\r\n    <li>\r\n        Peserta sepenuhnya memahami dan menerima semua risiko yang terkait dengan partisipasinya dalam Tour, termasuk kondisi cuaca yang tidak menguntungkan, penyakit makanan, cedera, dan kematian.\r\n    </li>\r\n\r\n    <li>\r\n        Peserta memberikan kepada Perusahaan hak dan kewenangan yang tidak dapat dibatalkan dan disublisensikan untuk menggunakan nama, rupa, foto, dan/atau gambar Peserta untuk tujuan komersial atau non-komersial tanpa kewajiban atau kompensasi lebih lanjut kepada Peserta.\r\n    </li>\r\n\r\n    <li style=\"text-transform: uppercase;\">\r\n        PARTISIPASI PESERTA DALAM TOUR ADALAH RISIKO PESERTA SENDIRI. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU ORANG ATAU BADAN APA PUN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, DENGAN INI SELAMANYA DAN SECARA TIDAK SASARAN MERILIS PERSEROAN, SERTA BADAN AFILIASI, PERUSAHAAN ORANG TUA, ANAK PERUSAHAAN, PEMILIK SAAT INI DAN MANTAN ANGGOTA, MANAJER, MITRA, KONTRAKTOR, ASURANSI, PEMEGANG SAHAM, DAN DIREKTUR DI ATAS (TERMASUK, TANPA BATAS, ANDY SUHARTONO & PT. MITRAWISATA JELAJAH BUANA) (SECARA BERSAMA, “PIHAK YANG DIBEBASKAN”), DARI SETIAP DAN SEMUA PIHAK YANG DIKLAIM KEWAJIBAN, KERUGIAN, BIAYA, DAN BEBAN DALAM CARA APA PUN YANG TIMBUL KARENA, ATAU AKIBAT DARI, PARTISIPASI PESERTA DALAM TUR, TERMASUK, TANPA BATASAN, SETIAP DAN SEMUA KLAIM, TINDAKAN, DAN KEWAJIBAN ATAS KEMATIAN, CEDERA, KERUSAKAN, ATAU KERUSAKAN SETIAP ORANG LAIN, ATAU ATAS PROPERTI APA PUN, KECUALI CEDERA, KEHILANGAN, ATAU KERUSAKAN TERSEBUT YANG DISEBABKAN OLEH KELALAIAN ATAU PERILAKU YANG SENGAJA DARI PERUSAHAAN ATAU SALAH SATU PIHAK YANG DIBEBASKAN. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU SIAPA PUN ATAU BADAN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, LEBIH LANJUT SETUJU UNTUK MEMBELA DAN MENGGANTI PIHAK YANG DIBEBASKAN, DAN UNTUK MEMEGANG GANGGUAN PIHAK YANG DIBEBASKAN, DARI SETIAP DAN SEMUA KLABILITAS, TINDAKAN , KERUSAKAN, BEBAN (TERMASUK, TANPA BATASAN, BIAYA PENGACARA) DAN KEHILANGAN DALAM BENTUK APA PUN, APA PUN DALAM CARA APA PUN YANG TIMBUL DARI, ATAU AKIBAT PARTISIPASI PESERTA DALAM TUR.\r\n    </li>\r\n\r\n    <li>\r\n        Pengesampingan dan Pelepasan Klaim ini merupakan keseluruhan perjanjian dan pemahaman antara Peserta dan Pihak Yang Dirilis, dan menggantikan setiap perjanjian atau pemahaman sebelumnya.\r\n    </li>\r\n\r\n    <li>\r\n        Ketentuan Pengesampingan dan Pelepasan Klaim ini hanya dapat diubah dengan kesepakatan tertulis yang ditandatangani oleh Peserta dan pihak terkait. Kegagalan untuk menegakkan hak tidak berarti pengesampingan hak di waktu mendatang.\r\n    </li>\r\n</ol>\r\n', '<h1>Pengesampingan dan Pelepasan Klaim dari Your Private Europe</h1>\r\n\r\n<p>Berdasarkan pembelian paket untuk dan/atau berpartisipasi dalam tour perjalanan yang ditawarkan oleh Your Private Europe (“Perusahaan”), Peserta menyetujui dan mengakui ketentuan berikut:</p>\r\n\r\n<ol>\r\n    <li>\r\n        Peserta ingin berpartisipasi dalam tour perjalanan dengan pemandu yang ditawarkan oleh Perusahaan (“Tour”).\r\n    </li>\r\n\r\n    <li>\r\n        Peserta dalam keadaan sehat dan tidak menderita cedera fisik atau mental yang akan membuat Peserta sangat rentan terhadap cedera saat mengikuti Tour.\r\n    </li>\r\n\r\n    <li>\r\n        Peserta sepenuhnya memahami dan menerima semua risiko yang terkait dengan partisipasinya dalam Tour, termasuk kondisi cuaca yang tidak menguntungkan, penyakit makanan, cedera, dan kematian.\r\n    </li>\r\n\r\n    <li>\r\n        Peserta memberikan kepada Perusahaan hak dan kewenangan yang tidak dapat dibatalkan dan disublisensikan untuk menggunakan nama, rupa, foto, dan/atau gambar Peserta untuk tujuan komersial atau non-komersial tanpa kewajiban atau kompensasi lebih lanjut kepada Peserta.\r\n    </li>\r\n\r\n    <li style=\"text-transform: uppercase;\">\r\n        PARTISIPASI PESERTA DALAM TOUR ADALAH RISIKO PESERTA SENDIRI. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU ORANG ATAU BADAN APA PUN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, DENGAN INI SELAMANYA DAN SECARA TIDAK SASARAN MERILIS PERSEROAN, SERTA BADAN AFILIASI, PERUSAHAAN ORANG TUA, ANAK PERUSAHAAN, PEMILIK SAAT INI DAN MANTAN ANGGOTA, MANAJER, MITRA, KONTRAKTOR, ASURANSI, PEMEGANG SAHAM, DAN DIREKTUR DI ATAS (TERMASUK, TANPA BATAS, ANDY SUHARTONO & PT. MITRAWISATA JELAJAH BUANA) (SECARA BERSAMA, “PIHAK YANG DIBEBASKAN”), DARI SETIAP DAN SEMUA PIHAK YANG DIKLAIM KEWAJIBAN, KERUGIAN, BIAYA, DAN BEBAN DALAM CARA APA PUN YANG TIMBUL KARENA, ATAU AKIBAT DARI, PARTISIPASI PESERTA DALAM TUR, TERMASUK, TANPA BATASAN, SETIAP DAN SEMUA KLAIM, TINDAKAN, DAN KEWAJIBAN ATAS KEMATIAN, CEDERA, KERUSAKAN, ATAU KERUSAKAN SETIAP ORANG LAIN, ATAU ATAS PROPERTI APA PUN, KECUALI CEDERA, KEHILANGAN, ATAU KERUSAKAN TERSEBUT YANG DISEBABKAN OLEH KELALAIAN ATAU PERILAKU YANG SENGAJA DARI PERUSAHAAN ATAU SALAH SATU PIHAK YANG DIBEBASKAN. PESERTA, ATAS NAMA DIRINYA / DIRINYA DAN / ATAU SIAPA PUN ATAU BADAN YANG BERTINDAK MELALUI ATAU ATAS NAMA PESERTA, LEBIH LANJUT SETUJU UNTUK MEMBELA DAN MENGGANTI PIHAK YANG DIBEBASKAN, DAN UNTUK MEMEGANG GANGGUAN PIHAK YANG DIBEBASKAN, DARI SETIAP DAN SEMUA KLABILITAS, TINDAKAN , KERUSAKAN, BEBAN (TERMASUK, TANPA BATASAN, BIAYA PENGACARA) DAN KEHILANGAN DALAM BENTUK APA PUN, APA PUN DALAM CARA APA PUN YANG TIMBUL DARI, ATAU AKIBAT PARTISIPASI PESERTA DALAM TUR.\r\n    </li>\r\n\r\n    <li>\r\n        Pengesampingan dan Pelepasan Klaim ini merupakan keseluruhan perjanjian dan pemahaman antara Peserta dan Pihak Yang Dirilis, dan menggantikan setiap perjanjian atau pemahaman sebelumnya.\r\n    </li>\r\n\r\n    <li>\r\n        Ketentuan Pengesampingan dan Pelepasan Klaim ini hanya dapat diubah dengan kesepakatan tertulis yang ditandatangani oleh Peserta dan pihak terkait. Kegagalan untuk menegakkan hak tidak berarti pengesampingan hak di waktu mendatang.\r\n    </li>\r\n</ol>\r\n', 'disclaimer');

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) DEFAULT NULL,
  `seo_tag_title_en` varchar(255) DEFAULT NULL,
  `seo_description_id` varchar(255) DEFAULT NULL,
  `seo_description_en` varchar(255) DEFAULT NULL,
  `section_id` varchar(64) DEFAULT NULL,
  `section_en` varchar(64) DEFAULT NULL,
  `section_title_id` varchar(255) DEFAULT NULL,
  `section_title_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text NOT NULL,
  `description_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_services`
--

INSERT INTO `other_services` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `section_id`, `section_en`, `section_title_id`, `section_title_en`, `image`, `title_id`, `title_en`, `description_id`, `description_en`) VALUES
(1, 'Layanan Fotografi, Jastip, dan Catering | Your Private Europe', 'Photography, Shopping Assistant, and Catering Services | Your Private Europe', 'Nikmati perjalanan tanpa beban di Eropa dengan layanan fotografi, jastip, dan catering dari Your Private Europe. Buat momen di Eropa lebih berkesan.', 'Enjoy a hassle-free journey in Europe with photography, shopping assistant (Jastip), and catering services from Your Private Europe. Make your moments in Europe more memorable.', 'Pelayanan Kami Lainnya', 'Other Services', 'Buat Kunjungan Anda Di Eropa Lebih Lengkap & Spesial ', 'Make Your Visit In Europe More Memorable & Special', '1.jpg', 'Fotografer Professional', 'Professional Photographer', '<p>Abadikan momen <strong>liburan Anda di Eropa</strong> dengan foto professional yang sempurna!</p>\r\n<p>Kami menyediakan <strong>layanan fotografer professional</strong> selama liburan Anda di Eropa, yang akan membantu Anda mendokumentasikan <strong>kenangan-kenangan berharga</strong> dengan pasangan, keluarga dan orang-orang yang Anda cintai lainnya.</p>\r\n<p>Fotografer berpengalaman kami sangat mengenal tempat-tempat di Eropa yang cocok untuk mengabadikan momen-momen liburan Anda, dan membuat setiap <strong>pengalaman Anda menjadi tak terlupakan!</strong></p>', '<p>Capture your <strong>holiday moments in Europe</strong> with beautifully-shot professional photos!</p>\r\n<p>We provide <strong>professional photographer services</strong> during your vacation in Europe, which will allow you to document <strong>precious memories</strong> with your spouse, family and loved ones.</p>\r\n<p>Our experienced photographers are very familiar with places in Europe that are suitable for capturing your holiday moments, and to make your <strong>experiences unforgettable!</strong></p>'),
(2, 'Layanan Fotografi, Jastip, dan Catering | Your Private Europe', 'Photography, Shopping Assistant, and Catering Services | Your Private Europe', 'Nikmati perjalanan tanpa beban di Eropa dengan layanan fotografi, jastip, dan catering dari Your Private Europe. Buat momen di Eropa lebih berkesan.', 'Enjoy a hassle-free journey in Europe with photography, shopping assistant (Jastip), and catering services from Your Private Europe. Make your moments in Europe more memorable.', 'Pelayanan Kami Lainnya', 'Other Services', 'Buat Kunjungan Anda Di Eropa Lebih Lengkap & Spesial ', 'Make Your Visit In Europe More Memorable & Special', '2.jpg', 'Pengiriman Barang (Jastip) ', 'Goods Delivery', '<p><strong>Anda ingin berbelanja atau membeli barang di Eropa,</strong> tapi tidak bisa membawa semuanya pulang ke Indonesia?</p>\r\n<p>Jangan kuatir, kami siap membantu Anda! <strong>Kami menyediakan pelayanan pengiriman barang dan jastip ke Indonesia dari Eropa dengan harga yang kompetitif.</strong> Anda tidak perlu kuatir lagi dengan <em>bagage overweight&nbsp;</em>atau kerepotan membawa barang bawaan Anda.</p>\r\n<p>Mulai dari barang mewah, alat-alat industri atau souvenir-souvenir khusus, <strong>kami menjamin keamanan barang Anda sampai dengan tujuan di Indonesia</strong>.</p>', '<p><strong>Do you want to go on shopping spree or buy goods in Europe,</strong> but can\'t bring them all back to Indonesia?</p>\r\n<p class=\" translation-block\">Don\'t worry, we\'ve got you covered! <strong>We provide goods delivery services from Europe to Indonesia at competitive price.</strong> You don\'t need to worry anymore with <em>bagage overweight</em> or the hassle of carrying your heavy luggage.</p>\r\n<p>From luxury goods, industrial tools to special souvenirs, <strong>we guarantee the safety of your goods until their destination in Indonesia.</strong></p>'),
(3, 'Layanan Fotografi, Jastip, dan Catering | Your Private Europe', 'Photography, Shopping Assistant, and Catering Services | Your Private Europe', 'Nikmati perjalanan tanpa beban di Eropa dengan layanan fotografi, jastip, dan catering dari Your Private Europe. Buat momen di Eropa lebih berkesan.', 'Enjoy a hassle-free journey in Europe with photography, shopping assistant (Jastip), and catering services from Your Private Europe. Make your moments in Europe more memorable.', 'Pelayanan Kami Lainnya', 'Other Services', 'Buat Kunjungan Anda Di Eropa Lebih Lengkap & Spesial ', 'Make Your Visit In Europe More Memorable & Special', '3.jpg', 'Catering Masakan Indonesia', 'Catering Service Indonesian Food', '<p>Kangen dengan makanan asli Indonesia selama kunjungan Anda di Eropa?</p>\r\n<p>Kami menyediakan <strong>catering masakan Indonesia</strong> yang bisa Anda pesan dengan <strong>paket tour Anda</strong> dengan kami. Nikmati makanan kesukaan Anda untuk <strong>piknik di waktu makan siang</strong>, atau <strong>waktu makan malam bareng</strong>.</p>\r\n<p>Mulai dari <strong>snacks kecil</strong> sampai makanan besar, semua masakan diolah secara&nbsp;<em>home-made</em> oleh <strong>orang-orang Indonesia yang tinggal di Eropa</strong>, dan sangat terjamin secara <strong>rasa dan kualitas</strong>.</p>\r\n', '<p>Do you miss eating authentic Indonesian food during your visit to Europe?</p>\r\n<p>We provide catering service with Indonesian food that you can order with your tour package with us. Enjoy your favorite food for a picnic at lunch or dinner.</p>\r\n<p class=\" translation-block\">From small snacks to large meals, all dishes are <em> home-made </em> by Indonesians living in Europe, and are guaranteed in terms of taste and quality.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `seo_tag_title_id` varchar(255) DEFAULT NULL,
  `seo_tag_title_en` varchar(255) DEFAULT NULL,
  `seo_description_id` varchar(255) DEFAULT NULL,
  `seo_description_en` varchar(255) DEFAULT NULL,
  `head_title` varchar(255) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_id` varchar(255) DEFAULT NULL,
  `desc_en` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `seo_tag_title_id`, `seo_tag_title_en`, `seo_description_id`, `seo_description_en`, `head_title`, `title_id`, `title_en`, `desc_id`, `desc_en`, `slug`) VALUES
(1, '', '', '', '', 'VIP Services', 'Nikmati perjalanan istimewa ', 'Indulge in a luxurious journey ', 'Yang diatur dengan detail sempurna melalui layanan VIP kami. Dari pengaturan transportasi yang eksklusif hingga reservasi hotel mewah, kami siap membuat pengalaman perjalanan Anda menjadi tak terlupakan.\r\n', 'Meticulously arranged through our VIP services. From exclusive transportation arrangements to reservations at luxurious hotels, we are ready to make your travel experience unforgettable', 'vip-services'),
(2, '', '', '', '', 'Private Tour', 'Temukan keindahan destinasi wisata terbaik', 'Discover the beauty of the best destinations', 'Dengan tur pribadi eksklusif kami. Dibimbing oleh pemandu wisata berpengalaman, Anda akan menjelajahi tempat-tempat yang jarang dikunjungi dan mendapatkan pengalaman yang sangat personal', 'With our exclusive private tours. Guided by experienced tour guides, you will explore off-the-beaten-path places and have a truly personalized experience', 'private-tour'),
(3, '', '', '', '', 'MICE', 'Rencanakan acara bisnis Anda dengan sempurna', 'Plan your business events perfectly ', 'Melalui layanan MICE kami. Dari konferensi besar hingga acara perusahaan kecil, kami menyediakan fasilitas dan layanan yang dibutuhkan untuk kesuksesan acara Anda', 'Through our MICE services. From large conferences to small corporate events, we provide the facilities and services needed for the success of your event', 'mice');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `link`, `image`) VALUES
(1, 'facebook', 'https://www.facebook.com/yourprivateeurope', 'facebook.svg'),
(2, 'youtube', 'https://www.youtube.com/@yourprivateeurope', 'youtube.svg'),
(3, 'tiktok', 'https://www.tiktok.com/@yourprivateeurope', 'tiktok.svg'),
(4, 'linkedin', 'https://www.linkedin.com/company/your-private-europe/', 'linkedin-in.svg'),
(5, 'instagram', 'https://www.instagram.com/yourprivateeurope/', 'instagram.svg');

-- --------------------------------------------------------

--
-- Table structure for table `target_market`
--

CREATE TABLE `target_market` (
  `id` int(11) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `slug` varchar(64) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `description_id` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `rating`, `name`, `description_id`, `description_en`, `image`, `alt_image`) VALUES
(1, 5, 'Bp. Sugeng Setiyanto & family', '“Pelayanan yang diberikan sangat bagus, dan sangat direkomendasikan untuk liburan anda di Eropa!”', '\"The service provided is excellent, and highly recommended for your vacation in Europe!\"', 'testimonial-1.jpg', ''),
(2, 5, 'Puput Carolina & Rossy Dzafic', '“Sangat puas dan sangat direkomendasikan! Ini adalah perjalanan yang terbaik dan terseru kita di Eropa !”', '\"Very satisfied and definitely recommended! It was the best, fun and craziest trip we had in Europe !\"', 'testimonial-2.jpg', ''),
(3, 5, 'Ibu Sri Siswanti & family', '\"Tours pribadi terbaik di Eropa yang pernah kami dapatkan. Terima kasih banyak, ini adalah liburan terbaik kami !\"', '\"Giving the best private tour in Europe that we could ever get. Thank you so much, it was our best holiday !\"', 'testimonial-3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `three_pillars`
--

CREATE TABLE `three_pillars` (
  `id` int(11) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `three_pillars`
--

INSERT INTO `three_pillars` (`id`, `title_id`, `title_en`, `description_id`, `description_en`, `image`, `slug`) VALUES
(1, 'TIKET PESAWAT, VISA & PRIVATE JET', 'AIRFARE, VISA & PRIVATE JET', 'Pembelian tiket pesawat ke Eropa dan pengurusan Schengen visa dengan harga yang kompetitif, atau pengaturan private jet untuk VIP services', 'Purchase of air tickets to Europe and arrange Schengen visas at competitive prices, or arrange private jets for VIP services', 'airfare-visa-private-jet.jpg', 'airfare-visa-private-jet'),
(2, 'TRANSPORTASI DAN PEMANDU (VIP)', '(VIP) TRANSPORT & GUIDE', 'Penyediaan (VIP) transport, Chauffeur Service dan guide berbahasa Indonesia yang akan mengatur dan mendampingi Anda selama di Eropa', 'Provision of (VIP) transport, Chauffeur Service and Indonesian speaking guide who will arrange and accompany you while in Europe', '(vip)-transport-&-guide.jpg', '(vip)-transport-&-guide'),
(3, 'AKOMODASI & PERHOTELAN', 'ACCOMODATION & HOSPITALITY', 'Pengaturan akomodasi eksklusif, hospitality, event venue dan food & beverage (F&B) di Eropa sesuai dengan keinginan & budget Anda', 'Exclusive accommodation, hospitality, event venue and food & beverage (F&B) arrangements in Europe according to your wishes & budget', 'accomodation-&-hospitality.jpg', 'accomodation-&-hospitality');

-- --------------------------------------------------------

--
-- Table structure for table `tour_description`
--

CREATE TABLE `tour_description` (
  `id` int(11) NOT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `title_id` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `sub_title_id` varchar(255) DEFAULT NULL,
  `sub_title_en` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel_memories`
--

CREATE TABLE `travel_memories` (
  `id` int(11) NOT NULL,
  `heading_id` varchar(64) DEFAULT NULL,
  `heading_en` varchar(64) DEFAULT NULL,
  `section_id` varchar(64) DEFAULT NULL,
  `section_en` varchar(64) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unique_selling_point`
--

CREATE TABLE `unique_selling_point` (
  `id` int(11) NOT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `slug` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unique_selling_point`
--

INSERT INTO `unique_selling_point` (`id`, `title_id`, `title_en`, `description_id`, `description_en`, `slug`) VALUES
(1, 'Pelayanan Yang Fleksibel & Maksimal', 'Flexible & Maximum Service', ' <p><strong>Flexibel</strong> berarti Anda pegang kendali 100%:</p>\r\n                                                <ul>\r\n                                                    <li>Bebas memilih dari 3 pilar di atas pelayanan apa yang Anda inginkan dari kami: tiket pesawat, transportasi &amp; guide, akomodasi. Atau Anda percayakan ketiga-tiganya kepada kami</li>\r\n                                                    <li>Tentukan <em>travel itinerary</em>&nbsp;Anda sendiri, termasuk&nbsp;tempat-tempat yang ingin dituju, durasi, budget dan jadwal tour bisa Anda ditentukan sendiri dengan <strong>bebas menurut keinginan Anda</strong>.</li>\r\n                                                </ul>\r\n                                                <p><strong>Maximal (totalitas)</strong> berarti:</p>\r\n                                                <ul>\r\n                                                    <li>Kami selalu <strong>“go the extra mile”</strong></li>\r\n                                                    <li>Kami selalu mengedepankan keinginan, kenyamanan dan kebutuhan Anda selama di Eropa.</li>\r\n                                                </ul>\r\n                                                <p>2 hal inilah yang kami banggakan dari pelayanan kami!</p>', '<p><strong>Flexible</strong> means you are in control 100%:</p>\r\n<ul>\r\n<li>You are free to choose from the 3 pillars above which services you want from us: airplane tickets, transportation &amp; guide, accommodation. Or you trust us with all three.</li>\r\n<li class=\" translation-block\">Determine your own <em>travel itinerary</em>, including the places you want to go to, duration, budget and tour schedule, you can freely set your own <strong>according to your wishes</strong>.</li>\r\n</ul>\r\n<p class=\" translation-block\">Maximum (totality) means:</p>\r\n<ul>\r\n<li class=\" translation-block\">We always <strong>“go the extra mile”</strong></li>\r\n<li>We always put your wishes, comfort, and needs first while in Europe.</li>\r\n</ul>\r\n<p>These are 2 primary things that we are proud of from our service!</p>\r\n<p>&nbsp;</p>', '01. Flexible & Maximum Service'),
(2, 'Jaminan Keberangkatan Tanpa Minimal Jumlah Peserta ', 'Departure Guarantee Without Minimum Number of Participants', '<p>Kami selalu <strong>jamin keberangkatan</strong> Anda ke Eropa, tanpa adanya<strong><span>&nbsp;</span></strong>kuota atau minimal jumlah peserta tour. Konsep pelayanan kami malah sangat ideal untuk group kecil yang terdiri dari 2 – 8 orang.</p>\r\n<p>Anda juga tidak perlu khawatir dengan pembatalan atau kenaikan harga tour secara tiba-tiba.&nbsp;Kami selalu pegang komitmen untuk memberikan pelayanan yang maksimal!</p>\r\n<p>&nbsp;</p>', '<p class=\" translation-block\">We always <strong>guarantee</strong> your trips to Europe, without any quota or minimum number of participants. Our concept is even very suitable for small groups of 2 - 8 people.</p>\n<p>You also don\'t need to worry about sudden cancellation or price hike. We are always committed to provide a maximum service!</p>\n<p>&nbsp;</p>', '02. Departure Guarantee Without Minimum Number of Participants'),
(3, 'Pelayanan dalam Bahasa Indonesia', 'Service in your own language', '<p>Selama di Eropa, Anda akan dilayani oleh team kami yang mengenal Eropa dengan baik dan fasih&nbsp;<strong>berbahasa Indonesia</strong>.</p>\r\n<p>Selain itu, team kami juga fasih berbahasa asing lainnya (seperti bahasa Jerman, Perancis, Spanyol) dan banyak mengerti tentang sejarah dan perbedaan budaya antara Eropa, Asia dan Indonesia.&nbsp;Dengan begitu, Anda bisa berkomunikasi dan beradaptasi di Eropa dengan mudah, tanpa adanya hambatan bahasa atau budaya.&nbsp;<em>We speak your language!</em></p>', '<p class=\" translation-block\">In Europe, you will be served by our team, who not only knows Europe very well, but also can serve you in your own language. Currently, we can serve you in Indonesian, Malay, and Thai.</p>\r\n<p>Beside that, our team is also fluent in other European languages (like German, French, Spanish) and understands the history and cultural differences between Europe, Asia and Indonesia. Therefore, you can adapt and communicate easily in Europe, without any language or cultural barriers.&nbsp;<em>We speak your language!</em></p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', '', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `banner_homepage`
--
ALTER TABLE `banner_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commitment`
--
ALTER TABLE `commitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_agent`
--
ALTER TABLE `corporate_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_corporate_agent`
--
ALTER TABLE `detail_corporate_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_other_services`
--
ALTER TABLE `detail_other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`id_faq_category`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`id_faq_category`);

--
-- Indexes for table `founder_social_media`
--
ALTER TABLE `founder_social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_article`
--
ALTER TABLE `image_article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `image_description_destination`
--
ALTER TABLE `image_description_destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `image_destination`
--
ALTER TABLE `image_destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `instagram_partners`
--
ALTER TABLE `instagram_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_footer`
--
ALTER TABLE `other_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_market`
--
ALTER TABLE `target_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `three_pillars`
--
ALTER TABLE `three_pillars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_description`
--
ALTER TABLE `tour_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `travel_memories`
--
ALTER TABLE `travel_memories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `unique_selling_point`
--
ALTER TABLE `unique_selling_point`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_homepage`
--
ALTER TABLE `banner_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commitment`
--
ALTER TABLE `commitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate_agent`
--
ALTER TABLE `corporate_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_corporate_agent`
--
ALTER TABLE `detail_corporate_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_other_services`
--
ALTER TABLE `detail_other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faq_category`
--
ALTER TABLE `faq_category`
  MODIFY `id_faq_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `founder_social_media`
--
ALTER TABLE `founder_social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_article`
--
ALTER TABLE `image_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_description_destination`
--
ALTER TABLE `image_description_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_destination`
--
ALTER TABLE `image_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instagram_partners`
--
ALTER TABLE `instagram_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `target_market`
--
ALTER TABLE `target_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `three_pillars`
--
ALTER TABLE `three_pillars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_description`
--
ALTER TABLE `tour_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_memories`
--
ALTER TABLE `travel_memories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unique_selling_point`
--
ALTER TABLE `unique_selling_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);

--
-- Constraints for table `image_article`
--
ALTER TABLE `image_article`
  ADD CONSTRAINT `image_article_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Constraints for table `image_description_destination`
--
ALTER TABLE `image_description_destination`
  ADD CONSTRAINT `image_description_destination_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);

--
-- Constraints for table `image_destination`
--
ALTER TABLE `image_destination`
  ADD CONSTRAINT `image_destination_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);

--
-- Constraints for table `tour_description`
--
ALTER TABLE `tour_description`
  ADD CONSTRAINT `tour_description_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);

--
-- Constraints for table `travel_memories`
--
ALTER TABLE `travel_memories`
  ADD CONSTRAINT `travel_memories_ibfk_1` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
