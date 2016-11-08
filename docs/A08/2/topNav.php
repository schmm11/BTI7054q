<?php
	$url = $_SERVER['REQUEST_URI'];
	$currentConsole = get_param("console", "0")
?>
<nav>
    <div id="main_navi">
		<ul> 
			<li <?php if($currentConsole == '0') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "0")  ?>" >All </a> </li>
			<li <?php if($currentConsole == '1') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "1")  ?>" >PC </a> </li>
			<li <?php if($currentConsole == '2') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "2")  ?>" >XBOX </a> </li>
			<li <?php if($currentConsole == '3') echo "class='active'"   ?>><a href = "<?php echo add_param($url, "console", "3")  ?>" >PS </a> </li>
			
			
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
