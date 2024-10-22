-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.epizy.com
-- Generation Time: Mar 26, 2024 at 01:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25975426_zunaid_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_by`, `is_hidden`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '8 Reasons Why PHP is Still the Best Choice for Web Development in 2022', '<p>Today, the need for digitalization is constantly increasing in organizations worldwide. Many businesses are building an online presence to provide their consumer&rsquo;s needs. As such, having a website for your business is a must to ensure growth and stay competitive. However, when building a website, you need to find the latest and most trusted programming language to develop your website.</p>\r\n\r\n<p>And one of the most popular and trusted programming languages is PHP. The programming language is growing abundant and is still widely used by websites globally. According to&nbsp;<a href=\"https://w3techs.com/technologies/details/pl-php\">w3techs</a>, PHP is used by 77.8% of all websites today. PHP is also famous for many popular websites like Facebook, Wikipedia, Yahoo, and eCommerce, such as Nike.</p>\r\n\r\n<p>So, the real question is, why do developers still use PHP for web development? Why is it relevant despite being firstly released decades ago? Likewise, this article will tackle some of the best reasons as to why PHP is still one of the top choices of programming language for web development</p>\r\n\r\n<h3><strong>1. It&rsquo;s Free and open source</strong></h3>\r\n\r\n<p>PHP is open source. Compared to other scripting languages, PHP does not require any paid hosting and licenses to use. There is no restriction. More than that, most CSM where you can use PHP does not require premium plans.</p>\r\n\r\n<p>So, developers can use PHP for free web development and its documentation!</p>\r\n\r\n<h3><strong>2. Work well with a lot of CMS</strong></h3>\r\n\r\n<p>Developing a website is always an ongoing process. You just don&rsquo;t make and launch it as it is. There will always be a need for managing, updating, and editing if you want your business to get ahead of the competition. And this means that developers will not be working alone in web development.</p>\r\n\r\n<p>Experts such as SEO, PPC, and content manager sooner or later will have to update the website on their own. However, not everyone has the specialized technical skills or knowledge to handle a code. Likewise, using CMS is vital in web development.</p>\r\n\r\n<p>Luckily, PHP works well with various content management systems such as WordPress. This programing language is compatible with the topmost CMS in the world wide web, including Magento, Drupal, Shopify, Joomla, and more CMS powered by a PHP-based framework. And since PHP works well with CMS, you can even use PHP for web development and create a well-customized website that is not available in CMS.</p>\r\n\r\n<h3><strong>3. Compatible with several OS and platform</strong></h3>\r\n\r\n<p>When building a website or web app, developers need to ensure that it can cater to different types of customers and their devices. It is essential to ensure that your website is compatible with various browsers, OS, devices, and platforms.</p>\r\n\r\n<p>Likewise, you should choose PHP for web development because of its compatibility with different operating systems, including Windows, Linux, macOS, and more. In addition, the programming language&rsquo;s interface is perfect with MySQL and Apache servers. Thus, it covers all major operating systems existing in various platforms.</p>\r\n\r\n<p>Likewise, PHP is also great for creating cross-platform web applications. You can make web apps that can be used on both desktop and mobile, making web development convenient and hassle-free.</p>\r\n\r\n<h3><strong>4. Highly scalable</strong></h3>\r\n\r\n<p>Businesses need changes &ndash; either to your expanding company or new ventures. A successful website or application should seamlessly and efficiently accommodate this changing need. As such, scalability should always be in a developer&rsquo;s mind. They need to create a scalable and flexible website that can handle an increase or decrease in a program without disrupting the end-users.</p>\r\n\r\n<p>PHP has been used by developers to create flexible web applications for over two decades. It is highly scalable, and it is easy to build dynamic web pages. No matter your point in the software development life cycle, you can modify your code anytime with PHP. Programmers do not need to rewrite the code or command function again.&nbsp;&nbsp;</p>\r\n\r\n<p>Moreover, the scripting language can handle high traffic loads and handle multiple requests simultaneously.</p>\r\n\r\n<h3><strong>5. Effortless and flexible database connection</strong></h3>\r\n\r\n<p>Together with technology, data has become a necessity in our lives. It runs our world, decision, and market. The world is slowly turning into data-driven society. As such, databases are becoming more part of web development.</p>\r\n\r\n<p>These days, the database is the most crucial part of any website because it stores all the information about your business, its products, and customer information. It is where you house most of the confidential data such as an address, trade secrets, and more. Thus, when developing a website, you need to ensure that you use a compatible programming language and integrate with databases.</p>\r\n\r\n<p>Luckily, PHP for web development makes it easier to connect your website to almost any kind of database. This gives the developers more freedom to choose which database they can use based on what suits best for the application.</p>\r\n\r\n<h3><strong>6. Fast and can be secured</strong></h3>\r\n\r\n<p>A website reflects the company, and an unprotected webpage can be a liability. The importance of security in any website cannot be emphasized enough. The company&rsquo;s data and information are at risk, leading to financial losses and customer dissatisfaction. Other security risks are not so well-known but just as essential to protect against. These include social engineering scams, denial-of-service attacks, and data leaks.</p>\r\n\r\n<p>Though many believe that open-source languages are vulnerable to attack, PHP has different built-in security features that protect the website from threats. In addition, the programming language has significant community support for the creation of&nbsp;<a href=\"https://flexisourceit.com.au/resources/blog/top-10-front-end-web-development-tools-in-2022/\">Web Development Tools</a>, frameworks, and best practices that help fix vulnerabilities and increase protection.&nbsp;&nbsp;</p>\r\n\r\n<h3><strong>7. Tried and tested throughout the years</strong></h3>\r\n\r\n<p>One significant benefit of using PHP for web development is that the programming language has been around for decades. It has been tried and tested for various real-life developments. Most bugs have already been found and fixed, making the language reliable and trusted by many developers. In addition, its frameworks and tools have been made over time, giving developers more secure and adequate resources.</p>\r\n\r\n<p>There are also tons of tutorials, FAQs, tips, and guidelines for new PHP developers that the PHP community made.</p>\r\n\r\n<h3><strong>8. Plenty of resources</strong></h3>\r\n\r\n<p>As mentioned earlier, PHP made a loyal community of developers that created resources, tools, and some&nbsp;<a href=\"https://flexisourceit.com.au/resources/blog/reasons-why-laravel-best-php-framework/\">best PHP Frameworks</a>&nbsp;for everyone to use over the years. Likewise, another advantage of using PHP for web development is that it offers many resources and tools to the developers. It is handy for new and veteran PHP developers who want to add specific functionalities to their websites but do not know where to start.</p>\r\n\r\n<p>In addition, these resources include new ways to build a solution in web development. Many PHP forums and websites offer an ocean of resources covering almost all kinds of topics related to PHP. You don&rsquo;t need to worry about facing an issue and not finding a solution with PHP.</p>', '1', 0, 0, '2022-10-17 10:18:17', '2022-10-17 10:18:17'),
(2, 'PHP is the best language in the world in 2022', '<h2>Why is PHP the best language in the world?</h2>\r\n\r\n<ul>\r\n	<li>Low learning costs: PHP&rsquo;s learning cost is very low, it is the easiest programming language to learn, and the learning cost is 1/10 of C and Java.</li>\r\n	<li>High development efficiency: PHP program is simple, the function library is rich, and there are a lot of PHP frameworks for us to choose, which greatly improves the development efficiency.</li>\r\n	<li>Social needs: Baidu, Alibaba, Tencent, Sina, Sohu, and most Internet startups are using PHP.</li>\r\n	<li>Wide range of uses: PHP is currently used on mainstream websites. In addition, PHP can write command line scripts and even write desktop applications.</li>\r\n	<li>The competition in the industry is small: the general university does not open this course. Most of the PHP programmers are trained or self-learned, and the market competitiveness is relatively small.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>PHP excellent framework</h2>\r\n\r\n<ul>\r\n	<li>Yii</li>\r\n	<li>Laravel</li>\r\n	<li>Yaf</li>\r\n	<li>ThinkPHP</li>\r\n	<li>Symfony</li>\r\n	<li>CodeIgniter</li>\r\n	<li>Phalcon</li>\r\n	<li>Zend Framework</li>\r\n</ul>\r\n\r\n<h2>Future PHP</h2>\r\n\r\n<ul>\r\n	<li>PHP5 to 7 performance boost</li>\r\n	<li>PHP7 + Swoole vs. Nginx, Golang performance comparison</li>\r\n	<li>PHP7 + Swoole develops Internet, mobile communications, enterprise software, cloud computing, online gaming, Internet of Things (IOT), car networking, smart home, etc.</li>\r\n	<li>JIT for PHP8</li>\r\n</ul>', '1', 0, 0, '2022-10-17 10:19:37', '2022-10-17 11:38:11'),
(3, 'How to Choose the Best Language for Your Project', '<p>Before I jump into claiming that one language is better than the other, there is something I need to clarify. I don&#39;t want to turn the PHP vs JavaScript discussion into comparing apples and oranges, so I should explain the main difference between JavaScript and PHP.</p>\r\n\r\n<p>PHP is a programming language for back end development only. JavaScript, in turn, was initially designed as a front end development language. But with the introduction of Node.js in 2009, JavaScript became full stack.</p>\r\n\r\n<p>The commonly cited claim that &ldquo;JavaScript is only for front end development, and PHP is for back end&rdquo; is just not true. Today, you can develop the entire app with JavaScript, both client side and server side. The question is, which language is more effective for your particular project?</p>\r\n\r\n<p>Therefore, if you&#39;re trying to decide between PHP and JavaScript, the discussion is reduced to which language you want to use for back end development</p>', '1', 0, 0, '2022-10-17 10:20:38', '2022-10-17 10:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `type`, `is_hidden`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce', '0', 'portfolio', 0, 0, '2022-10-17 10:29:05', '2022-10-17 10:29:05'),
(2, 'Blogging', '0', 'portfolio', 0, 0, '2022-10-17 10:29:18', '2022-10-17 10:29:18'),
(3, 'Restaurant', '0', 'portfolio', 0, 0, '2022-10-17 10:29:29', '2022-10-17 10:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `category_relations`
--

CREATE TABLE `category_relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rel_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rel_id` int(10) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `is_pending` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `rel_id`, `type`, `is_hidden`, `is_deleted`, `is_pending`, `created_at`, `updated_at`) VALUES
(1, 'Zunaid', 'abc@gmal.com', 'nice post', 1, 'blog', 0, 0, 0, NULL, NULL),
(2, 'Junu', 'abc@gmail.com', 'wow, great post', 1, 'blog', 0, 0, 0, '2022-10-28 11:10:55', '2022-10-28 11:10:55'),
(3, 'John', 'abc@gmail.com', 'WOw', 1, 'blog', 0, 0, 0, '2022-10-28 11:17:30', '2022-10-28 11:17:30'),
(4, 'Again', 'ag@gmail.com', 'jhaghFS', 1, 'blog', 0, 0, 0, '2022-10-28 11:31:42', '2022-10-28 11:31:42'),
(5, 'new', 'ns@gmail.com', 'hjha', 1, 'blog', 0, 0, 0, '2022-10-28 11:34:27', '2022-10-28 11:34:27'),
(6, 'hu', 'hg@gmail.com', 'jew', 1, 'blog', 0, 0, 0, '2022-10-28 11:35:04', '2022-10-28 11:35:04'),
(7, 'gjgj', 'gg@gmail.com', 'weruiyri', 1, 'blog', 0, 0, 0, '2022-10-28 11:35:56', '2022-10-28 11:35:56'),
(8, 'Zunaid', 'wow@hgmal.com', 'qwheheq', 1, 'blog', 0, 0, 0, '2022-10-28 11:36:28', '2022-10-28 11:36:28'),
(9, 'Zunaid', 'm.shojol80@gmail.com', 'iweiorhsrdf', 1, 'blog', 1, 0, 0, '2022-10-28 11:36:44', '2022-10-28 11:36:44'),
(10, 'new', 'new@gmail.com', 'jqwei', 1, 'blog', 0, 1, 0, '2022-10-28 11:37:10', '2022-10-28 11:37:10'),
(11, 'hi', 'ha@gmail.com', 'qwjkddb', 1, 'blog', 0, 1, 0, '2022-10-28 11:37:53', '2022-10-28 11:37:53'),
(12, 'hello', 'abc@gmail.com', 'hih', 1, 'blog', 0, 1, 0, '2022-10-28 11:38:34', '2022-10-28 11:38:34'),
(13, 'oho', 'gg@gmail.com', 'uyfgf', 1, 'blog', 0, 1, 0, '2022-10-28 11:40:36', '2022-10-28 11:40:36'),
(14, 'Zunaid', 'abc@gmail.com', 'Nice', 2, 'blog', 0, 0, 0, '2022-10-28 11:53:15', '2022-10-28 11:53:15'),
(15, 'Jonathan Doe', 'admin@gmail.com', 'Kupai dicen', 2, 'blog', 0, 0, 0, '2022-11-06 10:31:22', '2022-11-06 10:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rel_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `link`, `rel_id`, `is_hidden`, `is_deleted`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'blogs', 'images/blogs/20221017161817.png', '1', 0, 0, NULL, '2022-10-17 10:18:17', '2022-10-17 10:18:17'),
(2, 'blogs', 'images/blogs/20221017161817.jpg', '1', 0, 0, NULL, '2022-10-17 10:18:17', '2022-10-17 10:18:17'),
(5, 'blogs', 'images/blogs/20221017162038.jpg', '3', 0, 0, NULL, '2022-10-17 10:20:38', '2022-10-17 10:20:38'),
(6, 'portfolios', 'images/portfolios/ecommerce-websites-layout20221017163523.png', '1', 0, 0, NULL, '2022-10-17 10:35:23', '2022-10-17 10:35:23'),
(7, 'portfolios', 'images/portfolios/ecommerce-website-siliconcity-online20221017163523.jpg', '1', 0, 0, NULL, '2022-10-17 10:35:23', '2022-10-17 10:35:23'),
(8, 'portfolios', 'images/portfolios/f8bbd8e466de3af9ea252bbed81c8e8f20221017163711.webp', '2', 0, 0, NULL, '2022-10-17 10:37:11', '2022-10-17 10:37:11'),
(9, 'portfolios', 'images/portfolios/Restaurant-business-Website20221017163711.png', '2', 0, 0, NULL, '2022-10-17 10:37:11', '2022-10-17 10:37:11'),
(10, 'portfolios', 'images/portfolios/Creating-your-own-blog20221017163927.jpg', '3', 0, 0, NULL, '2022-10-17 10:39:27', '2022-10-17 10:39:27'),
(12, 'recommendation', 'images/recommendation/zunaid20221031181509.jpg', '2', 0, 0, NULL, '2022-10-31 12:15:09', '2022-10-31 12:15:09'),
(15, 'recommendation', 'images/recommendation/zunaid20221031184219.jpg', '3', 0, 0, NULL, '2022-10-31 12:42:19', '2022-10-31 12:42:19'),
(16, 'recommendation', 'images/recommendation/my_avatar20221031185505.JPG', '4', 0, 0, NULL, '2022-10-31 12:55:05', '2022-10-31 12:55:05'),
(17, 'blogs', 'images/blogs/20221206170544.jpg', '2', 0, 0, NULL, '2022-12-06 22:05:44', '2022-12-06 22:05:44'),
(18, 'blogs', 'images/blogs/20221017161937.jpg', '2', 0, 0, NULL, '2022-10-17 10:19:37', '2022-10-17 10:19:37'),
(20, 'portfolios', 'images/portfolios/dropmatix20230725190946.png', '6', 0, 0, NULL, '2023-07-25 23:09:49', '2023-07-25 23:09:49'),
(21, 'portfolios', 'images/portfolios/Our-e-commerce-dropshipping-blog-➤-DROPMATIX20230725190949.png', '6', 0, 0, NULL, '2023-07-25 23:09:49', '2023-07-25 23:09:49'),
(22, 'portfolios', 'images/portfolios/Home20230725191334.png', '7', 0, 0, NULL, '2023-07-25 23:13:36', '2023-07-25 23:13:36'),
(23, 'portfolios', 'images/portfolios/Shop20230725191336.png', '7', 0, 0, NULL, '2023-07-25 23:13:36', '2023-07-25 23:13:36'),
(24, 'portfolios', 'images/portfolios/Home20230725191639.png', '8', 0, 0, NULL, '2023-07-25 23:16:41', '2023-07-25 23:16:41'),
(25, 'portfolios', 'images/portfolios/Shop20230725191641.png', '8', 0, 0, NULL, '2023-07-25 23:16:41', '2023-07-25 23:16:41'),
(26, 'portfolios', 'images/portfolios/Home20230725192449.png', '9', 0, 0, NULL, '2023-07-25 23:24:49', '2023-07-25 23:24:49'),
(27, 'portfolios', 'images/portfolios/Blog20230725192449.png', '9', 0, 0, NULL, '2023-07-25 23:24:53', '2023-07-25 23:24:53'),
(28, 'portfolios', 'images/portfolios/Home20230725192823.png', '10', 0, 0, NULL, '2023-07-25 23:28:23', '2023-07-25 23:28:23'),
(29, 'portfolios', 'images/portfolios/Contact20230725192823.png', '10', 0, 0, NULL, '2023-07-25 23:28:26', '2023-07-25 23:28:26'),
(30, 'portfolios', 'images/portfolios/Home20230725193856.png', '11', 0, 0, NULL, '2023-07-25 23:38:56', '2023-07-25 23:38:56'),
(31, 'portfolios', 'images/portfolios/Home20230725193856.png', '11', 0, 0, NULL, '2023-07-25 23:38:57', '2023-07-25 23:38:57'),
(32, 'portfolios', 'images/portfolios/Home20230725194221.png', '12', 0, 0, NULL, '2023-07-25 23:42:21', '2023-07-25 23:42:21'),
(33, 'portfolios', 'images/portfolios/Shop20230725194221.png', '12', 0, 0, NULL, '2023-07-25 23:42:21', '2023-07-25 23:42:21'),
(34, 'portfolios', 'images/portfolios/Home20230725194520.png', '13', 0, 0, NULL, '2023-07-25 23:45:20', '2023-07-25 23:45:20'),
(35, 'portfolios', 'images/portfolios/Shop20230725194520.png', '13', 0, 0, NULL, '2023-07-25 23:45:20', '2023-07-25 23:45:20'),
(36, 'portfolios', 'images/portfolios/20230726115414.png', '5', 0, 0, NULL, '2023-07-26 15:54:14', '2023-07-26 15:54:14'),
(37, 'portfolios', 'images/portfolios/20230726115414.png', '5', 0, 0, NULL, '2023-07-26 15:54:14', '2023-07-26 15:54:14'),
(38, 'portfolios', 'images/portfolios/20230726115648.png', '4', 0, 0, NULL, '2023-07-26 15:56:48', '2023-07-26 15:56:48'),
(39, 'portfolios', 'images/portfolios/20230726115648.png', '4', 0, 0, NULL, '2023-07-26 15:56:48', '2023-07-26 15:56:48');

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_06_05_171059_create_media_table', 1),
(5, '2022_06_05_171139_create_blogs_table', 1),
(6, '2022_06_05_171149_create_user_metas_table', 1),
(7, '2022_06_05_171214_create_portfolios_table', 1),
(8, '2022_06_05_171231_create_options_table', 1),
(9, '2022_06_05_171255_create_comments_table', 1),
(10, '2022_06_05_171307_create_recomendations_table', 1),
(11, '2022_06_05_171757_create_categories_table', 1),
(12, '2022_06_05_181212_create_category_relations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_key`, `option_value`, `option_group`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'active_template', 'GraphicsPortfolio', 'template_settings', '1', NULL, NULL),
(2, 'title', 'Zunaid Miah', 'website_settings', '1', NULL, NULL),
(3, 'logo_type', 'logo_text', 'website_settings', '1', NULL, NULL),
(4, 'logo_text', 'Zunaid Miah', 'website_settings', '1', NULL, NULL),
(5, 'favicon', 'images/website/binary-code-20221017164421.png', 'website_settings', '1', NULL, NULL),
(6, 'hero_image', 'images/website/zunaid-miah-20221107180254.jpg', 'website_settings', '1', NULL, NULL),
(7, 'about_image', 'images/website/zunaid-removebg-20221012154148-20221017164421.png', 'website_settings', '1', NULL, NULL),
(8, 'about_page_image', 'images/website/zunaid1-removebg-preview-20221004181247-20221017164421-20221019110456.png', 'website_settings', '1', NULL, NULL),
(9, 'home_page_image', 'images/website/Zunaid-Miah-20221206162808.png', 'website_settings', '1', NULL, NULL),
(10, 'blog_page_image', 'images/website/Zunaid-Miah1-20221206164650.png', 'website_settings', '1', NULL, NULL),
(11, 'resume_page_image', 'images/website/Zunaid-Miah2-20221206165218.png', 'website_settings', '1', NULL, NULL),
(12, 'portfolio_page_image', 'images/website/Zunaid-Miah4-20221206170149.png', 'website_settings', '1', NULL, NULL),
(13, 'contact_page_image', 'images/website/Zunaid-Miah-20221210173308.png', 'website_settings', '1', NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `technology`, `link`, `category`, `created_by`, `is_hidden`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce Website', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML5, CSS3, Bootstrap\",\"technology\":\"MySql, Javscript\"}', '#', 1, '1', 0, 0, '2022-10-17 10:35:23', '2022-10-17 10:35:23'),
(2, 'Restaurant Website', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML5, CSS3, Bootstrap\",\"technology\":\"MySql, JavaScript\"}', '#', 3, '1', 0, 0, '2022-10-17 10:37:11', '2022-10-17 10:37:11'),
(3, 'Blogging Website', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML5, CSS3, Bootstrap\",\"technology\":\"MySql, JavaScript\"}', '#', 2, '1', 0, 0, '2022-10-17 10:39:27', '2022-10-17 10:39:27'),
(4, 'Droptienda CMS Website', '<p>Droptienda<br />\r\nis your...</p>\r\n\r\n<h2><strong>All-in-one platform for shops, websites and online marketing</strong></h2>\r\n\r\n<p>Creating and managing a website, blog or online store has never been easier.&nbsp;But Droptienda enables you to do even more - with our platform you not only successfully bring your business online, but you can also access our wide range of online marketing expertise.<br />\r\n&zwnj; As a<br />\r\nEuropean cloud solution, always available, we ensure the smooth operation of your website, blog or online shop.&nbsp;<strong>You can get started right away</strong>&nbsp;with our user-friendly modular system&nbsp;.&nbsp;But Droptienda is not just a kit.&nbsp;We offer active support in publicizing and marketing your online presence - an offer that sets us apart from other providers.&nbsp;</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql,\"}', 'https://www.droptienda.com/', 2, '1', 0, 0, '2023-07-25 23:02:13', '2023-07-25 23:02:13'),
(5, 'Ecommerce Webiste', '<h3><strong>WELCOME CAMPERFRIENDS!</strong></h3>\r\n\r\n<p>It&#39;s almost that time again!&nbsp;The summer season and with it the camping season has started.&nbsp;We offer you products related to camping.&nbsp;Whether with a mobile home, caravan, tent or holiday in the garden - there is something for everyone.&nbsp;Just browse through our range.</p>\r\n\r\n<h2><strong>DOUBLE CAMPING HAMMOCK</strong></h2>\r\n\r\n<p>A double camping hammock where you can rest and relax comfortably while enjoying the outdoors.&nbsp;Thanks to its original and modern design, it takes up little space in the bag provided and is easy to transport and store.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://camperfriend.de/', 1, '1', 0, 0, '2023-07-25 23:05:55', '2023-07-25 23:05:55'),
(6, 'Blogging Website', '<h2><strong><strong>All products, channels, suppliers, customers, leads and orders in one place, that&#39;s Dropmatix!</strong></strong></h2>\r\n\r\n<h2><strong>Starting has NEVER been so easy!</strong></h2>\r\n\r\n<p>Put together your range of over 800,000 products at the push of a button and sell them on various marketplaces and price comparison portals?<br />\r\n&zwnj;No problem at all with Dropmatix&reg;!</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://www.dropmatix.com/', 2, '1', 0, 0, '2023-07-25 23:09:46', '2023-07-25 23:09:46'),
(7, 'Ecommerce Website', '<h2><strong>Dive into our wooden pools: unique designs created for endless fun!</strong></h2>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>At YNERA you will find a selection of high-quality wooden pools for your garden.&nbsp;Whether rectangular, octagonal or hexagonal.</li>\r\n	<li>Natural materials used in the manufacture of our products help you blend your pool seamlessly into the natural environment.&nbsp;Create a warm, natural look in your garden.</li>\r\n</ul>\r\n\r\n<p>&nbsp;Our own garden is a piece of joy and freedom for us.&nbsp;We share this enthusiasm with our customers and are therefore passionate about it.&nbsp;We support you with your garden design and also help you to find the right products and accessories.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://ynera.de/', 1, '1', 0, 0, '2023-07-25 23:13:34', '2023-07-25 23:13:34'),
(8, 'Shop Website', '<h3><strong>1. Product idea</strong></h3>\r\n\r\n<p>Through constant market analysis, in whatever form the current situation allows, visits to trade fairs and events, store checks, connections to forward-looking companies and extensive internet research, market trends are identified at an early stage and implemented directly in product development.&nbsp;Our sports-skilled employees act true to the motto &quot;DEVELOPING BY DOING&quot;.</p>\r\n\r\n<h3><strong>2. Quality Control</strong></h3>\r\n\r\n<p>We attach great importance to building long-term and solid supplier relationships in order to be able to continuously guarantee the best possible quality of our goods.&nbsp;Due to the regular presence of our friendly and competent employees in local factories, both the manufacturing process and the working conditions are continuously checked.</p>\r\n\r\n<h3><strong>3. Logistics</strong></h3>\r\n\r\n<p>Together with our forwarding and shipping partners, we take care of the entire logistics of your project.&nbsp;Whether delivery free of charge or acceptance at the port of shipment, we take care of the timely dispatch of your goods.</p>\r\n\r\n<h3><strong>4. After sale</strong></h3>\r\n\r\n<p>The last point includes an extensive after-sale service.&nbsp;As a Winch partner, everything is available to you, from your own call center here in Germany, to returns processing and the conventional dispatch of spare parts.</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://winch.one', 1, '1', 0, 0, '2023-07-25 23:16:39', '2023-07-25 23:16:39'),
(9, 'Blogging Website', '<p>This is blogging website</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://5a84b289-af6a-4e81-a835-1ad4152dca22.droptienda.eu/', 2, '1', 0, 0, '2023-07-25 23:24:49', '2023-07-25 23:24:49'),
(10, 'Ecommerce Website', '<p>This is Ecommerce Website</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://e4dcc1c3-ab67-44f6-a169-e5e23e9c4443.droptienda.eu/', 1, '1', 0, 0, '2023-07-25 23:28:23', '2023-07-25 23:28:23'),
(11, 'Restaurant Website', '<p>This is restaurant Website</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://3dc4fbf2-6fd6-49d2-8fa2-383ce6faf7ed.droptienda.eu/', 3, '1', 0, 0, '2023-07-25 23:38:56', '2023-07-25 23:38:56'),
(12, 'Ecommerce Website', '<p>We are very happy that you&nbsp;have found your way to&nbsp;<strong>PUREMIRA .&nbsp;</strong>&zwnj; &zwnj;What<br />\r\n&#39;s the deal with the name?&nbsp;<strong>&zwnj; &zwnj; &zwnj;PURE</strong>&nbsp;- stands for pure and unadulterated.&nbsp;how children are.&nbsp;<strong>&zwnj; &zwnj;MIRA</strong>&nbsp;- means look, wonderful, sea, ocean or peace.&nbsp;&zwnj; &zwnj; &zwnj; &zwnj;It&nbsp;is&nbsp;&zwnj; &zwnj;To&nbsp;protect our world, &zwnj;in the present as well as for future generations.&nbsp;&zwnj; &zwnj;Our&nbsp;focus is therefore on sustainable toys and play content.&nbsp;&zwnj; &zwnj;That&nbsp;these products are of high quality and durable, and protect the environment.&nbsp;&zwnj; &zwnj;&zwnj; &zwnj;For&nbsp;this to succeed, our partners and suppliers come first<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&zwnj;from Germany and neighboring European countries.<br />\r\n&zwnj; &zwnj; &zwnj; &zwnj;What<br />\r\ncould be nicer than discovering the wonderful and magical (kids) world of games and imagination.&nbsp;<br />\r\n&zwnj;&zwnj;Dive into exciting adventures with you and<br />\r\nput a smile on the faces of both the smallest and &zwnj;big&quot; children.&nbsp;&zwnj;Because&nbsp;<strong>playing</strong>&nbsp;is the&nbsp;<strong>most natural thing</strong>&nbsp;in the world&zwnj;<br />\r\n&zwnj;The joy of it knows no age limit!&nbsp;&zwnj; &zwnj; &zwnj; &zwnj; Feel free&nbsp;<br />\r\nto visit&nbsp;&zwnj;It&#39;s worth it, because we are working on expanding our range so that we can continue to bring joy to you and the little ones.&nbsp;&zwnj; &zwnj; Happiness<strong>&nbsp;is little magic!&nbsp;</strong>&zwnj;<br />\r\n<br />\r\n<br />\r\n<br />\r\n&zwnj;We look forward to getting you excited about our PUREMIRA family.<br />\r\n&zwnj; &zwnj;Best<br />\r\nregards - your team from&nbsp;<strong>&zwnj; &zwnj; PUREMIRA</strong><br />\r\n-naturally play</p>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://8afb28ec-8969-4357-9e99-9eed8bb789e5.droptienda.eu/', 1, '1', 0, 0, '2023-07-25 23:42:21', '2023-07-25 23:42:21'),
(13, 'Ecommerce Website', '<h2>Welcome to golf with style!&nbsp;We are your exclusive golf shop for high-quality golf equipment and stylish clothing.&nbsp;Discover a wide selection of clubs, golf bags, caddies and more with us.&nbsp;After the game, enjoy our fine selection of liqueurs, wines and cigars.&nbsp;Immerse yourself in the world of stylish golf at Golf mit Stil!</h2>\r\n\r\n<h2>THE RIGHT ONE FOR EVERYONE</h2>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>A set of matching clubs and balls is not all you need for golf.&nbsp;No, you also need golf bags to be able to transport all the equipment.&nbsp;After all, every good golfer needs a total of 14 clubs, balls, club towels and, depending on the weather, an umbrella.</li>\r\n	<li>In our online shop you will find many golf bags of different models and brands.&nbsp;Including, of course, Callaway and JuCad.</li>\r\n</ul>\r\n\r\n<h2>THE RIGHT ONE FOR EVERYONE</h2>\r\n\r\n<ul style=\"list-style-type:none\">\r\n	<li>Golfers appreciate the advantages of a caddy during their extensive games on a spacious golf course.&nbsp;All rental equipment on site?&nbsp;How about your own caddy?&nbsp;With the help of a golf caddy you can easily transport your cart or trolley bag.</li>\r\n	<li>The special thing is that, in addition to cart bags, caddies also have numerous other devices to which you can also attach other additional bags and accessories.</li>\r\n</ul>', '{\"backend\":\"Php, Laravel\",\"frontend\":\"HTML, CSS, JavaScript, Bootstrap, JQuery\",\"technology\":\"MySql\"}', 'https://8fcb5851-7502-4d0e-a330-f9c3897bba6f.droptienda.eu/', 1, '1', 0, 0, '2023-07-25 23:45:20', '2023-07-25 23:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `recomendations`
--

CREATE TABLE `recomendations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_hidden` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `is_pending` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recomendations`
--

INSERT INTO `recomendations` (`id`, `name`, `title`, `message`, `star`, `is_hidden`, `is_deleted`, `is_pending`, `created_at`, `updated_at`) VALUES
(3, 'John Doe', 'Manager', '<p>He is so well</p>', '5', 0, 0, 0, '2022-10-31 12:21:10', '2022-10-31 12:42:19'),
(4, 'Bob', 'Tester', '<p>Awesome man. Works perfectly</p>', '4', 0, 0, 0, '2022-10-31 12:55:05', '2022-10-31 12:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zunaid Miah', 'admin@gmail.com', 'admin', NULL, 'eyJpdiI6InE3bzFvQUlkK2hsYjhWYjc4aVppWlE9PSIsInZhbHVlIjoiTGFnbkFxdWdCZ1ZRdHFjSGpBTHpGdz09IiwibWFjIjoiMDFhY2M3ZGQ2ODFlZGMxYjMwZTY0MDQyNDAwZDcwODM0NzJmODZiZTMyM2MwYzg2MTYzYmNiZjEyMzI1MzdiZSIsInRhZyI6IiJ9', NULL, '2022-10-24 11:06:14', '2022-10-24 11:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_metas`
--

CREATE TABLE `user_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_metas`
--

INSERT INTO `user_metas` (`id`, `user_key`, `user_value`, `user_group`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'email', 'jonaeidhossain589@gmail.com', 'general-info', '1', NULL, NULL),
(2, 'name', 'Zunaid Miah', 'general-info', '1', NULL, NULL),
(3, 'profession_name', 'Software Engineer (Project Leader)', 'general-info', '1', NULL, NULL),
(4, 'about_me', '<p>I would<strong>&nbsp;introduce myself in seven words</strong>. Passionate coder, responsible father, best colleague ever. That pretty much sums it up, though at least the last one my former colleagues have to confirm. I try to&nbsp;<strong>do a good job in all roles I have in life</strong>, and I enjoy the process immensely.</p>', 'general-info', '1', NULL, NULL),
(5, 'birth_date', NULL, 'general-info', '1', NULL, NULL),
(6, 'location', 'Shagufta Housing, Mirpur 12 DOHS, Dhaka', 'general-info', '1', NULL, NULL),
(7, 'interest', 'Bike RIding, Playing Guitar, Reading, Exploring new things, Communicate to new people', 'general-info', '1', NULL, NULL),
(8, 'country', 'Bangladesh', 'general-info', '1', NULL, NULL),
(9, 'skills_details', '<p>I have Php programming experience. Wokring on laravel framework. I have also experience working on JavaScript, Bootstrap, MySql</p>', 'general-info', '1', NULL, NULL),
(10, 'phone', '01849668294', 'general-info', '1', NULL, NULL),
(11, 'phone1', '01645593709', 'general-info', '1', NULL, NULL),
(12, 'facebook_url', 'zunaidmiah1', 'social-info', '1', NULL, NULL),
(13, 'twitter_url', 'zunaidmiah', 'social-info', '1', NULL, NULL),
(14, 'pinterest_url', NULL, 'social-info', '1', NULL, NULL),
(15, 'youtube_url', 'channel/UCD6pgCju2WaML1u1KWNCNVw', 'social-info', '1', NULL, NULL),
(16, 'linkedin_url', 'zunaidmiah', 'social-info', '1', NULL, NULL),
(17, 'github_url', 'zunaidmiah', 'social-info', '1', NULL, NULL),
(18, 'instagram_url', 'zunaidmiah', 'social-info', '1', NULL, NULL),
(19, 'soundcloud_url', NULL, 'social-info', '1', NULL, NULL),
(20, 'institution_info', '[{\"name\":\"Chargach N. I. bhuiyan High School\",\"location\":\"Chargach, Kasba, Brahmmanbaria\",\"session\":\"2007-2014\",\"degree\":\"S.S.C\",\"filename\":\"images\\/institution\\/chargach-school20221206161006.jpg\"},{\"name\":\"Kurerper Ideal College\",\"location\":\"Muradnagar, Cumilla\",\"session\":\"2014-2016\",\"degree\":\"H.S.C\",\"filename\":\"images\\/institution\\/kurerpar-college20221206161006.jpg\"},{\"name\":\"Daffodil  International University\",\"location\":\"Dhanmondi, Dhaka\",\"session\":\"2017-2021\",\"degree\":\"B. Sc In Software Engineer\",\"filename\":\"images\\/institution\\/2022101717092120221206161006.jpg\"}]', 'institutions', '1', NULL, NULL),
(21, 'pricing_info', '[{\"name\":\"Hourly Package\",\"type\":\"10$\\/Hourly\",\"features\":\"<ul>\\r\\n\\t<li>Customization.<\\/li>\\r\\n\\t<li>Performance.<\\/li>\\r\\n\\t<li>In-built feature set.<\\/li>\\r\\n\\t<li>Flexibility.<\\/li>\\r\\n\\t<li>Open-source.<\\/li>\\r\\n\\t<li>SaaS.<\\/li>\\r\\n\\t<li>Headless commerce.<\\/li>\\r\\n<\\/ul>\"},{\"name\":\"Mothly\",\"type\":\"1000$\\/Monthly\",\"features\":\"<ul>\\r\\n\\t<li>Customization.<\\/li>\\r\\n\\t<li>Performance.<\\/li>\\r\\n\\t<li>In-built feature set.<\\/li>\\r\\n\\t<li>Flexibility.<\\/li>\\r\\n\\t<li>Open-source.<\\/li>\\r\\n\\t<li>SaaS.<\\/li>\\r\\n\\t<li>Headless commerce.<\\/li>\\r\\n<\\/ul>\"},{\"name\":\"Project\",\"type\":\"300$\\/Project\",\"features\":\"<ul>\\r\\n\\t<li>Customization.<\\/li>\\r\\n\\t<li>Performance.<\\/li>\\r\\n\\t<li>In-built feature set.<\\/li>\\r\\n\\t<li>Flexibility.<\\/li>\\r\\n\\t<li>Open-source.<\\/li>\\r\\n\\t<li>SaaS.<\\/li>\\r\\n\\t<li>Headless commerce.<\\/li>\\r\\n<\\/ul>\"}]', 'pricing', '1', NULL, NULL),
(22, 'skills_info', '[{\"name\":\"PHP\",\"level\":\"expert\",\"percentage\":\"95\"},{\"name\":\"Laravel\",\"level\":\"expert\",\"percentage\":\"95\"},{\"name\":\"HTML\",\"level\":\"mid\",\"percentage\":\"80\"},{\"name\":\"CSS\",\"level\":\"mid\",\"percentage\":\"60\"},{\"name\":\"Bootstrap\",\"level\":\"mid\",\"percentage\":\"60\"},{\"name\":\"JavaScript\",\"level\":\"mid\",\"percentage\":\"65\"},{\"name\":\"MySql\",\"level\":\"mid\",\"percentage\":\"80\"},{\"name\":\"Jquery\",\"level\":\"expert\",\"percentage\":\"90\"}]', 'skills', '1', NULL, NULL),
(23, 'working_info', '[{\"name\":\"Software Engineer(Project Leader)\",\"time\":\"2021 - Continue\",\"c_name\":\"Luminous Labs\",\"description\":\"<p>I think you should take a chill pill, and stop right there.<\\/p>\\r\\n\\r\\n<p>Let&rsquo;s empty your pockets and see what you have so far, shall we?<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>HTML &amp; CSS:&nbsp;The backbone of any contemporary self-respecting website.<\\/li>\\r\\n\\t<li>JavaScript:&nbsp;The most widely used language for&nbsp;client-side&nbsp;scripting.<\\/li>\\r\\n\\t<li>PHP:&nbsp;The most widely used language for&nbsp;server-side&nbsp;scripting.<\\/li>\\r\\n\\t<li>SQL, MySQL:&nbsp;The most widely used RDBMS query language(s).<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>As far as website programming goes, right now you can write&nbsp;absolutely any type&nbsp;of website with an arbitrary level of complexity. You don&rsquo;t need&nbsp;anything&nbsp;more to conquer the web. You are&nbsp;da boss.<\\/p>\\r\\n\\r\\n<p>But,&nbsp;do you really &ldquo;know&rdquo;&nbsp;these languages? Can you really write&nbsp;any type&nbsp;of website with arbitrary level of complexity? Have you&nbsp;even tried&nbsp;to write a website?&nbsp;At all?.<\\/p>\\r\\n\\r\\n<p>If you&nbsp;honestly&nbsp;answered&nbsp;yes,&nbsp;well, congratulations. You don&rsquo;t need to learn any new language, unless you want to kill some time, just because.<\\/p>\\r\\n\\r\\n<p>If you&nbsp;honestly&nbsp;answered&nbsp;no,&nbsp;well, you are on the right track. Stop what you are doing. Collecting languages like rare coins or stamps is not a good hobby. Take them one-by-one, learn them, be proficient in them, and then use them to do useful things.<\\/p>\"}]', 'working', '1', NULL, NULL),
(24, 'service_info', '[{\"name\":\"Web Developer\",\"description\":\"<p>A Web Developer is&nbsp;<strong>in charge of ensuring websites look good and function properly<\\/strong>. Web developers collaborate with website and graphic designers, monitor website traffic, troubleshoot website problems when they arise, and update websites as necessary.<\\/p>\"},{\"name\":\"Web Designer\",\"description\":\"<p>A Web Designer, or Web Applications Designer, is&nbsp;<strong>responsible for designing the overall layout and aesthetic for websites<\\/strong>. Their duties include coding webpages or entire websites, meeting with clients to review website templates or refine their designs and running tests to preview layouts and website features.<\\/p>\"},{\"name\":\"SEO Specialist\",\"description\":\"<p>A Search Engine Optimization or SEO Specialist&nbsp;<strong>tests, analyzes, and changes a website so it is optimized for search engines, and the website subsequently ranks higher in the search results on major search engines such as Google and Bing<\\/strong>.<\\/p>\"}]', 'service', '1', NULL, NULL),
(25, 'team_info', '[{\"name\":\"John Doe\",\"designation\":\"Web Designer\",\"filename\":\"images\\/team\\/avatar20221017173457.jpg\"},{\"name\":\"Alina\",\"designation\":\"Manager\",\"filename\":\"images\\/team\\/avatar20221017173457.png\"},{\"name\":\"Zunaid Miah\",\"designation\":\"Web Developer\",\"filename\":\"images\\/team\\/868320_people_512x51220221017173556.png\"},{\"name\":\"Tithy\",\"designation\":\"Front End developer\",\"filename\":\"images\\/team\\/171344-cat-laptop-animals-748x46820221124113149.jpg\"}]', 'teams', '1', NULL, NULL),
(26, 'marketplace', 'https://www.upwork.com/freelancers/~019c0974789f0e6505', 'general-info', '1', NULL, NULL),
(27, 'cv', 'cv/cv_20221206154913.pdf', 'general-info', '1', NULL, NULL),
(28, 'cv', 'cv/cv_20230725184600.pdf', 'general-info', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_relations`
--
ALTER TABLE `category_relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recomendations`
--
ALTER TABLE `recomendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_metas`
--
ALTER TABLE `user_metas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_relations`
--
ALTER TABLE `category_relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recomendations`
--
ALTER TABLE `recomendations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_metas`
--
ALTER TABLE `user_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
