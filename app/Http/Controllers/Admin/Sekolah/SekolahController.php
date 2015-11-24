<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;

use App\Http\Requests\SekolahRequest;

class SekolahController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'SekolahRequest');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param SekolahRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, SekolahRequest $r, $from)
     {
      if($form == 'update'){
        UploadHelper::isUpdate();
      }
        $data = $r->all();
        if(UploadHelper::setFile($r->file('file_npsn'))){
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data['file_npsn'] = UploadHelper::getFileName();
            }
          }
        }
        if(UploadHelper::setFile($r->file('file_nss'))){
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data['file_nss'] = UploadHelper::getFileName();
            }
          }
        }
        if(UploadHelper::setFile($r->file('file_logo'))){
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data['file_logo'] = UploadHelper::getFileName();
            }
          }
        }
        if(Session::has('errors')){
          return $this->routeBackWithError($form);
        }
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
