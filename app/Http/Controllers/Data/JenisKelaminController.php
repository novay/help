<?php namespace App\Http\Controllers\Data;
use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;
use App\Http\Requests\JenisKelaminRequest;
class JenisKelaminController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'JenisKelaminRequest');
     }
     public function CreateOrUpdate(RepositorieInterface $model, JenisKelaminRequest $request, $from)
     {
        if($model->save($request->all())){
         return $this->routeAndSuccess($from);
        }
        return $this->routeBackWithError($form);
     }
     public function delete(RepositorieInterface $model)
     {
         if( $model->detete() ){
          return $this->routeAndSuccess($from);
         }
         return $this->routeBackWithError($form);
     }
}
