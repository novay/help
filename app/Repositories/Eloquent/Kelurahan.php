<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model as Model;
use App\Repositories\RepositorieInterface;

class Kelurahan extends Model implements RepositorieInterface
{
		protected $fillable = ['id','kecamatan_id','title'];
		public function kecamatan()
		{
			return $this->belongsTo(Kecamatan::class);
		}
		public function lists($title,$key)
		{
			$o[] = "--Pilih salah satu--";
			return array_merge_recursive($o , parent::lists($title,$key)->toArray());
		}
		public function provinsi()
		{
			return $this->kecamatan->kabupaten->provinsi();
		}
		public function kabupaten()
		{
			return $this->kecamatan->kabupaten();
		}
}
