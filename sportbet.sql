CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(50) NOT NULL UNIQUE,
  `password` char(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` char(1) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `balance` decimal(15,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `currency` char(3) NOT NULL DEFAULT 'EUR',
  `status` varchar(20) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;


INSERT INTO `users` (`id`, `login`, `password`, `name`, `sex`, `dob`, `address`, `balance`, `currency`, `status`) VALUES
(1, 'kwavish6', '$2y$10$J57f1SuE4Qbi/IKu8lOeW.ymQICXxl2.ub3NzLUY7xeE/GWeaFzOu', 'Kristen Wavish', 'F', '1998-01-12', 'Parda 18, Estonia, Harjumaa, Tallinn 10612', '1000.00', 'EUR', 'active'),
(2, 'tellamm', '$2y$10$kyG.orschFg8GiOC59Yir.vY11EIzvg9RWlJ9WK8mCOsXri.pCsg2', 'Thedrick Ellam', 'M', '1990-02-09', '3067 Adams Drive, Texas, Calvert, 77837', '1000.00', 'USD', 'active');

INSERT INTO `contacts` (`contact_id`, `user_id`, `type`, `contact`) VALUES
(2, 1, 'email', 'kristenwavish@gmail.com'),
(3, 1, 'email', 'kwavish6@gmail.com'),
(4, 1, 'phone', '+1-202-555-0155'),
(6, 2, 'email', 'tellamm_tedrick@gmail.com'),
(7, 2, 'phone', '+37253324514'),
(8, 2, 'phone', '53811111');