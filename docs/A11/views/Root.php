<?php

final class RootView extends View
{
	public function render($viewContext)
	{
	}

	private void renderHeader($viewContext)
	{
		require_once('views/header.php');
	}

	private void renderFooter($viewContext)
	{
		require_once('views/footer.php');
	}
}
