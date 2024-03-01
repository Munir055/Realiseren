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
	<section>
		<?php
			CheckTrafficLight("groen", false);
		?>
	</section>
		<?php
			ShowMenu ( "maandag" , false)
		?>

</main>
   <?php
       include "footer.php"; //linkken naar footer
   ?>
<?php
Ladiesnight("vrouw" , 5)
?>

</body>
</html>
