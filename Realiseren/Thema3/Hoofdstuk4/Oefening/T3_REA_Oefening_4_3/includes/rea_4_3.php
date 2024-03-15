<link href="../styles/stylesheet.css" rel="stylesheet">

<?php
/**
 * User: Munir Alshawi
 * Date: 23-2-34
 * File: T3_REA_Oefening3.2.php
 */
?>
<?php
include "header.php"; //liknkken naar header
?>
	<main id="wrapper">
		<?php
		include "nav.php";//linken naar de nav
		?>
	</main>
<?php
// Bereken het aantal seconden sinds 1 januari 1970
$nu = time();

// Toon het aantal seconden
echo "Het aantal seconden sinds 1 januari 1970 is: $nu";
?>
<br>
<?php
include "footer.php"; //linkken naar footer
?>
<?php
include "functions.php"; //linkken naar
?>


</body>
</html>