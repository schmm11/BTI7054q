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
		<?php content($pageId); ?> 
  
  </article>
<?php include "footer.php" ?>


</div>
</body>