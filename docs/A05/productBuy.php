
<?php 
	include "functions.php";
	$language = get_param('lang', 'de');
	$pageId = get_param('id', 0);
?>


<?php include "header.php" ?>
<nav>
	<div id="main_navi">
		<ul> 
			<li>Xbox</li>
			<li>Playstation</li>
			<li>PC</li>
			<li>WiiU</li>
		</ul>
	</div>

	<div id="user_navi">
		<ul> 
			<li>Login</li>
			<li>Kundenkonto</li>
		</ul>
	</div>
</nav>

<aside>
	<ul>
		<?php asideNavigation($language, $pageId); ?>
	</ul>
</aside>
<article> 	
  
		  <h1> Warenkorb</h1>

		<p>Mario Kart Slasher 1</p> <p> BiBaBo Beschreibungstext</p>
		<?php
		//include('validation.php');?>

		<form method="post" action="submit.php">
		<h2> Enter Data</h2>
		<p> <label>Name: </label>
			<input name="name" required />
			
		</p>
		<p>
			<label>E-Mail: </label>
			<input name="email" required />
		</p>
		
		<p>	Delivery:
			<input type="radio" name="shipping" value="direkt" required>Abholung
			<input type="radio" name="shipping" value="post">Postlieferung
		</p>
		
		
		<p>
			<input type ="submit" value="Submit" required />
		</form>
		  
  </article>
<?php include "footer.php" ?>


</div>
</body>	
