<?php
/**
 * User: Munir Alshawi
 * Date: 14-3-24
 * File: Oefening 5.1
 */
?>
<?php

include "includes/header.php";

echo "<pre>";
print_r($_GET);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
	echo "Leerjaar: " . $_GET["leerjaar"] . "<br>";

	if (isset($_GET["succesklas"]))
	{
		echo "Aanmelding succesklas: Ja<br>";
	} else {
		echo "Aanmelding succesklas: Nee<br>";
	}
	if (isset($_GET["verwijderen"]))
	{
		echo "Verwijderen persoonsgegevens: Ja<br>";
	} else {
		echo "Verwijderen persoonsgegevens: Nee<br>";
	}
	echo "Reden van uitschrijving: " . $_GET["reden"] . "<br>";
	echo "Opmerkingen: " . $_GET["opmerkingen"] . "<br>";
}

