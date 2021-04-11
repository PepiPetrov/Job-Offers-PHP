--
-- База данни: `jobs`
--


--
-- Структура на таблица `current`
-- Таблицата съдържа потребителското име и парола на текущия потребител
--

CREATE TABLE `current` (
  `Username` text NOT NULL,
  `Pass` text NOT NULL
)

-- --------------------------------------------------------

--
-- Структура на таблица `jobs`
-- Съдържа обявите за работа
--

CREATE TABLE `jobs` (
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Company` text NOT NULL,
  `Salary` text NOT NULL,
  `Date` text NOT NULL,
  `Image` text NOT NULL,
  `Location` text NOT NULL,
  `Prof` text NOT NULL,
  `Site` text NOT NULL,
  `Creator` text NOT NULL
)
-- --------------------------------------------------------

--
-- Структура на таблица `users`
-- Съдържа потребителска информация
--

CREATE TABLE `users` (
  `Username` text NOT NULL,
  `Pass` text NOT NULL
)