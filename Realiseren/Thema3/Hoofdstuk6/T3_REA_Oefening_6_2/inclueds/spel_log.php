<?php
session_start(); // Start de sessie

if(!isset($_SESSION["user_score"] ))
{
	$_SESSION["user_score"] = 0;
}

if(!isset($_SESSION["computer_score"] ))
{
	$_SESSION["computer_score"] = 0;
}

if (isset($_GET['keuze']))
{

	$user_choice = $_GET['keuze'];

	// Taak 3: Keuze van de computer bepalen
	$opties = array("steen", "papier", "schaar");
	$computer_choice = $opties[rand(0, 2)];

	echo "<br><p>Jij koos: <img src='images/$user_choice.jpg'></p>";
	echo "<p>De computer koos: <img src='images/$computer_choice.jpg'></p>";

	// Taak 4: Bepalen van de winnaar
	$winning_conditions = array(
		"steen" => "schaar",
		"papier" => "steen",
		"schaar" => "papier"
	);

	if ($user_choice == $computer_choice)
	{
		echo "<p>Het is gelijkspel!</p>";
	} elseif ($winning_conditions[$user_choice] == $computer_choice)
	{
		echo "<p>Jij wint!</p>";
		$_SESSION['user_score']++;
	} else {
		echo "<p>De computer wint!</p>";
		$_SESSION['computer_score']++;
	}

	echo "<p>Jouw score: " . $_SESSION['user_score'];
	echo "<p>Computer score: " . $_SESSION['computer_score'];

	// Taak 6: Score bijhouden en controleren op winnaar
	if (!isset($_SESSION['user_score']))
	{
		$_SESSION['user_score'] = 0;
	}
	if (!isset($_SESSION['computer_score']))
	{
		$_SESSION['computer_score'] = 0;
	}

	// Controleren op winnaar
	if ($_SESSION['user_score'] >= 5 || $_SESSION['computer_score'] >= 5)
	{
		echo "<p>Stand: Jij {$_SESSION['user_score']} - Computer {$_SESSION['computer_score']}</p>";

		if ($_SESSION['user_score'] > $_SESSION['computer_score'])
		{
			echo "<p>Jij bent de winnaar!</p>";
		}
		elseif ($_SESSION['user_score'] < $_SESSION['computer_score'])
		{
			echo "<p>De computer is de winnaar!</p>";
		}
		else {
			echo "<p>Het is gelijkspel!</p>";
		}

		// Sessie vernietigen en spel opnieuw starten
		session_destroy();
		exit(); // Stop met de uitvoering van de rest van de code
	}
}
?>