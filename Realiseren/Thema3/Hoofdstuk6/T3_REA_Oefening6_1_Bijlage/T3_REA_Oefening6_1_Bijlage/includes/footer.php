<!--Moet elemeent van footer open varibelen in doen-->
<footer>
	<?php
	include ('variabelen.php');

	echo "$naam, $klas, Datum: $datum";
	?>
	<p>
		<?php
		if (isset($_COOKIE["userCountryCode"]) == true)
		{
			$countryCode = $_COOKIE["userCountryCode"];
			echo "<img src='flags/$countryCode.png'>";
		}
		else
		{
			echo "<a href='../T3_REA_Oefening6_1.php/../T3_REA_Oefening6_1.php'>Geef een land op</a>";
		}
		?>
	</p>
</footer>
