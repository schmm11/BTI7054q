<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$pageId = get_param('id', 0);

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
?>    
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jqueryvalidation.js"></script>
<article>
<h1> Danke an ihrem Interesse am Produkt <?php echo $_GET["id"]  ?>
<h2> Bitte geben Sie ihre Daten ein:</h2>


	<form action="submit.php" method="post">
		<h3>Please enter your personal data</h3>
		<p id="name"><label>Name: </label><input name="name"/>
		<mark>Please enter a name!</mark></p>
		
		<p id="email"><label>E-Mail: </label><input name="email"/>
		<mark>Please enter a valid e-mail address!</mark></p>
		
		<p>	Delivery:
			<input type="radio" name="shipping" value="direkt" required>Abholung
			<input type="radio" name="shipping" value="post" required>Postlieferung
		</p>
		
		<p> Rechnungs und Lieferadresse:
					<p id="adress_street"><label>Street: </label><input name="adress_street"/>
		<mark>Please enter your Street</mark></p>
		
		<p id="adress_town"><label>Town: </label><input name="adress_town"/>
		<mark>Please enter your Town!</mark></p>
		
		
		
		
		<p>
			<input type ="submit" value="Submit" required />

			
						
			
		</form>
</article>		
	
	
	
<?php  
    include "footer.php";
?>

    