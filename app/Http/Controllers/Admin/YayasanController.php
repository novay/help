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
        $data = $r->except('provinsi','kabupaten','kecamatan','file_logo','file_berita','file_pengesahan','file_akte');
        $field = ['file_logo','file_berita','file_pengesahan','file_akte'];
        UploadHelper::setUpdate($from == 'update');
        if (! UploadHelper::run($field,$model,$r)){
            return $this->routeBackWithError($from);
        }
        $data['file_logo'] =  UploadHelper::get('file_logo');
        $data['file_berita'] =  UploadHelper::get('file_berita');
        $data['file_pengesahan'] =  UploadHelper::get('file_pengesahan');
        $data['file_akte'] =  UploadHelper::get('file_akte');
        return ($model->fill($data)->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($from));
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
