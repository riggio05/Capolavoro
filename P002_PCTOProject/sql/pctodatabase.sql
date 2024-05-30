-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 13, 2024 alle 13:25
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pctodatabase`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class_name` varchar(5) DEFAULT NULL,
  `school_year` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `surname`, `mail`, `password`, `class_name`, `school_year`) VALUES
(1, 'admin', 'admin', 'admin@example.com', '123', '5IA', '2023-2024'),
(2, 'daniele', 'dentico', 'dentico@example.com', '$2y$10$Hqs5i/q2pLaAbZBJTM/JTerV6MI2rRTkHFnGLJR8TMNBZ1WMEASGK', '5IA', '2023-2024'),
(3, 'Marco', 'Riggio', 'marco@gmail.com', '$2y$10$HU94sMjTHB3A481755MFreW8wX6jcOuMkQnCno6Td/xVJ6HoIOehO', '5IA', '2023-2024');

-- --------------------------------------------------------

--
-- Struttura della tabella `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specializzation` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `CAP` int(11) NOT NULL,
  `first1` date DEFAULT NULL,
  `end1` date DEFAULT NULL,
  `first2` date DEFAULT NULL,
  `end2` date DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL CHECK (`mark` >= 0 and `mark` <= 5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `agency`
--

INSERT INTO `agency` (`id`, `name`, `specializzation`, `description`, `address`, `CAP`, `first1`, `end1`, `first2`, `end2`, `img`, `mark`) VALUES
(1, 'Web Nubes', 'Informatica', 'Descrizione azienda 1', 'Via Podgorra 17', 30173, '2024-04-14', '2024-04-20', '2024-04-21', '2024-04-28', 'img/aziende/azienda1.jpg', 4),
(2, 'Azienda 2', 'Specializzazione 2', 'Descrizione azienda 2', 'Indirizzo 2', 123, '2024-04-15', '2024-04-21', '2024-04-22', '2024-04-29', 'img/aziende/azienda2.jpg', 3),
(3, 'Azienda 3', 'Specializzazione 3', 'Descrizione azienda 3', 'Indirizzo 3', 123, '2024-04-16', '2024-04-22', '2024-04-23', '2024-04-30', 'img/aziende/azienda3.jpg', 5),
(4, 'Azienda 4', 'Specializzazione 4', 'Descrizione azienda 4', 'Indirizzo 4', 123, '2024-04-17', '2024-04-23', '2024-04-24', '2024-05-01', 'img/aziende/azienda4.jpg', 2),
(5, 'Azienda 5', 'Specializzazione 5', 'Descrizione azienda 5', 'Indirizzo 5', 123, '2024-04-18', '2024-04-24', '2024-04-25', '2024-05-02', 'img/aziende/azienda5.jpg', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `class`
--

CREATE TABLE `class` (
  `name` varchar(5) NOT NULL,
  `school_year` varchar(9) NOT NULL,
  `cours` varchar(100) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `class`
--

INSERT INTO `class` (`name`, `school_year`, `cours`, `start`, `end`) VALUES
('5EATA', '2023-2024', 'Elettronica', '2023-09-07', '2024-06-22'),
('5EATB', '2023-2024', 'Elettronica', '2023-09-15', '2024-07-01'),
('5IA', '2023-2024', 'Informatica', '2023-09-05', '2024-06-20'),
('5IB', '2023-2024', 'Informatica', '2023-09-10', '2024-06-25'),
('5IC', '2023-2024', 'Informatica', '2023-09-12', '2024-06-28');

-- --------------------------------------------------------

--
-- Struttura della tabella `favourites`
--

CREATE TABLE `favourites` (
  `student` int(11) NOT NULL,
  `agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `favourites`
--

INSERT INTO `favourites` (`student`, `agency`) VALUES
(11, 1),
(11, 2),
(11, 3),
(13, 1),
(13, 2),
(13, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `day` date NOT NULL,
  `start_morning` time NOT NULL,
  `end_morning` time NOT NULL,
  `start_afternoon` time NOT NULL,
  `end_afternoon` time NOT NULL,
  `description` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `student` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `logbook`
--

INSERT INTO `logbook` (`id`, `day`, `start_morning`, `end_morning`, `start_afternoon`, `end_afternoon`, `description`, `role`, `student`) VALUES
(1, '2024-05-03', '08:00:00', '13:00:00', '14:00:00', '17:00:00', 'aaa', 'collaboratore', 11),
(2, '2024-05-03', '08:00:00', '13:00:00', '14:00:00', '17:00:00', 'aaa', 'collaboratore', 0),
(3, '2024-05-04', '18:29:00', '17:30:00', '17:30:00', '17:32:00', '232e3', 'collaboratore', 11);

-- --------------------------------------------------------

--
-- Struttura della tabella `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `mark` int(11) DEFAULT NULL CHECK (`mark` >= 0 and `mark` <= 5),
  `comment` text DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `agency` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `review`
--

INSERT INTO `review` (`id`, `mark`, `comment`, `student`, `agency`) VALUES
(1, 4, 'bella azienda', 11, 1),
(2, 1, 'ho dormito tutto il tempo', 13, 1),
(3, 3, 'aaa', 11, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `stage`
--

CREATE TABLE `stage` (
  `administrator` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `agency` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `stage`
--

INSERT INTO `stage` (`administrator`, `student`, `agency`, `start`, `end`) VALUES
(2, 0, 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struttura della tabella `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `CAP` int(5) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `class_name` varchar(5) DEFAULT NULL,
  `school_year` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dump dei dati per la tabella `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `mail`, `password`, `address`, `CAP`, `subject`, `mark`, `class_name`, `school_year`) VALUES
(0, 'Matteooooo', 'Fardin', 'marco@gmail.com', '$2y$10$qvRuDWlakF8GXvPDeNW15evOQ/S2.dFtanHB4rPmo0ax42OTZt0Pu', NULL, NULL, 'Italiano', 9, '5IA', '2023-2024'),
(1, 'utente', 'modificato', 'olif@example.com', '123', '123 Main St', 12345, 'Matematica', 9, '5IA', '2023-2024'),
(2, 'Matteo', 'Piazzon', 'piazza@example.com', '123', '456 Elm St', 54321, 'Italiano', 4, '5IA', '2023-2024'),
(3, 'Agnese', 'Ponga', 'ponga@example.com', '123', '789 Oak St', 98765, 'Informatica', 5, '5IB', '2023-2024'),
(4, 'Edgar', 'Cut', 'cut@example.com', '123', '101 Maple St', 13579, 'Inglese', 4, '5EATA', '2023-2024'),
(5, 'Emma', 'Garcia', 'emma@example.com', '123', '202 Pine St', 24680, 'Sistemi e reti', 6, '5IA', '2023-2024'),
(6, 'Frank', 'Martinez', 'frank@example.com', '123', '303 Cedar St', 11223, 'Informatica', 7, '5IC', '2023-2024'),
(7, 'Grace', 'Lopez', 'grace@example.com', '123', '404 Walnut St', 33445, 'Sistemi e reti', 8, '5IB', '2023-2024'),
(8, 'Henry', 'Perez', 'henry@example.com', '123', '505 Spruce St', 55667, 'Telecomunicazioni', 9, '5EATB', '2023-2024'),
(9, 'Isabella', 'Rodriguez', 'isabella@example.com', '123', '606 Birch St', 77889, 'Informatica', 6, '5IA', '2023-2024'),
(10, 'Jack', 'Hernandez', 'jack@example.com', '123', '707 Cedar St', 99000, 'Informatica', 5, '5IA', '2023-2024'),
(11, 'nuovo', 'utente', 'nuovo@example.com', '$2y$10$bOyTfznpo2oQUoMdHAvmuuUFSa8EXWBtGcav.FolElqBGaFXf.LNy', NULL, NULL, NULL, NULL, '5IA', '2023-2024'),
(12, 'Simone', 'Riggio', 'riggio.simone05@gmail.com', '$2y$10$YoGTxoS/3yi.Npp5Yo3gPOHHZiuG8uJnhZNWOCk0o8YMKGFVdz9Km', 'Via Baglioni 37', 30173, NULL, NULL, '5IA', '2023-2024'),
(13, 'fardino', 'oliffo', 'fardino@gmail.com', '$2y$10$6IguctdsYFuxgScliXgJl.hPDk/JZ9bZ9WTAj6uIi630lz1f5B2ma', 'Via hussain 37', 30104, NULL, NULL, '5IA', '2023-2024');

-- --------------------------------------------------------

--
-- Struttura della tabella `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `mail` varchar(320) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `write_review`
--

CREATE TABLE `write_review` (
  `student` int(11) NOT NULL,
  `agency` int(11) NOT NULL,
  `review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `class_name` (`class_name`,`school_year`);

--
-- Indici per le tabelle `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`name`,`school_year`);

--
-- Indici per le tabelle `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`student`,`agency`),
  ADD KEY `agency` (`agency`);

--
-- Indici per le tabelle `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`,`day`),
  ADD KEY `student` (`student`);

--
-- Indici per le tabelle `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student` (`student`),
  ADD KEY `agency` (`agency`);

--
-- Indici per le tabelle `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`administrator`,`student`,`agency`),
  ADD KEY `student` (`student`),
  ADD KEY `agency` (`agency`);

--
-- Indici per le tabelle `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `class_name` (`class_name`,`school_year`);

--
-- Indici per le tabelle `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `agency` (`agency`);

--
-- Indici per le tabelle `write_review`
--
ALTER TABLE `write_review`
  ADD PRIMARY KEY (`student`,`agency`,`review`),
  ADD KEY `review` (`review`),
  ADD KEY `agency` (`agency`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`class_name`,`school_year`) REFERENCES `class` (`name`, `school_year`);

--
-- Limiti per la tabella `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`student`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`agency`) REFERENCES `agency` (`id`);

--
-- Limiti per la tabella `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `logbook_ibfk_1` FOREIGN KEY (`student`) REFERENCES `student` (`id`);

--
-- Limiti per la tabella `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`student`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`agency`) REFERENCES `agency` (`id`);

--
-- Limiti per la tabella `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`administrator`) REFERENCES `administrator` (`id`),
  ADD CONSTRAINT `stage_ibfk_2` FOREIGN KEY (`student`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `stage_ibfk_3` FOREIGN KEY (`agency`) REFERENCES `agency` (`id`);

--
-- Limiti per la tabella `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_name`,`school_year`) REFERENCES `class` (`name`, `school_year`);

--
-- Limiti per la tabella `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`agency`) REFERENCES `agency` (`id`);

--
-- Limiti per la tabella `write_review`
--
ALTER TABLE `write_review`
  ADD CONSTRAINT `write_review_ibfk_1` FOREIGN KEY (`review`) REFERENCES `review` (`id`),
  ADD CONSTRAINT `write_review_ibfk_2` FOREIGN KEY (`student`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `write_review_ibfk_3` FOREIGN KEY (`agency`) REFERENCES `agency` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
