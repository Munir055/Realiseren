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
		echo 'Efteling home pagina';
		?>
	</title>
    <link rel="stylesheet" href="styels/styels.css">
	<!-- Een logo laten zien in het tabblad -->
	<link rel="icon" type="images/x-icon" href="images/channels4_profile.jpg">
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
	<h1 class="Tekst">En toen... was ik in een <br> wereld vol wonderen</h1>
    <span>   Ontdek de Efteling </span>
</article>

    <div>
        <span class="mu">Tickets en reserveren</span>
         <span class="kom">Blijf slapen</span>
         <h2>
                 Bezoek de Wereld vol Wonderen
         </h2>
             <P>
                 Plan je bezoek aan de Efteling. Kinderen t/m 3 jaar gratis.
            </P>
    </div>
        <br>
        <br>
    <div class="kind">
        <img src="images/kinderen.jpg" alt="kin" width="240" height="180">
       <h2>
                Sprookjesachtig overnachten in de Efteling
       </h2>
            <p>
                &#10004; Kinderen t/m 3 jaar gratis
            </p>
             <p>
                &#10004; Onbeperkt toegang tot de Efteling tijdens je verblijf
            </p>
             <p>
                  &#10004; Onze sfeervolle hotels en vakantieparken liggen direct naast het attractiepark
             </p>
                 <span class="kin">
                         Ontdek alle accommodaties
                </span>
    </div>
    <div class="box">
        <div class="park">
            <img src="images/park.jpg" alt="kin" width="200" height="140">
            <h2>Attractiepark</h2>
            <p>
                Ontdek een Wereld vol Wonderen.<br>
                Bozoek Nederlands grootste en leukste attractiepark de Efteling
            </p>
        </div>
        <div class="overnacht">
            <img src="images/optimized.jpg" alt="kin" width="200" height="140">
            <h2>Kom overnacht</h2>
            <p>
                Geniet van nog meer momenten samen en blijf sprookjesachtig overnachten in een van de vele accommodaties.
            </p>
        </div>
        <div class="theater">
            <img src="images/theater.jpg" alt="kin" width="200" height="140">
            <h2>CARO, een betoverende Efteling-theatershow</h2>
            <p>
                Een visueel spektakel in het Efteling Theater voor de hele familie!
            </p>
        </div>
    </div>
<article class="kaart">
    <h1 class="Tekx">Ontdek de wondere wereld van de Efteling</h1>
    <span class="sp">Open de plattegrond</span>
</article>

</body>
</html>

