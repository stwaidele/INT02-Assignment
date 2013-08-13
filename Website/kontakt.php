<?php 
$title="Kontakt";
$desc="Europaweite Städtereisen zum unschlagbaren Preis - Komfort-Hotels - Premium Class Busse";
include($_SERVER['DOCUMENT_ROOT'].'/header.php');
?>
<div id="inner-wrapper" class="clearfix">
	<div id="content">
		<div id="breadcrump">
			<a href="/" title="Zurück zur Startseite">Start</a> > Kontakt
		</div>
		<h1>Kontakt</h1>
        <!-- Form -->
		<form id="contact-form" onsubmit="return checkForm()" action="/" method="post">
			<h2>Bitte füllen Sie das Formular aus um mit uns in Kontakt zu treten. Dankeschön.</h2>
			<table id="contact-form">
			<tr>
					<td>Reise: *</td>
					<td><input id="reise" type="text" tabindex="1" value="<?php echo (isset($_GET['reise'])?$_GET['reise']:"Allgemein"); ?>" required autofocus></td>
			</tr>
			<tr>
					<td>Name: *</td>
					<td><input id="name" placeholder="Bitte Name angeben" type="text" tabindex="1" required autofocus></td>
			</tr>
			<tr>
					<td>E-Mail: *</td>
					<td><input id="email" placeholder="Bitte E-Mail angeben" type="email" tabindex="2" required></td>
			</tr>
			<tr>
					<td>Telefonnummer:</td>
					<td><input id="tel" placeholder="Bitte Ihre Telefonnummer angeben" type="tel" tabindex="3"></td>
			</tr>
			<tr>
					<td>Nachricht: *</td>
					<td><textarea id="message" placeholder="Bitte Anfragetext angeben" tabindex="5" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<button name="submit" type="submit" id="contact-submit">Anfrage absenden</button>
				</td>
			</tr>
		</table>
		</form>
		<!-- /Form -->
		<br />* benötigt
	</div>
	<div id="sidebar" class="clearfix">
		<div class="sidebar-topic">E-Mail<span class="corner-right"></span></div>
		info@deinbus.de
		<div class="sidebar-topic">Telefon<span class="corner-right"></span></div>
		+49 721 764 98 38
		<div class="sidebar-topic">Fax<span class="corner-right"></span></div>
		+49 721 764 98 39
		<div class="sidebar-topic">Social Media<span class="corner-right"></span></div>
		<a href="http://facebook.com/deinbus">Facebook</a><br />
		<a href="http://plus.google.com/deinbus">Google+</a>
	</div>
	<div class="clear"></div>
</div>
<script src="/js/kontakt.js"></script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>

