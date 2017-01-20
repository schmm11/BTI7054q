<?php
	# includes
	require_once('library/traits.php');

	# autoloading
	spl_autoload_register(function($className)
	{
		require_once('library/' . $className . '.php');
	});


	$requestUrl = Util::get_param('url', '/');
	$context = new Context();
	$frontController = new FrontController($requestUrl);
	$frontController->init($context);
	$frontController->render($context);
?>
<?php
/*

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/data/css/style.css" />
		<!-- JQuery -->
		<script type="text/javascript" src="/data/js/jquery-3.1.1.min.js"></script>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Key</th>
					<th>Value</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($_SERVER as $key => $value)
					{
						echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
					}
				?>
			</tbody>
		</table>
	</body>
</html>

<?php
/*
	$tableData = [
		1 => 'Markus',
		2 => 'John',
		3 => 'Angela'
	]
?>


<!DOCTYPE>
<html>
	<head>
		<title>JQuery tablesort</title>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script>
			$(function()
			{
				$('p').appendTo($('table'))
				$('th').click(function()
				{
					let index = $(this).index()
					$('tbody > tr').sort(function(a, b)
					{
						let keyA = $('td', a).eq(index).text()
						let keyB = $('td', b).eq(index).text()
						if(/^\d+$/.test(keyA) && /^\d+$/.test(keyB))
						{
							return keyA - keyB
						}
						else
						{
							return keyA.localeCompare(keyB)
						}
					}).appendTo($('tbody'))
				})
			})
		</script>
	</head>
	<body>
		<p>Hello, World!</p>
		<table style="border: 1px solid black; padding: 2px 5px;">
			<thead>
				<th>Index</th><th>Name</th>
			</thead>
			<tbody>
				<?php
					foreach($tableData as $index => $name)
					{
						echo '<tr><td>' . $index . '</td><td>' . $name . '</tr>';
					}
				?>
			</tbody>
		</table>
	</body>
</html>
*/