<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="de" xml:lang="de">
<head>
<title>Foren-Übersicht &bull; Klammsbrücker Herold</title>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="de" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<base href="http://dsaklammsbrueck.forumprofi.de/" />
<link rel="canonical" href="http://dsaklammsbrueck.forumprofi.de/" />

<link rel="stylesheet" href="./style.php?id=3&amp;lang=de_x_sie" type="text/css" />
<!--[if IE]><link rel="stylesheet" href="./styles/DarkFantasy/theme/ie.css" type="text/css" /><![endif]-->
<!--[if lte IE 6]>
<script defer type="text/javascript" src="./styles/DarkFantasy/template/pngfix.js"></script>
<link rel="stylesheet" href="./styles/DarkFantasy/theme/ie6.css" type="text/css" />
<![endif]-->
<script type="text/javascript">
// <![CDATA[


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Geben Sie die Nummer der Seite an, zu der Sie gehen möchten.:', '');
	var per_page = '';
	var base_url = '';

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}



// ]]>
</script>
</head>
<body class="ltr">
<a name="top"></a>

<div id="container">
<div id="wrapper">

<div id="header">
<a href="./index.php"><img src="./styles/DarkFantasy/imageset/site_logo.png" alt="" title="" /></a>
<div id="top_menu">
	<a id="search" href="./search.php">Suche</a>
	<a id="faq" href="./faq.php">FAQ</a>
</div>
</div>

<div id="content1">
<div id="content2">
<div id="content3">

	<br style="clear: both;" />
      
      <div style="text-align: center; float: none; clear: both; width: 730px; max-width: 730px; max-height: 90px; margin: 15px auto 15px auto;">
      <script type='text/javascript'>
            <!--//<![CDATA[
                  var m3_u = (location.protocol=='https:'?'https://fritz.asnetworks.de/www/delivery/ajs.php':'http://fritz.asnetworks.de/www/delivery/ajs.php');
                  var m3_r = Math.floor(Math.random()*99999999999);
                  if (!document.MAX_used) document.MAX_used = ',';
                  document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
                  document.write ("?zoneid=26");
                  document.write ('&amp;cb=' + m3_r);
                  document.write ('&amp;border_color=');
                  document.write ('&amp;bg_color=');
                  document.write ('&amp;link_color=');
                  document.write ('&amp;text_color=');
                  document.write ('&amp;url_color=');
                  document.write ('&amp;category=Spiele%20%26%20Gaming');
                  document.write ('&amp;categoryId=14');
                  if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
                  document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
                  document.write ("&amp;loc=" + escape(window.location));
                  if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
                  if (document.context) document.write ("&context=" + escape(document.context));
                  if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
                  document.write ("'><\/scr"+"ipt>");
            //]]>-->
      </script>
      <noscript><a href='http://fritz.asnetworks.de/www/delivery/ck.php?n=abd7dc3e&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://fritz.asnetworks.de/www/delivery/avw.php?zoneid=26&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=abd7dc3e' border='0' alt='' /></a></noscript>
</div>

	<p class="genmed"><!-- Forumprofi: Danke-Mod, START //--><!-- Forumprofi: Danke-Mod, END //-->
      <a href="./ucp.php?mode=login"><b>Anmelden</b></a> | <a href="./ucp.php?mode=register"><b>Registrieren</b></a>
	</p>
	
	<br style="clear: both;" />
      <table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="./portal.php">Portal</a> &#187; <a href="./index.php">Foren-Übersicht</a></p>
			<p class="datetime">Alle Zeiten sind UTC + 1 Stunde [ Sommerzeit ]</p>
		</td>
	</tr>
	</table>
	
	<br />
	
	<table width="100%" cellspacing="0">
	<tr>
		<td class="gensmall"></td>
		<td class="gensmall" align="right">Aktuelle Zeit: Donnerstag, 30. März 2017, 16:25:51<br /></td>
	</tr>
	</table>

	
	<p class="searchbar">
		<span style="float: left;"><a href="./search.php?search_id=unanswered">Unbeantwortete Themen</a> | <a href="./search.php?search_id=active_topics">Aktive Themen</a></span>
		
	</p>
	

	<br style="clear: both;" /><br />
	
	<div id="wrapheader"></div><span align="right">&nbsp;</span>
<table class="tablebg" cellspacing="1" width="100%">
<tr>
	<th colspan="2" style="text-align: left;">&nbsp;Forum&nbsp;</th>
	<th width="50">&nbsp;Themen&nbsp;</th>
	<th width="50">&nbsp;Beiträge&nbsp;</th>
	<th>&nbsp;Letzter Beitrag&nbsp;</th>
</tr>

		<tr>
			<td class="row1" width="50" align="center"><img src="./styles/DarkFantasy/imageset/forum_read_subforum.png" width="48" height="48" alt="Keine ungelesenen Beiträge" title="Keine ungelesenen Beiträge" /></td>
			<td class="row1" width="100%">
				
				<a class="forumlink" href="./klammsbruecker-herold-f6/">Klammsbrücker Herold</a>
				<p class="forumdesc"></p>
				
					<p class="forumdesc"><strong>Moderator:</strong> <a style="color:#009900;" href="./memberlist.php?mode=group&amp;g=8">Spieler</a></p>
				
					<p class="forumdesc"><strong>Unterforen: </strong> <a href="./tagebuecher-f3/" class="subforum read" title="Keine ungelesenen Beiträge">Tagebücher</a>, <a href="./npc-s-ereignisse-und-mehr-f4/" class="subforum read" title="Keine ungelesenen Beiträge">NPC's, Ereignisse und mehr</a></p>
				
			</td>
			<td class="row2" align="center"><p class="topicdetails">121</p></td>
			<td class="row2" align="center"><p class="topicdetails">556</p></td>
			<td class="row2" align="center" nowrap="nowrap">
				
					<p class="topicdetails">Montag, 17. Oktober 2016, 16:10:12</p>
					<p class="topicdetails"><span style="color: #990000;" class="username-coloured">Rabenmund</span>
						<br /><a href="././npc-s-ereignisse-und-mehr-f4/abstimmungen-zur-neuen-runde-ab-herbst-t356.html#p3101"><img src="./styles/DarkFantasy/imageset/icon_topic_latest.gif" width="18" height="9" alt="Neuester Beitrag" title="Neuester Beitrag" /> Re: Abstimmungen zur Neue...</a>
					</p>
				
			</td>
		</tr>
	
		<tr>
			<td class="row1" width="50" align="center"><img src="./styles/DarkFantasy/imageset/forum_read_subforum.png" width="48" height="48" alt="Keine ungelesenen Beiträge" title="Keine ungelesenen Beiträge" /></td>
			<td class="row1" width="100%">
				
				<a class="forumlink" href="./die-phileassonsaga-f28/">Die Phileassonsaga</a>
				<p class="forumdesc"></p>
				
			</td>
			<td class="row2" align="center"><p class="topicdetails">9</p></td>
			<td class="row2" align="center"><p class="topicdetails">110</p></td>
			<td class="row2" align="center" nowrap="nowrap">
				
					<p class="topicdetails">Sonntag, 02. März 2014, 15:51:46</p>
					<p class="topicdetails"><span style="color: #009900;" class="username-coloured">Firnen Wulfgrimm</span>
						<br /><a href="././terminabsprachen-f29/faschings-we-28-02-02-03--t215.html#p1779"><img src="./styles/DarkFantasy/imageset/icon_topic_latest.gif" width="18" height="9" alt="Neuester Beitrag" title="Neuester Beitrag" /> Re: Faschings-WE (28.02. ...</a>
					</p>
				
			</td>
		</tr>
	
		<tr>
			<td class="row1" width="50" align="center"><img src="./styles/DarkFantasy/imageset/forum_read_subforum.png" width="48" height="48" alt="Keine ungelesenen Beiträge" title="Keine ungelesenen Beiträge" /></td>
			<td class="row1" width="100%">
				
				<a class="forumlink" href="./horasgruppe-f40/">Horasgruppe</a>
				<p class="forumdesc"></p>
				
					<p class="forumdesc"><strong>Moderator:</strong> <a style="color:#0000FF;" href="./memberlist.php?mode=group&amp;g=11">Horasgruppe</a></p>
				
					<p class="forumdesc"><strong>Unterforen: </strong> <a href="./termine-f41/" class="subforum read" title="Keine ungelesenen Beiträge">Termine</a>, <a href="./inneraventurisches-f42/" class="subforum read" title="Keine ungelesenen Beiträge">Inneraventurisches</a></p>
				
			</td>
			<td class="row2" align="center"><p class="topicdetails">6</p></td>
			<td class="row2" align="center"><p class="topicdetails">32</p></td>
			<td class="row2" align="center" nowrap="nowrap">
				
					<p class="topicdetails">Freitag, 03. Juni 2016, 15:37:04</p>
					<p class="topicdetails"><span style="color: #FFFF00;" class="username-coloured">Feban</span>
						<br /><a href="././termine-f41/termin-nach-der-kif-t339.html#p3007"><img src="./styles/DarkFantasy/imageset/icon_topic_latest.gif" width="18" height="9" alt="Neuester Beitrag" title="Neuester Beitrag" /> Re: Termin nach der KIF</a>
					</p>
				
			</td>
		</tr>
	
</table>
	<span class="gensmall"><a href="./ucp.php?mode=delete_cookies">Alle Cookies des Boards löschen</a> | <a href="./memberlist.php?mode=leaders">Das Team</a></span>
	

	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="./portal.php">Portal</a> &#187; <a href="./index.php">Foren-Übersicht</a></p>
			<p class="datetime">Alle Zeiten sind UTC + 1 Stunde [ Sommerzeit ]</p>
		</td>
	</tr>
	</table>


	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4>Wer ist online?</h4></td>
	</tr>
	
	</table>


	<br clear="all" />

	<form method="post" action="./ucp.php?mode=login">
	
	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4><a href="./ucp.php?mode=login">Anmelden</a></h4></td>
	</tr>
	<tr>
		<td class="row1" align="center"><span class="genmed">Benutzername:</span> <input class="post" type="text" name="username" size="10" />&nbsp; <span class="genmed">Passwort:</span> <input class="post" type="password" name="password" size="10" />&nbsp;  <span class="gensmall">Mich bei jedem Besuch automatisch anmelden</span> <input type="checkbox" class="radio" name="autologin" />&nbsp; <input type="submit" class="btnmain" name="login" value="Anmelden" /></td>
	</tr>
	</table>
	<input type="hidden" name="redirect" value="./index.php?" />

	
	</form>


<br clear="all" />

<table class="legend">
<tr>
	<td width="20" align="center"><img src="./styles/DarkFantasy/imageset/forum_unread.png" width="48" height="48" alt="Ungelesene Beiträge" title="Ungelesene Beiträge" /></td>
	<td><span class="gensmall">Neue Beiträge</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/DarkFantasy/imageset/forum_read.png" width="48" height="48" alt="Keine ungelesenen Beiträge" title="Keine ungelesenen Beiträge" /></td>
	<td><span class="gensmall">Keine neuen Beiträge</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="./styles/DarkFantasy/imageset/forum_read_locked.png" width="48" height="48" alt="Keine ungelesenen Beiträge [ gesperrt ]" title="Keine ungelesenen Beiträge [ gesperrt ]" /></td>
	<td><span class="gensmall">Forum gesperrt</span></td>
</tr>
</table>

<div style="text-align: center; float: none; clear: both; width: 730px; max-width: 730px; max-height: 90px; margin: 15px auto 15px auto;">
      <script src="//js.smartredirect.de/js/?h=RSiU8108" type="text/javascript" async></script>
      <script type='text/javascript'>
            <!--//<![CDATA[
                  var m3_u = (location.protocol=='https:'?'https://fritz.asnetworks.de/www/delivery/ajs.php':'http://fritz.asnetworks.de/www/delivery/ajs.php');
                  var m3_r = Math.floor(Math.random()*99999999999);
                  if (!document.MAX_used) document.MAX_used = ',';
                  document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
                  document.write ("?zoneid=27");
                  document.write ('&amp;cb=' + m3_r);
                  document.write ('&amp;border_color=');
                  document.write ('&amp;bg_color=');
                  document.write ('&amp;link_color=');
                  document.write ('&amp;text_color=');
                  document.write ('&amp;url_color=');
                  document.write ('&amp;category=Spiele%20%26%20Gaming');
                  document.write ('&amp;categoryId=14');
                  if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
                  document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
                  document.write ("&amp;loc=" + escape(window.location));
                  if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
                  if (document.context) document.write ("&context=" + escape(document.context));
                  if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
                  document.write ("'><\/scr"+"ipt>");
            //]]>-->
      </script>
      <noscript><a href='http://fritz.asnetworks.de/www/delivery/ck.php?n=a5fcfaba&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://fritz.asnetworks.de/www/delivery/avw.php?zoneid=27&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a5fcfaba' border='0' alt='' /></a></noscript>
</div>
<script type="text/javascript"
  src="http://count.asnetworks.de/count.js">
</script>
<script type="text/javascript"><!--
// 27.05.2010
asn_site_id = "96";
asn_zone_id = "1";
asn_no_referrer = "forumprofi.de, de.to";
Track();
//-->
</script>

<!--
		We request you retain the full copyright notice below including the link to www.phpbb.com.
		This not only gives respect to the large amount of time given freely by the developers
		but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
		the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
		"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
		forums may be affected.

		The phpBB Group : 2006
//-->

</div>
</div>
</div>

<div id="footer">
      <span class="notice">[ <a href="./imprint.php">Impressum</a> ]<br /><br />
	Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group<br />
	DarkFantasy Style by Daniel St. Jules of <a href="http://www.gamexe.net">Gamexe.net</a><br />
	Deutsche Übersetzung durch <a href="http://www.phpbb.de/">phpBB.de</a><br /></span>
</div>

</div>
</div>



<script type="text/javascript">
document.write ("<scr"+"ipt type='text/javascript' src='http://margareta.asnetworks.de/delivery.php?sid=2&");
document.write ("time="+new Date().getTime());
document.write ("'></scr"+"ipt>");
</script>
</body>
</html>