-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 20. Jun 2019 um 22:38
-- Server-Version: 5.7.25
-- PHP-Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `webshop_gintastic`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`) VALUES
(1, 'fabio.bily@gmail.com', '$2y$10$NP0DQtbIvYTa164lG7knGOczZs25yyNr8LlmxFiLV3/e7eHVLb3AG');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `streetNr` varchar(255) NOT NULL,
  `door` varchar(255) DEFAULT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `adress`
--

INSERT INTO `adress` (`id`, `street`, `streetNr`, `door`, `zip`, `city`, `country`, `name`, `user_id`) VALUES
(5, 'blabla straße', '11', '', '2511', 'Pfaffstätten', 'Austria', 'manni manni', 3),
(6, 'jonstraße', '34', '', '2500', 'Baden', 'Austria', 'jonny jon', 4),
(7, 'schwartzstraße', '21', '5', '2500', 'Baden', 'Austria', 'fabio bily', 6),
(8, 'markus straße', '33', '', '2555', 'Baden Baden', 'Austria', 'markus', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_price` double DEFAULT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `crdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` enum('open','in progress','in delivery','storno','delivered') NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `total_price`, `delivery_address_id`, `payment_id`, `user_id`, `crdate`, `products`, `status`, `deleted`) VALUES
(16, NULL, 6, 9, 4, '2019-06-19 12:03:21', '{\"6\":1,\"4\":2}', 'in progress', 0),
(18, NULL, 7, 12, 6, '2019-06-20 16:04:57', '{\"3\":2,\"4\":1}', 'in progress', 0),
(22, NULL, 7, 12, 6, '2019-06-20 17:54:15', '{\"2\":2}', 'in progress', 0),
(23, NULL, 7, 12, 6, '2019-06-20 17:55:47', '{\"3\":2}', 'in progress', 0),
(24, NULL, 7, 12, 6, '2019-06-20 21:03:33', '{\"1\":1,\"3\":1}', 'in progress', 0),
(25, NULL, 7, 12, 6, '2019-06-20 21:05:14', '{\"1\":1,\"3\":1}', 'in progress', 0),
(26, NULL, 7, 12, 6, '2019-06-20 21:07:19', '{\"4\":2}', 'in progress', 0),
(27, 29.99, 8, 13, 9, '2019-06-20 21:10:16', '{\"1\":1}', 'in progress', 0),
(28, 38.989999999999995, 8, 13, 9, '2019-06-20 21:11:02', '{\"1\":1}', 'in progress', 0),
(29, 68.98, 8, 13, 9, '2019-06-20 22:32:13', '{\"1\":2}', 'open', 1),
(30, 78.98, 8, 13, 9, '2019-06-20 21:41:47', '{\"2\":2}', 'in progress', 0),
(31, 78.98, 8, 13, 9, '2019-06-20 22:08:54', '{\"2\":2}', 'in progress', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `expires` varchar(255) NOT NULL,
  `ccv` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `payments`
--

INSERT INTO `payments` (`id`, `name`, `number`, `expires`, `ccv`, `user_id`) VALUES
(8, 'jonny jon', '24352332625', '11/23', 446, 4),
(9, 'jonny jon', '24352332625', '11/23', 446, 4),
(10, 'manni das mamut', '3242356231', '0925', 334, 3),
(11, 'manni das mamumt', '325426436', '10', 554, 3),
(12, 'fabio bily', '234235426', '10/23', 993, 6),
(13, 'markus', '235135315', '09/20', 223, 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `images` text NOT NULL,
  `deleted` tinyint(1) NOT NULL COMMENT 'soft delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `images`, `deleted`) VALUES
(1, 'Blogger Gin', 29.99, 10, 'Blogger Gin has landed!  It has finally arrived.   After ten months in production Blogger Gin is now available to buy online\r\n\r\nProduction of the gin is happened on November 7th, with bottling the following day and by tea time on November 8th, Blogger Gin was alive.   It is now in the hands of the courier on its way to the warehouse for onward shipping to customers', 'product_images/BloggerGin.png', 0),
(2, 'Napue Gin', 34.99, 15, 'Napue gin boasts locally foraged fresh botanicals, including sea buckthorn, cranberries and birch leaves. The distinct fragrance and flavour of an early morning, misty Finnish meadow is instantly recognisable. Enjoy your Napue Gin & Tonic with plenty of ice, a twig of rosemary, a few cranberries and your favourite tonic water.', 'product_images/napue.png', 0),
(3, 'Hendricks Gin', 39.99, 20, 'Quirky producer Hendricks make their pot-still distilled gin using cucumber as one of the primary botanicals. This makes for a unique, tasty and incredibly refreshing Gin.', 'product_images/HendricksGin.png', 0),
(4, 'Koval Gin', 49.99, 20, 'Made with a unique blend of woodland spices. Juniper and wildflowers envelop the bouquet, while the taste is dry, yet vibrant – clean and nuanced by emerald grasses, golden citrus, and white pepper with a round, floral body. Crisp enough to enjoy straight and of course excellent in cocktails both classic and contemporary.', 'product_images/KovalGin.png', 0),
(5, 'Seagram\'s Gin', 45, 14, 'Seagram\'s Gin continues to reign as America\'s #1. Since the very beginning, we\'ve proudly made our gins in America. Our flagship Extra Dry Gin is a masterful balance of botanicals, among which are juniper berries, sweet and bitter orange, coriander and angelica.', 'product_images/SeagramsGin.png', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `deleted`) VALUES
(3, 'manni', 'manni@gmail.com', '$2y$10$BlgCVVG78F8oO9srnXd.o.K1P2sJLF49QCUAQCCO3J/4Wp93xQRdi', 0),
(5, 'hallo funktionier', 'test@test.com', '$2y$10$qK7VVf021bW8vGezXhWCi.rbXnMRNrM5Q8MCPeSMQpobIOKWwk/4.', 0),
(6, 'fabio', 'fabio@gmail.com', '$2y$10$nmDHsv9q4zHjqRaadqxIQuABdjvQl9YccJh5KDpTlZBTwvYQ8rd1K', 0),
(7, 'hanna', 'hanna@gmail.com', '$2y$10$zUsdknzJbfp1j9WYs8rd3.5bsPUGX1oTYsiLntwXU5kymU.nmjPHG', 0),
(9, 'markus', 'markus.markus@gmx.at', '$2y$10$dld4FCRzT94VHYVOL1IZbO.zEyBDqDgJb7vzjHUMooR/MvIXe31b2', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id` (`product_id`) USING BTREE,
  ADD KEY `carts_user_id` (`user_id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT für Tabelle `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
