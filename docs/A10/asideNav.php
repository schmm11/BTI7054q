<?php
require_once('autoloader.php');
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

<!-- Script for the live Search   -->
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>






    <aside>


        <div id="search">
            <!--
			<form>
                <input type="text" name="search"> <input type="submit" value="S">
            </form>
			-->
			<form>
				<input type="text" size="30" onkeyup="showResult(this.value)">
			</form>
				<div id="livesearch"></div>
        </div>





    <div id="asideNav">
        <ul>
            <li> <a href="bestseller.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $bestsellerText?> </a> </li>
            <li> <a href="releases.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $releaseText?></a> </li>
            <li> <a href="budget.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $budgetText?></a> </li>
			<br><br>
			<li> <a href="test.php?<?php echo $parametersURL?>" class = "asideLink"> Nur eine testpage </a> </li>
			<br><br>
			<?php
			include_once 'authentication.inc.php';
			$logged_in = (isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false);
			$username = (isset($_SESSION['user']) ? $_SESSION['user'] : null);
			if($logged_in && $username == 'admin')
			{
				echo "<li><a href=\"addProduct.php\" class=\"asideLink\">" . $resource->tr('links.adminpage') . "</a></li>";
			}
			?>
			</ul>
    </div>

    </aside>
