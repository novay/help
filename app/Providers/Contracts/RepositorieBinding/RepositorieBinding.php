<?php namespace App\Providers\Contracts\RepositorieBinding;
use Route;
class RepositorieBinding
{
	private $app;
	private $expired = [];
	private $controllerNamespace = 'App\Http\Controllers';
	private $repositorieNamespace = 'App\Repositories';
	private $repo = 'Eloquent';
	private $repositoriesInterface = \App\Repositories\RepositorieInterface::class;

	function __construct($app) {
		$this->app = $app;
	}

	public function bind($controller,$repositories,$wild_card)
	{
		$controller = str_replace('//', '\\', $controller);
		$controller = $this->controllerNamespace.'\\'.$controller;
		$repositories = $this->repositorieNamespace.'\\'.$this->repo.'\\'.$repositories;
		
		if(! in_array($controller,$this->expired)){
			$this->expired[] = $controller;
			$this->app->when($controller)
					  ->needs($this->repositoriesInterface)
					  ->give($repositories);
			Route::bind($wild_card,function ($item) use ($repositories)
			{
				$model = \App::make($repositories);
				return $model->find($item);
			});
		}
	}
	public function setRepo($repo)
	{
		return $this->repo = $repo;
	}
	public function setControllerNameSpace($controllerNamespace)
	{
		$this->controllerNamespace = $controllerNamespace;
	}
	public function setRepositorieNamespace($repositorieNamespace)
	{
		$this->repositorieNamespace = $repositorieNamespace;
	}

}
