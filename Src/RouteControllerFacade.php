<?php namespace Julles;

use Illuminate\Support\Facades\Facade;

class RouteControllerFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'register-route-controller';
	}
}