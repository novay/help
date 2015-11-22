<?php namespace App\Http\Controllers;
trait RoutingController{
	/**
	 * make route to index of module
	 * @return Response
	 */
	public function toIndex()
	{
	    return redirect()->route($this->uri('index'));
	}
	/**
	 * mengubah kata dari method pada cotroller
	 * @param  string $from 
	 * @return mix
	 */
	private function routeMessage($from)
    {
        switch ($from) {
            case 'store':
                return "ditambah";
            break;
            case 'update':
                return "diperbarui";
            break;
            case 'destroy':
                return "dihapus";
            break;
        }
    }
    /**
     * ruting kembali ke index dan di berikan sedikit
     * pemberitahuan berhasil
     * @param  string $from [description]
     * @return \Routing
     */
	public function routeAndSuccess($from = __METHOD__)
    {
        $message = "{$this->moduleName} berhasil ";
        $message.= $this->routeMessage($from);
        $content = $this->setAjax(true)->index()['content'];
        return \Request::ajax()?
             \Response::json(compact('message','content')):
             $this->toIndex()->withSuccess([$message]);
    }
    /**
     * ruting kembali ke form dan bersama inputan yang 
     * baru saja di inputkan bersama error yang terjadi
     * @param  string $from 
     * @return mix 
     */
    public function routeBackWithError($from = __METHOD__)
    {
        $errors = \Session::has('errors') ? \Session::get('errors') : [];
        $errors[] = "{$this->moduleName} gagal ".$this->routeMessage($from);
        return \Request::ajax() ?
            \Response::json(compact('errors'),422):
            redirect()->back()->withInput()->withErrors([$message]);
    }
}