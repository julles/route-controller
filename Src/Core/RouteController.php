<?php namespace Julles\Core;
use Route;

class RouteController
{
	public $methods;

	public $controller;

	public function __construct()
	{
		$this->controller = 'App\Http\Controllers\\';

		$this->methods = ['get','post'];
	}

	public function class_controller($paramController)
	{
		$controller = $this->controller;
		$stringClass = $controller.$paramController;
		$class = new $stringClass();
		return $class;
	}

	public function kebab_case($str)
	{
		$snake = snake_case($str);

		$kebab = str_replace("_", "-", $snake);

		return $kebab;
	}

	public function camelCaseToUri($method,$var)
	{
		$str = $this->kebab_case($var);
		$str = strtolower($str);
		$str = str_replace($method, "", $str);
		$str = substr($str,1);
		
		return strtolower($str);
	}	

	public function readMethodInClass($paramController)
	{
		
		$class = $this->class_controller($paramController);

		return get_class_methods($class);
	}

	public function containMethods($paramController)
	{
		$methods = $this->readMethodInClass($paramController);

		$result = [];

		foreach($this->methods as $m)
		{
			foreach($methods as $method)
			{
				if(strpos($method, $m) !== false)
				{
					$result[] = $method;
				}
			}
		}
		
		return $result;
	}

	public function controller($uri,$paramController)
	{
		$methods = $this->containMethods($paramController);

		foreach($this->methods as $m)
		{
			Route::$m($uri,$paramController."@".$m."Index");
			
			foreach($methods as $method)
			{
				if(strpos($method, $m) !== false)
				{
					$fixUri = $uri.'/'.$this->camelCaseToUri($m,$method);
					
					Route::$m($fixUri,$paramController."@".$method);
				}
			}
		}
			
	}
}	