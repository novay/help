<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;
use UploadHelper;
use App\Http\Requests\SekolahRequest;

class SekolahController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'SekolahRequest');
      UploadHelper::setPath('img/sekolah');

     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param SekolahRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, SekolahRequest $r, $from)
     {
        $data = $r->except('file_npsn','file_nss','file_logo');
        $field = ['file_npsn','file_nss','file_logo'];
        UploadHelper::setUpdate($from == 'update');
        if (!UploadHelper::run($field,$model,$r)){
            return $this->routeBackWithError($from);
        }
        $data['file_npsn'] =  UploadHelper::get('file_npsn');
        $data['file_nss'] =  UploadHelper::get('file_nss');
        $data['file_logo'] =  UploadHelper::get('file_logo');
        return $model->fill($data)->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($form);
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
