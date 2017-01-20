<?php

final class FrontController
{
	const ControllerPath = 'controllers';
	const ModelPath = 'models';
	const ErrorPath = 'errors';

	private $request;
	public $controller;


	public function __construct($request = '/')
	{
		$this->request = array_filter(explode('/', $request), function ($elem) { return isset($elem) && $elem; });
	}

	public function render($viewContext)
	{
		$this->controller->view->render($viewContext);
	}

	public function init($context)
	{
		require_once(self::ControllerPath . '/RootController.php');
		$this->controller = new RootController($context);
		foreach($this->request as $url)
		{
			$class = $url;
			$controllerFile = self::ControllerPath . '/' . $class . '.php';
			if(file_exists($controllerFile))
			{
				require_once($controllerFile);
				$this->controller = new $class($class, $context);
			}
			else
			{
				if(method_exists($this->controller, $url))
				{
					$this->controller->$url();
				}
				else
				{
					$this->errorController(404, $context);
				}
				break;
			}
		}
	}

	private function errorController($errorCode, &$context)
	{
		$context = new Context();  # clear the old context
		$class = 'Error' . $errorCode;
		$file = self::ErrorPath . '/' . $errorCode . '.php';
		if(file_exists($file))
		{
			require_once($file);
			$file = $file;
			$this->controller = new $class($context);
		}
		else
		{
			# We really messed up if we land here
			header(Util::get_array($_SERVER, 'SERVER_PROTOCOL') . ' 500 Internal Server Error', true, 500);
			?>
			<!DOCTYPE>
			<html>
				<head>
				</head>
				<body>
					<p style="color: red;">!!! The server is currently having some issues... Please try again later !!!</p>
				</body>
			</html>
			<?php
		}
	}
}

?>