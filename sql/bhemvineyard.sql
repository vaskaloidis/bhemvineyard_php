-- MySQL dump 10.13  Distrib 5.5.19, for Linux (x86_64)
--
-- Host: 68.178.142.109    Database: bhemvineyard
-- ------------------------------------------------------
-- Server version	5.0.96-log

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
  `id` int(11) NOT NULL auto_increment,
  `optionID` varchar(10) NOT NULL,
  `section` varchar(60) NOT NULL,
  `type` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (15,'1','front_page_update_banner','content','<br>\r\n		<br>\r\n		<br>\r\n		<b>Next and last winery opening in 2014:</b>&nbsp; December 6th &amp; 7th from 1-5pm. We will not be open every weekend between Thanksgiving and New Years<br>\r\n		<br><font size=\"4\">Wine release news: &nbsp; &nbsp;&nbsp; <font size=\"5\">3 wines available for holiday gifts <br><br></font></font><b><font size=\"4\"><font size=\"5\">Holiday Cheer</font></font></b> an ancient old vine zinfandel. This has a beautiful holiday label designed by a local artist. <b><font size=\"5\"><br>TLC </font></b>a delicious apple wine made from local apples. <b><font size=\"5\"><br>ROSE</font></b> a blend of 2 wines produced from estate grown grapes St Croix and Traminette.<br>\r\n		<br><div><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cayuga &amp; Santa\'s Helper &amp; The Creche - sold out <br></b><br><div><div><br></div><div><span style=\"-webkit-text-size-adjust: 100%;\">Exciting this year is the introduction of four (4) new wines. Some of you had the privilege of tasting the St Croix red wine directly out of the tank last Autumn.The second red wine being crafted for you is a California ancient old vine zinfandel named \"Holiday Cheer\" which is the actual title of an artwork purchased from a local young artist that, hopefully, you will get a chance to meet this summer. The third new wine is an apple wine made from locally harvested apples from March Farm, a Bethlehem, CT destination. The fourth new wine is a Rose which is&nbsp; a blend of estate grown St Croix and Traminette grapes. This is a limited production wine (6 cases).</span><br><br>We look forward to seeing you!!<br><br>&nbsp;<br><br><br><br>						</div></div>	</div>													','2013-07-24 00:24:58'),(16,'','home','content','<br>\r\n		<br>\r\n		<br>\r\n		<br>					<b class=\"lead\" style=\"font-size:2em;\">Welcome,</b><br>	<br>	<p class=\"lead\" style=\"font-size:1.5em\">		Whether you are visiting the winery for the first time or are already familiar with our wines, I sincerely want to thank you for visiting today and welcome you to our home, vineyard and winery. Our journey from home winemaking to opening a small farm winery began in 2004. My wife Barbara and I enrolled in a winemaking course at the local community college. For the past 10 years we have been making wine and sharing it with our family and friends. Additionally, it has become an annual Christmas tradition to bless the family and the Nouveau wines made from the most recent harvest while everyone is gathered for the holiday meal. We are excited to share our vineyard and welcome you as part of our extended family to enjoy our wine, the ancient symbol of community, prosperity, and well being.<br></p>		<p class=\"lead\">			Open the first full weekend of each month Saturday and Sunday \r\n1-5pm, June through December. Additional openings 8/30 &amp; 8/31, 10/11 &amp; 10/12.&nbsp;&nbsp; Call to make special arrangements.</p>		<br>		<b class=\"lead\" style=\"font-size:1.5em\">Thanks,<br>		<i class=\"lead\" style=\"font-size:1em\">Joe Riordan</i>				</b>											','2013-07-31 00:06:48'),(17,'','about','content','<br>\r\n		Please update \"About Page\" content!	','0000-00-00 00:00:00'),(18,'','contact','content','<br>\r\n		<br>\r\n		<br>\r\n		<br>\r\n		<br>				<br>				<br>				<br>				<br>				<h2>Contact</h2><br><br><h3>Joe Riordan</h3><h3>Bethlehem Vineyard and Winery, LLC</h3><p><br></p><p><font size=\"6\">46 Town Line Road</font><br></p><p><font size=\"6\"><span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"lime\">PO </span><span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"yellow\">Box </span><span id=\"dtx-highlighting-item\" dtx-highlight-backgroundcolor=\"magenta\">193</span></span></span></font></p><h3>Bethlehem, CT 06751</h3><br><br><h3>Phone: (203) 266 - 5024</h3><h3>E-Mail: bethlehemvineyard@yahoo.com (preferred contact)</h3><br><br><br><br><h2>Hours</h2><br><br><p class=\"lead\">	Open only the first full weekend of each month Saturday and Sunday \r\n1-5pm, June through November. Additional openings 8/30 &amp; 8/31, 10/11 &amp; 10/12.&nbsp; Call to make special arrangements.	</p>	<br>	<br>				','2013-07-31 00:08:16'),(19,'','directions','content','<br>\r\n		<br>\r\n		<br>				<br>				<br>				<br><h3>46 Town Line Rd, Bethlehem CT, 06751</h3><br>				<p class=\"lead\">Open only the first full weekend of each month Saturday and Sunday 12-5pm, July through November. Open first 2 weekends in December. Call to make special arrangements.</p> 	<p class=\"lead\">Winery is 6.4 miles from center of Litchfield, CT. Go south on South St/CT-63 for 4 miles. Turn right onto East St/CT-109 and go 1.1 miles. Turn left onto CT-61/South St and go 1.1 miles. Turn left onto Town Line Rd. The Bethlehem Fair Grounds will be on your right, a golf green on the left. Go 0.2 miles. Vineyard driveway is 3rd on right flanked by evergreens.</p>														','2013-07-31 00:08:39');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL auto_increment,
  `contentID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prettyName` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
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

-- Dump completed on 2015-01-24 16:27:18
