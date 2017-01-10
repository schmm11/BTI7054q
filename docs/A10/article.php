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
		<div class="ArticleBuy">
		<?php echo "<p>".$product->getPrice()." sFr.-</p>";?>
			<a class="buy_article" onclick="buyArticle(<?php echo $articleId ?>)">
				<img src="media/buy_now_button.png" height="60" width="60">
			</a>
		</div>
		<script>
			function buyArticle(articleId)
			{
				xmlHttp = (window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'))
				xmlHttp.onreadystatechange = function()
				{
					if(this.readyState == 4 && this.status == 200)
					{
						alert("Added Item to the cart");
					}
				}
				xmlHttp.open('GET', 'Cart.php?buy='+articleId+'&amount=1', true);
				xmlHttp.send();
			}
		</script>

    </article>








</article>
<?php
    include "footer.php";
?>

