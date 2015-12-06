<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;
use UploadHelper;
use App\Http\Requests\AkreditasiRequest;

class AkreditasiController extends Controller
{
     function __construct(RepositorieInterface $repo) {
      UploadHelper::setPath('img/sekolah/akreditasi');
     	parent::__construct($repo,'AkreditasiRequest');

     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param AkreditasiRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, AkreditasiRequest $r, $from)
     {
        $data = $r->except('file');
        $field = ['file'];
        UploadHelper::setUpdate($from == 'update');
        if (!UploadHelper::run($field,$model,$r)){
            return $this->routeBackWithError($from);
        }
        $data['file'] =  UploadHelper::get('file');
        return $model->fill($data)->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($from); 
     }
     /**   
      *delete data in data store
      * @param  RepositorieInterface $model [description]
      * @return [type]                      [description]
      */
     public function destroy(RepositorieInterface $model)
     {
        return  $model->delete() ? $this->routeAndSuccess('destroy') : $this->routeBackWithError('destroy');
     }
}
