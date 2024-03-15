<?php
/**
 * User: Munir Alshawi
 * Date: 23-2-34
 * File: T3_REA_Oefening3.2.php
 */
?>
<?php
    include "includes/header.php"; //liknkken naar header
?>
<main id="wrapper">
    <?php
        include "includes/nav.php";//linken naar de nav
    ?>
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
<?php
    include "includes/footer.php"; //linkken naar footer
?>
</body>
</html>
