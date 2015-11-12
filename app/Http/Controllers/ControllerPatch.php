<?php 
namespace App\Http\Controllers;
use App\Repositories\RepositorieInterface;
use App\Http\Requests\Request;
trait ControllerPatch{

	protected $prefix;
	protected $moduleName;
	private $repo;
	private $request;

	function __construct(RepositorieInterface $repo, $nameReq) {
		$this->repo = $repo;
		$this->request = "App\\Http\\Request\\$nameReq";
		$this->prefix = str_replace('\\_', '.', strtolower(implode('_',array_slice(preg_split('/(?=[A-Z])/',str_replace(['App\\Http\\Controllers\\','Controller'], '', get_called_class())), 1))));
		$this->moduleName = implode(' ',preg_split('/(?=[A-Z])/',str_replace(['App\\Http\\Controllers\\','Controller','\\'], '', get_called_class())));
	}
	public function store()
	{
		return $this->CreateOrUpdate($this->repo,App::make($this->request));
	}
	public function update()
	{
		return $this->CreateOrUpdate($this->repo,App::make($this->request));
	}
	public function show()
	{
		$data = $this->repo;
		$pageTitle = "Deskripsi <b>{$this->moduleName}</b>";
		$documentTitle = "Deskripsi {$this->moduleName}";
		return $this->view($this->prefix.'.show', compact('data','pageTitle'));
	}
	public function index()
	{
		$lists = $this->repo->all();
        $pageTitle =  "Keseluruhan <b>{$this->moduleName}</b>";
        $documentTitle =  "Keseluruhan {$this->moduleName}";
        return $this->view($this->uri('index'), compact('lists', 'pageTitle'));
	}
	public function edit()
	{
		$data = $this->repo;
		$pageTitle = "Perbarui <b>{$this->moduleName}</b>";
		$documentTitle = "Perbarui {$this->moduleName}";
		$form = "{$this->prefix}.form";
		return $this->view("{$this->prefix}.edit", compact('data', 'pageTitle', 'form'));
	}
	public function create()
	{
		$pageTitle = "Tambah <b>{$this->moduleName}</b>";
		$documentTitle = "Tambah {$this->moduleName}";
        $form = $this->prefix.'.form';
        return $this->view($this->uri('create'), compact('pageTitle', 'form'));
	}

	/**
	 * 
	 * @param  string $index [description]
	 * @return [type]        [description]
	 */
	protected function uri($index = "")
	{
	    $out = [
	        'index' => "{$this->prefix}.index",
	        'create' => "{$this->prefix}.create",
	        'store' => "{$this->prefix}.store",
	        'edit' => "{$this->prefix}.edit",
	        'update' => "{$this->prefix}.update",
	        'destroy' => "{$this->prefix}.destroy",
	        'show' => "{$this->prefix}.show",
	    ];
	    return isset($out[$index]) ? $out[$index] : $out;
	}
	private function with($data)
	{
		$this->data = $data;
		return $this;
	}
	protected function view($nameview="", $data = null)
	{
		foreach ($this->uri() as $key => $value) {

			$data[$key.'_url'] = route($value);
		}
	    if (\Request::ajax()) {
	        if (isset($data)) {
	            return  \Response::json($data);
	        }
	    } else {
	        if (isset($data)) {
	            return view($nameview, $data)->with($this->uri());
	        } else {
	            return view($nameview)->with($this->uri());
	        }
	    }
	}

}


