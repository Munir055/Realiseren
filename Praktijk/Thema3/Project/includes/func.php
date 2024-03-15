<?php
/**
 * User: Munir Alshawi
 * Date: 23-02-2024
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
	    <?php
	    echo 'TANDARTS DEN BOSCH - Behandelingen bij Tandarts Den Bosch ';
	    ?>
    </title>
    <!-- Linken naar CSS bestand -->
    <link rel="stylesheet" href="../styles/stylescheet.css">
    <script src="../javascript/javascrept.js"></script>
    <!-- Een logo laten zien in het tabblad -->
    <link rel="icon" type="images/x-icon" href="../imges/images.png">
    <a href="../peges/index.php"><img src="../imges/logo_1.png" class="logo" alt="Logo"></a>
</head>
<body>
<!-- Navigatiebalk maken -->
<header>
	<?php
	include "../includes/nav.php";
	?>
</header>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$score = 0;

		// Array van vragen en bijbehorende scores
		$vraag = array(
			">= 2 keer per dag" => 10,
			"1 keer per dag" => 5,
			"minder dan 1 keer per dag" => -10,
			"rager" => 10,
			"tandenstoker" => 5,
			"niks" => -5,
			"ja" => 10,
			"minder dan 1x per jaar" => 5,
			"nee" => 0,
		);

		// Verwerk de antwoorden en bereken de totale score
		for ($i = 1; $i <= 9; $i++)
		{
			if (isset($_POST['vraag' . $i]))
			{
				$score += $_POST['vraag' . $i];
			}
		}

		// Geef het advies op basis van de score
		if ($score >= 80)
		{
			$advies = 'U verzorgt uw gebit uitstekend!';
		}
		elseif ($score >= 60 && $score < 80)
		{
			$advies = 'U verzorgt uw gebit goed, maar er zijn nog verbeteringen nodig.';
		}
		elseif ($score >= 20 && $score < 60)
		{
			$advies = 'U verzorgt uw gebit matig. Raadpleeg een tandarts voor advies.';
		}
		elseif ($score < 20)
		{
			$advies = 'U verzorgt uw gebit onvoldoende. Raadpleeg direct een tandarts.';
		}
		else {
			$advies = 'U heeft geen score behaald. Controleer uw antwoorden en probeer opnieuw.';
		}

		echo "<h2>Advies: $advies</h2>";
	}
	?>
</body>
</html>
