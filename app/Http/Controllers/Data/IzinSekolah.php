<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\IzinSekolahRequest;

class IzinSekolah extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'IzinSekolahRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param IzinSekolahRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, IzinSekolahRequest $r, $from)
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
