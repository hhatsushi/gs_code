-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019 年 2 月 07 日 08:47
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `book_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `recommended` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `book_name`, `author`, `url`, `comment`, `recommended`, `indate`) VALUES
(2, '関ヶ原（上・中・下）', '司馬遼太郎', 'aaa@a.co.jp', '歴史小説の代表的作品で組織論、リーダーシップ論の参考になる本', '★★★★', '2016-01-23 15:25:49'),
(3, '勝負哲学', '岡田武史、羽生善治', 'bbb@b.co.jp', '異なる分野から組織論、リーダーシップ論を論じ、ビジネスでも参考になること大', '★★★', '2017-01-23 15:31:05'),
(4, 'ビジネス大変身！ポスト資本主義１１社の決断', '藤吉雅春', 'ccc@c.co.jp', 'ビジネスケース分析本としては相当クオリティが高く、参考になる点多い', '★★★', '2018-01-23 15:39:03'),
(5, 'ビジネスモデル症候群', '和波俊久', 'ddd@d.co.jp', '敬愛するメンターの方が書いた本で、起業家が回避すべき点を丁寧に説いている', '★★★★', '2018-06-23 15:43:35'),
(6, '多眼思考', 'ちきりん', 'eee@e.co.jp', 'Twitterのつぶやきを纏めた本だが、示唆に富む名言が満載', '★★★', '2018-12-23 15:46:09'),
(7, 'これからの経営に必要な４１のこと', '岩田松雄', 'fff@f.co.jp', '数少ない日本のプロ経営者の方が書いた、ユニークかつ愛情に満ちた経営哲学', '★★★★', '2019-01-19 15:51:46'),
(8, 'CRISPR 究極の遺伝子編集技術の発見', 'ジェニファー・ダウドナ', 'ggg@g.co.jp', 'CRISPR開発者自身の著で、ゲノム編集とどう向き合うかを考えるきっかけを得る重要な本 ', '★★★', '2019-01-20 15:56:06'),
(9, 'ぼくたちは習慣で、できている', '佐々木典士', 'hhh@h.co.jp', 'ミニマリストの第一人者が書いた体験論、自分はこの本で飲酒をやめた ', '★★★', '2019-01-21 15:59:58'),
(10, 'きみの友だち', '重松清', 'iii@i.co.jp', '重松作品でもっとも好きな作品ですが、電車の中では読まない方がいい　笑 ', '★★★★', '2019-01-22 16:02:34'),
(11, 'サッカーの憂鬱', '熊田達規', 'jjj@j.co.jp', 'マンガながら人生で学ぶヒントがたくさんあり、多くのスポーツ好きに読んで欲しい ', '★★★', '2019-01-23 16:05:07'),
(12, 'いちばんやさしいPHPの教本', '柏岡秀男', 'kkk@k.co.jp', 'PHPの学習におすすめ', '★★', '2019-01-24 17:19:24'),
(14, 'ロビンソンクルーソー', 'ダニエル・デフォー', 'yyy@y.co.jp', 'まだ読了してません', '★', '2019-02-06 11:31:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
