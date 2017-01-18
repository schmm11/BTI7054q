<?php
require_once('autoloader.php');

$parametersURL = "console=$console";

?>

<!-- Script for the live Search   -->
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="1px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Safari
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
				<?php
					echo '<input style="color: lightgrey;" value="' . $resource->tr('search') . '" onfocus="onSearchFocus(this)" onblur="onSearchBlur(this)" type="text" onkeyup="showResult(this.value)">';
				?>
				<script>
					function onSearchFocus(elem)
					{
						elem.value = ''
						elem.style.color = "black"
					}
					function onSearchBlur(elem)
					{
						if(elem.value === '')
						{
							elem.value = '<?php echo $resource->tr('search') ?>'
							elem.style.color = "lightgrey"
						}
					}
				</script>
			</form>
				<div id="livesearch"></div>
        </div>





    <div id="asideNav">
        <ul>
            <li> <a href="bestseller.php?<?php echo $parametersURL ?>" class = "asideLink"> <?php echo $resource->tr('nav.bestseller')?> </a> </li>
            <li> <a href="releases.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $resource->tr('nav.releases')?></a> </li>
            <li> <a href="budget.php?<?php echo $parametersURL?>" class = "asideLink"> <?php echo $resource->tr('nav.budget')?></a> </li>
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
