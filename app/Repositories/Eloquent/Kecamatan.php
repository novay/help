<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model as Model;
use App\Repositories\RepositorieInterface;

class Kecamatan extends Model implements RepositorieInterface
{
		protected $fillable = ['id','title','kabupaten_id'];
		public function kabupaten()
		{
			return $this->belongsTo(Kabupaten::class);
		}
		public function provinsi()
		{
			return $this->kabupaten->provinsi();
		}
		public function kelurahan()
		{
			return $this->hasMany(Kelurahan::class);
		}
}
