<?php

namespace App\Http\Controllers\Admin\Data\Penyelenggaraan;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\WaktuPenyelengaraanRequest;

class WaktuPenyelengaraanController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'WaktuPenyelengaraanRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param WaktuPenyelengaraanRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, WaktuPenyelengaraanRequest $r, $from)
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
