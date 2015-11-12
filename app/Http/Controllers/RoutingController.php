<?php namespace App\Http\Controllers;
trait RoutingController{
	/**
	 * make route to index of module
	 * @return Response
	 */
	public function toIndex()
	{
	    return redirect()->route($this->nameFix('index'));
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
        return  $this->toIndex()->withSuccess([$message]);
    }
    /**
     * ruting kembali ke form dan bersama inputan yang 
     * baru saja di inputkan bersama error yang terjadi
     * @param  string $from 
     * @return mix 
     */
    public function routeBackWithError($from = __METHOD__)
    {
        $message = "{$this->moduleName} gagal ";
        $message.= $this->routeMessage($from);
        return redirect()->back()->withInput()->withErrors([$message]);
    }
}