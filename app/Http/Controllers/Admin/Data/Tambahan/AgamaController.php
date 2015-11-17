<?php

namespace App\Http\Controllers\Admin\Data\Tambahan;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\AgamaRequest;

class AgamaController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'AgamaRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param AgamaRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, AgamaRequest $r, $from)
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
