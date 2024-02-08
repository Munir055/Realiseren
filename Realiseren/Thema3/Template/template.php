<?php
/**
 * User: S. Tudent
 * Date: Date
 * File: T3_REA_Oefening1.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
                echo 'Realiseren instructies thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
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
                <h2>
                    Uitleg
                </h2>

                <!-- Plaats je code / uitwerking hieronder -->
                <p>
                    <?php
                        // Voorbeeldcode
                        echo "Bij server-side rendering wordt een webpagina klaargemaakt voor rendering door de server in plaats van de browser van de gebruiker. ";
                        echo "een servergebaseerde open-source scripttaal die voornamelijk dient voor het maken van dynamische webpagina's";
                        echo "Database maakt gebruik van een database, van waaruit het de content en de opmaak van een webpagina ophaalt.";
                        echo "client-side talen zoals HTML, CSS of JavaScript pas in de webbrowser draaien als een website is geladen, draait PHP-code al direct op de webserver.";
                    ?>
                </p>

                    <p>
                        <?php
                         echo "<h4>
                                    Uitleg git & Github
                                </h4> 
                                GIT is een versiebeheersysteem waarmee ontwikkelaars wijzigingen in broncode kunnen bijhouden en beheren. 
                                Met commits worden wijzigingen permanent opgeslagen in een repository. 
                                Push wordt gebruikt om lokale wijzigingen naar een externe repository te sturen. 
                                Clone maakt een exacte kopie van een repository. GitHub is een online platform voor GIT-hosting en 
                                samenwerking, waar ontwikkelaars repositories kunnen delen, bijdragen en samenwerken aan projecten 
                                met functies zoals pull-requests en issue-tracking.";
                        ?>
                    </p>
                    <p>
                        <?php
                          echo "Met 'echo' geef je de webserver de instructie om de string Hello World! te tonen. Elke tekst die je met echo uitvoert, kun je markeren met HTML-tags. De browser verwerkt deze volgens de HTML-specificatie.";
                        ?>
                    </p>
            </section>
        </main>
    </body>
</html>

