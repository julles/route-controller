<?php namespace Julles;

use Julles\Core\RouteController as RouteParent;

class RouteController extends RouteParent
{
	public function __construct()
	{
		parent::__construct();
	}

	public function build($uri,$controller)
	{
		return $this->controller($uri,$controller);
	}

}