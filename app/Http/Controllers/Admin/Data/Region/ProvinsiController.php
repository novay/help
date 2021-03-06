<?php

namespace App\Http\Controllers\Admin\Data\Region;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\ProvinsiRequest;

class ProvinsiController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'ProvinsiRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param ProvinsiRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, ProvinsiRequest $r, $from)
     {
        return $model->fill($r->all())->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($form);
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
