-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bhemvineyard
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `optionID` varchar(10) NOT NULL,
  `section` varchar(60) NOT NULL,
  `type` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (15,'1','front_page_update_banner','content','<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n&nbsp;<br><p class=\"MsoNoSpacing\"><font size=\"6\"><span style=\"-webkit-text-size-adjust: 100%;\"><b>Next winery opening is 7/2 &amp; 7/3 followed by 7/9 &amp; 7/10/2016 from 1-5pm!!</b></span></font></p><p class=\"MsoNoSpacing\"><font size=\"6\"><span style=\"-webkit-text-size-adjust: 100%;\"><b><br></b></span></font></p><p class=\"MsoNoSpacing\"><font size=\"6\"><span style=\"-webkit-text-size-adjust: 100%;\"><b>Listed below and in the CT Wine Passport are the correct dates winery&nbsp;is open.</b></span></font><font size=\"6\"><span style=\"-webkit-text-size-adjust: 100%;\"><b><br></b></span></font></p><p class=\"MsoNoSpacing\"><br>\r\n<b style=\"mso-bidi-font-weight:normal\"><u><span style=\"font-size:26.0pt\">2016\r\nWine Line up</span></u></b><span style=\"font-size:18.0pt\"><br style=\"mso-special-character:&#10;line-break\">\r\n<br style=\"mso-special-character:line-break\">\r\n</span></p>\r\n\r\n<p class=\"MsoNoSpacing\"><span style=\"font-size:18.0pt\">Cayuga White<font size=\"3\"> - 100% estate produced</font><font size=\"5\"><br></font></span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:18.0pt\"><font size=\"5\">The CrÃ¨</font></span><font size=\"5\">che</font><font size=\"3\"> - 100% estate grown St. Croix grapes</font><font size=\"3\"> </font><br>\r\n<font size=\"5\">Holiday Cheer</font><font size=\"3\">- an ancient old vine Zinfandel. This has a&nbsp;<span style=\"mso-tab-count:1\"></span>beautiful holiday label designed by a local\r\nartist</font><br>\r\n<font size=\"5\">Ros</font><span lang=\"EN\" style=\"font-size:18.0pt;mso-ansi-language:EN\"><font size=\"5\">Ã©</font></span><span lang=\"EN\" style=\"font-size:18.0pt;mso-ansi-language:EN\"><font size=\"5\"><font size=\"2\"><font size=\"3\">- 2015 Huge hit!! &nbsp; &nbsp;100% estate grown, a blend of 3 wines produced from St. Croix, Traminette and Cayuga grapes<br></font></font></font></span></p><p class=\"MsoNoSpacing\"><font size=\"5\">Christmas Town Red (Santaâ€™s Helper)&nbsp;</font><font size=\"2\">- a blend\r\nof California Merlot and Cabernet&nbsp;<span style=\"mso-tab-count:1\"></span>Sauvignon\r\ngrapes. This wine is returning to the lineup. <span style=\"mso-tab-count:1\"> </span>Early\r\nindications proven correct. It is a delicious </font><font size=\"2\">wine!</font><span style=\"font-size:18.0pt\"><br></span></p><p class=\"MsoNoSpacing\"><span style=\"font-size:18.0pt\">TLC<font size=\"3\"><b> </b>- 100 % locally grown apples by March Farms, a delicious apple<span style=\"mso-tab-count:1\"> </span>wine</font></span></p><p class=\"MsoNoSpacing\"><font size=\"5\">Old St Nicholas -</font><font size=\"3\">&nbsp;Traminette&nbsp;</font><span style=\"font-size: medium; -webkit-text-size-adjust: 100%;\">&nbsp;- a German Gerwurztraminer style white wine, &nbsp;Estate produced. This is the wine for Brewers and</span><span style=\"font-size: medium; -webkit-text-size-adjust: 100%;\">&nbsp;Marriageable Maidens&nbsp; :)</span></p><p class=\"MsoNoSpacing\"><span style=\"font-size: medium; -webkit-text-size-adjust: 100%;\">2015 was a good growing season. Wines are wonderful!!</span></p><p class=\"MsoNoSpacing\"><span style=\"font-size: medium; -webkit-text-size-adjust: 100%;\"><br></span></p><p class=\"MsoNoSpacing\"><font size=\"3\"><i><b>2016 hours of operation:&nbsp;&nbsp;</b></i></font><font size=\"3\"><i><b>&nbsp;Sat &amp; Sun from 1pm to 5pm on&nbsp;</b></i></font><font size=\"3\"><b><i>May 28 and 29 followed by June 4th and 5th. We will be opened&nbsp;</i></b></font><b><i><font size=\"3\">each weekend in July, Aug, Sept, Oct &amp; Dec. In November open 11/5 and 11/6. Call to make special&nbsp;arrangements!</font></i></b><br></p><p class=\"MsoNoSpacing\"><br></p>																																									','2013-07-24 00:24:58'),(16,'','home','content','<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br>					<b class=\"lead\" style=\"font-size:2em;\">Welcome,</b><br>	<br>	<p class=\"lead\" style=\"font-size:1.5em\">		Whether you are visiting the winery for the first time or are already familiar with our wines, I sincerely want to thank you for visiting today and welcome you to our home, vineyard and winery. Our journey from home winemaking to opening a small farm winery began in 2004. My wife Barbara and I enrolled in a winemaking course at the local community college. For the past 10 years we have been making wine and sharing it with our family and friends. Additionally, it has become an annual Christmas tradition to bless the family and the Nouveau wines made from the most recent harvest while everyone is gathered for the holiday meal. We are excited to share our vineyard and welcome you as part of our extended family to enjoy our wine, the ancient symbol of community, prosperity, and well being.</p>		<b class=\"lead\" style=\"font-size:1.5em\">Thanks,<br>		<i class=\"lead\" style=\"font-size:1em\">Joe Riordan</i>				</b>														','2013-07-31 00:06:48'),(17,'','about','content','<br>\r\n		Please update \"About Page\" content!	','0000-00-00 00:00:00'),(18,'','contact','content','<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br><h2>Contact</h2><br><br><h3>Joe Riordan</h3><h3>Bethlehem Vineyard and Winery, LLC</h3><p><br></p><p><font size=\"6\">46 Town Line Road</font><br></p><p><font size=\"6\"><span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"lime\">PO </span><span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"yellow\">Box </span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"magenta\">193</span></span></span></font></p><h3>Bethlehem, CT 06751</h3><br><br><h3>Phone: (203) 266 - 5024</h3><h3>E-Mail: bethlehemvineyard@yahoo.com (preferred contact)</h3><br><br><br><br><h2>Hours</h2><br><br><p class=\"lead\">	Open only the first full weekend of each month Saturday and Sunday \r\n\r\n\r\n\r\n\r\n\r\nSeason opener May 28, 2016!!\r\n\r\n\r\n\r\nListed below and in the CT Wine Passport are the correct dates winery is open.\r\n\r\n\r\n2016 Wine Line up\r\n\r\n\r\nCayuga White - 100% estate produced\r\n\r\nThe CrÃ¨che - 100% estate grown St. Croix grapes \r\nHoliday Cheer- an ancient old vine Zinfandel. This has a beautiful holiday label designed by a local artist\r\nRosÃ©- 2015 Huge hit!!    100% estate grown, a blend of 3 wines produced from St. Croix, Traminette and Cayuga grapes\r\n\r\nChristmas Town Red (Santaâ€™s Helper) - a blend of California Merlot and Cabernet Sauvignon grapes. This wine is returning to the lineup. Early indications proven correct. It is a delicious wine!\r\n\r\nTLC - 100 % locally grown apples by March Farms, a delicious apple wine\r\n\r\nOld St Nicholas - Traminette  - a German Gerwurztraminer style white wine,  Estate produced. This is the wine for Brewers and Marriageable Maidens  :)\r\n\r\n2015 was a good growing season. Wines are wonderful!!</p><p class=\"lead\"><br><font size=\"3\" style=\"line-height: 18px;\"><i><b>2016 hours of operation:&nbsp;&nbsp;</b></i></font><font size=\"3\" style=\"line-height: 18px;\"><i><b>&nbsp;Sat &amp; Sun from 1pm to 5pm on&nbsp;</b></i></font><font size=\"3\" style=\"line-height: 18px;\"><b><i>May 28 and 29 followed by June 4th and 5th. We will be opened&nbsp;</i></b></font><b style=\"line-height: 18px; font-size: medium;\"><i>each weekend in July, Aug, Sept, Oct &amp; Dec. In November open 11/5 and 11/6.</i></b><br></p>	<br>	<br>							','2013-07-31 00:08:16'),(19,'','directions','content','<br>\r\n		<br>\r\n		<br>				<br>				<br>				<br><h3>46 Town Line Rd, Bethlehem CT, 06751</h3><br>				<p class=\"lead\">Open only the first full weekend of each month Saturday and Sunday 12-5pm, July through November. Open first 2 weekends in December. Call to make special arrangements.</p> 	<p class=\"lead\">Winery is 6.4 miles from center of Litchfield, CT. Go south on South St/CT-63 for 4 miles. Turn right onto East St/CT-109 and go 1.1 miles. Turn left onto CT-61/South St and go 1.1 miles. Turn left onto Town Line Rd. The Bethlehem Fair Grounds will be on your right, a golf green on the left. Go 0.2 miles. Vineyard driveway is 3rd on right flanked by evergreens.</p>														','2013-07-31 00:08:39');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contentID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prettyName` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,15,'front_page_update_banner','Front Page Updates Banner','boolean','1');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-30 17:17:13
