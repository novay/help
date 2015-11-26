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
      if($from == 'update'){
        $this->upload->isUpdate();
      }
        UploadHelper::allowedFileType('image');
        if(UploadHelper::setFile($r->file('file'))){
          if(UploadHelper::checkFile()){
            if(UploadHelper::upload()){
              $data = $r->all();
              $data['file'] = UploadHelper::getFileName();
              return $model->fill($data)->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($from);
            }
          }
        }
       return $this->routeBackWithError($from);  
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
