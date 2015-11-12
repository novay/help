<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\RepositorieInterface;

class JenisKelamin extends Model implements RepositorieInterface
{
		protected $guarded = ['id'];
}
