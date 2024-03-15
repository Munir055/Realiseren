<?php
/**
 * User: Munir Alshawi
 * Date: 22-2-24
 * File: T3_REA_Oefening3.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'T3_REA_Oefening_3_1.php';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/styles3.1.css" rel="stylesheet">
</head>

<header>
    <h1>
        <?php
        echo 'Instructies';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Hoofdmenu</h2>
        <h3>Hoofdstuk 1:</h3>
        <ul>
            <li><a href="template.php">Oefening 2.1</a></li>
            <li><a href="template.php">Oefening 2.2</a></li>
        </ul>
    </nav>
    <section>
        <?php
        // Definiëren van variabelen
        echo '<H1> Taak 1</H1>';
        $Carnaval='Carnaval';
        $nummer='3';
        $dagen='zondag, maandag, en dinsdag';
        $cijfer='40';
        $land='Nederland';
        $regio='Noord-Brabant';
        $eten='Worstenbrood, koffie Sccheobbeler';
        // Tekst met variabelen ingebed printen
        $story= "<p>$Carnaval is van oorsprong een gekerstend heidens volksfeest. Het duurt                    
       officieel 3 dagen, $dagen direct voorafgaand aan de                                        
       vastentijd van $cijfer dagen. $Carnaval is bij uitstek het feest van zotheid, spot         
       en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel                     
       $land een gebruik om carnaval op carnavalsvrijdag te openen. Op                            
       Aswoensdag wordt carnaval afgesloten, maar de tradities verschillen per                    
       regio. In het overgrote deel van $regio wordt er afgesloten met                            
       $eten soms met een Brabantse koffietafel.</p> ";
        echo "$story";

        echo"<h1>Taak2</h1>";
        $bon1 = 10;
        $bon2 = 20;
        $bon3 = 30;
        $bonoptellen = $bon1 + $bon2 + $bon3; // Totale kosten en kosten per persoon berekenen
        $prijsperperson = $bonoptellen/  4;
        echo "Het totaalbedrag is &euro; $bonoptellen <br> ";
        echo "kosten per person bedrag is &euro; $prijsperperson,- ";
        //breken per person
        echo "<h1> Challenge </h1>";
        $fooi = ($bonoptellen -50) *0.90/ 4;// Totale kosten inclusief 10% fooi berekenen en delen door 4 personen
        echo "<p> De totaal kosten inclusief fooi zijn &euro;$fooi,- per person </p>";// Uitvoer totale kosten inclusief fooi

        ?>

</section>
</main>
</body>
</html>

