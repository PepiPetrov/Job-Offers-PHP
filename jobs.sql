-- База данни: `jobs`
-- Структура на таблица `jobs`

CREATE TABLE `jobs` (
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Company` text NOT NULL,
  `Salary` float NOT NULL,
  `Date` text NOT NULL,
  `Image` text NOT NULL,
  `Location` text NOT NULL,
  `Prof` text NOT NULL
)

--
-- Схема на данните от таблица `jobs`
--

INSERT INTO `jobs` (`Title`, `Description`, `Company`, `Salary`, `Date`, `Image`, `Location`, `Prof`) VALUES
('a', 'a', 'a', 0, '2021-04-01 17:58:12', 'a', 'a', 'a'),
('b', 'b', 'b', 0, '2021-04-01 18:03:04', 'b', 'b', 'b');