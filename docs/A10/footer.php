<?php

?>

<footer>
    <div id="Impressum">Impressum u so Zeugs</div>
    <div id="Language">

    <!--<a href="index.php?lang=de"><img class="LanguageIcon" src="media/german_flag.png" alt="Deutsch"></a>
    <a href="index.php?lang=fr"><img class="LanguageIcon" src="media/france_flag.png" alt="Französisch"></a>-->

	<form action="language_switcher.php" method="post">

	<input type="submit" name="lang" value="de" style="background:url(media/german_flag.png) no-repeat;" />
	<input type="submit" name="lang" value="fr" style="background:url(/media/france_flag.png) no-repeat;" />

</form>

<p>Language: <?php if( isset( $_COOKIE["language"] ) ) { echo $_COOKIE["language"]; } else { echo "<em>not set</em>"; } ?></p>






    </div>

    </footer>

  </body>
</html>
