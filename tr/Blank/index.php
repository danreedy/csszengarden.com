<?php

include '../../masterlist.php';
$letterarray = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Dave Shea" />
	<meta name="keywords" content="design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design." />
	<meta name="robots" content="all" />
	<title>css Zen Garden: The Beauty in CSS Design</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" title="currentStyle">
		@import "<?php echo $loadCSS; ?>";
	</style>
<?php

if($isNN4) {
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
	echo $isNN4;
	echo "\" />";
}

?>
	<link rel="Shortcut Icon" type="image/x-icon" href="http://www.csszengarden.com/favicon.ico" />	
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml" />
</head>

<!--


	This xhtml document is marked up to provide the designer with the maximum possible flexibility.
	There are more classes and extraneous tags than needed, and in a real world situation, it's more
	likely that it would be much leaner.
	
	However, I think we can all agree that even given that, we're still better off than if this had been
	built with tables.


-->

<body id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>css Zen Garden</span></h1>
			<h2><span>The Beauty of <acronym title="Cascading Style Sheets">CSS</acronym> Design</span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span>A demonstration of what can be accomplished visually through <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;based design. Select any style sheet from the list to load it into this page.</span></p>
			<p class="p2"><span>Download the sample <a href="zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> and <a href="zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a></span></p>
		</div>

		<div id="preamble">
			<h3><span>The Road to Enlightenment</span></h3>
			<p class="p1"><span>Littering a dark and dreary road lay the past relics of browser&#8211;specific tags, incompatible <acronym title="Document Object Model">DOM</acronym>s, and broken <acronym title="Cascading Style Sheets">CSS</acronym> support.</span></p>
			<p class="p2"><span>Today, we must clear the mind of past practices. Web enlightenment has been achieved thanks to the tireless efforts of folk like the <acronym title="World Wide Web Consortium">W3C</acronym>, <acronym title="Web Standards Project">WaSP</acronym> and the major browser creators.</span></p>
			<p class="p3"><span>The css Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn to use the (yet to be) time&#8211;honored techniques in new and invigorating fashion. Become one with the web.</span></p>
		</div>
	</div>

	<div id="supportingText">
		<div id="explanation">
			<h3><span>So What is This About?</span></h3>
			<p class="p1"><span>There is clearly a need for <acronym title="Cascading Style Sheets">CSS</acronym> to be taken seriously by graphic artists. The Zen Garden aims to excite, inspire, and encourage participation. To begin, view some of the existing designs in the list. Clicking on any one will load the style sheet into this very page. The code remains the same, the only thing that has changed is the external .css file. Yes, really.</span></p>
			<p class="p2"><span><acronym title="Cascading Style Sheets">CSS</acronym> allows complete and total control over the style of a hypertext document. The only way this can be illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are placed in the hands of those able to create beauty from structure. To date, most examples of neat tricks and hacks have been demonstrated by structurists and coders. Designers have yet to make their mark. This needs to change.</span></p>
		</div>

		<div id="participation">
			<h3><span>Participation</span></h3>
			<p class="p1"><span>Graphic artists only please. You are modifying this page, so strong <acronym title="Cascading Style Sheets">CSS</acronym> skills are necessary, but the example files are commented well enough that even <acronym title="Cascading Style Sheets">CSS</acronym> novices can use them as starting points. Please see the <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources"><acronym title="Cascading Style Sheets">CSS</acronym> Resource Guide</a> for advanced tutorials and tips on working with <acronym title="Cascading Style Sheets">CSS</acronym>.</span></p>
			<p class="p2"><span>You may modify the style sheet in any way you wish, but not the <acronym title="HyperText Markup Language">HTML</acronym>. This may seem daunting at first if you&#8217;ve never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.</span></p>
			<p class="p3"><span>Download the sample <a href="zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> and <a href="zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a> to work on a copy locally. Once you have completed your masterpiece (and please, don&#8217;t submit half&#8211;finished work) upload your .css file to a web server under your control. <a href="http://www.mezzoblue.com/zengarden/submit/" title="Use the contact form to send us your CSS file">Send us a link</a> to the file and if we choose to use it, we will spider the associated images. Final submissions will be placed on our server.</span></p>
			<p class="p4"><span>update: I&#8217;m looking for translators. If you are fluent in English and another language, this is another way to get involved with the project. Please <a href="http://www.mezzoblue.com/contact/" title="Send me an e-mail mentioning which languages you are fluent in.">contact me</a> for details. Existing translations are <a href="http://www.mezzoblue.com/zengarden/translations/">available</a>.</span></p>
		</div>

		<div id="benefits">
			<h3><span>Benefits</span></h3>
			<p class="p1"><span>Why participate? For recognition, inspiration, and a resource we can all refer to when making the case for <acronym title="Cascading Style Sheets">CSS</acronym>&#8211;based design. This is sorely needed, even today. More and more major sites are taking the leap, but not enough have. One day this gallery will be a historical curiosity; that day is not today.</span></p>
		</div>

		<div id="requirements">
			<h3><span>Requirements</span></h3>
			<p class="p1"><span>We would like to see as much <acronym title="Cascading Style Sheets, version 1">CSS1</acronym> as possible. <acronym title="Cascading Style Sheets, version 2">CSS2</acronym> should be limited to widely&#8211;supported elements only. The css Zen Garden is about functional, practical <acronym title="Cascading Style Sheets">CSS</acronym> and not the latest bleeding&#8211;edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your <acronym title="Cascading Style Sheets">CSS</acronym> validates.</span></p>
			<p class="p2"><span>Unfortunately, designing this way highlights the flaws in the various implementations of <acronym title="Cascading Style Sheets">CSS</acronym>. Different browsers display differently, even completely valid <acronym title="Cascading Style Sheets">CSS</acronym> at times, and this becomes maddening when a fix for one leads to breakage in another. View the <a href="http://www.mezzoblue.com/zengarden/resources/" title="A listing of CSS-related resources">Resources</a> page for information on some of the fixes available. Full browser compliance is still sometimes a pipe dream, and we do not expect you to come up with pixel&#8211;perfect code across every platform. But do test in as many as you can. If your design doesn&#8217;t work in at least IE5+/Win and Mozilla (run by over 90% of the population), chances are we won&#8217;t accept it.</span></p>
			<p class="p3"><span>We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum; tasteful nudity is acceptable, outright pornography will be rejected.</span></p>
			<p class="p4"><span>This is a learning exercise as well as a demonstration. You retain full copyright on your graphics, but we ask you release your <acronym title="Cascading Style Sheets">CSS</acronym> under a Creative Commons license identical to the <a href="http://creativecommons.org/licenses/sa/1.0/" title="View the Zen Garden's license information.">one on this site</a> so that others may learn from your work.</span></p>
			<p class="p5"><span>Bandwidth graciously donated by <a href="http://www.dreamfirestudios.com/">DreamFire Studios</a>.</span>&nbsp;</p>
		</div>

		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=sec508&amp;test=" title="Check the accessibility of this site according to U.S. Section 508">508</a> &nbsp;
			<a href="http://bobby.watchfire.com/bobby/bobbyServlet?URL=http%3A%2F%2Fwww.mezzoblue.com%2Fzengarden%2F&amp;output=Submit&amp;gl=wcag1-aaa&amp;test=" title="Check the accessibility of this site according to WAI Content Accessibility Guidelines 1">aaa</a>
		</div>

	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="lselect">
				<h3 class="select"><span>Select a Design:</span></h3>
				<ul>
<?php
					$c = 0;
					for ($a = ($listStart + 1); $a <= $listEnd; $a++) {
						$b = $listEnd - $c;
						$d = $letterarray[$c];
						$tempLink = linkMe($filename[$b]);
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${tempLink}&amp;page=${thisPage}\" title=\"AccessKey: ${d}\" accesskey=\"${d}\">${styleName[$b]}</a> by <a href=\"${styleURL[$b]}\" class=\"c\">${styleCreator[$b]}</a></li>";
						echo "\n";
						$c = $c + 1;
					}
?>
				</ul>
			</div>

			<div id="larchives">
				<h3 class="archives"><span>Archives:</span></h3>
				<ul>
<?php
					
					$forward = $thisPage + 1;
					$backward = $thisPage - 1;
					
					if ($listStart >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"${thisFile}?cssfile=${currentDesign}&amp;page=${forward}\" title=\"View next set of designs. AccessKey: n\" accesskey=\"n\"><span class=\"accesskey\">n</span>ext designs &raquo;</a></li>\n";
					}

					if ($thisPage >= 1) {
						echo "\t\t\t\t\t";
						echo "<li><a href=\"/${thisFile}?cssfile=${currentDesign}&amp;page=${backward}\" title=\"View previous set of designs. AccessKey: p\" accesskey=\"p\">&laquo; <span class=\"accesskey\">p</span>revious designs</a></li>\n";
					}
?>
					<li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Vie<span class="accesskey">w</span> All Designs</a></li>
				</ul>
			</div>
			
			<div id="lresources">
				<h3 class="resources"><span>Resources:</span></h3>
				<ul>
<?php
					echo "\t\t\t\t\t";
					echo "<li><a href=\"${currentDesign}\" title=\"View the source CSS file for the currently-viewed design, AccessKey: v\" accesskey=\"v\"><span class=\"accesskey\">V</span>iew This Design&#8217;s <acronym title=\"Cascading Style Sheets\">CSS</acronym></a></li>";
?>
					<li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey">R</span>esources</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file. AccessKey: s" accesskey="s"><span class="accesskey">S</span>ubmit a Design</a></li>
					<li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t"><span class="accesskey">T</span>ranslations</a></li>
				</ul>
			</div>
		</div>
	</div>


</div>

<!-- These extra divs/spans may be used as catch-alls to add extra imagery. -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body>
</html>