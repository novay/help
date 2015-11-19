<?php namespace App\Providers\Contracts\RepositorieBinding;
use Route;
use App;
Use View;
class RepositorieBinding
{
	private $app;
	private $list = [];

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
		
		if(! in_array($controller,$this->list)){
			$this->list[$wild_card] = ['controller'=>$controller,'repo'=>$repositories];
			$this->app->when($controller)
					  ->needs($this->repositoriesInterface)
					  ->give($repositories);
			$this->app->bind($wild_card,function ($item) use ($repositories)
			{
				$model = App::make($repositories);
				return $model;
			});
			$newWildCard = str_replace(' ', '', ucwords(str_replace('_', ' ', $wild_card)));
			View::share('Model'.$newWildCard,App::make($repositories));

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
	public function getrepo($wild_card)
	{
		$repo = $this->list[$wild_card]['repo'];
		return App::make($repo);
	}
}
