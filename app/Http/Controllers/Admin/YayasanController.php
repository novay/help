<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;
use Session;
use UploadHelper;
use App\Http\Requests\YayasanRequest;

class YayasanController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'YayasanRequest');
      UploadHelper::setPath('img/yayasan');
     }
     /**
      * code for create and update data in data store
      * @param RepositorieInterface $model 
      * @param YayasanRequest         $r     RequestHandler
      * @param string               $from  store|update
      */
     public function CreateOrUpdate(RepositorieInterface $model, YayasanRequest $r, $from)
     {
        if($from == 'update'){
          UploadHelper::isUpdate();
        }
        $data = $r->except('provinsi','kabupaten','kecamatan','file_logo','file_berita','file_pengesahan','file_akte');
        if(UploadHelper::setFile($r->file('file_logo'))){
          dd('here');
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data['file_logo'] = UploadHelper::getFileName();
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
        if(UploadHelper::setFile($r->file('file_logo'))){
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data['file_logo'] = UploadHelper::getFileName();
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
        return $data;
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
