
CREATE TABLE IF NOT EXISTS chandge (
  `n` int(10) NOT NULL AUTO_INCREMENT,
  `i` varchar(255) NOT NULL,
  `v` varchar(14) DEFAULT NULL,
  `vv` varchar(255) NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `r` text NOT NULL,
  `vd` text,
  `u` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='' AUTO_INCREMENT=550 UNION

CREATE TABLE IF NOT EXISTS chat (
  n int(6) NOT NULL AUTO_INCREMENT,
  nick varchar(20) NOT NULL,
  vrema varchar(20) NOT NULL,
  soobshenie text NOT NULL,
  PRIMARY KEY (n)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='' AUTO_INCREMENT=5 ;



CREATE TABLE IF NOT EXISTS `domens` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `d` varchar(255) NOT NULL,
  `l` text NOT NULL,
  `q` text NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Домены сайтов' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `errors`
--

CREATE TABLE IF NOT EXISTS `errors` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `whois` varchar(20) NOT NULL,
  `kod` text NOT NULL,
  `error` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица ошибок mysql и php и тд' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `esli_to`
--

CREATE TABLE IF NOT EXISTS `esli_to` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `podl1` varchar(100) NOT NULL,
  `skaz1` varchar(100) NOT NULL,
  `podl2` varchar(100) NOT NULL,
  `skaz2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=30088 ;

-- --------------------------------------------------------

--
-- Структура таблицы `esli_to2`
--

CREATE TABLE IF NOT EXISTS `esli_to2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `podl1` varchar(100) NOT NULL,
  `skaz1` varchar(100) NOT NULL,
  `podl2` varchar(100) NOT NULL,
  `skaz2` varchar(100) NOT NULL,
  `obs` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `obs` (`obs`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2939 ;

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `n` int(8) NOT NULL AUTO_INCREMENT,
  `f` varchar(255) NOT NULL,
  `p` varchar(255) NOT NULL,
  `r` varchar(255) DEFAULT NULL,
  `m` varchar(255) DEFAULT NULL,
  `md5` varchar(32) NOT NULL,
  `l` text NOT NULL,
  `chi` int(10) NOT NULL,
  UNIQUE KEY `p` (`p`),
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица файлов' AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Структура таблицы `fp`
--

CREATE TABLE IF NOT EXISTS `fp` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `f` varchar(40) NOT NULL,
  `kat` int(10) NOT NULL,
  `ch` int(10) NOT NULL,
  `s` varchar(100) NOT NULL,
  `l` text NOT NULL,
  `t` int(1) NOT NULL,
  PRIMARY KEY (`n`),
  UNIQUE KEY `f` (`f`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT=' Таблица PHP-функций' AUTO_INCREMENT=82 ;

-- --------------------------------------------------------

--
-- Структура таблицы `fp2`
--

CREATE TABLE IF NOT EXISTS `fp2` (
  `n` int(10) NOT NULL AUTO_INCREMENT,
  `f` varchar(255) NOT NULL,
  `ch` int(10) NOT NULL,
  `kod` text NOT NULL,
  `sostf` varchar(255) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Сосотавные функций PHP' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `z` varchar(255) NOT NULL,
  `d` text,
  `p` int(50) NOT NULL,
  `u` int(50) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Список функций' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `funktions_obuch`
--

CREATE TABLE IF NOT EXISTS `funktions_obuch` (
  `n` int(10) NOT NULL AUTO_INCREMENT,
  `i` varchar(255) NOT NULL,
  `vp` varchar(255) NOT NULL,
  `vip` varchar(255) NOT NULL,
  `r` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица функций PHP' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `h`
--

CREATE TABLE IF NOT EXISTS `h` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `t` varchar(20) NOT NULL,
  `l` text NOT NULL,
  `f` varchar(250) NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица языка HTML' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `httpist`
--

CREATE TABLE IF NOT EXISTS `httpist` (
  `n` int(10) NOT NULL AUTO_INCREMENT,
  `s` varchar(256) NOT NULL,
  `c` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таюлица сайтов' AUTO_INCREMENT=614 ;

-- --------------------------------------------------------

--
-- Структура таблицы `h_s`
--

CREATE TABLE IF NOT EXISTS `h_s` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `s` varchar(30) NOT NULL,
  `t` int(1) NOT NULL,
  `zl` text NOT NULL,
  `f` varchar(100) NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица свйств тегов HTML' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `import_news`
--

CREATE TABLE IF NOT EXISTS `import_news` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Слова' AUTO_INCREMENT=1657 ;

-- --------------------------------------------------------

--
-- Структура таблицы `import_rss`
--

CREATE TABLE IF NOT EXISTS `import_rss` (
  `n` int(100) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `lastlink` text NOT NULL,
  `nazvanie` varchar(50) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `iz4_php`
--

CREATE TABLE IF NOT EXISTS `iz4_php` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `ps` varchar(255) NOT NULL,
  `cv` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица синтаксической связи ме?' AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `iz4_php_spicok_deistvii`
--

CREATE TABLE IF NOT EXISTS `iz4_php_spicok_deistvii` (
  `nomer` int(20) NOT NULL AUTO_INCREMENT,
  `deistvie` varchar(255) NOT NULL,
  `kod` text NOT NULL,
  `dopol` varchar(255) NOT NULL,
  `vrema` varchar(14) NOT NULL,
  `ocenka` int(2) NOT NULL,
  PRIMARY KEY (`nomer`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица списка действий' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `kod_tags`
--

CREATE TABLE IF NOT EXISTS `kod_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tags` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `n` int(100) NOT NULL,
  `mesto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Тэги к коду' AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Структура таблицы `ludi`
--

CREATE TABLE IF NOT EXISTS `ludi` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `i` varchar(100) NOT NULL,
  `avt` int(4) NOT NULL,
  `inf` text,
  `ip` varchar(30) NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица людей' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `moral`
--

CREATE TABLE IF NOT EXISTS `moral` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `z` int(100) NOT NULL,
  `i` int(1) NOT NULL,
  `w` int(1) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица ценностей' AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Структура таблицы `moral_izm`
--

CREATE TABLE IF NOT EXISTS `moral_izm` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `z` varchar(255) NOT NULL,
  `p` int(50) NOT NULL,
  `d` text NOT NULL,
  `u` int(50) NOT NULL,
  `sc` text NOT NULL,
  `v` varchar(12) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица изменений задач' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `m_s_robots`
--

CREATE TABLE IF NOT EXISTS `m_s_robots` (
  `n` int(100) NOT NULL AUTO_INCREMENT,
  `strana` varchar(50) NOT NULL,
  `stoimost` int(100) NOT NULL,
  `god` datetime NOT NULL,
  `roditel` int(100) NOT NULL,
  `nazvanie` varchar(255) NOT NULL,
  `detali` text NOT NULL,
  `materiali` text NOT NULL,
  `instrumenti` text NOT NULL,
  `dathici` text NOT NULL,
  `pluci` text NOT NULL,
  `minuci` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `proiz_site` varchar(255) NOT NULL,
  `poroiz_email` varchar(255) NOT NULL,
  `poroiz_tele` varchar(255) NOT NULL,
  `opisanie` text NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `program_obes` text NOT NULL,
  `vn_typ` varchar(255) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='База данных роботов' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `m_users`
--

CREATE TABLE IF NOT EXISTS `m_users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `imya` varchar(40) NOT NULL,
  `familyia` varchar(40) NOT NULL,
  `nick` varchar(40) NOT NULL,
  `bday` datetime NOT NULL,
  `gorod` varchar(255) NOT NULL,
  `oblast` varchar(255) NOT NULL,
  `strana` varchar(255) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `d-telefon` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `site` varchar(255) NOT NULL,
  `polit` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `music` text NOT NULL,
  `films` text NOT NULL,
  `interest` text NOT NULL,
  `books` text NOT NULL,
  `citats` text NOT NULL,
  `o_sebe` text NOT NULL,
  `vuz` varchar(255) NOT NULL,
  `vuz_gv` int(100) NOT NULL,
  `vuz_g_ok` int(100) NOT NULL,
  `vuz_fakultet` varchar(255) NOT NULL,
  `vuz_kafedra` varchar(255) NOT NULL,
  `vuz_fo` int(100) NOT NULL,
  `vuz_status` varchar(100) NOT NULL,
  `school` varchar(255) NOT NULL,
  `school_gr` varchar(255) NOT NULL,
  `school_gv` int(100) NOT NULL,
  `school_gn` int(100) NOT NULL,
  `deyateln` text NOT NULL,
  `tvshow` text NOT NULL,
  `games` text NOT NULL,
  `stena` text NOT NULL,
  `friends` text NOT NULL,
  `zametki` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `groups` text NOT NULL,
  `zametkis` text NOT NULL,
  `prilos` text NOT NULL,
  `services` text NOT NULL,
  `photo_m` varchar(255) NOT NULL,
  `photo_s_mnoi` varchar(255) NOT NULL,
  `video_s_mnoi` varchar(255) NOT NULL,
  `nastroiki` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `s_polos` varchar(255) NOT NULL,
  `professiais` varchar(255) NOT NULL,
  `vsl` varchar(255) NOT NULL,
  `vsl_gn` int(100) NOT NULL,
  `vsl_gk` int(100) NOT NULL,
  `raboti_str` varchar(255) NOT NULL,
  `raboti_obl` varchar(255) NOT NULL,
  `raboti_gor` varchar(255) NOT NULL,
  `raboti` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Люди' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `o`
--

CREATE TABLE IF NOT EXISTS `o` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `o` varchar(4) NOT NULL,
  `t` int(5) NOT NULL,
  `c` int(4) NOT NULL,
  `p` int(8) NOT NULL,
  `w` int(5) NOT NULL,
  `r` int(5) NOT NULL,
  `l` int(5) NOT NULL,
  `v` int(5) NOT NULL,
  `vk` varchar(50) DEFAULT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица окончаний русского язык?' AUTO_INCREMENT=79 ;

-- --------------------------------------------------------

--
-- Структура таблицы `obuch_o`
--

CREATE TABLE IF NOT EXISTS `obuch_o` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `o` varchar(10) NOT NULL,
  `p` int(6) DEFAULT NULL,
  `k` varchar(50) NOT NULL,
  `t` int(10) NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица обучения таблицы оконча?' AUTO_INCREMENT=244 ;

-- --------------------------------------------------------

--
-- Структура таблицы `obuch_slova`
--

CREATE TABLE IF NOT EXISTS `obuch_slova` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `d` int(1) NOT NULL,
  `s` varchar(20) NOT NULL,
  `k` varchar(20) NOT NULL,
  `t` int(2) NOT NULL,
  `v` int(10) NOT NULL,
  `p` int(3) NOT NULL,
  `p1` int(6) NOT NULL,
  `o` varchar(100) DEFAULT NULL,
  `с` varchar(1000) NOT NULL,
  `i` varchar(100) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица кэша к slova_korni_typ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `p`
--

CREATE TABLE IF NOT EXISTS `p` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `op` int(15) NOT NULL,
  `s` varchar(20) NOT NULL,
  `t` int(5) NOT NULL,
  `c` int(4) NOT NULL,
  `p` int(8) NOT NULL,
  `w` int(5) NOT NULL,
  `r` int(5) NOT NULL,
  `l` int(5) NOT NULL,
  `v` int(5) NOT NULL,
  `ss` text NOT NULL,
  `i` varchar(100) NOT NULL,
  `kod` text NOT NULL,
  `sinonyms` text NOT NULL,
  PRIMARY KEY (`n`),
  UNIQUE KEY `s` (`s`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT=' Первая таблица проверки (местои?' AUTO_INCREMENT=665 ;

-- --------------------------------------------------------

--
-- Структура таблицы `php_p`
--

CREATE TABLE IF NOT EXISTS `php_p` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `p` varchar(20) NOT NULL,
  `l` text NOT NULL,
  UNIQUE KEY `p` (`p`),
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица переменных PHP' AUTO_INCREMENT=592 ;

-- --------------------------------------------------------

--
-- Структура таблицы `php_s`
--

CREATE TABLE IF NOT EXISTS `php_s` (
  `n` int(10) NOT NULL AUTO_INCREMENT,
  `s` varchar(255) DEFAULT NULL,
  `p` int(20) DEFAULT NULL,
  `l` text,
  PRIMARY KEY (`n`),
  UNIQUE KEY `s` (`s`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Структура таблицы `php_sviazi`
--

CREATE TABLE IF NOT EXISTS `php_sviazi` (
  `n` int(100) NOT NULL AUTO_INCREMENT,
  `nona1` int(100) NOT NULL,
  `nope1` int(100) NOT NULL,
  `noto1` int(100) NOT NULL,
  `nofa1` int(100) NOT NULL,
  `nona2` int(100) NOT NULL,
  `nope2` int(100) NOT NULL,
  `noto2` int(100) NOT NULL,
  `nofa2` int(100) NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Связи переменных в php' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `pk`
--

CREATE TABLE IF NOT EXISTS `pk` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `p` varchar(6) NOT NULL,
  `z` varchar(100) NOT NULL,
  `imia` varchar(3) NOT NULL,
  `dead` int(1) DEFAULT NULL,
  `r` text NOT NULL,
  `fi` varchar(2) DEFAULT NULL,
  `n_1` int(20) NOT NULL,
  `v_1` int(20) NOT NULL,
  `n_2` int(20) NOT NULL,
  `v_2` int(20) NOT NULL,
  `n_3` int(20) NOT NULL,
  `v_3` int(20) NOT NULL,
  `n_4` int(20) NOT NULL,
  `v_4` int(20) NOT NULL,
  `n_5` int(20) NOT NULL,
  `v_5` int(20) NOT NULL,
  `n_6` int(20) NOT NULL,
  `v_6` int(20) NOT NULL,
  `prerivanie` int(100) DEFAULT NULL,
  `log` varchar(255) NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Общеинформационные переменные' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `posl_files`
--

CREATE TABLE IF NOT EXISTS `posl_files` (
  `n` int(20) NOT NULL,
  `p` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Последние файлы';

-- --------------------------------------------------------

--
-- Структура таблицы `slova_korni_typ`
--

CREATE TABLE IF NOT EXISTS `slova_korni_typ` (
  `n` int(6) NOT NULL AUTO_INCREMENT,
  `op` int(15) DEFAULT NULL,
  `k` varchar(20) DEFAULT NULL,
  `s` varchar(20) DEFAULT NULL,
  `rod` varchar(1) DEFAULT NULL,
  `t` int(1) DEFAULT NULL,
  `v` int(5) NOT NULL,
  `suffsv` varchar(255) DEFAULT NULL,
  `prisv` varchar(255) NOT NULL,
  `sinonyms` text NOT NULL,
  `ss` text,
  `l` text,
  `i` varchar(100) DEFAULT NULL,
  `kod` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица русских слов' AUTO_INCREMENT=49220 ;

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `p` text NOT NULL,
  `s` int(10) NOT NULL,
  KEY `s` (`s`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `test_r`
--

CREATE TABLE IF NOT EXISTS `test_r` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `test` varchar(100) NOT NULL,
  `testr` text NOT NULL,
  `test2` varchar(100) NOT NULL,
  `test3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Тест лоигиков' AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Структура таблицы `unikp`
--

CREATE TABLE IF NOT EXISTS `unikp` (
  `n` int(20) NOT NULL AUTO_INCREMENT,
  `p` int(10) NOT NULL,
  `ui` varchar(255) NOT NULL,
  `v` varchar(12) NOT NULL,
  `i` varchar(255) NOT NULL,
  `o` text NOT NULL,
  PRIMARY KEY (`n`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 COMMENT='Таблица памяти уникальной =)' AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `zakonomernosti`
--

CREATE TABLE IF NOT EXISTS `zakonomernosti` (
  `n` int(15) NOT NULL AUTO_INCREMENT,
  `uid` int(30) NOT NULL,
  `avt` int(30) NOT NULL,
  `zak` text NOT NULL,
  KEY `n` (`n`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Таблица закономерностей' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `zakonomernosti2`
--

CREATE TABLE IF NOT EXISTS `zakonomernosti2` (
  `n` int(30) NOT NULL,
  `avt` int(4) NOT NULL,
  `kod` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COMMENT='Обучение закономерностям';

