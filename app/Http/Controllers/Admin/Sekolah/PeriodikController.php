<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\PeriodikRequest;

class PeriodikController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'PeriodikRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param PeriodikRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, PeriodikRequest $r, $from)
     {
        $data = $r->except('akses_internet','_token');
        if($periodik = $model->fill($data)->save()){
          return $model->where($data)->orderBy('updated_at')->get()->first()->akses_internet()->sync($r->input('akses_internet'))?$this->routeAndSuccess($from) : $this->routeBackWithError($form);
        }
        else return $this->routeBackWithError($form);
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
