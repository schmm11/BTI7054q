<?php
if($_COOKIE["language"] == 'de'){
	$bestsellerText = 'Bestseller';
	$releaseText = 'Neuheiten';
	$budgetText = 'Budget';
}

if($_COOKIE["language"] == 'fr'){
	$bestsellerText = 'Best-Seller';
	$releaseText = 'Nouveau';
	$budgetText = 'favorable';
}

$parametersURL = "console=$console";

?>
    <aside>
        <div id="search"> 
            <form>
                <input type="text" name="search"> <input type="submit" value="S">
            </form>
        </div>

    <div id="asideNav">
        <ul>
            <li> <a href="bestseller.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $bestsellerText?> </a> </li>
            <li> <a href="releases.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $releaseText?></a> </li>
            <li> <a href="budget.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $budgetText?></a> </li>
			<br><br>
			<li> <a href="test.php?<?php echo $parametersURL?>" class = "asideLink"> Nur eine testpage </a> </li>
			<br><br>
			<li> <a href="addProduct.php"class="asideLink">Admin Link </a></li>
        </ul>
    </div>
    
    </aside>
