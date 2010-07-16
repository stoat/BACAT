<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<TITLE>Used Motorcycles Norfolk UK for Sale at Seastar - Used Motorcycles Norfolk UK</TITLE>
<html>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style3 {
	font-size: 14px;
	font-weight: bold;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="inc/styles.css" rel="stylesheet" type="text/css">
<link href="inc/sn2007.css" rel="stylesheet" type="text/css">
<script language="javascript" src="inc/sn2007functions.js"></script>
<?
	// import database info and open connection
						include($to_root."inc/dbconfig.php");
	$connection = mysql_connect($host, $user, $pass) or die("Unable to connect to database.");
	mysql_select_db($db) or die("Unable to select database.");

	$sort = "Pmake,pmodel";
	//create an array of keywords
	$qkey = "SELECT distinct pmake,pmodel FROM tblseastar WHERE pcategory = 'motorcycle' ORDER BY $sort DESC";
	$res = mysql_query($qkey) or die("Error in query: $qkey. " . mysql_error());
	for($i = 0; $row = mysql_fetch_array($res); $i++) {
	$pagekeys = $pagekeys.$row['pmake'].' ' .$row['pmodel'].',';
	}
	//$pagekeys = $pagekeys."used motorcycles uk, seastar superbikes uk, seastar, superbikes, motorcycles uk, motorcycle, motor cycles, norfolk, east anglia, motorbikes, motorbike, motor bike, scooters, new, used, secondhand, kids, kawasaki, bikes, road, dealers, exhausts, tyres, dynojet, sales, clothing, helmets, jackets, suits, leathers, boots, spares, parts, accessories, motorcycle insurance, finance, bikers, sports bikes";
	// Set up pictures left, middle and right if this is a detail view
$gallerypath="";
$thumbpath="";
if($_GET['detail']) {
		$imageloc="bikeimages/";
		$query = "SELECT pcode, ppicture FROM tblseastar WHERE id = '".$_GET['detail']."'";
		$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());
		$row = mysql_fetch_array($result);
		}
?>
					
<META NAME="keywords" CONTENT= "<?php echo $pagekeys.'used motorcylces,used motorcycles uk, seastar superbikes uk, seastar, superbikes, motorcycles uk, motorcycle, motor cycles, norfolk, east anglia, motorbikes, motorbike, motor bike, scooters, new, used, secondhand, kids, kawasaki, bikes, road, dealers, exhausts, tyres, dynojet, sales, clothing, helmets, jackets, suits, leathers, boots, spares, parts, accessories, finance, bikers, sports bikes.'; ?>">			
<META NAME="description" CONTENT="Used Motorcycles UK for sale plus exhausts, tyres, motorcycle clothing, helmets, boots and motorcycle parts and spares at Seastar Superbikes - Used Motorcycles UK.">
<meta name="resource-type" content="document">
<meta http-equiv="pragma" content="no-cache">
<meta name="revisit-after" content="14 days">
<meta name="classification" content="motorcycles">
<meta name="robots" content="INDEX">
<meta name="distribution" content="Global">
<meta name="rating" content="Safe For Kids">

<? include($to_root."inc/javascript_functions.php"); ?>
<script language="JavaScript" type="text/JavaScript">

<!-- Vince Java Stuff -->
<!-- Insert java menu system here -->
<SCRIPT SRC="js/javamenu.js"></SCRIPT>
<!-- Insert java image navagation here -->
<SCRIPT SRC="js/javaimagenav.js"></SCRIPT>

<link rel="stylesheet" type="text/css" href="css/e2.css" title="default" />

<?php
	require_once "inc/config.php";
	require_once "inc/getfolders.php";
?>


<script type="text/javascript" src="js/mootools.v1.11.js"></script>
<script type="text/javascript">
var transspeed=<?php echo $transitionspeed;?>;
var fadespeed=<?php echo $fadespeed;?>;
</script>
<script type="text/javascript" src="js/e2photo.js"></script>


</head>

<body background="images/bg.gif">
<div id="dropdownLayer" style="position:absolute; width:115px; height:111px; z-index:2; left: 709px; top: 148px; background-color: #000000; layer-background-color: #000000; border: 1px none #000000; visibility: hidden;">
	<table align="center" cellpadding="2" cellspacing="0" bgcolor="#000000">
		<tr>
			<td colspan="2"><img src="images/spacer.gif" width="50" height="5"></td>
		</tr>
		<tr>
			<td>
				<p><img src="images/small_arrow_right.gif" width="5" height="7"></p></td>
			<td><a href="tuning.html">Tuning</a></td>
		</tr>
		<tr>
			<td><img src="images/small_arrow_right.gif" width="5" height="7"></td>
			<td><a href="frame_straightening.html">Frame Straightening</a></td>
		</tr>
		<tr>
			<td><img src="images/small_arrow_right.gif" width="5" height="7"></td>
			<td><a href="shop_tour.html">Tour our shop</if($row['ppicture'] != "NoPic" and is_file($imageloc.$row['ppicture'])) {a></td>
		</tr>
		<tr>
			<td><img src="images/small_arrow_right.gif" width="5" height="7"></td>
			<td><a href="tyres.html">Tyre Shop</a></td>
		</tr>
		<tr>			<td><img src="images/small_arrow_right.gif" width="5" height="7"></td>
			<td><a href="clearancecatalogue.php?cat=TO%20CLEAR&page=1">Latest Bargains!</a></td>
		</tr>
	</table>
  <br>
  <img src="images/nav_close.gif" width="117" height="23" border="0">
</div>

<div id="closer" style="position:absolute; width:140px; height:150px; z-index:1; left: 700px; top: 148px; visibility: hidden;"><a href="javascript:;" onMouseOver="P7_autoLayers(0)"><img src="images/spacer.gif" width="140" height="150" border="0"></a></div>
<table width="752" border="0" align="center" cellpadding="0" cellspacing="0" class="mainTable">
	<tr>
		<td width="752" colspan="3"><div align="right"><a href="ccp51/cgi-bin/cp-app.cgi?usr=51F7977557&rnd=1075220&rrc=N&affl=&cip=83.148.163.207&act=&aff=&pg=cart" onMouseOver="P7_autoLayers(0)"><img src="images/top.jpg" width="746" height="96" hspace="2" vspace="2" border="0"></a></td>
	</tr>
	<tr align="center">
	<td colspan="3">
	<img src="lampOFF.gif" name="Lseastar" width="23" height="27" id="Lseastar"><a href="home.html" onMouseOver="MM_swapImage('Lseastar','','lampON.gif','bottseastar','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="seastar.gif" name="seas" width="83" height="27" border="0" id="seas"></a><img src="lampOFF.gif" name="LKawa" width="23" height="27" id="LKawa"><a href="kawasakimodels07.html" onMouseOver="MM_swapImage('LKawa','','lampON.gif','bottkawasaki','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="kawasaki.gif" name="kawa" width="83" height="27" border="0" id="kawa"></a><img src="lampOFF.gif" name="Lshow" width="23" height="27" id="Lshow"><a href="ducatihome.html" onMouseOver="MM_swapImage('Lshow','','lampON.gif','bottshowroom','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="Ducati.gif" name="show" width="83" height="27" border="0" id="show"></a><img src="lampOFF.gif" name="Lworks" width="23" height="27" id="Lworks"><a href="bikecatalogue.php?cat=motorcycle&page=1" onMouseOver="MM_swapImage('Lworks','','lampON.gif','bottworkshop','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="showroom.gif" name="works" width="83" height="27" border="0" id="works"></a><img src="lampOFF.gif" name="Lcloth" width="23" height="27" id="Lcloth"><a href="catalogue.php?cat=clothing&page=1" onMouseOver="MM_swapImage('Lcloth','','lampON.gif','bottclothing','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="clothing.gif" name="cloth" width="83" height="27" border="0" id="cloth"></a><img src="lampOFF.gif" name="Laccess" width="23" height="27" id="Laccess"><a href="accessories.html" onMouseOver="MM_swapImage('Laccess','','lampON.gif','bottaccessories','','bottbarON.gif',1)" onMouseOut="MM_swapImgRestore()"><img src="accessories.gif" name="access" width="83" height="27" border="0" id="access"></a><img src="lampOFF.gif" name="Lmore" width="23" height="27" id="Lmore"><a href="javascript:;"onMouseOver="P7_Snap('menuanchor','closer',-20,31,'menuanchor','dropdownLayer',0,31);P7_autoLayers(0,'dropdownLayer','closer')"><img src="more.gif" name="menuanchor" width="83" height="27" border="0" id="menuanchor">
	</a>
	</td>
	</tr>
	<tr>
		<td width="149" valign="top">
			<table width="149" border="0" cellspacing="0" cellpadding="4">
				<tr>
					<td class="date"><? echo date("D jS F Y"); ?>
					</td>
				</tr>
			</table>
			<a href="news.html"><img src="images/div_news.gif" width="145" height="44" hspace="2" vspace="0" border="0"></a><br>
<!-- START 2007 SIDENAV -->
<div id="sn2007">
	<h1><a href="" onClick="return sn2007toggle('sn2007-100');">Ducati Motorcycles</a></h1>
	<div id="sn2007-100" class="sn2007enclosed">		<p><a href="/ducatihome.html">Current Ducati Models</a></p>
		<p><a href="/ducatiprices07.html">Current Ducati Prices</a></p>
		<p><a href="/ducati%20desmosedici%20RR.html">Desmosedici RR</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-100-01');">Superbike Range&nbsp;&raquo;</a></p>
		<div id="sn2007-100-01" class="sn2007sub">
			<p><a href="/ducati848.html">Ducati 848</a></p>
			<p><a href="/ducati1098general.html">The 1098 Range</a></p>
			<p><a href="/ducati1098.html">Ducati 1098</a></p>
			<p><a href="/ducati1098s.html">Ducati 1098S</a></p>
			<p><a href="/ducati1198.html">Ducati 1198/S</a></p>
			<p><a href="/ducati1098r.html">Ducati 1098R</a></p>
		</div>
		<p><a href="/ducati%20Streetfighter.html">Streetfighter/S</a></p>
		<p><a href="/ducati%20Hypermotard1100.html">Hypermotard 1100/S</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-100-02');">Monster Range&nbsp;&raquo;</a></p>
		<div id="sn2007-100-02" class="sn2007sub">
			<p><a href="/ducati Monster General.html">The Monster Range</a></p>
			<p><a href="/ducati%20M696.html">Ducati M696</a></p>
			<p><a href="/ducati-monster-1100.html">Ducati M1100/S</a></p>
			<p><a href="/ducati%20S2R%201000.html">Ducati S2 1000</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-100-03');">Multistrada Range&nbsp;&raquo;</a></p>
		<div id="sn2007-100-03" class="sn2007sub">
			<p><a href="/ducatiMultistrada1100Gen.html">Multistrada 1100</a></p>
			<p><a href="/ducatiMultistrada1100Gen.html">Multistrada 1100S</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-100-04');">Sport Touring Range&nbsp;&raquo;</a></p>
		<div id="sn2007-100-04" class="sn2007sub">
			<p><a href="/ducatist3general.html">Ducati ST3</a></p>
		</div>		
				<p><a href="" onClick="return sn2007toggle('sn2007-100-05');">Sport Classic Range&nbsp;&raquo;</a></p>
		<div id="sn2007-100-05" class="sn2007sub">
			<p><a href="/ducatiSportClassicGen.html">The Classics Range</a></p>
			<p><a href="/ducatiGT1000.html">Ducati GT1000</a></p>
			<p><a href="/ducatiSport1000s.html">Ducati Sport 1000S</a></p>
		</div>	
		<p><a href="/ducatimaintenance.html">Ducati Maintenance</a></p>
		<p><a href="/ducatiengines.html">Desmodromics - Why?</a></p>
		</div>
	<h1><a href="" onClick="return sn2007toggle('sn2007-101');">Ducati Accessories</a></h1>
	<div id="sn2007-101" class="sn2007enclosed">
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&page=1">All Ducati Accessories 2007></a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=1098%20ALL&page=1">Superbike 1098 All</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=1198%20ALL&page=1">Superbike 1198 All</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=848&page=1">Superbike 848</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=Streetfighter&page=1">Streetfighter</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=M695&page=1">Monster M695</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=M696&page=1">Monster M696</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=M1100&page=1">Monster M1100</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=S2R%20800&page=1">Monster S2R 800</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=S2R%201000&page=1">Monster S2R 1000</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=S4R&page=1">Monster S4R</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=S4RS&page=1">Monster S4RS</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=Hypermotard&page=1">Hypermotard</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=GT1000&page=1">Sport Classic GT1000</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=SPORT%201000%20BP&page=1">Sport 1000 Biposto</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=SPORT%201000%20MP&page=1">Sport 1000 Monoposto</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=SPORT%201000S&page=1">Sport 1000S</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=MULTISTRADA%201100%20and%201100S&page=1">Multistrada 1100 & S</a></p>
		<p><a href="/ducatiaccesscatalogue.php?cat=ducati%20accessories&mk=ST3%20and%20ST3S%20ABS&page=1">ST3 and ST3S ABS</a></p>
		</div>
		
	<h1><a href="/catalogueducati.php?cat=ducati%20clothing&page=1">Ducati Clothing</a></h1>		

	<h1><a href="" onClick="return sn2007toggle('sn2007-001');">Kawasaki Motorcycles</a></h1>
	<div id="sn2007-001" class="sn2007enclosed">
		<p><a href="/kawasakimodels07.html">Current Kawasaki Models</a></p>
		<p><a href="/Kawasaki%20Promotions.html">Promotional Offers</a></p>
		<p><a href="/vn20002009.htm">VN2000 Classic</a></p>
		<p><a href="/vn1700classic2009.html">VN1700 Classic</a></p>
		<p><a href="/vn1700classictourer2009.html">VN1700 Classic Tourer</a></p>
		<p><a href="/vn1700voyager2009.html">VN1700 Voyager</a></p>
		<p><a href="/gtr1400%20kawasaki%202007.html">GTR1400</a></p>
		<p><a href="/zx142006detail.html">ZZR1400 Ninja</a></p>
		<p><a href="/zx10r2008detail.html">ZX10R Ninja</a></p>
		<p><a href="/Z1000%20kawasaki%202007.html">Z1000</a></p>
		<p><a href="/vn900classic2006.html">VN900 Classic</a></p>
		<p><a href="/vn900%20custom%202007.html">VN900 Custom</a></p>
		<p><a href="/z750%20kawasaki%202007.htm">Z750</a></p>
		<p><a href="/Versys2007.html">Versys 650</a></p>
		<p><a href="/er6n2009.html">ER6N</a></p>
		<p><a href="/er6f2009.html">ER6F</a></p>
		<p><a href="/zx6r2009.html">ZX6R Ninja</a></p>
		<p><a href="/klx250%202009.html">KLX250</a></p>
		<p><a href="/Ninja250.html">Ninja 250</a></p>
	</div>

	<h1><a href="" onClick="return sn2007toggle('sn2007-002');">Kawasaki Accessories</a></h1>
	<div id="sn2007-002" class="sn2007enclosed">
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&page=1">All Kawasaki Accessories</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN2000&page=1">VN2000 04-07</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN2000 09&page=1">VN2000 Classic 08-</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1700%20CLASSIC&page=1">VN1700 Classic</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1700%20TOURER&page=1">VN1700 Classic Tourer</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1700%20VOYAGER&page=1">VN1700 Voyager</a></p>		
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1600%20CLASSIC&page=1">VN1600 Classic</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1600%20%20TOURER&page=1">VN1600 Classic Tourer</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1500%20%20TOURER&page=1">VN1500 Classic Tourer</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN1500%201600%20MEANSTREAK&page=1">VN1600/1500 Mean Streak</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=1400GTR&page=1">GTR1400</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZZR1400&page=1">ZZR1400 Ninja</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZRX1200R&page=1">ZRX1200R</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-10R%2004-05&page=1">ZX10R Ninja 04-05</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-10R%2006-07&page=1">ZX10R Ninja 06-07</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-10R%2008-09&page=1">ZX10R Ninja 08-09</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Z1000%2003-06&page=1">Z1000 03-06</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Z1000%2007-09&page=1">Z1000 07-09</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=KLV1000&page=1">KLV1000</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN900%20Classic&page=1">VN900 Classic</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN900%20Custom&page=1">VN900 Custom</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=VN800%20CLASSIC&page=1">VN800 Classic</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Z750%2004-06&page=1">Z750 04-06</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Z750%2007-09&page=1">Z750 07-09</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Z750S&page=1">Z750S</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=Versys%20650&page=1">Versys 650</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ER-6N&page=1">ER6n 05-08</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ER-6F&page=1">ER6f 06-08</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ER-6N%2009&page=1">ER6n 09</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ER-6F%2009&page=1">ER6f 09</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-6R%2003-04&page=1">ZX-6R Ninja 03-04</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-6R%2005-06&page=1">ZX-6R Ninja 05-06</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-6R%2007-08&page=1">ZX-6R Ninja 07-08</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX-6R%2009-10&page=1">ZX-6R Ninja 09-10</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=ZX250R&page=1">Ninja 250R</a></p>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=KLX250&page=1">KLX250</a></p>	
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&mk=GIFT&page=1">Kawasaki Gift Ideas</a></p>
	</div>

	<h1><a href="/kawasakiclothingcatalogue.php?cat=kawasaki%20clothing&page=1">Kawasaki Clothing</a></h1>

	<h1><a href="" onClick="return sn2007toggle('sn2007-003');">Press Views</a></h1>
	<div id="sn2007-003" class="sn2007enclosed">
		<p><a href="/bikes.html">Ducati Press Views</a></p>
		<p><a href="/bikes.html">Kawasaki Press Views</a></p>
		<p><a href="/Wallpapers.html">Wallpapers</a></p>
	</div>

	<h1><a href="" onClick="return sn2007toggle('sn2007-004');">Used Motorcycles</a></h1>
	<div id="sn2007-004" class="sn2007enclosed">
		<p><a href="/used%20bike%20warranty.html">12 Month Warranty Details</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&page=1">All Used Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=DUCATI&page=1">Ducati Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=KAWASAKI&page=1">Kawasaki Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=HONDA&page=1">Honda Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=SUZUKI&page=1">Suzuki Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=YAMAHA&page=1">Yamaha Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=TRIUMPH&page=1">Triumph Motorcycles</a></p>
		<p><a href="/bikecatalogue.php?cat=motorcycle&mk=APRILIA&page=1">Aprilia Motorcycles</a></p>
		<p><a href="/trackcatalogue.php?cat=motorcycle&page=1">Track Bikes</a></p>
	</div>

	<h1><a href="" onClick="return sn2007toggle('sn2007-005');">Motorcycle Clothing</a></h1>
	<div id="sn2007-005" class="sn2007enclosed">
		<p><a href="/catalogue.php?cat=clothing&page=1">All Clothing Ranges</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-005-01');">Arlen Ness Clothing&nbsp;&raquo;</a></p>
		<div id="sn2007-005-01" class="sn2007sub">
			<p><a href="/catalogue.php?cat=clothing&mk=ARLEN NESS&page=1">Buy Arlen Ness</a></p>
			<p><a href="/clothingArlenNess.html">Review Arlen Ness</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-005-02');">Berik Bike Clothing&nbsp;&raquo;</a></p>
		<div id="sn2007-005-02" class="sn2007sub">
			<p><a href="/catalogue.php?cat=clothing&mk=BERIK&page=1">Buy Berik Clothing</a></p>
			<p><a href="/clothingBerik.html">Review Berik Range</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-005-03');">RST Bike Clothing&nbsp;&raquo;</a></p>
		<div id="sn2007-005-03" class="sn2007sub">
			<p><a href="/catalogue.php?cat=clothing&mk=RST&page=1">Buy RST Clothing</a></p>
			<p><a href="/catalogue.php?cat=clothing&mk=RST%20PRO&page=1">Buy RST Pro</a>
			<p><a href="/clothingRST.html">Review RST Range</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-005-04');">Wolf Bike Clothing&nbsp;&raquo;</a></p>
		<div id="sn2007-005-04" class="sn2007sub">
			<p><a href="/catalogue.php?cat=clothing&mk=WOLF&page=1">Buy Wolf Clothing</a></p>
			<p><a href="/clothingWOLF.html">Review Wolf Range</a></p>
		</div>
		<p><a href="/knoxcatalogue.php?cat=body%20armour&page=1">Knox Body Armour</a></p>
		<p><a href="/catalogue.php?cat=clothing&mk=EDZ&page=1">EDZ Under Garments</a></p>
		<p><a href="/catalogue.php?cat=clothing&mk=Cold%20Killers&page=1">Cold Killers Thermals</a></p>
		<p><a href="/catalogue.php?cat=clothing&mk=MOTRAX&page=1">Motrax Clothing Range</a></p>
		<p><a href="/catalogue.php?cat=clothing&sk=RAIN%20WEAR&page=1">Waterproof Over Suits</a></p>
	</div>

	<h1><a href="" onClick="return sn2007toggle('sn2007-006');">Motorcycle Boots</a></h1>
	<div id="sn2007-006" class="sn2007enclosed">
		<p><a href="" onClick="return sn2007toggle('sn2007-006-01');">Puma Motorcycle Boots&nbsp;&raquo;</a></p>
		<div id="sn2007-006-01" class="sn2007sub">
			<p><a href="/bootcatalogue.php?cat=boots&mk=PUMA&page=1">Buy Puma Boots</a></p>
			<p><a href="/clothingpuma.html">Review Puma Boots</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-006-02');">Sidi Motorcycle Boots&nbsp;&raquo;</a></p>
		<div id="sn2007-006-02" class="sn2007sub">
			<p><a href="/bootcatalogue.php?cat=boots&mk=SIDI&page=1">Buy Sidi Boots</a></p>
			<p><a href="/clothingSIDI.html">Review Sidi Boots</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-006-03');">RST Motorcycle Boots&nbsp;&raquo;</a></p>
		<div id="sn2007-006-03" class="sn2007sub">
			<p><a href="/bootcatalogue.php?cat=boots&mk=RST&page=1">Buy RST Boots</a></p>
			<p><a href="/clothingRST.html">Review RST Boots</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-006-04');">Berik Motocross Boots&nbsp;&raquo;</a></p>
		<div id="sn2007-006-04" class="sn2007sub">
			<p><a href="/bootcatalogue.php?cat=boots&mk=BERIK%20OFF-ROAD&page=1">Buy Berik Boots</a></p>
			<p><a href="/clothingBerik%20Boots.html">Review Berik Boots</a></p>
		</div>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-007');">Motorcycle Helmets</a></h1>
	<div id="sn2007-007" class="sn2007enclosed">
		<p><a href="/helmetcatalogue.php?cat=helmet&page=1">All Motorcycle Helmets</a></p>
		<p><a href="/helmetcatalogue.php?cat=helmet&mk=ACCESSORIES&page=1">Helmet Accessories</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-007-01');">AGV Motorcycle Helmets&nbsp;&raquo;</a></p>
		<div id="sn2007-007-01" class="sn2007sub">
			<p><a href="/helmetcatalogue.php?cat=helmet&mk=AGV&page=1">Buy AGV Helmets</a></p>
			<p><a href="/clothingagv.html">Review AGV Helmets</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-007-02');">Shoei Motorcycle Helmets&nbsp;&raquo;</a></p>
		<div id="sn2007-007-02" class="sn2007sub">
			<p><a href="/helmetcatalogue.php?cat=helmet&mk=SHOEI&page=1">Buy Shoei Helmets</a></p>
			<p><a href="/clothingSHOEI.html">Review Shoei Helmets</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-007-03');">RST Motorcycle Helmets&nbsp;&raquo;</a></p>
		<div id="sn2007-007-03" class="sn2007sub">
			<p><a href="/helmetcatalogue.php?cat=helmet&mk=RST&page=1">Buy RST Helmets</a></p>
			<p><a href="/clothingRst%20Helmets.htm">Review RST Helmets</a></p>
		</div>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-008');">Motorcycle Gloves</a></h1>
	<div id="sn2007-008" class="sn2007enclosed">
		<p><a href="/glovecatalogue.php?cat=gloves&page=1">All Motorcycle Gloves</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-008-01');">Wolf Motorcycle Gloves&nbsp;&raquo;</a></p>
		<div id="sn2007-008-01" class="sn2007sub">
			<p><a href="/glovecatalogue.php?cat=gloves&mk=WOLF&page=1">Buy Wolf Gloves</a></p>
			<p><a href="/clothingWOLF.html">Review Wolf Gloves</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-008-02');">RST Motorcycle Gloves&nbsp;&raquo;</a></p>
		<div id="sn2007-008-02" class="sn2007sub">
			<p><a href="/glovecatalogue.php?cat=gloves&mk=RST&page=1">Buy RST Gloves</a></p>
			<p><a href="/clothingRST.html">Review RST Gloves</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-008-03');">Berik Motorcycle Gloves&nbsp;&raquo;</a></p>
		<div id="sn2007-008-03" class="sn2007sub">
			<p><a href="/glovecatalogue.php?cat=gloves&mk=BERIK&page=1">Buy Berik Gloves</a></p>
			<p><a href="/clothingBerik.html">Review Berik Gloves</a></p>
		</div>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-009');">Motorcycle Accessories</a></h1>
	<div id="sn2007-009" class="sn2007enclosed">
		<p><a href="" onClick="return sn2007toggle('sn2007-009-01');">General Accessores&nbsp;&raquo;</a></p>
		<div id="sn2007-009-01" class="sn2007sub">
			<p><a href="/accessorycatalogue.php?cat=accessories&page=1">General Accessories</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=BAR%20END%20WEIGHTS&page=1">Bar End Weights</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=BIKE%20COVERS&page=1">Covers</a></p>
			<p><a href="/randgcatalogue.php?cat=bike%20protection&page=1">Crash Protection</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=DVD&page=1">DVD's</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=FOOTPEGS&page=1">Footpegs</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=FUEL%20CAPS&page=1">Fuel Caps</a></p>
			<p><a href="/bikegraphicscatalogue.php?cat=protective%20graphics&page=1">Graphics</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=GRIPS&page=1">Handlebar Grips</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=INDY%20CATORS&page=1'">Indicators</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=KNEE%20SLIDERS&page=1">Knee Sliders</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=LEVERS&page=1">Levers</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=LIGHTS&page=1">Lights</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=MIRRORS&page=1">Mirrors</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=TANK%20PADS%20AND%20STRIPS&page=1">More Tank Pads</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=PADDOCK%20STANDS&page=1">Paddock Stands etc.</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=SCREENS&page=1">Screens</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=TAIL%20TIDIES&page=1">Tail Tidies</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=TAX%20DISC%20HOLDERS&page=1">Tax Disc Holders</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=TIE%20STRAPS&page=1">Tie Downs</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=TYRE%20WARMERS&page=1">Tyre Warmers</a></p>
			<p><a href="/accessorycatalogue.php?cat=accessories&mk=GENERAL&page=1">The Bits Left Over</a></p>
		</div>
		<p><a href="/kawasakiaccesscatalogue.php?cat=kawasaki%20accessories&page=1">Kawasaki Accessories</a></p>
		<p><a href="/securitycatalogue.php?cat=security&page=1">Security Devices</a></p>
		<p><a href="/luggagecatalogue.php?cat=luggage&page=1">Motorcycle Luggage</a></p>
		<p><a href="/accessorycatalogue.php?cat=accessories&mk=MAINTENANCE&page=1">Maintenance</a></p>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-010');">Motorcycle Exhausts</a></h1>
	<div id="sn2007-010" class="sn2007enclosed">
		<p><a href="" onClick="return sn2007toggle('sn2007-010-01');">Akrapovic Exhaust Cans &amp; Full Systems&nbsp;&raquo;</a></p>
		<div id="sn2007-010-01" class="sn2007sub">
			<p><a href="/akrapovicexhausts.html">Review Akrapovic</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-010-02');">Yoshimura Exhaust Cans &amp; Full Systems&nbsp;&raquo;</a></p>
		<div id="sn2007-010-02" class="sn2007sub">
			<p><a href="/yoshimuraexhausts.html">Review Yoshimura</a></p>
		</div>
		<p><a href="" onClick="return sn2007toggle('sn2007-010-03');">Scorpion Exhausts Race &amp; Road Legal&nbsp;&raquo;</a></p>
		<div id="sn2007-010-03" class="sn2007sub">
			<p><a href="/exhaustfitment1.php">Buy Scorpion Cans</a></p>
			<p><a href="/scorpiondetail.html">Review Scorpion</a></p>
			<p><a href="/scorpionimages.html">High Level Examples</a></p>
			<p><a href="http://www.scorpion-exhausts.com/Bikes/thesounds.php" target="_blank">How Do They Sound?</a></p>
			<p><a href="/Scorpionpaddockstands.html">Paddock Stands</a></p>
		</div>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-011');">Motorcycle Tyres</a></h1>
	<div id="sn2007-011" class="sn2007enclosed">
		<p><a href="/tyres.html">Bike Tyres General</a></p>
		<p><a href="/tyresprices.html">Motorbike Road Tyres</a></p>
		<p><a href="/tyresraceprices.html">Motorbike Race Tyres</a></p>
		<p><a href="/tyrespairdeals.html">Buy Now - Pair Deals</a></p>
		<p><a href="/pirellifitmentmake.php">Buy Now - Single Tyres</a></p>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-012');">Workshop &amp; MOTs</a></h1>
	<div id="sn2007-012" class="sn2007enclosed">
		<p><a href="/workshop.html">Workshop</a></p>
		<p><a href="/mots.html">Motorcycle MOTs</a></p>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-013');">Dyno Tuning</a></h1>
	<div id="sn2007-013" class="sn2007enclosed">
		<p><a href="/Dynofitment.php">Buy Dynojet Kits &amp; Power Commanders</a></p>
		<p><a href="/tuning.html">Dynos- What's involved?</a></p>
		<p><a href="/dyno%20detail%20powercommader.html">Fuel Injection Re-Mapping</a></p>
		<p><a href="/dynodetail.html">Carburettor Adjustment</a></p>
		<p><a href="" onClick="return sn2007toggle('sn2007-013-01');">Examples of improvements&nbsp;&raquo;</a></p>
		<div id="sn2007-013-01" class="sn2007sub">
			<p><a href="/tuning%20kawasaki%20zx6r-b1h.html">Kawasaki ZX636-B1H</a></p>
			<p><a href="/Tuning%20Meanstreak.html">Kawasaki VN1500</a></p>
			<p><a href="/Tuning%20ZX10R%2006.html">Kawasaki ZX10R-C6F</a></p>
			<p><a href="/zrx1200r2006detail.html">Kawasaki ZRX1200</a></p>
			<p><a href="/Tuning%20ZZR1400.html">Kawasaki ZZR1400</a></p>
			<p><a href="/Tuning%20ZX6R.html">Kawasaki ZX636-C6F</a></p>
		</div>
	</div>
	
	<h1><a href="" onClick="return sn2007toggle('sn2007-014');">Frame Straightening</a></h1>
	<div id="sn2007-014" class="sn2007enclosed">
		<p><a href="/frame_straightening.html">What's Involved</a></p>
	</div>
	<h1><a href="/clearancecatalogue.php?cat=TO%20CLEAR&page=1">Stock Clearance</a></h1>
	<h1><a href="/PROMODEALS.htm">Package Deals</a></h1>
	<h1><a href="/giftcatalogue.php?cat=gift&page=1">Gift Ideas</a></h1>
	<h1><a href="/giftvouchers.htm">Gift Vouchers</a></h1>
	<h1><a href="/shop_tour.html">About Us</a></h1>
	<script type="text/javascript">sn2007open('sn2007-004');</script>
</div>
<!-- END 2007 SIDENAV -->
		    <dl>
		      <dt class="style8">            
	      </dl>
		    <p><br>
          </p>
	    </td>
		<?
			// adjust table for homepage vs other pages
			if(substr_count($_SERVER['PHP_SELF'], "home.html")) {
		?>
    <dl>
      <dt class="style8">      
    </dl>
    <tr>		
      <td width="480" valign="top" background="images/bg_w_bike.gif">
		  <table width="480" border="0" cellspaciecho $imageloc.$row['ppicture'];ng="0" cellpadding="0">
			  <tr>
				  <td><img src="images/spacer_black.gif" width="478" height="2"></td>
			  </tr>
	      </table>
		  <table width="480" border="0" cellspacing="0" cellpadding="5">
			  <tr>
				  <td>
			  <?
				} else {
			?>
		  <td width="599" valign="top" colspan="2" background="images/bg_w_bike.gif">
			  <table width="599" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					  <td><img src="images/spacer_black.gif" width="597" height="2"></td>
				  </tr>
			  </table>
			  <table width="599" border="0" cellspacing="0" cellpadding="5">
				  <tr>
					  <td>
			  <?
				}
			?>
<?
	include("inc/BIKEimg_functions.php");
	//session_register($page);
	// defaults and query string conversions
	$category = ( $_GET['cat'] ? $_GET['cat'] : "motorcycle" );
	$sort = ( $_GET['sort'] ? $_GET['sort'] : "pmake, pmodel" );
	$page=($_GET['page']?$_GET['page']:" ");
	$mk=($_GET['mk']?$_GET['mk']:"");
	// set titles
	$titles = array(
		"motorcycle" => array ("catloc" => "bikes", "catlocheadline" => "New and Used Bikes"),
		"clothing" => array ("catloc" => "clothing", "catlocheadline" => "Leathers and more"),
		"helmet" => array ("catloc" => "helmets", "catlocheadline" => "For safety and looks"),
		"accessories" => array ("catloc" => "accessories", "catlocheadline" => "All the little bits"),
	);


if($_GET['detail']) {
		$imageloc="bikeimages/";
		$query = "SELECT pcode,ppicture FROM tblseastar WHERE id = '".$_GET['detail']."'";
		$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());
		$row = mysql_fetch_array($result);
		if($row['ppicture'] != "NoPic" ){
			$limage = substr(strtolower($imageloc.$row['ppicture']),0,-5)."l.jpg";
			$mimage = substr(strtolower($imageloc.$row['ppicture']),0,-5)."m.jpg";
			$rimage = substr(strtolower($imageloc.$row['ppicture']),0,-5)."r.jpg";	
			$gallerypath="bikeimages/".strtolower($row['pcode']);
			$thumbpath="bikeimages/".strtolower($row['pcode'])."/thumbs";
			}
		else 	{
			$limage = "";
			$mimage = "";
			$rimage = "";
			}	?>
<script type="text/JavaScript">	
<?php 

getImages($gallerypath, 'tempgallery'); ?>
var firstimagewidth=currentwidth;
var firstimageheight=currentheight;
</script>
<script type="text/javascript" src="js/e2photo2.js"></script>

<?php
		}
?>


<style type="text/css">
</style>
<div align="center">
  <table width="586"  border="0">
    <tr>
      <td width="580"><div align="center">

        <p align="left"><a href="used%20bike%20warranty.html"><img src="images/Warranty.gif" width="580" height="40" border="0"><br>
		
		<br>
        </a><span class="style6 style1 style4">Used Motorcycle Catalogue </span></p>
        </div></td>
      </tr>
    <tr>
      <td height="106">
        <div align="left">
          <p align="left" class="style9 style10 style1">Welcome to our used motorcycles &quot;Virtual Showroom&quot; situated in Norfolk, East Anglia. Although we are the official Kawasaki dealer for this region, our secondhand motorcycles includes Honda, Suzuki, Yamaha, Triumph and Ducati. Please find below our ever changing stock of used bikes that are priced and offered to you with <strong>12 months MOT, full service</strong> and a <strong>12 month warranty</strong> for full peace of mind. We are happy to look at part exchanging your current motorcycle and can also arrange finance at competitive rates. Just click on &quot;More Details&quot; to enlarge any of the motorcycle images or for further information  on our used motorcycles <a href="mailto:sales@seastarsuperbikes.co.uk">e-mail</a> or call us. We hope to be of service to you in the near future. </p>
      </div>        </td>
      </tr>
  </table>
  
  <p class="style13">    <?
	// import database info and open connection
	include("inc/dbconfig.php");
	$connection = mysql_connect($host, $user, $pass) or die("Unable to connect to database.");
	mysql_select_db($db) or die("Unable to select database.");

	//]
//set the image location for bikes or clothes
	switch ($category) {
		case "motorcycle":
		$imageloc="bikeimages/";
		break;
		default:
		$imageloc="clothing/";
		//echo "<a href=\"$PHP_SELF?cat=helmet&page=1\">Helmets &raquo;</a>";
		break;
		}
	// listing or detail?
	//?>
	</p>
</div>

	<?
	if($_GET['detail']) {
			$query = "SELECT * FROM tblseastar WHERE id = '".$_GET['detail']."'";
			$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());
			$row = mysql_fetch_array($result);

?>
<div>
 <div class="bd">
  <div class="c">
   <div class="s">
    <!-- Gallery -->
		  <div id="gallery" align="center">
		  <!--Main Image Here-->
		  <div id="main_image_wrapper">		
			<div id="iptc_btn"></a></div>
 			<?php $gallerypath==$gallerypath."/".strtolower($row['pcode']); ?>
			<?php $thumbpath==$gallerypath."/".strtolower($row['pcode'])."/thumbs"; ?>
			  <?php getfirstimage($gallerypath , "tempgallery"); ?>
			 <div id="pn_overlay">
				<a href='javascript:previmage(current_imgid);' id='prev' class=".toolTip" tooltitle="Previous Image" ></a>
				<a href='javascript:nextimage(current_imgid);' id='next' tooltitle="Next Image"></a>			 </div>
		  </div>
		  <div align="center" class="spacing"> </div>
		  <!--End Main Image-->
		  <div id="thumbdisplay">
			  <div align="center" id="photocount"> <script type="text/javascript">document.write("1 of "+tempgallery.length+" Photos");</script> </div>

			  <div class="clear"></div>
		  </div>
		  <div align="center" class="spacing"> </div>
		  <div id="thumbhide">
		   <div id="thumbbox">
			<div id="thumb_container">
			  <div id="thumbgall">
				<div id="thumbs">
				  <div id="widthbox"><?php getthumbnailimages($gallerypath, 'tempgallery', $thumbpath); ?></div>
				</div>
			  </div>
			</div>
			<div id="back">
			  <script type="text/javascript">if(thumbnailnum>maxthumbvisible){document.write("<div id='leftmore'><ul><li><a href=\"javascript:checkbutton(addposition('minus'));movethumbs('plus');\"><img src='rsrc/buttonblank.gif' width='15' height='115' border='0' /></a></li></ul></div>");}</script>
			</div>
			<div id="more">
			  <script type="text/javascript">if(thumbnailnum>maxthumbvisible){document.write("<div id='rightmore'><ul><li><a href=\"javascript:checkbutton(addposition('plus'));movethumbs('minus');\"><img src='rsrc/buttonblank.gif' width='15' height='115' border='0' /></a></li></ul></div>");}</script>
			</div>
			</div>
		  </div>
			<div align="center" class="spacing"> </div>
			<div id="imgtitle"></div>	
		</div>
    <!-- end Gallery -->
   </div>
  </div>
 </div>
</div>

<?
/*
			echo "<br><table width='100%'>\n";
			echo "	<tr valign='top'>\n";
			echo "		<td colspan='2' class='catTableHead'>" . $row['pmake'] . "</td>\n";
			echo "	</tr>\n";
			echo "	<tr valign='top'>\n";
			if($row['ppicture'] != "NoPic" and is_file(strtolower($imageloc.$row['ppicture']))) {
	//			echo "		<td width='40%'><img src='".$imageloc.$row['ppicture'] . "'></td>\n";
	//New Bit
			echo "<table width='100%' border='0' cellpadding='0' cellspacing='0'>\n";
			echo "<tr>\n";
			echo  "<td height='22'><div align='left'><a href='#' class='style13' onClick='backward();return false'>Previous Slide</strong></a></div></td>\n";
			echo "<td width='50%' height='22'><div align='right'><span class='style46'><a href='#' class='style13' onClick='forward();return false'>Next Slide</a></span></div></td>\n";
			echo "</tr>\n";
			echo "<tr>\n";
			echo "<td width='100%' colspan='2' height='22'><center>\n";
			//                    <!-- Java display options here -->
			echo "<script src='js/javadisp.js'></script>\n";
			//                    <!-- End Here -->
			echo "</center></td>\n";
			echo "</tr>\n";
			echo "</table>\n";
			// echo $limage."Left Image" ;
	//New Bit

		} else {
			echo $imageloc.$row['ppicture'];
			//echo "images/no_pic.gif";
			echo "		<td width='40%'>No Picture available.</td>\n";
		}	
*/
		echo "		<tr><td width='60%'>\n";
		echo "			<b>Category:</b> " . ucwords(strtolower($row['pcategory'])) . "<br>\n";
		echo "			<b>Model:</b> " . $row['pmodel'] . "<br>\n";
		echo "			<b>Product Code:</b> " . $row['pcode'] . "<br>\n";
		echo "			<b>Description:</b> " . $row['pdesc'] . "<br>\n";
	//	if($row['spare']) echo "			<b>Other:</b> " . $row['spare'] . "<br>\n";
		echo "			<b>Price: &pound;</b> " . $row['pprice'] . "<br>\n";
		echo "		</td>\n";
		echo "	\n";
		echo "</table>\n";
		echo "<p align='right'><a href='javascript:history.go(-1)'>&laquo; Back&nbsp;&nbsp;</a></p>\n";
		echo "<p>&nbsp;</p></td></tr>\n";
		include("inc/footer.php");
		exit;
	}
	
// Start of Make Filtering RCM 25/01/2006
$track = "TRACKDAY";
	if($_GET['mk']) {
	//echo $mk."fart";
		$query = "SELECT * FROM tblseastar WHERE pcategory = '$category' AND pspare <>'$track'  and pmake = '$mk' ORDER BY $sort";
//	echo $query;
  	} else {
		$query = "SELECT * FROM tblseastar WHERE  pcategory = '$category' AND pspare <>'$track'  ORDER BY $sort ";
	}	
	
//	$track = "1";
	// fetch database entries
//	$query = "SELECT * FROM tblseastar WHERE pcategory = '$category' AND pspare <>'$track' ORDER BY $sort DESC";
	$result = mysql_query($query) or die("Error in query: $query. " . mysql_error());

	// put results into array
	$entries = array();
	for($i = 0; $row = mysql_fetch_array($result); $i++) {
		$entries[$i] = array(
			"id"					=> $row['id'],
			"code"					=> $row['pcode'],
			"category"				=> $row['pcategory'],
			"make"					=> $row['pmake'],
			"model"					=> $row['pmodel'],
			"description"			=> $row['pdesc'],
			"picture"				=> $row['ppicture'],
			"price"					=> $row['pprice'],
			"spare"					=> $row['pspare'],
			"short_description"		=> $row['pshortdesc'],
		);
	}

	// determine number of pages
	$item_count = count($entries);
	$items_per_page = 30;

	if($item_count == 0) {
		echo "<p>No entries in this category.</p>";
	} else {
		if ($item_count > $items_per_page) {
			if($item_count % $items_per_page != 0) {
				$number_of_pages = intval($item_count / $items_per_page) + 1;
			} else {
				$number_of_pages = intval($item_count / $items_per_page);
			}
		} else {
			$number_of_pages = 1;
		}

		// determine what page we're on and define $offset
//$page = 2;
		switch($page) {
			case "":
				$page = 1;
				break;
			case "1":
				$page = 1;
				break;
			default:
				$offset = ($page - 1) * $items_per_page;
				break;
		}

		// Function for displaying page navigation & count info
		function pagenav($number_of_pages, $page, $item_count, $show)
		 {
		 $category = ( $_GET['cat'] ? $_GET['cat'] : "motorcycle" );
			echo "<p class='small'>&nbsp;<b>Page:</b>&nbsp;&nbsp;";
			if($number_of_pages > 1 and $page > 1) {
				$prev = $page - 1;
				echo "<a href=\"{$_SERVER['PHP_SELF']}?cat=$category&page=$prev\">&laquo; Previous</a> | ";
			}
			for($i = 1; $i <= $number_of_pages; $i++) {
				if($i == $page) {
					echo "$i | ";
				} else {
					echo "<a href='{$_SERVER['PHP_SELF']}?cat=$category&page=$i'>$i</a> | ";
				}
			}
			if($page < $number_of_pages) {
				$next = $page + 1;
				//$page = $next; //RCM
				echo "<a href=\"$PHP_SELF?cat=$category&page=$next\">Next &raquo;</a>";
			}
			echo "</p>\n";
		}
		pagenav($number_of_pages, $page, $item_count, $show);
	?>
    <div align="center">
      <p class="style4">If you know the model you are after please select by manufacturer below...       
      <p class="style1">      </div>
    <table width="490" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#666666" bgcolor="#333333">
      <tr>

<!-- Manufacturer Sub Filter -->
        <? 	$qry = "SELECT distinct pmake FROM tblseastar WHERE  pcategory = '$category' AND pspare <>'$track'  ORDER BY pmake";
		$rst = mysql_query($qry) or die("Error in query: $qry. " . mysql_error());
		$filter = array();
		for($i = 0; $row = mysql_fetch_array($rst); $i++) {
			$filter[$i] = array(
				"id"					=> $row['pmake'],
			);
		}
		echo "<tr>\n";
		//=
		$ic = count($filter);
		//
		for($i = 0; $i < $ic; $i++) {
		$t = $filter[$i]['id'];
		echo "<td bgcolor='#000000'  align=center class=style4><a class='menuf' href=' " .$_SERVER['PHP_SELF'] . "?cat=$category&mk=" . $filter[$i]['id'] . "&page=1'>".strtoupper($filter[$i]['id']).  "</a></td>\n";	
		} 
		echo "<td class=style6>-</td>\n";
		echo "<td bgcolor='#000000'  align=center class=style4><a href=\"bikecatalogue.php?cat=motorcycle&page=1\">ALL </a></td>\n";
		echo "</tr>\n";
       ?>
	    <div align="center"></div></TD>
      </tr>
    </table>
    <br>
    <div align="center"></div>
    <div align="left"></div>
<table width="100%" cellpadding="2" cellspacing="2">
		<tr>
			<td class="catTableHead">Picture</td>
			<td class="catTableHead"><a href="<? echo $_SERVER['PHP_SELF'] . "?cat=$category" ?>&sort=pmake &page=1">Make</a></td>
			<td class="catTableHead"><a href="<? echo $_SERVER['PHP_SELF'] . "?cat=$category" ?>&sort=pmodel &page=1">Model</a></td>
			<td class="catTableHead"><a href="<? echo $_SERVER['PHP_SELF'] . "?cat=$category" ?>&sort=pcode &page=1">Product Code</a></td>
			<td class="catTableHead"><a href="<? echo $_SERVER['PHP_SELF'] . "?cat=$category" ?>&sort=pshortdesc &page=1">Info</a></td>
			<td class="catTableHead"><a href="<? echo $_SERVER['PHP_SELF'] . "?cat=$category" ?>&sort=pprice &page=1">Price</a></td>
			<td class="catTableHead">&nbsp;</td>
		</tr> 
		<?
			// Display entries

			if(!$offset) $offset = 0;
			if($offset + $items_per_page > $item_count) {
				$limit = $item_count;
			} else {
				$limit = $offset + $items_per_page;
			}
			for($i = $offset; $i < $limit; $i++) {
				echo "<tr>\n";
				echo "<td class='catTable'><a href=' " .$_SERVER['PHP_SELF'] . "?cat=$category&detail=" . $entries[$i]['id'] . "'>" .pic2("bikeimages/".strtolower($entries[$i]['code'])."/thumbs/1.jpg")."</a></td>\n";
				echo "<td class='catTable'>" . $entries[$i]['make'] . "</td>\n";
				echo "<td class='catTable'>" . $entries[$i]['model'] . "</td>\n";
				echo "<td class='catTable'>" . $entries[$i]['code'] . "</td>\n";
				echo "<td class='catTable'>" . $entries[$i]['short_description'] . "</td>\n";
				echo "<td class='catTable'>" . $entries[$i]['price'] . "</td>\n";
				echo "<td class='catTable'><a href=' " .$_SERVER['PHP_SELF'] . "?cat=$category&detail=" . $entries[$i]['id'] . "'>View Details &raquo;</a></td>\n";
			}
		?>
</table>
<?
	}
?>
<? pagenav($number_of_pages, $page, $item_count, $show); ?>
<p align="left"><A href="bikecatalogue.php?cat=motorcycle&page=1" name="Top" target="_top">Top&gt;&gt;</A></p>
<p align='right'><a href='javascript:history.go(-1)' class="style3">&laquo; Back&nbsp;</a></p>
<p align='left'>&nbsp;</p>

<?
	include("inc/footer.php");
?>
