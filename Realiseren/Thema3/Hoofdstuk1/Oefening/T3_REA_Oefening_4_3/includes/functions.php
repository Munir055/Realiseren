<?php
// Functie om renteberekening uit te voeren
function CalculateInterest($prijs, $gespaardBedrag)
{
	// Uitleg over de renteberekening
	echo "Met de rente van 6% proberen ik de auto kopen.";

	// Variabele voor het aantal maanden
	$counter = 0;

	// Zolang het gespaarde bedrag kleiner is dan de prijs van de auto
	while ($gespaardBedrag < $prijs)
	{
		// Verhoog de teller met 1
		$counter++;

		// Voeg 6% rente toe aan het gespaarde bedrag
		$gespaardBedrag *= 1.06;

		// Toon het nieuwe bedrag per maand
		echo "<br>Na maand $counter, heb ik €" . number_format($gespaardBedrag, 2) . " gespaard.";
	}

	// Toon het aantal maanden wanneer de auto kan worden gekocht
	echo "<br>Na $counter maanden heb ik genoeg gespaard om de auto kopen.";
}
// Test de functie
$prijs = 20000;
$gespaardBedrag = 13000;
CalculateInterest($prijs, $gespaardBedrag);
// Functie om een piramide te maken
function createPiramid($hoogte)
{
	// Buitenste loop voor de rijen van de piramide
	for ($i = 1; $i <= $hoogte; $i++)
	{
		// Binnenste loop voor het aantal cijfers per rij
		for ($j = 1; $j <= $i; $j++)
		{
			echo $j; // Toon het cijfer
		}
		echo "<br>"; // Einde van de rij
	}

	// Terugloop voor de piramide
	for ($i = $hoogte - 1; $i >= 1; $i--)
	{
		// Binnenste loop voor het aantal cijfers per rij
		for ($j = 1; $j <= $i; $j++)
		{
			echo $j; // Toon het cijfer
		}
		echo "<br>"; // Einde van de rij
	}
}

// Test de functie
$hoogte = 9;
createPiramid($hoogte);
?>