<?php
/**
 * User: Munir Alshawi
 * Date: 15-3-24
 * File: Oefening 5.2
 */
?>
<?php
// Definieer de juiste gebruikersnaam en wachtwoord
$correctUsername = "Admin";
$correctPassword = "P@ssword";

// Ontvang de ingediende gebruikersnaam en wachtwoord uit het formulier
$username = $_POST["username"];
$password = $_POST["password"];

// Controleer of de gebruikersnaam en het wachtwoord overeenkomen met de juiste gegevens
if ($username === $correctUsername && $password === $correctPassword) {
	// als de gebruikersnaam en het wachtwoord correct zijn
	echo "<h1>Welkom u bent ingelog</h1>";
	echo "<p> <img src='imges/stickers-schatkist.jpg.jpg'></p>";
} else {
	//als de gebruikersnaam of het wachtwoord onjuist zijn
	echo "<h1>Onjuiste gebruikersnaam of wachtwoord</h1>";
	echo "<p> <a href='Oefening5_2.php'>Probeer het opnieuw.</a></p>";
}

