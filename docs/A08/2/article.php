<?php 
	include "functions.php";
	require_once "db.inc.php";
	require_once "Product.php";
	$language = get_param('lang', 'de');
	$console = get_param('console', '0');
	$articleId = get_param('article','1');

    include "header.php";

    include "topNav.php";
    include "asideNav.php";
		
	
		
	$product = Product::getProductById($articleId);
	
?>
<article>
	<h1> <?php echo $product->getName() ?></h1>
	
	<p class="ArticleText"> <?php echo $product->getDescription() ?> </p>
	
    <img class="ArticleImage" src="media/bla.jpg" alt="<?php echo $product->getName() ?>">
    <div class="ArticleVersions">
        Versionen
    </div>
    <div class="ArticleBuy"> <a href="buy.php?id=<?php echo $product->getId() ?>"><img src="media/buy_now_button.png" height="42" width="120"></a> </div>
    
    </article>
	
	
	
	
	
	
	
	
</article>
<?php
    include "footer.php";
?>

    