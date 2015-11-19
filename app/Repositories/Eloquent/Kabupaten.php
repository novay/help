<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model as Model;
use App\Repositories\RepositorieInterface;

class Kabupaten extends Model implements RepositorieInterface
{
		protected $fillable = ['id','provinsi_id','title'];
		public function provinsi()
		{
			return $this->belongsTo(Provinsi::class);
		}
}
