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
	<?php
	include "../includes/nav.php";
	?>
</header>
<div class="mu">
    <h1>Gebitstest</h1>
    <form method="Post" action="../includes/func.php">
        <p>
            1) Hoe vaak poets je per dag?
        </p>
            <label>
                <input type="radio" name="vraag1" checked="checked" value="10">2 keer per dag<br>
            </label>
            <label>
                <input type="radio" name="vraag1" value="5">1 keer per dag<br>
            </label>
            <label>
                <input type="radio" name="vraag1" value=0"> minder dan 1 keer per dag<br>
            </label>
        <p>
            2) Gebruik je na iedere maaltijd of minimaal 1 keer per dag?<br>
        </p>
            <label>
                <input type="radio" name="vraag2" checked="checked" value="10"> Rager<br>
            </label>
            <label>
                <input type="radio" name="vraag2" value="5"> Tandenstoker<br>
            </label>
            <label>
                <input type="radio" name="vraag2" value="0"> Niks<br>
            </label>
        <p>
            3) Ga je ieder halfjaar naar een mondhygieniste om je tandplak te laten verwijderen?
        </p>
            <label>
                <input type="radio" name="vraag3" checked="checked" value="10"> Ja<br>
            </label>
            <label>
                <input type="radio" name="vraag3" value="5"> Minder dan 1x per jaar<br>
            </label>
            <label>
                <input type="radio" name="vraag3" value="0"> Nee<br>
            </label>
        <p>
            4) Gebruik je een electrische tandenborstel?
        </p>
            <label>
                <input type="radio" name="vraag4" checked="checked" value="10"> Ja<br>
            </label>
            <label>
                <input type="radio" name="vraag4" value="5"> Nee<br>
            </label>
        <p>
            5) Gebruik je een tandpasta met fluoride?
        </p>
             <label>
                 <input type="radio" name="vraag5" checked="checked" value="10"> Ja<br>
             </label>
             <label>
                 <input type="radio" name="vraag5" value="5"> Nee<br>
             </label>

        <p>
            6) Heb je wel eens last van een stinkende adem?
        </p>
             <label>
                 <input type="radio" name="vraag6" checked="checked" value="10"> Nee<br>
             </label>
             <label>
                 <input type="radio" name="vraag6" value="0"> Ja<br>
             </label>

        <p>
            7) Gebruik je wel eens een tongschraper?
        </p>
            <label>
                <input type="radio" name="vraag7" checked="checked" value="10"> Ja<br>
            </label>
            <label>
                <input type="radio" name="vraag7" value="5"> Nee<br>
            </label>

        <p>
            8) Heb je weleens last van bloedend tandvlees?
        </p>
            <label>
                <input type="radio" name="vraag8" checked="checked" value="10"> Nee<br>
            </label>
            <label>
                <input type="radio" name="vraag8" value="-10"> Ja<br>
            </label>

        <p>
            9) Poets je minimaal 2 minuten en werk je alles grondig af?
        </p>
            <label>
                 <input type="radio" name="vraag9"checked="checked"  value="10"> Ja<br>
            </label>
         <label>
             <input type="radio" name="vraag9" value="5"> Nee<br>
         </label>

        <input type="submit" value="Verstuur">

    </form>
</body>
</html>
