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
    <a href="index.php"><img src="../imges/logo_1.png" class="logo" alt="Logo"></a>
</head>
<body>
<!-- Navigatiebalk maken -->
<header>
    <!--linken naar de navigatie--->
    <?php
	include "includes/nav.php";
	?>
</header>
<article class="banner">
    <h1 class="Tekst">  TANDARTS DEN BOSCH  </h1>
    <h2 class = "DenBosch">Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten</h2>
    <h3 class="Betrouwbaar"> Betrouwbaar. Bereikbaar. Betaalbaar. </h3>
    <span> Inschrijven </span>
    <span> Aspraak maken</span>
</article>
<h1>TANDARTS DEN BOSCH NEEMT NOG PATIËNTEN AAN!</h1>
<P>U kunt zich eenvoudig online inschrijven bij onze praktijk. Uiteraard staan we u <br>ook graag telefonisch te woord. </P>
</body>
</html>
