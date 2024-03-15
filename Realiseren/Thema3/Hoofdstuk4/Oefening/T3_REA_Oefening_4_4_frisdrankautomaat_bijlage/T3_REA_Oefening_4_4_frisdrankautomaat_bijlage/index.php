<!DOCTYPE html>
<!--
    Author:     Rob Wessels
    Date:       feb 2021

    Subject:    Bijlage oefening 4.4
-->
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>
            Frisdrankautomaat
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <link rel="stylesheet" href="styles/stylesheet.css">
    </head>
    <body>
        <?php

            if(isset($_POST['drinks']))
            {
                $choice = $_POST['drinks'];
                $money = $_POST['money'];
                $change = ($money - 1.5);

/*
                // -- Opdrachten -- //
                1. Maak een if/else statement die checkt of het wisselgeld 0 euro of meer is (m.a.w.: er is genoeg geld ingeworpen)
                2. Wanneer er genoeg geld ingeworpen is:
                    a. Maak een switch die de waarde uit variabele $choice haalt
                    b. Wanneer die waarde "cocacola" is, dan moet er de zin komen te staan:
                        'U heeft Coca Cola gekozen'
                    c. Daaronder komt dan de afbeelding van een blikje cola te staan met: width="400" height="400"
                    d. Daaronder komt dan een zin te staan met het wisselgeld.
                    e. Idem, maar dan voor de andere drie mogelijkheden. De waarden van $choice kunnen zijn:
                        cocacola  fanta  icetea  cassis
                3. Wanneer er NIET genoeg geld is ingevoerd krijgt de ontvanger geen tekst en zin zoals hierboven, maar:
                    a. Melding: 'U heeft niet genoeg geld ingeworpen'
                    b. 'U heeft ingeworpen: <<ingeworpen bedrag>>'. Uiteraard met een euroteken.
                    c. 'U komt nog <<geld dat tekort is>> tekort'. Uiteraard ook met een euroteken.

                // -- Advanced -- //
                4. Op regel 16 hierboven zie je dat &money wordt bepaald door wat er uit het form wordt gehaald. Probleem is: wanneer iemand niets invult, dan komt regel 25 in de problemen omdat je niet 1.5 van niets kunt aftrekken (je krijgt dan ook een Uncaught TypeError). OPDRACHT:
                    a. Zorg ervoor dat binnen één regel (die regel 24) er wordt gecheckt of $_POST['money'] leeg is (null). Is het leeg? Dan moet $money de waarde 0.0 krijgen. Let er op: je gebruikt dus ook maar één puntkomma op die regel! Zie ook: https://davidwalsh.name/php-ternary-examples
                5. In de if/else statement krijg je een geldbedrag te zien in beide gevallen: Het wisselgeld (if), OF het geld dat werd ingeworpen en hoeveel het tekort is (else). Zorg ervoor dat de bedragen mooi worden weergegeven: een komma in plaats van een punt en twee cijfers achter de komma. Zie ook: https://davidwalsh.name/php-ternary-examples
                6. Zijn deze zinnen te lang? Ga in PHP Storm naar: File > Settings > Editor > General, en kijk dan bij Soft Wrap. Zet daar bijv. de *.php-extensie bij en je zult zien dat de lange zinnen in PHP Storm mooi worden afgebroken.
*/


                // schrijf hier je code . . .
	            if(isset($_POST['drinks'])) {

		            // Controleer of er geld is ingeworpen, zo niet, stel het op 0.0
		            $choice = $_POST['drinks'];
		            $money = isset($_POST['money']) ? $_POST['money'] : 0.0;

		            // Schakelstructuur om de juiste actie uit te voeren op basis van de geselecteerde drank
		            switch ($choice){
			            case "cocacola":
				            echo "<p>u heeft gekozen Coca Cola</p>";
				            echo  "<img src=images/cola.png> <br>";
				            break;
			            case "fanta":
				            echo "<p>u heeft gekozen Fanta</p>";
				            echo  "<img src=images/fanta.jpg> <br>";
				            break;
			            case "icetea":
				            echo "<p>u heeft gekozen Ice-Tea</p>";
				            echo  "<img src=images/icetea.jpeg> <br>";
				            break;
			            case "cassis":
				            echo "<p>u heeft gekozen Cassis</p>";
				            echo  "<img src=images/cassis.jpg> <br>";
				            break;
			            default:
				            echo "ongeldige keuze";
				            break;
		            }

		            // Als er niet genoeg geld is ingeworpen, toon een melding
		            if($money <= 1.50 ){

			            $tekort = number_format(abs($money - 1.50), 2, ',', '.') . ' €';
			            echo "U heeft niet genoeg geld in geworpen <br>";
			            echo "U komt $tekort tekort";
		            }

		            // Als er genoeg geld is ingeworpen, toon het wisselgeld
		            else{
			            $ingeworpenBedrag = number_format($money, 2, ',', '.') . ' €';
			            $change = number_format(($money - 1.5), 2, ',', '.') . ' €';
			            echo "U heeft ingeworpen: $ingeworpenBedrag <br>";
			            echo "U wisselgeld is $change";
		            }
	            }
            }
        ?>

                    <form id="form" action="" method="POST">

                        <h1>
                            Frisdrankautomaat
                        </h1>
                            Druk op een knop voor de gewenste frisdrank. Elk drankje kost &euro; 1,50
                        <br/>

                        <button type="submit" value="cocacola" name="drinks">Coca Cola</button><br>
                        <button type="submit" value="fanta" name="drinks">Fanta</button><br/>
                        <button type="submit" value="icetea" name="drinks">Ice-Tea</button><br/>
                        <button type="submit" value="cassis" name="drinks">Cassis</button><br/>

                        <h3>
                            Werp hier uw contant geld in:
                        </h3>
                        <input type="double" name="money">
                    </form>
    </body>
</html>