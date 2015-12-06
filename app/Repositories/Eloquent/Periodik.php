<?php namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model as Model;
use App\Repositories\RepositorieInterface;

class Periodik extends Model implements RepositorieInterface
{
		protected $guarded = ['id'];
		public function sekolah()
		{
			return $this->belongsTo(Sekolah::class);
		}
		public function semester()
		{
			return $this->belongsTo(Semester::class);
		}
		public function waktu_penyelenggaraan()
		{
			return $this->belongsTo(WaktuPenyelengaraan::class);
		}
		public function sumber_listrik()
		{
			return $this->belongsTo(SumberListrik::class);
		}
		public function tahun_ajaran(){
			return $this->belongsTo(TahunAjaran::class);
		}
		public function wilayah_khusus()
		{
			return $this->belongsTo(KategoriWilayah::class);
		}
		public function akses_internet()
		{
			return $this->belongsToMany(AksesInternet::class,'akses_internet_periodik','akses_internet_ida');
		}
}
