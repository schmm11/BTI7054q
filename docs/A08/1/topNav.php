<?php
	$url = $_SERVER['REQUEST_URI'];
	$currentConsole = get_param("console", "all")
?>
<nav>
    <div id="main_navi">
		<ul> 
			<li <?php if($currentConsole == 'all') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "all")  ?>" >All </a> </li>
			<li <?php if($currentConsole == 'pc') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "pc")  ?>" >PC </a> </li>
			<li <?php if($currentConsole == 'xbox') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "xbox")  ?>" >XBOX </a> </li>
			<li <?php if($currentConsole == 'ps') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "ps")  ?>" >PS </a> </li>
			
			
		</ul>
	</div>

	<div id="user_navi">
		<ul> 
			<li>Login/Kundenkonto</li>
		</ul>
	</div>
    
    <div id="warenkorb">
        <ul>
            <li>Warenkorb (0)</li>
        </ul>
    </div>
    </nav>
