<!--
    Author:     Munir Alshawi
    Date:        28-22024

    Subject:    Result oefening 4.1  top: include
                Startende tags, head, header, ul (menulist)
-->
<html lang="en-us">
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>

    <body>

        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>

	        <?php
	        // Bepaal de tijdzone
	        date_default_timezone_set("Europe/Amsterdam");

	        // Roep de functie timeTijd() aan en geef het resultaat weer
	        echo timeTijd();

	        // Functie om het juiste groetbericht te selecteren op basis van het uur
	        function timeTijd()
	        {
		        // Haal het huidige uur op
		        $tijd = date("H");

		        // Controleer het uur en selecteer het juiste groetbericht
		        if ($tijd <= 6)
		        {
			        echo "$tijd" . " Goedenacht";
		        }
		        else if ($tijd <= 12)
		        {
			        echo "$tijd" . " Goedmorgen";
		        }
		        else if ($tijd <= 18)
		        {
			        echo "$tijd" . " Goedmiddag";
		        }
		        else
		        {
			        echo "$tijd" . " Goedavond";
		        }
	        }
	        ?>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>
