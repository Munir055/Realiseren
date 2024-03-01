<?php
function CheckTrafficLight($lightColor, $ambulanceApproaching)
{
	if ($lightColor === "rood" || $lightColor === "oranje") {
		echo "Stop, het verkeerslicht staat op " . $lightColor . ".";
	} else {
		if ($ambulanceApproaching == true) {
			echo "Je mag niet doorrijden want er komt een ambulance aan.";
		} else {
			echo "Je mag doorrijden, het verkeerslicht staat op groen.";
		}
	}
}

function ShowMenu($day)
{
	switch ($day) {
		case "maandag":
			echo "Op maandag eten we spaghetti.";
			break;
		case "dinsdag":
			echo "Op dinsdag eten we doner.";
			break;
		case "woensdag":
			echo "Op woensdag eten we sushi.";
			break;
		case "donderdag":
			echo "Op donderdag eten we pizza.";
			break;
		case "vrijdag":
			echo "Op vrijdag eten we hamburgers.";
			break;
		case "zaterdag":
			echo "Op zaterdag eten we barbecue.";
			break;
		case "zondag":
			echo "Op zondag eten we pannenkoeken.";
			break;
		default:
			echo "Er is geen menu beschikbaar voor deze dag.";
	}
}
function Ladiesnight($gender, $age)
{
	if (($age >= 18 && $gender == "vrouw") || $age >= 70) {
		echo "Welkom op Ladies Night, gratis toegang!";
	} else {
		echo "Helaas, geen toegang tot Ladies Night.";
	}
}
?>
