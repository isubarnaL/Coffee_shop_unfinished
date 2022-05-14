CREATE TABLE IF NOT EXISTS `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'VANILLA CAPPUCCINO','', '0.99', '0.00', 10, 'VANILLA CAPPUCCINO.jpg', '2019-03-13 17:55:22'),
(2, 'KAPPI NIRVANA', '', '1.99', '3.02', 34, 'KAPPI NIRVANA.jpg', '2019-03-13 18:52:49'),
(3, 'CAFE MOCHA', '', '1.09', '0.00', 23, 'CAFE MOCHA.jpg', '2019-03-13 18:47:56'),
(4, 'CRUNCHY VANILLA FRAPE', '', '2.00', '0.00', 7, 'CRUNCHY VANILLA FRAPE.jpg', '2019-03-13 17:42:04'),
(5, 'CAPPUCCINO', 'A coffee drink consisting of espresso and a milk foam mixture (drink size about 160–240 ml). Served in a cappuccino cup.', '1.50', '0.00', 7, 'Cappuccino.png', '2020-03-13 17:42:04');