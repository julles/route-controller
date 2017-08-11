# Route Controller For Laravel 5.3++

[![Total Downloads](https://poser.pugx.org/muhamadrezaar/route-controller/d/total.svg)](https://packagist.org/packages/muhamadrezaar/route-controller)
[![Latest Stable Version](https://poser.pugx.org/muhamadrezaar/route-controller/v/stable.svg)](https://packagist.org/packages/muhamadrezaar/route-controller/v/stable.svg)
[![License](https://poser.pugx.org/muhamadrezaar/route-controller/license.svg)](https://packagist.org/packages/muhamadrezaar/route-controller)



If you are used to using laravel 4 or laravel 5.2 you may be familiar with Route :: controller, but unfortunately in laravel 5.3 ++ Route Controller will be deleted.

But do not worry, by using this package you can reuse the artificial route controller and maintained by me ([Muhamad Reza AR])

[Muhamad Reza AR]: <https://github.com/julles>

## How to Install ?

Add Packages in composer

``` sh
composer require muhamadrezaar/route-controller
```

Add service provider and facade

``` sh
Julles\RouteControllerProvider::class,
```

``` sh 
'RouteController'=>Julles\RouteControllerFacade::class,
```

## How to Use ?

``` sh 
	RouteController::build('tes','TesController');
```

Samples Methods in Source Controller

``` sh 

public function getIndex() // url generated : yoururl.dev/tes or yoururl.dev/tes/index
{
	dd('hello world');
}

public function getTriRiska() // url generated yoururl.dev/tes/tri-riska
{
    dd('My Friend');
}

public function postCreate() // url generated yoururl.dev/tes/create
{
	
}

```


## License 

MIT

https://reza.mit-license.org/

ENJOY!!