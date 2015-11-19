<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model as Model;
use App\Repositories\RepositorieInterface;

class Provinsi extends Model implements RepositorieInterface
{
		protected $fillable = ['id','title'];
}
