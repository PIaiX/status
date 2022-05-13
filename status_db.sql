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

 Date: 05/05/2022 16:17:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of brands
-- ----------------------------

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Уход за волосами', 0, '2022-05-05 15:09:14', '2022-05-05 15:09:17');
INSERT INTO `categories` VALUES (2, 'Уход за лицом', 0, '2022-05-05 15:09:33', '2022-05-05 15:09:36');
INSERT INTO `categories` VALUES (3, 'Уход за телом', 0, '2022-05-05 15:09:50', '2022-05-05 15:09:53');
INSERT INTO `categories` VALUES (4, 'Уход за ногтями', 0, '2022-05-05 15:10:16', '2022-05-05 15:10:18');
INSERT INTO `categories` VALUES (5, 'Шампуни и кондиционеры', 0, '2022-05-05 15:52:45', '2022-05-05 15:52:48');
INSERT INTO `categories` VALUES (6, 'Маски и сыворотки', 0, '2022-05-05 15:53:12', '2022-05-05 15:53:15');
INSERT INTO `categories` VALUES (7, 'Краска для волос', 0, '2022-05-05 15:53:38', '2022-05-05 15:53:41');
INSERT INTO `categories` VALUES (8, 'Стайлинг', 0, '2022-05-05 15:54:03', '2022-05-05 15:54:01');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hair_types
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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

-- ----------------------------
-- Table structure for offers
-- ----------------------------
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `discount` int NOT NULL,
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
INSERT INTO `offers` VALUES (1, 30, 'действует в будние дни с 10:00 до 12:00', 'offers/serv1.jpg', 'type-3', '2001-05-03 21:36:43', '2011-04-19 18:32:00');
INSERT INTO `offers` VALUES (2, 15, 'на стрижку горячими ножницами', 'offers/serv2.jpg', 'type-1', '2010-07-01 17:21:00', '2011-12-26 09:01:31');
INSERT INTO `offers` VALUES (3, 0, 'Mr.', 'offers/serv3.jpg', 'type-2', '2019-02-11 06:30:52', '2008-03-01 00:34:09');
INSERT INTO `offers` VALUES (4, 0, 'Miss.', 'offers/serv4.jpg', 'none', '2020-02-16 20:37:25', '2009-04-17 13:58:22');
INSERT INTO `offers` VALUES (5, 0, 'Mr.', '', 'type-1', '2002-11-10 16:59:10', '2021-04-11 19:35:46');
INSERT INTO `offers` VALUES (6, 0, 'Mrs.', '', 'none', '2000-06-15 13:35:13', '2019-09-26 01:10:26');

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
  `characteristics` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `compound` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `hair_type_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Шампунь восстанавливающий Nutri-Repair (vegan)', 650, 315, 'SSH serves to prevent such vulnerabilities and allows you to access a remote server\'s shell without compromising security. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats.', 'product/Шампунь восстанавливающий Nutri-Repair (vegan), 300 мл.jpg', 'ZOkelFBBRpDMsomYdFG3Umc3JRIpUsbiJyyLSzIyUumXW2vBeQ8RTty3DZrIjwUHYGq9DS', 'All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. In the middle of winter I at last discovered that there was in me an invincible summer. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. There is no way to happiness. Happiness is the way. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another.', 'I destroy my enemies when I make them my friends. If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. Success consists of going from failure to failure without loss of enthusiasm. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences.', 'A man is not old until regrets take the place of dreams. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. You must be the change you wish to see in the world. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. You must be the change you wish to see in the world. To connect to a database or schema, simply double-click it in the pane. The first step is as good as half over. Sometimes you win, sometimes you learn. I destroy my enemies when I make them my friends. In the middle of winter I at last discovered that there was in me an invincible summer.                          ', 3, 0, 0, '2009-04-28 06:18:09', '2017-09-28 00:02:26');
INSERT INTO `products` VALUES (2, 'Ms.', 300, 1191, 'To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. Monitored servers include MySQL, MariaDB and SQL Server, and compatible with cloud databases like Amazon RDS, Amazon Aurora, Oracle Cloud, Google Cloud and Microsoft Azure. A man is not old until regrets take the place of dreams. The first step is as good as half over. All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Typically, it is employed as an encrypted version of Telnet. You will succeed because most people are lazy. If you wait, all that happens is you get older. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from.', 'product/Шампунь для придания объема Linecure Volume Up Shampoo, 300 мл.jpg', 'Da9DTIiGiESW0SSovutKRvQPpP9KGgdWfegRwnZmwSWPt5mguI4WnQDXCMsi4wIiZrBBBJ', 'Optimism is the one quality more associated with success and happiness than any other. You cannot save people, you can just love them. SSH serves to prevent such vulnerabilities and allows you to access a remote server\'s shell without compromising security. The Synchronize to Database function will give you a full picture of all database differences. There is no way to happiness. Happiness is the way. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP.', 'The past has no power over the present moment. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature. In the middle of winter I at last discovered that there was in me an invincible summer. Anyone who has ever made anything of importance was disciplined. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily.', 'Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. The On Startup feature allows you to control what tabs appear when you launch Navicat. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. Anyone who has never made a mistake has never tried anything new. Typically, it is employed as an encrypted version of Telnet.', 3, 2, 3, '2015-07-25 20:23:28', '2002-02-02 15:16:00');
INSERT INTO `products` VALUES (3, 'Mr.', 500, 742, 'SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. Creativity is intelligence having fun. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored.', 'product/Шампунь для сохранения цвета окрашенных волос Color Care (vegan), 300 мл.jpg', 'IRUTm15w7OuuzWUuDimOiUCpRURFB43s8xOeIktbt6kKjV31kcItcPyb9c57vxvUYl3tii', 'In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms.', 'The reason why a great man is great is that he resolves to be a great man. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. All journeys have secret destinations of which the traveler is unaware. You will succeed because most people are lazy. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server.', 'Import Wizard allows you to import data to tables/collections from CSV, TXT, XML, DBF and more. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models.', 1, 2, 4, '2005-05-03 21:56:23', '2005-04-16 09:11:46');
INSERT INTO `products` VALUES (4, 'Mrs.', 100, 290, 'Flexible settings enable you to set up a custom key for comparison and synchronization. Flexible settings enable you to set up a custom key for comparison and synchronization. The past has no power over the present moment. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. There is no way to happiness. Happiness is the way.                              ', '9HYVpXiPnfx1h3aygoFw', 'riCzh1etf9tAwffZzZwzsSv51720nl9cu83KG4ReMuNxAcnYnuOYmuEzboDD6obHJCqEdN', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Creativity is intelligence having fun. Creativity is intelligence having fun. Typically, it is employed as an encrypted version of Telnet. You can select any connections, objects or projects, and then select the corresponding buttons on the Information Pane. Optimism is the one quality more associated with success and happiness than any other. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target.', 'To successfully establish a new connection to local/remote server - no matter via SSL or SSH, set the database login information in the General tab. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. Genius is an infinite capacity for taking pains. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored. If it scares you, it might be a good thing to try. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the middle of winter I at last discovered that there was in me an invincible summer.', 'Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 1, 4, 0, '2016-10-09 16:55:59', '2010-10-29 23:43:02');
INSERT INTO `products` VALUES (5, 'Ms.', 150, 1781, 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud.', 'IBj7L8jc0ZDVMYV4u29v', '7js7UhOUmv2U3ZE17cr66sUXdtesgt79Fdni6YCpZbAorvKIXv5NBkfPr8NWFsb4J3YFOT', 'What you get by achieving your goals is not as important as what you become by achieving your goals. A query is used to extract data from the database in a readable format according to the user\'s request. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections.', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. The repository database can be an existing MySQL, MariaDB, PostgreSQL, SQL Server, or Amazon RDS instance. The On Startup feature allows you to control what tabs appear when you launch Navicat. It wasn’t raining when Noah built the ark. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source.', 'SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. A comfort zone is a beautiful place, but nothing ever grows there. Optimism is the one quality more associated with success and happiness than any other. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview.', 1, 4, 3, '2003-07-13 20:39:36', '2006-04-22 13:18:54');
INSERT INTO `products` VALUES (6, 'Mr.', 250, 787, 'All the Navicat Cloud objects are located under different projects. You can share the project to other Navicat Cloud accounts for collaboration. Navicat Monitor requires a repository to store alerts and metrics for historical analysis. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. I may not have gone where I intended to go, but I think I have ended up where I needed to be.', '0xT36zezCCMjOicNEq2f', 'kNEphzCF8yBoFDmd77IX9OayHX6iA8j5HhCaYxF7LA8mZUj5nvbPynvFJbGins96owWUsW', 'Navicat is a multi-connections Database Administration tool allowing you to connect to MySQL, Oracle, PostgreSQL, SQLite, SQL Server, MariaDB and/or MongoDB databases, making database administration to multiple kinds of database so easy. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information.', 'Champions keep playing until they get it right. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way.', 'After comparing data, the window shows the number of records that will be inserted, updated or deleted in the target. Anyone who has never made a mistake has never tried anything new. Navicat 15 has added support for the system-wide dark mode. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. If it scares you, it might be a good thing to try. It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models.', 0, 4, 1, '2008-08-27 06:09:07', '2015-03-05 05:08:44');
INSERT INTO `products` VALUES (7, 'Mr.', 300, 1583, 'If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. The On Startup feature allows you to control what tabs appear when you launch Navicat. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. You will succeed because most people are lazy. It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences.', 'RqrZifPagA5IgIsrqPvC', 'om0z6R3j75U8QTw5bfiDMpJJUUTY5GMwXCQ0v9tSwv4yivyBPtptcqfqafAbiQW9voApwT', 'With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. Instead of wondering when your next vacation is, maybe you should set up a life you don’t need to escape from. Flexible settings enable you to set up a custom key for comparison and synchronization. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. Navicat Monitor can be installed on any local computer or virtual machine and does not require any software installation on the servers being monitored.', 'To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. You must be the change you wish to see in the world. To open a query using an external editor, control-click it and select Open with External Editor. You can set the file path of an external editor in Preferences. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality             ', 'With its well-designed Graphical User Interface(GUI), Navicat lets you quickly and easily create, organize, access and share information in a secure and easy way. A man’s best friends are his ten fingers. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP. If it scares you, it might be a good thing to try. Import Wizard allows you to import data to tables/collections from CSV, TXT, XML, DBF and more. To successfully establish a new connection to local/remote server - no matter via SSL or SSH, set the database login information in the General tab. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily. There is no way to happiness. Happiness is the way. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview.', 4, 5, 2, '2017-02-23 01:15:35', '2005-12-04 01:28:32');
INSERT INTO `products` VALUES (8, 'Miss.', 200, 419, 'Navicat Cloud could not connect and access your databases. By which it means, it could only store your connection settings, queries, model files, and virtual group; your database passwords and data (e.g. tables, views, etc) will not be stored to Navicat Cloud. SQL Editor allows you to create and edit SQL text, prepare and execute selected queries. Anyone who has never made a mistake has never tried anything new.', 'vwh1AbdSfkJkoSk1yEX4', 'NYwPzjvpeDMNs4zSt36UArUasTRV5UbsNSBA0NsZWqQcf3xTL44WN8nLpYCSTLhbBJL9Sb', 'A man is not old until regrets take the place of dreams. Typically, it is employed as an encrypted version of Telnet. If the plan doesn’t work, change the plan, but never the goal. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. The first step is as good as half over. The past has no power over the present moment. To start working with your server in Navicat, you should first establish a connection or several connections using the Connection window. To connect to a database or schema, simply double-click it in the pane. I destroy my enemies when I make them my friends. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information.', 'A man is not old until regrets take the place of dreams. Creativity is intelligence having fun. Navicat 15 has added support for the system-wide dark mode. Navicat provides powerful tools for working with queries: Query Editor for editing the query text directly, and Query Builder, Find Builder or Aggregate Builder for building queries visually. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. Actually it is just in an idea when feel oneself can achieve and cannot achieve. It wasn’t raining when Noah built the ark. Navicat is a multi-connections Database Administration tool allowing you to connect to MySQL, Oracle, PostgreSQL, SQLite, SQL Server, MariaDB and/or MongoDB databases, making database administration to multiple kinds of database so easy.', 'I will greet this day with love in my heart. If it scares you, it might be a good thing to try. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information.', 2, 1, 3, '2013-11-17 02:05:29', '2013-03-16 11:39:00');
INSERT INTO `products` VALUES (9, 'Prof.', 300, 879, 'After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 'NI8u9LZIET2X13Iy9Gh3', 'OmjEMyBcs1XzDhHZ0mcLPP970TDI6udv6ygtW5cgUG2PdcxFTnZQXOlnXenI05ZNmai2ef', 'It is used while your ISPs do not allow direct connections, but allows establishing HTTP connections. If opportunity doesn’t knock, build a door. The first step is as good as half over. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. Creativity is intelligence having fun. The past has no power over the present moment. Navicat Monitor requires a repository to store alerts and metrics for historical analysis. Navicat Cloud provides a cloud service for synchronizing connections, queries, model files and virtual group information from Navicat, other Navicat family members, different machines and different platforms. The Synchronize to Database function will give you a full picture of all database differences. Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process.', 'Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. Navicat 15 has added support for the system-wide dark mode. The Navigation pane employs tree structure which allows you to take action upon the database and their objects through their pop-up menus quickly and easily.', 'I will greet this day with love in my heart. Sometimes you win, sometimes you learn. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections.', 3, 0, 3, '2005-03-24 13:51:43', '2003-07-01 04:32:11');
INSERT INTO `products` VALUES (10, 'Miss.', 300, 473, 'Actually it is just in an idea when feel oneself can achieve and cannot achieve. Navicat 15 has added support for the system-wide dark mode. HTTP Tunneling is a method for connecting to a server that uses the same protocol (http://) and the same port (port 80) as a web server does. To clear or reload various internal caches, flush tables, or acquire locks, control-click your connection in the Navigation pane and select Flush and choose the flush option. You must have the reload privilege to use this feature.', 'TThhncLgJMdUfGDWMvEu', 'u1Qzuaqf45kXDOD2WlTwupKNy1zzEavd0Nrvfq2SnYpiRwXngKHO2TfqTyxRN6Cu6hgA2L', 'If the Show objects under schema in navigation pane option is checked at the Preferences window, all database objects are also displayed in the pane. Typically, it is employed as an encrypted version of Telnet. The first step is as good as half over. The On Startup feature allows you to control what tabs appear when you launch Navicat.', 'Navicat Data Modeler is a powerful and cost-effective database design tool which helps you build high-quality conceptual, logical and physical data models. Difficult circumstances serve as a textbook of life for people. Remember that failure is an event, not a person. Actually it is just in an idea when feel oneself can achieve and cannot achieve.', 'What you get by achieving your goals is not as important as what you become by achieving your goals. In a Telnet session, all communications, including username and password, are transmitted in plain-text, allowing anyone to listen-in on your session and steal passwords and other information.', 4, 1, 4, '2007-07-21 17:44:32', '2020-09-01 11:04:21');

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'Стрижка', 'services-index/1.jpg', 'strizhka', '2022-05-05 13:32:58', '2022-05-05 13:33:02');
INSERT INTO `services` VALUES (2, 'Окрашивание', 'services-index/2.jpg', 'okrashivanie', '2022-05-05 13:35:07', '2022-05-05 13:35:10');
INSERT INTO `services` VALUES (3, 'Уход для волос', 'services-index/3.jpg', 'uhod-dlya-volos', '2022-05-05 13:39:44', '2022-05-05 13:39:48');
INSERT INTO `services` VALUES (4, 'Эстетическая трихология', 'services-index/4.jpg', 'estetic-trih', '2022-05-05 13:40:20', '2022-05-05 13:40:23');
INSERT INTO `services` VALUES (5, 'Ламинирование ресниц', 'services-index/5.jpg', 'laminirovanie-resnits', '2022-05-05 13:41:05', '2022-05-05 13:41:08');
INSERT INTO `services` VALUES (6, 'Оформление бровей', 'services-index/6.jpg', 'oform-brovey', '2022-05-05 13:41:31', '2022-05-05 13:41:35');
INSERT INTO `services` VALUES (7, 'Макияж', 'services-index/7.jpg', 'makiyazh', '2022-05-05 13:41:59', '2022-05-05 13:42:02');
INSERT INTO `services` VALUES (8, 'Маникюр', 'services-index/8.jpg', 'manikur', '2022-05-05 13:42:28', '2022-05-05 13:42:30');
INSERT INTO `services` VALUES (9, 'Педикюр', 'services-index/9.jpg', 'pedikur', '2022-05-05 13:42:53', '2022-05-05 13:42:56');

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `teams` VALUES (1, 'Наталья Ворон', 'Топ - стилист,колорист, универсал, технолог краски HIPERTIN, эстетический - трихолог.', 5, 5, 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение...', 'Опыт работы более 10-и лет, постоянное повышение квалификации. Обучение Казахстан, Новосибирск, Москва, Итальянская школа ALDO COPPOLA\r\n\r\nВыполнение любых сложных работ как в стрижках, так и в окрашиваниях, выход из черного цвета в светлый тон без ломкост', 'окрашивание волос любой сложности\r\nстрижки мужские/женские\r\nработа с проблемами кожи головы и волос\r\nукладки, прически\r\nстрижки бритвой, ножницами, машинкой', 'team/natalia.jpg', '2022-05-05 14:36:08', '2022-05-05 14:36:10');
INSERT INTO `teams` VALUES (2, 'Kathryn Allen', 'Стилист, коллорист, мастер униварсал по женским и мужским стрижкам', 28, 4, '6HJTbjUcpH', 'MOH4mf4myw', 'iT9blRAw9N', 'team/alsu.jpg', '2013-09-05 16:43:45', '2013-03-17 16:02:05');
INSERT INTO `teams` VALUES (3, 'Wong Ho Yin', 'Стилист, коллорист, женский мастер', 432, 4, 'nr9PbsV5dK', 'ZDwaEUtb5a', 'YI8JiKqJcp', 'team/elfia.jpg', '2015-04-02 13:29:00', '2017-09-12 09:34:42');
INSERT INTO `teams` VALUES (4, 'Sharon Griffin', 'Мастер ногтевого сервиса', 383, 5, 'yuLloLsMtY', '5pxB5UqyQk', 'sSo9Tr92iv', 'team/ekaterina.jpg', '2006-10-15 01:04:59', '2007-07-25 09:08:06');

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
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
