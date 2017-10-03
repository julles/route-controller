<?php namespace Julles;

use Illuminate\Support\ServiceProvider;

class RouteControllerProvider extends ServiceProvider
{

	public function boot()
	{

	}

	public function register()
	{
		$this->app->bind('register-route-controller',function(){
			return new \Julles\RouteController();
		});
	}

}