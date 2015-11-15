<?php namespace App\Http\Controllers\Data;
use App\Http\Controllers\Controller;
use App\Repositories\RepositorieInterface;
use App\Http\Requests\JenisKelaminRequest;
class JenisKelaminController extends Controller
{
     function __construct(RepositorieInterface $repo) {
     	parent::__construct($repo,'JenisKelaminRequest');
     }
     public function CreateOrUpdate(RepositorieInterface $model, JenisKelaminRequest $r, $from)
     {
       return $model->fill($r->all())->save() ? $this->routeAndSuccess($from) : $this->routeBackWithError($form);
     }
     public function destroy(RepositorieInterface $model)
     {
        return  $model->delete() ? $this->routeAndSuccess('destroy') : $this->routeBackWithError('destroy');
     }
}
