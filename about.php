<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'About' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'about';

$page[ 'body' ] .= "
<div class=\"body_padded\">
<h2>About</h2>
<p>Tisu's Gosh Darned Vulnerable Web Application(TGDVW), based on the Damn Vulnerable Web Application (DVWA), has been customized specifically for use within TISU. It serves as a practical tool for aspiring cybersecurity professionals to hone their skills in a controlled environment. Additionally, it aids individuals in gaining insights into the intricacies of securing web applications and supports educators and students in teaching and learning web application security.</p>
<p>Below, you'll find pertinent links and credits related to DVWA. Prior to August 2020, all DVWA materials were copyrighted from 2008 to 2015 by RandomStorm & Ryan Dewhurst. Subsequently, all materials are copyrighted by Robin Wood, with probable contribution from Ryan Dewhurst.</p>

	<h2>Links</h2>
	<ul>
		<li>Project Home: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA' ) . "</li>
		<li>Bug Tracker: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA/issues' ) . "</li>
		<li>Wiki: " . dvwaExternalLinkUrlGet( 'https://github.com/digininja/DVWA/wiki' ) . "</li>
	</ul>

	<h2>Credits</h2>
	<ul>
		<li>Brooks Garrett: " . dvwaExternalLinkUrlGet( 'http://brooksgarrett.com/','www.brooksgarrett.com' ) . "</li>
		<li>Craig</li>
		<li>g0tmi1k: " . dvwaExternalLinkUrlGet( 'https://blog.g0tmi1k.com/','g0tmi1k.com' ) . "</li>
		<li>Jamesr: " . dvwaExternalLinkUrlGet( 'https://www.creativenucleus.com/','www.creativenucleus.com' ) . "</li>
		<li>Jason Jones</li>
		<li>RandomStorm</li>
		<li>Ryan Dewhurst: " . dvwaExternalLinkUrlGet( 'https://wpscan.com/','wpscan.com' ) . "</li>
		<li>Shinkurt: " . dvwaExternalLinkUrlGet( 'http://www.paulosyibelo.com/','www.paulosyibelo.com' ) . "</li>
		<li>Tedi Heriyanto: " . dvwaExternalLinkUrlGet( 'http://tedi.heriyanto.net/','tedi.heriyanto.net' ) . "</li>
		<li>Tom Mackenzie</li>
		<li>Robin Wood: " . dvwaExternalLinkUrlGet( 'https://digi.ninja/','digi.ninja' ) . "</li>
		<li>Zhengyang Song: " . dvwaExternalLinkUrlGet( 'https://github.com/songzy12/','songzy12' ) . "</li>
	</ul>

	<h2>License Information</h2>
	<p>TISU's Gosh Darned Vulnerable Web Application (TGDVWA) has been created from the Damn Vulnerable Web Application (DVWA) and is distributed under the terms of the GNU General Public License, allowing for redistribution and modification under certain conditions.</p>
</div>\n";

dvwaHtmlEcho( $page );

exit;

?>
