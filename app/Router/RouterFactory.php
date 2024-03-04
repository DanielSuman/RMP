<?php

declare(strict_types=1);

namespace App\Router;

use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{
	public function create(): RouteList
	{
		$router = new RouteList;
	
		$this->buildPage($router);
		
		return $router;
	}

	# Page Sekce
	protected function buildPage(RouteList $router): RouteList
	{
		$router[] = $list = new RouteList('Page');
		$list[] = new Route('/<presenter>/<action>[/id]', 'Home:default');
		return $router;
	}
}