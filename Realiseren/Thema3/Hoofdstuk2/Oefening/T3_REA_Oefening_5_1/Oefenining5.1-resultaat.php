<?php
/**
 * User: Munir Alshawi
 * Date: 14-3-24
 * File: Oefening 5.1
 */
?>
<?php

<<<<<<< HEAD
// Inclusief het bestand "header.php", dat waarschijnlijk HTML-code bevat voor de kopsectie van de pagina.
include "includes/header.php";

// Print de inhoud van de $_GET-super global array voor debug-doeleinden.
=======
include "includes/header.php";

>>>>>>> origin/master
echo "<pre>";
print_r($_GET);
echo "</pre>";

<<<<<<< HEAD
// Controleer of de request methode GET is.
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	// Echo de waarde van de 'leerjaar'-parameter als deze bestaat.
	echo "Leerjaar: " . $_GET["leerjaar"] . "<br>";

	// Controleer of de 'succesklas'-parameter bestaat in de GET-request.
	// Echo of de gebruiker is ingeschreven in de "succesklas" of niet.
=======
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	echo "Leerjaar: " . $_GET["leerjaar"] . "<br>";

>>>>>>> origin/master
	if (isset($_GET["succesklas"]))
	{
		echo "Aanmelding succesklas: Ja<br>";
	} else {
		echo "Aanmelding succesklas: Nee<br>";
	}
<<<<<<< HEAD

	// Controleer of de 'verwijderen'-parameter bestaat in de GET-request.
	// Echo of de gebruiker heeft verzocht om hun persoonsgegevens te verwijderen of niet.
=======
>>>>>>> origin/master
	if (isset($_GET["verwijderen"]))
	{
		echo "Verwijderen persoonsgegevens: Ja<br>";
	} else {
		echo "Verwijderen persoonsgegevens: Nee<br>";
	}
<<<<<<< HEAD

	// Echo de waarde van de 'reden' (reden) parameter.
	echo "Reden van uitschrijving: " . $_GET["reden"] . "<br>";

	// Echo de waarde van de 'opmerkingen' (opmerkingen) parameter.
	echo "Opmerkingen: " . $_GET["opmerkingen"] . "<br>";
}
?>
=======
	echo "Reden van uitschrijving: " . $_GET["reden"] . "<br>";
	echo "Opmerkingen: " . $_GET["opmerkingen"] . "<br>";
}
>>>>>>> origin/master

