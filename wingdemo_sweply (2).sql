-- phpMiniAdmin dump 1.9.170730
-- Datetime: 2021-05-12 06:54:26
-- Host: localhost
-- Database: wingdemo_sweply

/*!40030 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

DROP TABLE IF EXISTS `activations`;
CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES ('1','1','8OwV4wAmL4uraU6BlLXFcu71pfrlIc9Z','1','2021-05-07 09:01:12','2021-05-07 09:01:12','2021-05-07 09:01:12'),('2','2','QSdg0sDP1HjCpIt0WH55wlKqHjiW63In','1','2021-05-07 09:27:24','2021-05-07 09:27:24','2021-05-07 09:27:24'),('3','5','BVzs5h5SiCNUvTZNGFLLe4xGSVlPOb0Q','1','2021-05-08 08:50:04','2021-05-08 08:50:04','2021-05-08 08:50:04'),('4','7','DOb5Ne4Q9WRe4kSLYGzXeCmreR2BDyhI','1','2021-05-08 08:58:45','2021-05-08 08:58:45','2021-05-08 08:58:45'),('5','8','MEmqrvRWrZvPCldgixNdKmcHM2lfMHoU','1','2021-05-08 09:03:57','2021-05-08 09:03:57','2021-05-08 09:03:57'),('6','9','EWiHU7HwIj73GZF5aI13nVu7huqANwcS','1','2021-05-08 09:04:47','2021-05-08 09:04:47','2021-05-08 09:04:47'),('7','10','tgd9XDbqAvhWPlwPjd4luuVCBJiVIGRO','1','2021-05-08 09:56:57','2021-05-08 09:56:57','2021-05-08 09:56:57'),('8','11','vNvjaUhOMk1JtuTtxB7XmtMFkUFEKf8V','1','2021-05-08 09:58:29','2021-05-08 09:58:29','2021-05-08 09:58:29'),('9','12','rLQtFbhV4zzx19xl0ZFbU83cVWsDwPVT','1','2021-05-08 10:01:45','2021-05-08 10:01:45','2021-05-08 10:01:45'),('10','13','Jhm1coU6jHdEV00FSQyR7MsUNsh4nd3L','1','2021-05-08 10:07:27','2021-05-08 10:07:27','2021-05-08 10:07:27'),('11','14','3l1HcSLNtzSGhhxp6l1peBgAGa6dv0qR','1','2021-05-08 10:25:39','2021-05-08 10:25:38','2021-05-08 10:25:39'),('12','15','kwAUQklCZGcjpKMFps9NDbZEamuc4if5','1','2021-05-08 10:53:53','2021-05-08 10:53:53','2021-05-08 10:53:53'),('13','16','5VMBDG7JVm66TxnQoPKWDJ4L6QklJ18j','1','2021-05-08 10:55:27','2021-05-08 10:55:27','2021-05-08 10:55:27'),('14','17','LwJ5NBSM6B0wkNJHAUGGQmu54c2l1xJz','1','2021-05-08 10:57:53','2021-05-08 10:57:53','2021-05-08 10:57:53'),('15','18','PztZyNjjCAvJIrPf6fCmoBlmmr2dslHi','1','2021-05-08 10:59:57','2021-05-08 10:59:57','2021-05-08 10:59:57'),('16','19','garKsUDTg4vJgTsq4H1AqBXs8S0fZYjo','1','2021-05-08 11:02:21','2021-05-08 11:02:21','2021-05-08 11:02:21'),('17','5','LaWg8agHJXqPlmMxsKAbmKZlZNmzlbyu','1','2021-05-08 11:06:59','2021-05-08 11:06:59','2021-05-08 11:06:59'),('18','6','VN4cASnM9zd7vlLlpKQsHw61bWajSm9U','1','2021-05-08 11:08:40','2021-05-08 11:08:40','2021-05-08 11:08:40'),('19','7','yEhpyjKWLK9KwaHwFat6iIq2fjjPcU2m','1','2021-05-08 11:09:53','2021-05-08 11:09:53','2021-05-08 11:09:53'),('20','8','o5tOCMGhWXYeFlZ7bNrL9EbmrPdSHzMp','1','2021-05-08 11:11:30','2021-05-08 11:11:30','2021-05-08 11:11:30'),('21','9','zKeWX2QUNxnjWkzSxPGAcXkWfFJROCau','1','2021-05-08 11:12:22','2021-05-08 11:12:22','2021-05-08 11:12:22'),('22','10','3A7WmXaDgQAJkJEKv84tR0fJoJvb77v8','1','2021-05-08 11:13:42','2021-05-08 11:13:42','2021-05-08 11:13:42'),('23','11','lHi1wX2ygZDUQFfdTAUsa2TOI9zACuZQ','1','2021-05-08 11:14:04','2021-05-08 11:14:04','2021-05-08 11:14:04'),('24','12','dM77SGtrqV6pUfPlwhEpoO5Y0eKTy9fw','1','2021-05-08 11:15:20','2021-05-08 11:15:20','2021-05-08 11:15:20'),('25','13','clktEqVYu6Mb3O3JU1ZyiZhX6pAnXevx','1','2021-05-08 11:16:54','2021-05-08 11:16:54','2021-05-08 11:16:54'),('26','14','VLfTrWCzko2RzZmtIc0Ee0kmid5vNZcr','1','2021-05-08 11:17:33','2021-05-08 11:17:33','2021-05-08 11:17:33'),('27','15','nIpJBs7IBXXObMdFJExLAvY3eDG17TAe','1','2021-05-08 11:19:11','2021-05-08 11:19:11','2021-05-08 11:19:11'),('28','16','vnSfrLh1iSfBidX5Bj5HcW4JhVM5oNd4','1','2021-05-10 02:21:02','2021-05-10 02:21:01','2021-05-10 02:21:02'),('29','17','akJYxehXzLyfYM63ercbqM4iOkhq6W8i','1','2021-05-10 08:51:45','2021-05-10 08:51:45','2021-05-10 08:51:45');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;

DROP TABLE IF EXISTS `business`;
CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `business_name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `website_url` varchar(200) DEFAULT NULL,
  `contact_number` varchar(200) DEFAULT NULL,
  `vat_number` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `business` DISABLE KEYS */;
INSERT INTO `business` VALUES ('1','1','Unimark Digital','1','www.unimarkme.com','9623177766','1234567890','2021-05-07 10:35:41','2021-05-07 10:35:41',NULL),('2','2','India Sweply','1','www.sweply.com','9423040408','1234567890','2021-05-08 02:36:44','2021-05-08 02:36:44',NULL),('3','2','Unicom India','1','www.unicomg.com','8888819077','1234567890','2021-05-08 02:37:19','2021-05-08 02:37:19',NULL),('4','2','Nashik Sweply','1','www.unicomnashik.com','9623177766','12458790','2021-05-08 02:38:40','2021-05-08 02:38:40',NULL),('5','2','Marketing Unimark','1','www.marketingunimark.com','1234567890','5558879920','2021-05-08 02:39:44','2021-05-08 02:39:44',NULL),('6','2','MUmbai Digotal Company','1','www.mumbai.com','1234567890','2587410','2021-05-08 05:30:46','2021-05-10 08:07:32',NULL),('7','2','Test','1','http://web.com','839064335','1254','2021-05-08 10:39:45','2021-05-10 08:09:39',NULL),('8','2','Breakfast Times','0','google.com','9657375881','1212121212','2021-05-10 03:48:08','2021-05-10 08:09:06',NULL),('9','2','New company','1','company.com','7878787878','123456','2021-05-11 07:12:56','2021-05-11 07:12:56',NULL),('10','0','demo business','1','loremtext.com','9999999999','1212121212','2021-05-11 09:52:04','2021-05-11 09:52:04',NULL),('11','0','demo 12','1','loremtext.com','9999999999','1212121212','2021-05-11 09:53:43','2021-05-11 09:53:43',NULL),('12','2','timesup','1','loremtext.com','+9669657375881','1212121212','2021-05-11 09:56:07','2021-05-11 09:56:07',NULL);
/*!40000 ALTER TABLE `business` ENABLE KEYS */;

DROP TABLE IF EXISTS `campaign`;
CREATE TABLE `campaign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_name` varchar(255) DEFAULT NULL,
  `channel_id` int(11) NOT NULL DEFAULT '0',
  `channel_category_id` int(11) NOT NULL DEFAULT '0',
  `post_image` varchar(255) DEFAULT NULL,
  `screen_shot` varchar(250) NOT NULL,
  `original_image` varchar(250) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `heading` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `business_id` int(11) DEFAULT NULL,
  `upload_type` varchar(25) NOT NULL,
  `call_to_action` varchar(10) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `target_audience` varchar(100) DEFAULT NULL,
  `gender` varchar(11) NOT NULL,
  `age` varchar(10) DEFAULT NULL,
  `note` text NOT NULL,
  `android_url` varchar(100) NOT NULL,
  `ios_url` varchar(100) NOT NULL,
  `app_name` varchar(250) NOT NULL,
  `account_username` varchar(200) DEFAULT NULL,
  `account_password` varchar(200) DEFAULT NULL,
  `campaign_budget` double NOT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0=inactive,1=approve',
  `payment_status` varchar(50) DEFAULT 'PENDING' COMMENT 'PENDING,PAID',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
INSERT INTO `campaign` VALUES ('1','Unimark New','1','1','','','0','Sweply Digital',NULL,'Testing Heading','1','1','image','Book Now','2021-05-13 00:00:00','2021-05-19 00:00:00',NULL,'M','25 - 65','Testing New','','','','ssdsd','sdsd','500',NULL,'PAID','2021-05-07 08:42:31','2021-05-07 08:42:31',NULL),('2','ca 01','1','1','1620452206_973.png','','1620452206_973.png','BR 01',NULL,'HE 01','1','2','image','Book Now','2021-05-20 00:00:00','2021-05-13 00:00:00',NULL,'M','29 - 45','TEST','','','','pash@gmail.com','admin','500',NULL,'PAID','2021-05-08 00:06:46','2021-05-08 00:06:46',NULL),('3','C011','1','1','1620456867_893.png','','1620456867_893.png','B00122',NULL,'H0011','1','2','image','Apply Now','2021-05-14 00:00:00','2021-05-29 00:00:00',NULL,'M','25 - 65','TEDFSDFDF','','','','admin','afddsfaf','500',NULL,'PAID','2021-05-08 01:24:27','2021-05-08 01:24:27',NULL);
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;

DROP TABLE IF EXISTS `campaign_target`;
CREATE TABLE `campaign_target` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `campaign_target` DISABLE KEYS */;
INSERT INTO `campaign_target` VALUES ('1','Snapchat','1','2021-05-04 10:42:02','2021-05-04 10:42:02',NULL),('2','Facebook','1','2021-05-04 10:42:02',NULL,NULL);
/*!40000 ALTER TABLE `campaign_target` ENABLE KEYS */;

DROP TABLE IF EXISTS `channel`;
CREATE TABLE `channel` (
  `id` int(11) NOT NULL,
  `channel_name` varchar(255) DEFAULT NULL,
  `channel_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `channel` DISABLE KEYS */;
INSERT INTO `channel` VALUES ('1','Snapchat','snapchat.png','1','2021-05-04 10:42:02','2021-05-04 10:42:02',NULL),('2','Facebook','facebook.png','1','2021-05-04 10:42:02',NULL,NULL);
/*!40000 ALTER TABLE `channel` ENABLE KEYS */;

DROP TABLE IF EXISTS `channel_category`;
CREATE TABLE `channel_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `channel_id` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `channel_category` DISABLE KEYS */;
INSERT INTO `channel_category` VALUES ('1','Advertise','snap-ads.png','1','2021-05-04 10:43:37',NULL,NULL,'1');
/*!40000 ALTER TABLE `channel_category` ENABLE KEYS */;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('1','2014_10_12_000000_create_users_table','1'),('2','2014_10_12_100000_create_password_resets_table','1'),('3','2019_08_19_000000_create_failed_jobs_table','1'),('4','2021_04_19_070546_create_sessions_table','1');
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules` (
  `id` bigint(20) unsigned NOT NULL,
  `module_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_type` int(1) NOT NULL DEFAULT '0' COMMENT '0=admin,1=user panel',
  `module_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_external_url` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text,
  `type` varchar(255) DEFAULT NULL,
  `from_id` int(11) NOT NULL DEFAULT '0',
  `to_id` int(11) NOT NULL DEFAULT '0',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

DROP TABLE IF EXISTS `persistences`;
CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
INSERT INTO `persistences` VALUES ('1','1','COJbrBfbYechaiDg3QvDhNFQU2FtGgPJ','2021-05-07 09:04:39','2021-05-07 09:04:39'),('2','1','tksV3JfOuck0A6w3dJcxwWVKScbz7Pus','2021-05-07 09:05:44','2021-05-07 09:05:44'),('3','2','nDx92dCXWxGwQc7oqErqCk6Bg83gFjcE','2021-05-07 09:31:28','2021-05-07 09:31:28'),('4','2','2JIID02W71GTWVuljInMTFGQ6RMWurPp','2021-05-07 09:57:10','2021-05-07 09:57:10'),('5','2','D1tBWb9BWWgw2C1BOaeCQ5HmwIy2xBqp','2021-05-07 10:25:57','2021-05-07 10:25:57'),('6','2','TDGHjsbth6bWU6CNOMN5EUBB0amnhRTT','2021-05-07 10:32:45','2021-05-07 10:32:45'),('7','1','hjs9RegddKv8TGVAEAow7DgSAzUAiWWm','2021-05-07 10:35:06','2021-05-07 10:35:06'),('8','1','RhINUFb1U4945RbB5daHDcPPL0Me93T9','2021-05-07 10:35:42','2021-05-07 10:35:42'),('9','2','aZJSAOkGVJO7AeHkZXZIdmY8PBQZfsN6','2021-05-07 10:35:47','2021-05-07 10:35:47'),('10','2','bpFJVdfnLfO4kl4nXjG2lhIGs3P7sFbT','2021-05-07 10:36:44','2021-05-07 10:36:44'),('11','2','FWvgIr4MTm2nahGxDwlyaFT0dja1Iuxw','2021-05-07 10:41:55','2021-05-07 10:41:55'),('12','2','PM1aTa10U0tQ9hN6WhZddndPIkNnrjuG','2021-05-08 01:07:29','2021-05-08 01:07:29'),('13','2','qYVboMeiJOdZDsiofnA77kxstBy4UOoJ','2021-05-08 01:25:36','2021-05-08 01:25:36'),('14','2','QAJUao5kzuVnanaYDOmv0nXg87PRuS4p','2021-05-08 01:26:03','2021-05-08 01:26:03'),('15','2','DTd4e3ujJt53qLWZawZYSVGKka8TaAdV','2021-05-08 01:27:25','2021-05-08 01:27:25'),('16','2','O7ctFC8OFXHKVIzMBIsxbsSexCUUYcqK','2021-05-08 01:31:42','2021-05-08 01:31:42'),('17','2','7Abm1RqVZEoxCPv8wnDGeDSqym09ocfo','2021-05-08 01:36:56','2021-05-08 01:36:56'),('18','2','yB9yMh35fuGBdiM3Kh5grYZQNaUNbVjZ','2021-05-08 01:48:25','2021-05-08 01:48:25'),('19','2','hQIHaxrVuNLeeW9Y7WFb08GKk7G79yzW','2021-05-08 01:49:49','2021-05-08 01:49:49'),('20','2','Z60R1ZHxBBv8BFeYNG8LrPUiueUQ0i9s','2021-05-08 01:51:17','2021-05-08 01:51:17'),('24','2','UwGmYeRdZXx7cNUEWIZuFrsfdWqvfG03','2021-05-08 05:00:44','2021-05-08 05:00:44'),('26','2','RqLL2mGhffGRXUuPz1eyJiSaYrrvvG2r','2021-05-08 06:09:11','2021-05-08 06:09:11'),('28','2','vbyqLBQ1oBiy5iiJvRWtan5DVOV8KDar','2021-05-08 07:50:40','2021-05-08 07:50:40'),('29','1','NAVrJy1uwXjZ9KplboB8nuBcJJFyH2YK','2021-05-08 08:11:40','2021-05-08 08:11:40'),('30','2','hNozhPCQXHzkyEE5UCuazHFHRYGs1MPS','2021-05-08 08:11:47','2021-05-08 08:11:47'),('31','2','ec0b8ahVf20pkuQCEjJMvQmy8GtVyNlo','2021-05-08 08:27:40','2021-05-08 08:27:40'),('32','2','JI6aKLuoRjzA6DskOBOil6Eju5E2MmtJ','2021-05-08 09:28:37','2021-05-08 09:28:37'),('33','2','IS7seBgQCLbIMoKN2cQipHLdf5OYz2LE','2021-05-08 09:59:40','2021-05-08 09:59:40'),('34','2','Dc06xeH6n1ai2grVZ1cXZJ6uzrUbnag5','2021-05-08 10:26:06','2021-05-08 10:26:06'),('35','2','BZ6sN143yvzI8d1OPd8T9RgxOq1zvnZe','2021-05-08 11:10:14','2021-05-08 11:10:14'),('36','15','Oa9bgMqADCcg7loMMC52WosJxfioZtUN','2021-05-08 11:28:17','2021-05-08 11:28:17'),('37','15','SOjOsxB5dMN3aKWw48hfMHwtHGe3aL2w','2021-05-08 11:28:32','2021-05-08 11:28:32'),('38','15','NB4WHxEED7Pg6xy3BSuWwBVlES5aN2Kd','2021-05-08 11:30:28','2021-05-08 11:30:28'),('39','15','OborppdcTTdLLpkLB7LR7iL7UaWkICsy','2021-05-08 11:31:22','2021-05-08 11:31:22'),('40','15','ScUFyDHjKD1rPFtHmlirGhIVVnMnUFhE','2021-05-08 11:31:31','2021-05-08 11:31:31'),('41','15','QZeS3t4fkvO8xBG5YANBYo1khctD4VUz','2021-05-08 11:31:51','2021-05-08 11:31:51'),('42','15','daXWv0EoE6VkQKs2RGkfHw6N50ILSTc7','2021-05-08 11:32:21','2021-05-08 11:32:21'),('43','15','BCUt3zG7GqtXmAjmnT4yop7EZvsBgHjl','2021-05-08 11:32:58','2021-05-08 11:32:58'),('44','15','Og8synPmeqzjmEvajoZEofvyX8ovttAn','2021-05-08 11:33:12','2021-05-08 11:33:12'),('48','15','4zR91j6avsioptBJTpwmypTgjieazoGA','2021-05-08 11:45:58','2021-05-08 11:45:58'),('55','2','9G52C6pojqOO63QHOPSwC55umayWQXzi','2021-05-10 02:26:15','2021-05-10 02:26:15'),('56','16','APjNTCfxCU2UsxM7Lj04RSErGxjOyJCc','2021-05-10 02:37:06','2021-05-10 02:37:06'),('57','16','LHIfXJz1Zutdfi4b2XspLENWGlR9WWER','2021-05-10 02:59:52','2021-05-10 02:59:52'),('59','16','1wcb7bEvEuZs2cJwGvMXHO1EMtTvHb4T','2021-05-10 05:22:08','2021-05-10 05:22:08'),('60','16','5jwuuApLtlcrd3RqMozrrt4qzusEr4uK','2021-05-10 05:25:14','2021-05-10 05:25:14'),('61','2','XURt96Qj30aIb7Nc2gPIb67XfWeQTVs4','2021-05-10 06:41:08','2021-05-10 06:41:08'),('63','2','gPFCbsIzwnC8WoagligxT5DiAjDkRF8Y','2021-05-10 07:03:33','2021-05-10 07:03:33'),('64','16','dtxTeZHfgZk5gUZxchMXFr9jp8DymgtP','2021-05-10 07:26:53','2021-05-10 07:26:53'),('65','2','oLQeSd61jPqywJ9P3EkNeR6dTgwQvEW7','2021-05-10 07:45:50','2021-05-10 07:45:50'),('66','2','J62qcdEqGja4K8Cv1GtZU1nPm5Xbuezu','2021-05-10 09:14:01','2021-05-10 09:14:01'),('68','2','80T4VOsVMycTdsio4SAUtYeTGfwvkimB','2021-05-10 10:45:43','2021-05-10 10:45:43'),('69','1','1AaJcMsv5WuZCtIDFYoQP6qGAyNUJK53','2021-05-10 11:05:48','2021-05-10 11:05:48'),('70','1','T2ITAsccQCix19SCyWkLctRP0OfrerIr','2021-05-10 11:06:48','2021-05-10 11:06:48'),('71','1','PYxAPLAMEhmYA0OvGyp54ncGJcg1mJye','2021-05-10 11:07:18','2021-05-10 11:07:18'),('72','1','tydtnN4IdgyDFowkR4uYdE2gCIIdgpwy','2021-05-10 11:07:36','2021-05-10 11:07:36'),('73','2','k16IEq6Xm8a0gSaBmfE6Q6jzqB6RKLnc','2021-05-10 11:08:47','2021-05-10 11:08:47'),('74','2','bF44RKtGpLqDPkTSz8NzR4yS5x9AjKYl','2021-05-11 00:48:17','2021-05-11 00:48:17'),('75','2','ijz6uE0xqb8tQZZMwJkyPngCEcI0WqsY','2021-05-11 01:04:51','2021-05-11 01:04:51'),('77','2','c20hQQtZyycoFQ7EzCcO4NiLsb15uGM0','2021-05-11 01:37:28','2021-05-11 01:37:28'),('78','2','VYIJvB7cv0qY2bpbryR11qEqfOF18XGs','2021-05-11 01:40:05','2021-05-11 01:40:05'),('79','2','xiD1tIb9MUSv9lMxd20vkPe7kmzrOySI','2021-05-11 01:46:55','2021-05-11 01:46:55'),('81','2','ioqH2ybQ6ueq2ktPr3ePar6uFyFPDm7Q','2021-05-11 03:54:05','2021-05-11 03:54:05'),('82','2','rxraW0ToG72Ljq5RauGZ1dwprzmYhxoz','2021-05-11 05:00:47','2021-05-11 05:00:47'),('83','2','0HyuGni2DyvMZageoi70GZm744wBXsnE','2021-05-11 05:06:17','2021-05-11 05:06:17'),('84','2','Qke7m4i3UBLu3y8BoD0nUkapZCtGBWqk','2021-05-11 05:26:49','2021-05-11 05:26:49'),('86','2','ba8wDfoKfMwZwIYhTrNugb3YIlYfB5qS','2021-05-11 06:11:23','2021-05-11 06:11:23'),('87','2','z3WlgllLI4ghNIPZvP60heBSaug9eSyI','2021-05-11 06:59:00','2021-05-11 06:59:00'),('90','2','IfsGz3ary1SNiNGpVMLvYaKxs2LGnkoU','2021-05-11 10:18:35','2021-05-11 10:18:35'),('91','2','i58qVnA3pCJsbel64WFjMctIAK222VNt','2021-05-11 10:21:39','2021-05-11 10:21:39'),('93','1','XWzYUT6HMHNdlb4B04q7jCbflARdZIrI','2021-05-11 10:45:46','2021-05-11 10:45:46'),('94','1','8cd50wEDYo6wNUQu7n0hERwQTRzYWQg3','2021-05-11 10:47:38','2021-05-11 10:47:38'),('95','2','5Zmesbikw1Ob76XGB7c5v9RB6jF182oO','2021-05-11 10:52:14','2021-05-11 10:52:14'),('96','2','qczlN3atsysQKLHN23psStDPXlbarPy7','2021-05-11 18:01:32','2021-05-11 18:01:32'),('97','2','gV2a6hLSz3FRXNbMnjPsyJNkYgY4nPqA','2021-05-11 18:06:35','2021-05-11 18:06:35'),('98','1','2LoxSzIqCLxKstovP7uTTl5qXlMLVy4Y','2021-05-12 04:50:54','2021-05-12 04:50:54'),('99','2','w4Wqy6m83XwC3ejyWhUz8hBXb9HM1loj','2021-05-12 04:51:01','2021-05-12 04:51:01');
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;

DROP TABLE IF EXISTS `reminders`;
CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` bigint(20) unsigned NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES ('1','Admin',NULL,NULL),('2','User',NULL,NULL),('3','Staff',NULL,NULL);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

DROP TABLE IF EXISTS `role_access`;
CREATE TABLE `role_access` (
  `id` bigint(20) unsigned NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '0',
  `add_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `edit_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `list_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `view_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `delete_access` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=inactive,1=active',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `role_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_access` ENABLE KEYS */;

DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES ('2','1','2021-05-07 09:27:24','2021-05-07 09:27:24'),('5','3','2021-05-08 11:06:59','2021-05-08 11:06:59'),('6','3','2021-05-08 11:08:40','2021-05-08 11:08:40'),('7','3','2021-05-08 11:09:53','2021-05-08 11:09:53'),('8','3','2021-05-08 11:11:30','2021-05-08 11:11:30'),('9','3','2021-05-08 11:12:22','2021-05-08 11:12:22'),('10','3','2021-05-08 11:13:42','2021-05-08 11:13:42'),('11','3','2021-05-08 09:58:29','2021-05-08 09:58:29'),('12','3','2021-05-08 10:01:45','2021-05-08 10:01:45'),('13','3','2021-05-08 10:07:27','2021-05-08 10:07:27'),('14','3','2021-05-08 10:25:39','2021-05-08 10:25:39'),('15','3','2021-05-08 10:53:53','2021-05-08 10:53:53'),('16','3','2021-05-08 10:55:27','2021-05-08 10:55:27'),('17','3','2021-05-08 10:57:53','2021-05-08 10:57:53'),('18','3','2021-05-08 10:59:57','2021-05-08 10:59:57'),('19','3','2021-05-08 11:02:21','2021-05-08 11:02:21');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES ('1','user','User',NULL,NULL,NULL),('2','admin','Admin',NULL,NULL,NULL),('3','staff','Staff',NULL,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('bae5pdKWeAigEaHypzksPLvjdnTnPXRPxeCtEKsg',NULL,'192.168.1.7','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoib2FUSDN5eG9IWHRkd3NmeGhNeWRLRk5TUUV1MmI1bHJySTRpckFaeCI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTkyLjE2OC4xLjEwL3N3ZXBseS1kZXYvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19','1620451119'),('EwAWqCYs8kKknzbBfQ01N2EeAUPHto85dmewARrG',NULL,'192.168.1.6','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2I3VzF6bVh1Z05DZUc4ekx6aUNoSmdZSzlMa0NibUE0Zm1rUFZlSiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU1OiJodHRwOi8vMTkyLjE2OC4xLjEwL3N3ZXBseS1kZXYvdXNlci9zbmFwY2hhdC1jcmVhdGUtYWRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==','1620477235'),('Hqj0cubNTxcwOwzb6m29jPjq073wYNIGSL41mET4',NULL,'192.168.1.6','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidE1HY085YnVDVE1vVktSNFV1clpmS1gxRll2R1BRZjNPM0NucFlEYyI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ0OiJodHRwOi8vMTkyLjE2OC4xLjEwL3N3ZXBseS1kZXYvdXNlci9idXNpbmVzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=','1620457553'),('n47bra9eY1lyMpAWuRyXvMewAE1QRpnqGOOvRQM6',NULL,'192.168.1.7','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36','YTo1OntzOjE2OiJjdXJyZW50X2xhdGl0dWRlIjtzOjEwOiIxOS45OTc0NTMzIjtzOjY6Il90b2tlbiI7czo0MDoiVnRQRXFLck9DbUZxMjd3S3A1a2JidGM1SXJkSWo3Qmg0M0E2cVBFTyI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTkyLjE2OC4xLjEwL3N3ZXBseS1kZXYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19','1620395422'),('PCPyFny4UmepeNUJecHdPKDffZR8e958SuW5BoOh',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicFg3aTRhWEpUeThKVnAwdkxsakNOMFh6dExQTEFVdWVwSVhBQlFlbyI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=','1620737882');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES ('1',NULL,'global',NULL,'2021-05-07 09:03:16','2021-05-07 09:03:16'),('2',NULL,'ip','::1','2021-05-07 09:03:16','2021-05-07 09:03:16'),('3',NULL,'global',NULL,'2021-05-07 09:03:46','2021-05-07 09:03:46'),('4',NULL,'ip','::1','2021-05-07 09:03:46','2021-05-07 09:03:46'),('5',NULL,'global',NULL,'2021-05-07 09:03:50','2021-05-07 09:03:50'),('6',NULL,'ip','::1','2021-05-07 09:03:50','2021-05-07 09:03:50'),('7',NULL,'global',NULL,'2021-05-08 11:45:39','2021-05-08 11:45:39'),('8',NULL,'ip','192.168.1.30','2021-05-08 11:45:39','2021-05-08 11:45:39'),('9','15','user',NULL,'2021-05-08 11:45:39','2021-05-08 11:45:39'),('10',NULL,'global',NULL,'2021-05-10 02:33:16','2021-05-10 02:33:16'),('11',NULL,'ip','192.168.1.30','2021-05-10 02:33:16','2021-05-10 02:33:16'),('12','16','user',NULL,'2021-05-10 02:33:16','2021-05-10 02:33:16');
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(4) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `business_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contry_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=personal business, 1=Commercial business',
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `commercial_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isTandc` tinyint(1) NOT NULL DEFAULT '0',
  `is_user` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('1','0','1','0',NULL,'Kumavat','Prashant',NULL,'9657375881','kumavatyogesh11@gmail.com',NULL,'$2y$10$vMX40Te3DbzijH.53QuhE.0HMOdkbhKSpw6diGJQVuy0fpIT0UKXa','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-07 07:01:12','2021-05-12 04:50:54','2021-05-12 04:50:54'),('2','0','0','0',NULL,'kkkk','Yogesh Kumavat',NULL,'9999999999','admin@proserve.com',NULL,'$2y$10$UTQkFLfSAuNtEnIR1zLWx.viLmy5ARfXQZhLCX9OiMTvmgv7JsQlC','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-07 07:27:24','2021-05-12 04:51:01','2021-05-12 04:51:01'),('3','1','2','1',NULL,NULL,'Rohan Pawar',NULL,'9923177766',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 03:34:50','2021-05-08 03:34:50',NULL),('4','1','2','2',NULL,NULL,'Yogesh Khairnar',NULL,'99214477880',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 03:36:03','2021-05-08 03:36:03',NULL),('5','0','0','0',NULL,NULL,NULL,NULL,NULL,'pash@mail.com',NULL,'$2y$10$xUAvSiNFGOo0JFjnHbOXreAqru56LRk7lEuTcuW9ozhFqN.IMNs1K','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 06:50:04','2021-05-08 06:50:04',NULL),('6','2','2','2',NULL,NULL,'prashantnn',NULL,'7878787878',NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 06:53:12','2021-05-08 06:53:12',NULL),('7','0','0','0',NULL,NULL,NULL,NULL,NULL,'pash1@mail.com',NULL,'$2y$10$LEm2FrYgHZY9slFgl34Hx.QU1MzhX.PLZZy6TMCILjgvhgf31hAom','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 06:58:45','2021-05-08 06:58:45',NULL),('8','0','0','0',NULL,NULL,NULL,NULL,NULL,'admin123@gmail.com',NULL,'$2y$10$qlXqcHdCM.4yV5JDXCUYfOA.dUDKZqtz2fe01w2XYC/izXRKeTJ0i','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 07:03:57','2021-05-08 07:03:57',NULL),('9','0','0','0',NULL,NULL,NULL,NULL,NULL,'pash34@gmail.com',NULL,'$2y$10$E0d1VnR41vphln2dt9Sb.eiei.b4kA4PSoxQkTsEREX3B8KxxkA4G','0',NULL,NULL,NULL,NULL,NULL,'0','1',NULL,'2021-05-08 07:04:47','2021-05-08 07:04:47',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

DROP TABLE IF EXISTS `wallet_master`;
CREATE TABLE `wallet_master` (
  `wallet_id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `credited_amount` double DEFAULT '0',
  `debited_amount` double NOT NULL,
  `balance_amount` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`wallet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `wallet_master` DISABLE KEYS */;
INSERT INTO `wallet_master` VALUES ('1','9','0','0','0','1','2021-05-11 05:12:56','2021-05-11 05:12:56'),('2','10','0','0','0','1','2021-05-11 07:52:04','2021-05-11 07:52:04'),('3','11','0','0','0','1','2021-05-11 07:53:43','2021-05-11 07:53:43'),('4','2','2000','200','1800','1','2021-05-11 07:56:07','2021-05-11 07:56:07');
/*!40000 ALTER TABLE `wallet_master` ENABLE KEYS */;

DROP TABLE IF EXISTS `wallet_transactions`;
CREATE TABLE `wallet_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `amount` double NOT NULL DEFAULT '0',
  `transaction_type` enum('DEBIT','CREDIT') NOT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `wallet_id` int(11) NOT NULL DEFAULT '0',
  `campaign_id` int(11) NOT NULL DEFAULT '0',
  `business_id` int(11) NOT NULL DEFAULT '0',
  `payment_method` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `payment_request` text,
  `payment_response` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `wallet_transactions` DISABLE KEYS */;
INSERT INTO `wallet_transactions` VALUES ('1','2','2000','DEBIT','CXSH23jjjdff','0','1','2',NULL,'2021-05-08 11:52:17',NULL,NULL,NULL),('2','2','2000','CREDIT','TN000000420','0','0','2',NULL,'2021-05-08 11:52:17',NULL,NULL,NULL);
/*!40000 ALTER TABLE `wallet_transactions` ENABLE KEYS */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;


-- phpMiniAdmin dump end
