<?php 
	require_once('autoloader.php');

	$language = get_param('lang', 'de');
	$console = get_param('console', '0');
	$articleId = get_param('article','1');

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
		
	
		
	$product = Product::getProductById($articleId);
	$img = new GameImage($product->getName().".png",$product->getName());
?>
<article>
	<h1> <?php echo $product->getName() ?> for <?php echo $product->getConsole()?></h1>
	
	<p class="ArticleText"> <?php echo $product->getDescription() ?> </p>
	
   <!-- <img class="ArticleImage" src="media/bla.jpg" alt=" <?php //echo $product->getName() ?>">-->
	<?php $img->render(); ?>
	
    <div class="ArticleVersions">
        Versionen <br>
		<?php constructGameVersions($product->getGameId(), $product->getConsole()); ?>
		
		
		
		
    </div>
    <div class="ArticleBuy"> <a href="buy.php?id=<?php echo $product->getId() ?>"><img src="media/buy_now_button.png" height="42" width="120"></a> </div>
    
    </article>
	
	
	
	
	
	
	
	
</article>
<?php
    include "footer.php";
?>

    