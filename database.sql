
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `contact2018` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `contents` (
  `slug` varchar(100) NOT NULL,
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `event2018` (
  `id` int(10) NOT NULL,
  `events` varchar(500) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `reg_active` int(2) NOT NULL DEFAULT '1',
  `promoimg` varchar(1000) NOT NULL,
  `pdflink` varchar(1000) NOT NULL,
  `teamon` int(2) NOT NULL,
  `maxteammember` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `participance2018` (
  `id` int(11) NOT NULL,
  `eventslug` varchar(100) DEFAULT NULL,
  `participationtype` int(1) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `depertment` varchar(100) DEFAULT NULL,
  `teamname` varchar(100) DEFAULT NULL,
  `teamleadername` varchar(100) DEFAULT NULL,
  `teamleaderroll` varchar(50) DEFAULT NULL,
  `teamleaderdept` varchar(50) DEFAULT NULL,
  `member1name` varchar(100) DEFAULT NULL,
  `member1roll` varchar(50) DEFAULT NULL,
  `member1dept` varchar(50) DEFAULT NULL,
  `member2name` varchar(100) DEFAULT NULL,
  `member2roll` varchar(50) DEFAULT NULL,
  `member2dept` varchar(50) DEFAULT NULL,
  `member3name` varchar(100) DEFAULT NULL,
  `member3roll` varchar(50) DEFAULT NULL,
  `member3dept` varchar(50) DEFAULT NULL,
  `member4name` varchar(100) DEFAULT NULL,
  `member4roll` varchar(50) DEFAULT NULL,
  `member4dept` varchar(50) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `alternativephone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alternativeemail` varchar(100) DEFAULT NULL,
  `transectionid` varchar(50) DEFAULT NULL,
  `transectionimg` varchar(1000) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `remark` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `sociallinks` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `iconname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `sponsors2018` (
  `id` int(10) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `website` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contact2018`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contents`
  ADD PRIMARY KEY (`slug`);

ALTER TABLE `event2018`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `participance2018`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sponsors2018`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE `contact2018`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE `event2018`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
ALTER TABLE `participance2018`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sociallinks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sponsors2018`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;


INSERT INTO `contents` (`slug`, `content`) VALUES
('copyright_text', 'All Â© Received by EEE BAUST'),
('countdown', '0'),
('results', 'http://localhost/eeeday/file/schedule/techhunt_2017_schedule_v1.pdf'),
('schedule', 'http://localhost/eeeday/file/schedule/techhunt_2017_schedule_v1.pdf');
