-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-18 09:24:34
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `112-bs5-crud`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `text`, `sh`) VALUES
(1, '12111253', 0),
(2, '546546132', 0),
(9, '12111253', 0),
(11, '1232354', 0),
(12, '12111253', 1),
(15, 'aaaaaaaa', 1),
(16, 'adfasfsf', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `surname`, `name`, `acc`, `pw`) VALUES
(1, '', '', '123', '123'),
(2, '', '', 'abc', '123'),
(4, '', '', 'adfasfas', '1234'),
(5, 'adfasfs', 'dasdfas', 'adfasdf', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) UNSIGNED NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2023-12-19 頁尾版權~');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `sh`) VALUES
(1, '01C05.gif', 1),
(3, '01D06.jpg', 1),
(4, '01D01.jpg', 1),
(5, '01D04.jpg', 0),
(6, '01D01.jpg', 1),
(7, '01D06.jpg', 1),
(8, '01D10.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `sh`, `menu_id`) VALUES
(13, '管理登入', 'index.php', 1, 0),
(20, '網站首頁', 'index.php', 1, 0),
(21, '更多內容', '?do=index.php', 1, 20);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `img`, `sh`) VALUES
(1, '01C04.gif', 1),
(2, '01C01.gif', 0),
(3, '01C02.gif', 0),
(5, '01C03.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `good` int(10) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `total` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `good`, `sh`, `total`, `date`) VALUES
(1, '綠意盎然！蔬食珍煮義式燉飯', '我們誠摯地向您推薦全新的蔬食珍煮義式燉飯，融合了多款新鮮時令蔬菜和優質橄欖油。這道燉飯不僅令人垂涎，更提供豐富的營養素，是您追求健康美食的最佳選擇。讓您在每一口中感受到綠色的清新與健康的美味。\r\n', 0, 1, 23, '2023-01-15'),
(2, '蔬食與肉食的融合！黑椒蒜香牛排配燉蔬菜', '迎接全新的融合美味！我們為您帶來黑椒蒜香牛排，搭配精心燉煮的時令蔬菜。牛柳扒以黑椒與蒜香烹調，肉質鮮嫩多汁，與燉蔬菜的搭配更是天衣無縫。一份融合蔬食與肉食的美味饗宴，滿足您對豐富口感的渴望。\r\n\r\n', 0, 1, 8, '2023-03-08'),
(3, '健康知識講座!每週六下午2:00，養生專家為您解惑！', '每週六下午2點，我們邀請到養生專家舉辦健康知識講座！專家將分享營養飲食、生活習慣等方面的實用知識，讓您更了解健康養生之道。參加講座的朋友還可獲得免費養生食材試吃券，請提前報名參加，共同追求健康生活！\r\n\r\n', 0, 1, 42, '2023-05-20'),
(4, '蔬食之樂！花彩沙拉配橙香醬汁', '揮別沉悶的蔬食印象，我們引入了花彩沙拉，結合了多種色彩繽紛的蔬菜，搭配清新的橙香醬汁。這不僅是一份色香味俱佳的美食饗宴，更是健康生活的代表。品味蔬食之樂，感受每一口的清新活力！\r\n', 0, 1, 15, '2023-07-04'),
(5, '健康料理工作坊，免費學習美食烹飪技巧！', '我們誠摯地邀請您參加我們的健康料理工作坊！活動中，專業廚師將親自示範製作多款美味健康的蔬食與肉食料理，並分享烹飪技巧。參與者不僅可品嚐美食，更有機會免費學習料理的實用技巧。名額有限，請儘早報名參加，一同探索美味與健康的無限可能！\r\n\r\n', 0, 1, 37, '2023-09-12'),
(6, '燻香之選！蔬食堅果燻烤義大利麵', '追求健康卻不捨美味？我們精心打造的蔬食堅果燻烤義大利麵絕對能滿足您的需求。新鮮的蔬菜、堅果的香脆口感，以及微煙燻的獨特風味，讓您在每一口中感受到健康與美味的完美平衡。\r\n', 0, 1, 5, '2023-11-03'),
(7, '健康生活節，滿額送好禮！', '為慶祝健康生活節，我們推出滿額送好禮的精彩活動！凡在活動期間內訂購任何美味餐點，滿額即可獲得精心挑選的健康好禮。好禮包含有機食材、營養補充品等，為您的健康生活增添更多元的元素。趕快參與活動，一同享受美味與健康的同步呈現！\r\n\r\n', 0, 1, 29, '2024-01-28');

-- --------------------------------------------------------

--
-- 資料表結構 `sub_vote`
--

CREATE TABLE `sub_vote` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `vote` int(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `sub_vote`
--

INSERT INTO `sub_vote` (`id`, `title`, `img`, `text`, `vote`, `sub_id`, `sh`) VALUES
(1, '特級蔔萄', 'grapes-3550733_640.jpg', '品味無比的特級葡萄，風味濃郁、口感豐富，來自精心挑選的優質葡萄園，每一口都是尊榮的享受。', 5, 1, 1),
(2, '番茄', 'tomatoes-5356_640.jpg', '色彩豐富的蕃咖，營養豐富。烹調多變，不同料理方式都散發著獨特風味，滿足您的美食期待。', 2, 1, 1),
(3, '磨菇', 'mushrooms-389421_640.jpg', '精選新鮮磨菇，營養豐富，口感鮮嫩。烹調多樣化，滿足您的味蕾。健康的選擇，每一道料理都更美味。', 4, 3, 1),
(4, '麥子', 'wheat-865152_640.jpg', '純正的麥子，營養價值高，糙米質感。經嚴格篩選，確保品質優良。為您的飲食增添天然的營養力量。', 0, 2, 0),
(5, '咖啡豆', 'coffee-beans-1291656_640.jpg', '精選高品質咖啡豆，風味濃郁香醇。經精心烘焙，每一口都是對品味的追求。享受純正咖啡的悠閒時光。', 4, 1, 1),
(6, '胡蘿蔔', 'carrots-673184_640.jpg', '新鮮多汁的胡蘿蔔，富含維生素與纖維，為您的健康提供天然的營養源。美味色香，打造健康生活。', 1, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(2, 'bowl-1850039.jpg', '7889614', 0),
(8, 'bowl-1850039.jpg', '主圖', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 267);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `sub_vote`
--
ALTER TABLE `sub_vote`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `sub_vote`
--
ALTER TABLE `sub_vote`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
