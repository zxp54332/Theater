-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-27 15:27:43
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `theater`
--

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `_id` int(255) NOT NULL,
  `_sid` int(255) NOT NULL,
  `_number` int(255) NOT NULL,
  `_seat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `book`
--

INSERT INTO `book` (`_id`, `_sid`, `_number`, `_seat`) VALUES
(1, 1, 1498561887, 3),
(2, 1, 1498561887, 34),
(3, 1, 1498561887, 25),
(4, 1, 1498561887, 35);

-- --------------------------------------------------------

--
-- 資料表結構 `booker`
--

CREATE TABLE `booker` (
  `_id` int(255) NOT NULL,
  `_bookid` int(255) NOT NULL,
  `_name` varchar(255) NOT NULL,
  `_phone` varchar(255) NOT NULL,
  `_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `booker`
--

INSERT INTO `booker` (`_id`, `_bookid`, `_name`, `_phone`, `_email`) VALUES
(1, 1, 'aaaa', '0925620889', 'b10321040@yuntech.edu.tw'),
(2, 1, 'aaa', '0925620889', 'b10321040@yuntech.edu.tw'),
(3, 1, 'aaa', '0925620889', 'b10321040@yuntech.edu.tw'),
(4, 1, 'aa', '0925620889', 'b10321040@yuntech.edu.tw');

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `_id` int(255) NOT NULL,
  `_name` varchar(255) NOT NULL,
  `_img` varchar(255) NOT NULL,
  `_video` varchar(255) NOT NULL,
  `_releasetime` int(255) NOT NULL,
  `_release_company` varchar(255) NOT NULL,
  `_language` varchar(255) NOT NULL,
  `_series` varchar(255) NOT NULL,
  `_genric` varchar(255) NOT NULL,
  `_director` varchar(255) NOT NULL,
  `_actor` varchar(255) NOT NULL,
  `_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `movie`
--

INSERT INTO `movie` (`_id`, `_name`, `_img`, `_video`, `_releasetime`, `_release_company`, `_language`, `_series`, `_genric`, `_director`, `_actor`, `_time`) VALUES
(1, '功夫3D', '功夫3D.jpg', 'https://www.youtube.com/embed/IdJVVVstGoo', 1095091200, '星輝海外有限公司\r\n中國電影集團公司第四製片分公司\r\n中國電影合作製片公司\r\n哥倫比亞電影製作（亞洲）有限公司\r\n華誼兄弟太合影視投資有限公司', '中文', '', '', '	周星馳', '周星馳\r\n元華\r\n元秋\r\n陳國坤\r\n林子聰\r\n黃聖依\r\n釋行宇', '99分'),
(2, '神偷奶爸3', '神偷奶爸3.jpg', 'https://www.youtube.com/embed/Eg6Tk3fz1Os', 1498665600, ' 	照明娛樂 環球動畫工作室', ' 	英語', '', '', ' 	皮爾·考芬 克里斯·雷納德', ' 	史提夫·卡爾 克莉絲汀·薇格 特雷·帕克 米蘭達·科斯格羅夫 黛娜·蓋兒 內夫·沙雷爾 史提夫·庫甘 茱莉·安德魯絲 珍妮·斯蕾特 皮爾·考芬', '96分'),
(3, '蜘蛛人: 返校日', '蜘蛛人.jpg', 'https://www.youtube.com/embed/-OaZ0ew7KWM', 1499184000, '索尼', '英文', '', '', 'Jon Watts', '湯姆霍蘭德 Tom Holland(美國隊長3:英雄內戰)、瑪莉莎托梅 Marisa Tomei(大賣空)、小勞勃道尼 Robert Downey Jr.(美國隊長3:英雄內戰)、米高基頓 Michael Keaton(驚爆焦點)', '133分'),
(4, '神鬼奇航5: 死無對證', '神鬼奇航.jpg', 'https://www.youtube.com/embed/qtZno7k4CAQ', 1495555200, '迪士尼', '英文', '', '', 'Joachim Rønning、Espen Sandberg', '強尼戴普 Johnny Depp(神鬼奇航4: 幽靈海)、傑佛瑞羅許 Geoffrey Rush(神鬼奇航4: 幽靈海)、布蘭登斯威茲 Brenton Thwaites(記憶傳承人)、哈維爾巴登 Javier Bardem(007空降危機)、奧蘭多布魯 Orlando Bloom(神鬼奇航)、綺拉奈特莉 Keira Knightley(神鬼奇航)、凱亞絲柯黛蘭莉歐 Kaya Scodelario(移動迷宮)', '129分'),
(5, '亞瑟: 王者之劍', '亞瑟.jpg', 'https://www.youtube.com/embed/_t2EGd8s23g', 1494518400, '華納', '英文', '', '', '蓋瑞奇 Guy Ritchie', '查理漢納 Charlie Hunnam(環太平洋)、裘德洛 Jude Law(福爾摩斯)、艾登吉蘭 Aidan Gillen(搖滾青春戀習曲)、迪蒙杭蘇 Djimon Hounsou(泰山傳奇)、艾瑞克巴納 Eric Bana(絕命救援)、大衛貝克漢 David Beckham', '');

-- --------------------------------------------------------

--
-- 資料表結構 `movietime`
--

CREATE TABLE `movietime` (
  `_id` int(255) NOT NULL,
  `_sid` int(255) NOT NULL,
  `_time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `movietime`
--

INSERT INTO `movietime` (`_id`, `_sid`, `_time`) VALUES
(1, 1, 1498788600),
(2, 1, 1498800600),
(3, 2, 1498791600),
(4, 2, 1498803000),
(5, 3, 1498802400),
(6, 3, 1498789200),
(7, 4, 1498806000),
(8, 4, 1498798200),
(9, 5, 1498809600),
(10, 5, 1498821000);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`_id`);

--
-- 資料表索引 `booker`
--
ALTER TABLE `booker`
  ADD PRIMARY KEY (`_id`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`_id`);

--
-- 資料表索引 `movietime`
--
ALTER TABLE `movietime`
  ADD PRIMARY KEY (`_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `book`
--
ALTER TABLE `book`
  MODIFY `_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `booker`
--
ALTER TABLE `booker`
  MODIFY `_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `movie`
--
ALTER TABLE `movie`
  MODIFY `_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `movietime`
--
ALTER TABLE `movietime`
  MODIFY `_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
