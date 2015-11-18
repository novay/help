<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\AdminDataAdministrasiSekolahStatusKepemilikanRequest;

class AdminDataAdministrasiSekolahStatusKepemilikanController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'AdminDataAdministrasiSekolahStatusKepemilikanRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param AdminDataAdministrasiSekolahStatusKepemilikanRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, AdminDataAdministrasiSekolahStatusKepemilikanRequest $r, $from)
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
