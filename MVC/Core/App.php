<?php 

class App
{
	protected $controller 	= "home";
	protected $action 		= "default";
	protected $params 		= [];
	protected $url = "";

	function __construct()
	{
		$arr = $this->URLProcess();
		
		if (isset($arr[0])&&file_exists('./MVC/Controllers/'.$arr[0].'.php')) {
			$this->controller = $arr[0];
			unset($arr[0]);
		}
		require_once './MVC/Controllers/'.$this->controller.'.php';
		$this->controller = new $this->controller;

		if (isset($arr[1])) {
			if (method_exists($this->controller,$arr[1])) {
				$this->action = $arr[1];
			}
			unset($arr[1]);
		}

		$this->params = $arr?array_values($arr):[];

		call_user_func([$this->controller, $this->action], $this->params);
	}

	function URLProcess()
	{
		if (isset($_GET['url']) ) {
			$this->url = $_GET['url'];	
			return explode('/', filter_var(trim($this->url, "/")));
		}else
		$this->url = "home";
	}

}

?>