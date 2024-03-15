<?php
/**
 * User: Munir Alshawi
 * Date: 14-3-24
 * File: Oefening 5.1
 */
?>
<?php
// Inclusief het bestand "header.php"
	include "includes/header.php";
?>

<h2>Uitschrijfformulier</h2>

<form action="Oefenining5.1-resultaat.php" method="GET">
	<label for="voornaam">Voornaam:</label><br>
	<input type="text" id="voornaam" name="voornaam"><br>

	<label for="achternaam">Achternaam:</label><br>
	<input type="text" id="achternaam" name="achternaam"><br>

	<label for="studentnummer">Studentnummer:</label><br>
	<input type="text" id="studentnummer" name="studentnummer"><br>

	<label for="datum">Datum van uitschrijving:</label><br>
	<input type="date" id="datum" name="datum"><br>

	<label for="leerjaar">Leerjaar:</label><br>
	<input type="radio" id="leerjaar1" name="leerjaar" value="1" checked="checked">
	<label for="leerjaar1">1</label><br>
	<input type="radio" id="leerjaar2" name="leerjaar" value="2">
	<label for="leerjaar2">2</label><br>
	<input type="radio" id="leerjaar3" name="leerjaar" value="3">
	<label for="leerjaar3">3</label><br>

	<label for="succesklas">Aanmelding succesklas:</label>
	<input type="checkbox" id="succesklas" name="succesklas" value="ja"><br>

	<label for="verwijderen">Verwijderen persoonsgegevens:</label>
	<input type="checkbox" id="verwijderen" name="verwijderen" value="ja"><br>

	<label for="reden">Reden van uitschrijving:</label><br>
	<select id="reden" name="reden">
		<option value="geen_reden">Selecteer een reden</option>
		<option value="gezin_verhuizing">Gezin verhuizing</option>
		<option value="overstap_andere_school">Overstap naar andere school</option>
		<option value="studieproblemen">Studieproblemen</option>
		<option value="andere_reden">Andere reden</option>
	</select><br>

	<label for="opmerkingen">Opmerkingen:</label><br>
	<textarea id="opmerkingen" name="opmerkingen" rows="4" cols="50"></textarea><br>

	<input type="submit" value="Versturen">
</form>
