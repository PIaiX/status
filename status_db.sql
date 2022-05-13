/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : status_db

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 13/05/2022 16:06:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES (1, 'О нас', 'o-nas', 'Салон Status — модное пространство с высоким уровнем сервиса и приятной атмосферой. Сюда приходят, чтобы меняться и совершенствоваться. Здесь царит магия красоты, а высококлассные специалисты создают прекрасные образы.\r\n\r\nКоманду стилистов салона составляют профессиональные мастера с большим опытом, выпускники ведущих парикмахерских школ мира, которые продолжают постоянно повышать свой уровень.\r\n\r\nПомимо стрижек, укладок, причёсок и окрашиваний в самых сложных техниках, к вашим услугам дневной, вечерний макияж, коррекция формы и цвета бровей, долговременная укладка бровей, наращивание ресниц и перманентный макияж.\r\n\r\nВ нашем салоне представлены эксклюзивные бренды индустрии красоты: Hipertin (Испания), Time To Grow, натуральная индийская хна.\r\n\r\nМастера ногтевого сервиса выполняют маникюр и педикюр любой сложности, работая на самых лучших продуктах сегмента.\r\n\r\nТакже в салоне можно получить несколько услуг одновременно, для экономии Вашего времени.\r\n\r\nПриходите в Status, и наша команда создаст ваш совершенный образ.\r\n\r\nВысокий уровень сервиса, приятная атмосфера, широкий, постоянно обновляющийся ассортимент услуг отвечают высоким требованием самых взыскательных клиентов.', 'about/i5srUEdqss82J2CJsDLDNZuUsbyID02fiMruwpJ6.jpg|about/wUmXx7vTQOOtHadWn5IeODBZppoQgoeBx3HWlcB7.jpg|about/WKu56B6BzIcbrx4abDpnlaPYhQRTFkQrHLlwUTYO.jpg|about/jzdmoxJs1jiCtL7vHN9zgWt7uZ8uy2jSlPrd0ITk.jpg|', '2022-05-12 14:28:24', '2022-05-12 11:49:40');

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'Matrix', '', '2003-02-13 19:59:35', '2015-03-08 11:41:13');
INSERT INTO `brands` VALUES (2, 'Otium', '', '2010-10-16 07:13:09', '2009-04-18 22:59:22');
INSERT INTO `brands` VALUES (3, 'Concept', '', '2002-08-21 01:36:25', '2011-06-12 22:47:01');
INSERT INTO `brands` VALUES (4, 'CD', '', '2022-04-03 11:20:44', '2000-09-01 07:47:53');
INSERT INTO `brands` VALUES (5, 'lador', '', '2000-09-01 06:29:56', '2016-07-14 06:46:47');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Уход за волосами', 0, '2022-05-05 15:09:14', '2022-05-05 15:09:17', 'uhod-za-volosami');
INSERT INTO `categories` VALUES (2, 'Уход за лицом', 0, '2022-05-05 15:09:33', '2022-05-05 15:09:36', 'uhod-za-litsom');
INSERT INTO `categories` VALUES (3, 'Уход за телом', 0, '2022-05-05 15:09:50', '2022-05-05 15:09:53', 'uhod-za-telom');
INSERT INTO `categories` VALUES (4, 'Уход за ногтями', 0, '2022-05-05 15:10:16', '2022-05-05 15:10:18', 'uhod-za-nogtyami');
INSERT INTO `categories` VALUES (5, 'Шампуни и кондиционеры', 1, '2022-05-05 15:52:45', '2022-05-05 15:52:48', 'shampuni-i-kondicionery');
INSERT INTO `categories` VALUES (6, 'Маски и сыворотки', 1, '2022-05-05 15:53:12', '2022-05-05 15:53:15', 'maski-i-syvorotki');
INSERT INTO `categories` VALUES (7, 'Краска для волос', 2, '2022-05-05 15:53:38', '2022-05-05 15:53:41', 'kraska-dlya-volos');
INSERT INTO `categories` VALUES (8, 'Стайлинг', 1, '2022-05-05 15:54:03', '2022-05-05 15:54:01', 'stailing');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '8 951 066 8 777', 'Salon-status.online@yandex.ru', 'г.Казань, улица Меридианная, 3', '10:00 до 21:00', 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab6869cf3ce256453a0d24d6aaf74f116ec099ed7ef294ed3696d2c4d67be4c65&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=false', '2022-05-12 12:22:17', '2022-05-12 12:38:13');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for hair_types
-- ----------------------------
DROP TABLE IF EXISTS `hair_types`;
CREATE TABLE `hair_types`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hair_types
-- ----------------------------
INSERT INTO `hair_types` VALUES (1, 'Жесткие', 'zhestkie', '2022-05-11 16:22:46', '2022-05-11 16:22:49');
INSERT INTO `hair_types` VALUES (2, 'Сухие', 'suhie', '2022-05-13 11:33:43', '2022-05-13 11:33:46');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_05_05_103044_create_services_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_05_05_105637_create_offers_table', 2);
INSERT INTO `migrations` VALUES (7, '2022_05_05_110419_update_offers_table', 3);
INSERT INTO `migrations` VALUES (8, '2022_05_05_112907_create_teams_table', 4);
INSERT INTO `migrations` VALUES (9, '2022_05_05_113833_update_teams_table', 5);
INSERT INTO `migrations` VALUES (10, '2022_05_05_120641_create_categories_table', 6);
INSERT INTO `migrations` VALUES (11, '2022_05_05_120707_create_hair_types_table', 6);
INSERT INTO `migrations` VALUES (12, '2022_05_05_120722_create_brands_table', 6);
INSERT INTO `migrations` VALUES (13, '2022_05_05_121403_create_products_table', 7);
INSERT INTO `migrations` VALUES (17, '2022_05_05_124823_update_categories_table', 8);
INSERT INTO `migrations` VALUES (18, '2022_05_06_070118_alter_table_categories_add_alias', 9);
INSERT INTO `migrations` VALUES (19, '2022_05_06_070206_alter_table_products_add_alias', 9);
INSERT INTO `migrations` VALUES (20, '2022_05_06_094326_create_orders_table', 9);
INSERT INTO `migrations` VALUES (21, '2022_05_06_094549_create_order_product_table', 9);
INSERT INTO `migrations` VALUES (22, '2022_05_07_071040_update_order_product_table', 9);
INSERT INTO `migrations` VALUES (23, '2022_05_07_143737_alter_orders_table', 9);
INSERT INTO `migrations` VALUES (24, '2022_05_07_162926_alter_table_users', 9);
INSERT INTO `migrations` VALUES (25, '2022_05_08_055721_alter_table_orders', 9);
INSERT INTO `migrations` VALUES (31, '2022_05_08_161626_alter_table_brands', 10);
INSERT INTO `migrations` VALUES (32, '2022_05_11_075858_create_service_products_table', 10);
INSERT INTO `migrations` VALUES (33, '2022_05_12_112614_create_table_abouts', 11);
INSERT INTO `migrations` VALUES (34, '2022_05_12_120211_create_contacts_table', 12);
INSERT INTO `migrations` VALUES (35, '2022_05_13_091427_create_table_team-service', 13);

-- ----------------------------
-- Table structure for offers
-- ----------------------------
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `circle` enum('type-1','type-2','type-3','none') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of offers
-- ----------------------------
INSERT INTO `offers` VALUES (1, '30% скидка', '30-skidka', 'действует в будние дни с 10:00 до 12:00', 'offers/KqpZZTN87kPbzlhsjXbi8RG6DIhoQmjzEdC3ydgt.jpg', 'type-2', '2001-05-03 21:36:43', '2022-05-13 11:49:55');
INSERT INTO `offers` VALUES (2, '15', '15-skidka', 'на стрижку горячими ножницами', 'offers/c7D3UAkFr2bqC757z9rUdpNqhsGdJdBDVEnnHdSV.jpg', 'type-1', '2010-07-01 17:21:00', '2022-05-12 10:27:57');
INSERT INTO `offers` VALUES (3, '20% скидка', '0-skidka', 'Действует до конца года', 'offers/tVkT5qXLplCnpXebMRl1zJDZe4vSJx9lnmIkH5pO.jpg', 'type-2', '2019-02-11 06:30:52', '2022-05-13 11:57:09');
INSERT INTO `offers` VALUES (4, '0', '0-skidka', 'Miss.', 'offers/9yLTLqcvnBANrMitHOhwTNvrdxmvFCP5iILzjM9w.jpg', 'none', '2020-02-16 20:37:25', '2022-05-12 10:29:22');
INSERT INTO `offers` VALUES (5, '0', '0-skidka', 'Mr.', 'offers/CHf2m4UPF7IfwrxnSWmxVXceNUm2fvQVoCbxUXf0.jpg', 'type-2', '2002-11-10 16:59:10', '2022-05-12 10:29:30');
INSERT INTO `offers` VALUES (6, '0', '0-skidka', 'Mrs.', 'offers/whbf2NtAI52LhVQ8P8eAoe51nyp5iKdKxzDZQjMw.jpg', 'none', '2000-06-15 13:35:13', '2022-05-12 10:29:36');

-- ----------------------------
-- Table structure for order_product
-- ----------------------------
DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `count` int NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_product
-- ----------------------------
INSERT INTO `order_product` VALUES (2, 1, 1, 3, '2022-05-11 13:11:50', '2022-05-11 13:12:36');
INSERT INTO `order_product` VALUES (3, 2, 3, 2, '2022-05-12 13:15:21', '2022-05-12 13:15:28');
INSERT INTO `order_product` VALUES (5, 3, 2, 1, '2022-05-13 10:17:13', '2022-05-13 10:17:13');
INSERT INTO `order_product` VALUES (6, 4, 1, 2, '2022-05-13 10:43:45', '2022-05-13 10:43:48');
INSERT INTO `order_product` VALUES (7, 5, 2, 2, '2022-05-13 10:44:41', '2022-05-13 10:44:44');
INSERT INTO `order_product` VALUES (8, 6, 1, 1, '2022-05-13 10:48:43', '2022-05-13 10:48:43');
INSERT INTO `order_product` VALUES (9, 7, 3, 2, '2022-05-13 11:20:25', '2022-05-13 11:20:36');
INSERT INTO `order_product` VALUES (10, 7, 5, 1, '2022-05-13 11:20:31', '2022-05-13 11:20:31');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` tinyint NOT NULL DEFAULT 0,
  `user_id` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 0, 1, NULL, NULL, NULL, NULL, '2022-05-11 13:11:28', '2022-05-11 13:11:28');
INSERT INTO `orders` VALUES (2, 0, 1, NULL, NULL, NULL, NULL, '2022-05-12 13:15:21', '2022-05-12 13:15:21');
INSERT INTO `orders` VALUES (4, 1, 1, 'demo', 'demo@demo.ru', '8 951 066 8 777', NULL, '2022-05-13 10:43:45', '2022-05-13 10:44:00');
INSERT INTO `orders` VALUES (5, 1, 1, 'demo', 'demo@demo.ru', '8 951 066 8 777', NULL, '2022-05-13 10:44:41', '2022-05-13 10:44:52');
INSERT INTO `orders` VALUES (6, 1, 1, 'demo', 'demo@demo.ru', '8 951 066 8 777', NULL, '2022-05-13 10:48:43', '2022-05-13 10:48:52');
INSERT INTO `orders` VALUES (7, 1, 1, 'demo', 'demo@demo.ru', '34634 64', NULL, '2022-05-13 11:20:25', '2022-05-13 11:20:47');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` int NOT NULL,
  `price` int NOT NULL,
  `characteristics` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `compound` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `category_id` int NOT NULL,
  `hair_type_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_new` tinyint NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Шампунь восстанавливающий Nutri-Repair (vegan)', 650, 315, 'SSH serves to prevent such vulnerabilities and allows you to access a remote server\'s shell without compromising security. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats.', 'products/CaxJzfZdqgscb5wbWNRgVn7gW7fyeoW7XWy3RzGu.jpg', 'ZOkelFBBRpDMsomYdFG3Umc3JRIpUsbiJyyLSzIyUumXW2vBeQ8RTty3DZrIjwUHYGq9DS', 'All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. In the middle of winter I at last discovered that there was in me an invincible summer. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. There is no way to happiness. Happiness is the way. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another.', 'I destroy my enemies when I make them my friends. If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. Success consists of going from failure to failure without loss of enthusiasm. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences.', 'A man is not old until regrets take the place of dreams. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. You must be the change you wish to see in the world. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. You must be the change you wish to see in the world. To connect to a database or schema, simply double-click it in the pane. The first step is as good as half over. Sometimes you win, sometimes you learn. I destroy my enemies when I make them my friends. In the middle of winter I at last discovered that there was in me an invincible summer.                          ', 3, 0, 0, '2009-04-28 06:18:09', '2022-05-13 08:12:38', 'shampoo', 0);
INSERT INTO `products` VALUES (2, 'Ms.', 300, 1191, 'To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. Monitored servers include MySQL, MariaDB and SQL Server, and compatible with cloud databases like Amazon RDS, Amazon Aurora, Oracle Cloud, Google Cloud and Microsoft Azure. A man is not old until regrets take the place of dreams. The first step is as good as half over. All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Typically, it is employed as an encrypted version of Telnet. You will succeed because most people are lazy. If you wait, all that happens is you get older. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from.', 'products/1QRpja9xZmq77QGrrjciYf8uFZUyQ1IjCIdYLssl.jpg', 'Da9DTIiGiESW0SSovutKRvQPpP9KGgdWfegRwnZmwSWPt5mguI4WnQDXCMsi4wIiZrBBBJ', 'Optimism is the one quality more associated with success and happiness than any other. You cannot save people, you can just love them. SSH serves to prevent such vulnerabilities and allows you to access a remote server\'s shell without compromising security. The Synchronize to Database function will give you a full picture of all database differences. There is no way to happiness. Happiness is the way. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP.', 'The past has no power over the present moment. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature. In the middle of winter I at last discovered that there was in me an invincible summer. Anyone who has ever made anything of importance was disciplined. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily.', 'Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. The On Startup feature allows you to control what tabs appear when you launch Navicat. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. Anyone who has never made a mistake has never tried anything new. Typically, it is employed as an encrypted version of Telnet.', 3, 0, 0, '2015-07-25 20:23:28', '2022-05-12 13:17:54', 'tra', 1);
INSERT INTO `products` VALUES (3, 'Mr.', 500, 742, 'SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. Creativity is intelligence having fun. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored.', 'products/V2VESt6tyKqAZXLov2OTHHhalMpgQgpkFPbxKhxI.jpg', 'IRUTm15w7OuuzWUuDimOiUCpRURFB43s8xOeIktbt6kKjV31kcItcPyb9c57vxvUYl3tii', 'In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms.', 'The reason why a great man is great is that he resolves to be a great man. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. All journeys have secret destinations of which the traveler is unaware. You will succeed because most people are lazy. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server.', 'Import Wizard allows you to import data to tables/collections from CSV, TXT, XML, DBF and more. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models.', 1, 0, 0, '2005-05-03 21:56:23', '2022-05-13 08:28:52', 'tra2', 0);
INSERT INTO `products` VALUES (4, 'Mrs.', 100, 290, 'Flexible settings enable you to set up a custom key for comparison and synchronization. Flexible settings enable you to set up a custom key for comparison and synchronization. The past has no power over the present moment. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. There is no way to happiness. Happiness is the way.                              ', 'products/OMOVGC1rcosoVEYfCSnKaSWgrReiFhVDiPChBPeU.jpg', 'riCzh1etf9tAwffZzZwzsSv51720nl9cu83KG4ReMuNxAcnYnuOYmuEzboDD6obHJCqEdN', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Creativity is intelligence having fun. Creativity is intelligence having fun. Typically, it is employed as an encrypted version of Telnet. You can select any connections, objects or projects, and then select the corresponding buttons on the Information Pane. Optimism is the one quality more associated with success and happiness than any other. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target.', 'To successfully establish a new connection to local/remote server - no matter via SSL or SSH, set the database login information in the General tab. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. Genius is an infinite capacity for taking pains. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored. If it scares you, it might be a good thing to try. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the middle of winter I at last discovered that there was in me an invincible summer.', 'Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 1, 0, 0, '2016-10-09 16:55:59', '2022-05-13 08:29:02', 'tra3', 0);
INSERT INTO `products` VALUES (5, 'Ms.', 150, 1781, 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud.', 'products/pnKbsdDy1b1pRcGKKOGtGgD10IbpHs2ujn66xWAw.jpg', '7js7UhOUmv2U3ZE17cr66sUXdtesgt79Fdni6YCpZbAorvKIXv5NBkfPr8NWFsb4J3YFOT', 'What you get by achieving your goals is not as important as what you become by achieving your goals. A query is used to extract data from the database in a readable format according to the user\'s request. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections.', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. The On Startup feature allows you to control what tabs appear when you launch Navicat. It wasn’t raining when Noah built the ark. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source.', 'SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. A comfort zone is a beautiful place, but nothing ever grows there. Optimism is the one quality more associated with success and happiness than any other. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview.', 1, 0, 0, '2003-07-13 20:39:36', '2022-05-13 08:29:14', 'tra4', 0);
INSERT INTO `products` VALUES (6, 'Mr.', 250, 787, 'All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Navicat Monitor requires a repository to store alerts and metrics for historical analysis. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. I may not have gone where I intended to go, but I think I have ended up where I needed to be.', 'products/tyBsiJTZVzQhfcP1ykKs8e63PpfMNTlnguCJry7F.jpg', 'kNEphzCF8yBoFDmd77IX9OayHX6iA8j5HhCaYxF7LA8mZUj5nvbPynvFJbGins96owWUsW', 'Navicat is a multi-connections Database Administration tool allowing you to connect to MySQL, Oracle, PostgreSQL, SQLite, SQL Server, MariaDB and/or MongoDB databases, making database administration to multiple kinds of database so easy. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information.', 'Champions keep playing until they get it right. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way.', 'After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. Anyone who has never made a mistake has never tried anything new. Navicat 15 has added support for the system-wide dark mode. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. If it scares you, it might be a good thing to try. It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models.', 0, 1, 0, '2008-08-27 06:09:07', '2022-05-13 08:29:25', 'tra5', 0);
INSERT INTO `products` VALUES (7, 'Mr.', 300, 1583, 'If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. The On Startup feature allows you to control what tabs appear when you launch Navicat. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. You will succeed because most people are lazy. It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences.', 'products/A3rWUrHLQPN1sfGO8u9WsvuR22E8hLUr4rjcjlpN.jpg', 'om0z6R3j75U8QTw5bfiDMpJJUUTY5GMwXCQ0v9tSwv4yivyBPtptcqfqafAbiQW9voApwT', 'With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. Flexible settings enable you to set up a custom key for comparison and synchronization. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored.', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. You must be the change you wish to see in the world. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality             ', 'With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. A man’s best friends are his ten fingers. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP. If it scares you, it might be a good thing to try. Import Wizard allows you to import data to tables/collections from CSV, TXT, XML, DBF and more. To successfully establish a new connection to local/remote server - no matter via SSL or SSH, set the database login information in the General tab. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily. There is no way to happiness. Happiness is the way. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview.', 4, 0, 0, '2017-02-23 01:15:35', '2022-05-13 08:29:34', 'tra6', 0);
INSERT INTO `products` VALUES (8, 'Miss.', 200, 419, 'Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. Anyone who has never made a mistake has never tried anything new.', 'products/tP3aNmLnZugP7uLHz2Bnr7ZVpzOD7Mz9gBGIquaz.jpg', 'NYwPzjvpeDMNs4zSt36UArUasTRV5UbsNSBA0NsZWqQcf3xTL44WN8nLpYCSTLhbBJL9Sb', 'A man is not old until regrets take the place of dreams. Typically, it is employed as an encrypted version of Telnet. If the plan doesn’t work, change the plan, but never the goal. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. The first step is as good as half over. The past has no power over the present moment. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. To connect to a database or schema, simply double-click it in the pane. I destroy my enemies when I make them my friends. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information.', 'A man is not old until regrets take the place of dreams. Creativity is intelligence having fun. Navicat 15 has added support for the system-wide dark mode. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. Actually it is just in an idea when feel oneself can achieve and cannot achieve. It wasn’t raining when Noah built the ark. Navicat is a multi-connections Database Administration tool allowing you to connect to MySQL, Oracle, PostgreSQL, SQLite, SQL Server, MariaDB and/or MongoDB databases, making database administration to multiple kinds of database so easy.', 'I will greet this day with love in my heart. If it scares you, it might be a good thing to try. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information.', 2, 0, 0, '2013-11-17 02:05:29', '2022-05-13 08:29:43', 'tra7', 0);
INSERT INTO `products` VALUES (9, 'Prof.', 300, 879, 'After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 'products/0XRyxSyNni3uOFtBLBCJ553lydFzq8zxxythTsvZ.jpg', 'OmjEMyBcs1XzDhHZ0mcLPP970TDI6udv6ygtW5cgUG2PdcxFTnZQXOlnXenI05ZNmai2ef', 'It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. If opportunity doesn’t knock, build a door. The first step is as good as half over. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. Creativity is intelligence having fun. The past has no power over the present moment. Navicat Monitor requires a repository to store alerts and metrics for historical analysis. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. The Synchronize to Database function will give you a full picture of all database differences. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process.', 'Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. Navicat 15 has added support for the system-wide dark mode. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily.', 'I will greet this day with love in my heart. Sometimes you win, sometimes you learn. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections.', 3, 0, 0, '2005-03-24 13:51:43', '2022-05-13 08:29:55', 'tra8', 0);
INSERT INTO `products` VALUES (10, 'Miss.', 300, 473, 'Actually it is just in an idea when feel oneself can achieve and cannot achieve. Navicat 15 has added support for the system-wide dark mode. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 'products/vCB12RIShGOXTc9jrsZaIc4W3bhWMzX7j6YkYWZD.jpg', 'u1Qzuaqf45kXDOD2WlTwupKNy1zzEavd0Nrvfq2SnYpiRwXngKHO2TfqTyxRN6Cu6hgA2L', 'If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. Typically, it is employed as an encrypted version of Telnet. The first step is as good as half over. The On Startup feature allows you to control what tabs appear when you launch Navicat.', 'Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. Difficult circumstances serve as a textbook of life for people. Remember that failure is an event, not a person. Actually it is just in an idea when feel oneself can achieve and cannot achieve.', 'What you get by achieving your goals is not as important as what you become by achieving your goals. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information.', 4, 0, 0, '2007-07-21 17:44:32', '2022-05-13 08:30:05', 'tra9', 0);
INSERT INTO `products` VALUES (11, 'test', 100, 1000, NULL, 'products/A1PeBFEj2aLMyjdyEgTqpDOoFFSK1DqRzA4L0g5P.jpg', '12321', 'asasfasf', NULL, NULL, 3, 0, 0, '2022-05-11 13:25:37', '2022-05-13 08:30:20', 'test-service', 0);
INSERT INTO `products` VALUES (12, 'test', 100, 1000, NULL, 'products/kQaT5ANLQyDchrS9TaguTtYSRbl1h9SJZoGJ7gQf.jpg', 'asfasfasf', 'asfasfasffas asf', NULL, NULL, 1, 0, 0, '2022-05-11 13:26:42', '2022-05-13 08:30:39', 'test-service', 1);

-- ----------------------------
-- Table structure for service_products
-- ----------------------------
DROP TABLE IF EXISTS `service_products`;
CREATE TABLE `service_products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price_from` int NOT NULL,
  `price_to` int NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `service_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of service_products
-- ----------------------------
INSERT INTO `service_products` VALUES (1, 'Женская стрижка', 'Описание', 'Любая длина', 1500, 2000, 'zhenskaya', 'service-products/dzFnTyiKVX776I4C0wkjFQLftoyEd1ljWnvH2pAk.jpg|service-products/MELRpaE98l2vNQOjBy78LQAM3vckQVo5pLJ4KjQH.jpg|service-products/q4AZ1qu6F67ncYelRuEZ5mAmtpZo3BevsYACiW7Y.jpg|service-products/kvC2CwvtMcqLtdubzoOakgkeDweUeQVHjE7SilvE.jpg|', 1, '2022-05-11 15:16:35', '2022-05-12 09:31:56');
INSERT INTO `service_products` VALUES (3, 'Мужская стрижка', 'Описание мужской стрижки', 'Любая длина', 1000, 1500, 'test-service', 'service-products/zN7gcJJn753VvKloPOBTocJzdZf2BI8YVzzJAU3I.jpg|service-products/LeOqeSvv0aGTRjd4AzZafoOPcbV8GLNkK75Jv58U.jpg|service-products/OxhQapTY1Dp164aydFHqgVoKxmL6dh93tedhASOd.jpg|service-products/PcaQgArqulx73LejHhKYJXY9LDV4ECmt8yrkuCjR.jpg|', 1, '2022-05-11 12:55:20', '2022-05-12 09:31:01');
INSERT INTO `service_products` VALUES (5, 'Дневной макияж', 'Дневной макияж - это косметические средства неярких цветовых сочетаний, по виду должен быть прозрачным, легкий по исполнению, и прочным по применению.', 'Дневной', 1800, 0, 'dnevnoi-makiyazh', 'service-products/Cy1qg8LxlftO8AfddAsMMkT20hYza55zHUHOgC9x.jpg|service-products/UdnG5DGJYgYIdtJU7WlSE39Tb3H48m2kLDFx8MrL.jpg|', 7, NULL, '2022-05-13 09:53:50');
INSERT INTO `service_products` VALUES (9, 'Окрашивание в один тон', 'Окрашивание в один тон - покраска в один цвет волос от корней до кончиков в один оттенок.', 'Любая длина ногтей', 1000, 1500, 'okrashivanie-v-odin-ton', 'service-products/7ndywkGHYHlxhKvWuzAJWI1v04MfCZX0UDOZCBwx.jpg|service-products/BUBcR2VJuN0UysEY4mcDQivyQCFgVpcpGJXwXu9E.jpg|', 2, '2022-05-12 09:11:15', '2022-05-13 09:46:46');
INSERT INTO `service_products` VALUES (10, 'test podusluga', 'test-podusluga test-podusluga test-podusluga', 'лишь бы не лысая', 1500, 2000, 'test-podusluga', 'service-products/mZDIE1G0i9czOUbIfCXDtWo0PxNpauWs1MCE4bus.jpg|service-products/wWhvKVR1oYEm7Hm8Nu5xdA0Sjovboown00wR5FMJ.jpg|service-products/JTx9TTemSU1sNe2WnYu0ebyDebHznFgikB3OATJu.jpg|service-products/N9c25aHMJfqZACROPxQREeflJVBcpMXKz5gQuEIJ.jpg|', 4, '2022-05-12 09:52:12', '2022-05-12 09:53:12');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'Стрижка', 'services/GqmVr7vyeDdkzaU2bNdK5bs7EECUaB4h54hhVqpM.jpg', 'strizhka', '2022-05-05 13:32:58', '2022-05-12 13:22:31', 0);
INSERT INTO `services` VALUES (2, 'Окрашивание', 'services/mP80ngWVX3aByoGB9kybxX78RjKFPHBWnR2iJmVI.jpg', 'okrashivanie', '2022-05-05 13:35:07', '2022-05-11 08:40:23', 0);
INSERT INTO `services` VALUES (3, 'Уход для волос', 'services/CepPufLF95uxgTEQHOAV85XzZv3rVSDf7fGLQzFI.jpg', 'uhod-dlya-volos', '2022-05-05 13:39:44', '2022-05-11 08:48:12', 0);
INSERT INTO `services` VALUES (4, 'Эстетическая трихология', 'services/oIAIUsrLMc2H254DIhZzOjvQcCENz3GmITkjOjLI.jpg', 'estetic-trih', '2022-05-05 13:40:20', '2022-05-11 08:48:20', 0);
INSERT INTO `services` VALUES (5, 'Ламинирование ресниц', 'services/bi2DGUVQTTWkfP8FUW0OFq2V8WEqUlcN8TnfI6IQ.jpg', 'laminirovanie-resnits', '2022-05-05 13:41:05', '2022-05-11 09:45:57', 0);
INSERT INTO `services` VALUES (6, 'Оформление бровей', 'services/45MZof6oHZ2cePMSO5tbcqxqLHgAJWB1flaiaQ1l.jpg', 'oform-brovey', '2022-05-05 13:41:31', '2022-05-11 09:46:13', 0);
INSERT INTO `services` VALUES (7, 'Макияж', 'services/0EtgXD1wagsINsXrwNgU7uYgBPWLDZZiW4nW3HLC.jpg', 'makiyazh', '2022-05-05 13:41:59', '2022-05-11 09:46:22', 0);
INSERT INTO `services` VALUES (8, 'Маникюр', 'services/iqcFC5Wd8PipvHFtYBLJwonWjJynbq8buaVo8cv0.jpg', 'manikur', '2022-05-05 13:42:28', '2022-05-11 09:46:32', 0);
INSERT INTO `services` VALUES (9, 'Педикюр', 'services/jkCxCUcTw1iBRmROECAXj9HDXHyIcmaEMaoexfIc.jpg', 'pedikur', '2022-05-05 13:42:53', '2022-05-13 09:43:52', 0);

-- ----------------------------
-- Table structure for team_services
-- ----------------------------
DROP TABLE IF EXISTS `team_services`;
CREATE TABLE `team_services`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_from` int NOT NULL,
  `price_to` int NOT NULL,
  `team_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_services
-- ----------------------------
INSERT INTO `team_services` VALUES (1, 'Окрашивание в один тон', 500, 1780, 3, '2008-08-17 09:40:48', '2006-06-26 03:16:26');
INSERT INTO `team_services` VALUES (2, 'Сложное окрашивание', 1000, 1752, 2, '2012-02-22 23:22:48', '2011-07-20 16:24:13');
INSERT INTO `team_services` VALUES (3, 'Окрашивание хной', 300, 1600, 1, '2009-10-21 22:48:05', '2003-02-12 07:11:57');
INSERT INTO `team_services` VALUES (4, 'Стрижки мужские', 500, 1000, 2, '2014-06-22 15:29:17', '2006-10-08 02:57:14');
INSERT INTO `team_services` VALUES (5, 'Стрижки женские', 242, 1517, 4, '2020-09-22 01:54:35', '2017-07-24 14:27:18');
INSERT INTO `team_services` VALUES (6, 'Укладки, прически', 181, 1633, 2, '2022-02-02 19:18:01', '2017-07-02 21:21:05');
INSERT INTO `team_services` VALUES (7, 'Пилинг кожи головы', 71, 1769, 2, '2014-12-03 17:49:14', '2004-11-01 03:19:46');
INSERT INTO `team_services` VALUES (8, 'Полировка волос', 364, 1748, 2, '2007-01-13 04:58:16', '2007-08-07 17:07:53');
INSERT INTO `team_services` VALUES (9, 'Mr.', 148, 1766, 3, '2011-06-04 22:17:04', '2016-05-14 10:47:09');
INSERT INTO `team_services` VALUES (10, 'Prof.', 56, 1611, 3, '2015-05-07 12:47:26', '2018-07-22 08:56:56');
INSERT INTO `team_services` VALUES (11, 'Prof.', 472, 1916, 1, '2008-12-13 22:37:45', '2017-03-22 23:15:18');
INSERT INTO `team_services` VALUES (12, 'Miss.', 28, 1688, 3, '2019-08-15 12:09:25', '2016-08-20 19:50:18');
INSERT INTO `team_services` VALUES (13, 'Prof.', 120, 1921, 3, '2008-08-15 14:24:26', '2003-04-18 05:17:36');
INSERT INTO `team_services` VALUES (14, 'Miss.', 203, 1561, 4, '2006-09-04 22:43:04', '2020-08-18 08:18:43');
INSERT INTO `team_services` VALUES (15, 'Ms.', 340, 1501, 2, '2016-03-30 03:55:11', '2012-05-03 07:01:11');

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int NOT NULL,
  `rating` int NOT NULL,
  `short_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES (1, 'Наталья Ворон', 'natalia-voron', 'Топ - стилист,колорист, универсал, технолог краски HIPERTIN, эстетический - трихолог.', 5, 5, 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение...', 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение Казахстан, Новосибирск, Москва, Итальянская школа ALDO COPPOLA\r\n\r\nВыполнение любых сложных работ как в стрижках, так и в окрашиваниях, выход из черного цвета в светлый тон без ломкост', 'окрашивание волос любой сложности\r\nстрижки мужские/женские\r\nработа с проблемами кожи головы и волос\r\nукладки, прически\r\nстрижки бритвой, ножницами, машинкой', 'team/1dd1LHCdsF6YH8YHKtcIw53FSxu76MXPsByqTWdY.png', '2022-05-05 14:36:08', '2022-05-12 10:49:37');
INSERT INTO `teams` VALUES (2, 'Kathryn Allen', 'katrin-alle', 'Стилист, коллорист, мастер униварсал по женским и мужским стрижкам', 28, 4, '6HJTbjUcpH', 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение Казахстан, Новосибирск, Москва, Итальянская школа ALDO COPPOLA\r\n\r\nВыполнение любых сложных работ как в стрижках, так и в окрашиваниях, выход из черного цвета в светлый тон без ломкост', 'окрашивание волос любой сложности\r\nстрижки мужские/женские\r\nработа с проблемами кожи головы и волос\r\nукладки, прически\r\nстрижки бритвой, ножницами, машинкой', 'team/vYVnqSqYabUj2zH7tGxfRcuwlgomw9tqV1Glv5Sc.png', '2013-09-05 16:43:45', '2022-05-12 10:52:21');
INSERT INTO `teams` VALUES (3, 'Wong Ho Yin', 'wong-h', 'Стилист, коллорист, женский мастер', 432, 4, 'nr9PbsV5dK', 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение Казахстан, Новосибирск, Москва, Итальянская школа ALDO COPPOLA\r\n\r\nВыполнение любых сложных работ как в стрижках, так и в окрашиваниях, выход из черного цвета в светлый тон без ломкост', 'окрашивание волос любой сложности\r\nстрижки мужские/женские\r\nработа с проблемами кожи головы и волос\r\nукладки, прически\r\nстрижки бритвой, ножницами, машинкой', 'team/2byCTgLkmxS3Z8XNDOfVIVLMr3DMwmUbDXZYFSJV.jpg', '2015-04-02 13:29:00', '2022-05-12 10:52:28');
INSERT INTO `teams` VALUES (4, 'Sharon Griffin', 'sharon-grif', 'Мастер ногтевого сервиса', 383, 5, 'yuLloLsMtY', '5pxB5UqyQk', 'sSo9Tr92iv', 'team/tjPDU767Ly7nf3iqnbBDXHRl5mDXRxpJ1pS6Vyha.jpg', '2006-10-15 01:04:59', '2022-05-12 10:52:38');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'demo', 'demo@demo.ru', NULL, '$2y$10$orT/uI3AgyoZNlfv0JPlieM6VwlS6cbxWn0yuMPUElDoxhMHNiX.S', 1, NULL, '2022-05-11 06:57:50', '2022-05-11 06:57:50');

SET FOREIGN_KEY_CHECKS = 1;
