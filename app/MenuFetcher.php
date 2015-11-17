<?php 
namespace App;
/**
*  service menu fetcher
*/
use Route;
class MenuFetcher
{
	function __construct()
	{

	}
	public function lists($level)
	{
		$menu = [
			'admin'=>[
				[ 'route'=>'data.', 'name'=>'Master Data', 'icon'=> 'fa fa-database','inGroup'=>
					[
						['route'=>'administrasi.sekolah.','name'=>'Administrasi Sekolah','inGroup'=>
							[
								['route'=>'bentuk_pendidikan.index','name'=>'Bentuk Pendidikan'],
								['route'=>'izin_sekolah.index','name'=>'Izin Sekolah'],
								['route'=>'status_sekolah.index','name'=>'Status Sekolah'],
								
							],
						],
						['route'=>'akreditasi.','name'=>'Akreditasi','inGroup'=>
							[
								['route'=>'lembaga_akreditasi.index','name'=>'Lembaga Akreditasi'],
								['route'=>'nilai_akreditasi.index','name'=>'Nilai Akreditasi'],
							],
						],
						['route'=>'region.','name'=>'Region','inGroup'=>
							[
								['route'=>'provinsi.index','name'=>'Provinsi'],
								['route'=>'kabupaten.index','name'=>'Kabupaten'],
								['route'=>'kecamatan.index','name'=>'Kecamatan'],
								['route'=>'kelurahan.index','name'=>'Kelurahan'],
								['route'=>'kategori_wilayah.index','name'=>'Kategori Wilayah'],
							],
						],
						['route'=>'penyelenggaraan.','name'=>'Penyelanggaran Belajar','inGroup'=>
							[
								['route'=>'tahun_ajaran.index','name'=>'Tahun Ajaran'],
								['route'=>'semester.index','name'=>'Semester'],
								['route'=>'waktu_penyelenggaraan.index','name'=>'Waktu Penyelenggaraan'],
							],
						],
						['route'=>'tambahan.','name'=>'Data Tambahan','inGroup'=>
							[
								['route'=>'agama.index','name'=>'Agama'],								
								['route'=>'akses_inet.index','name'=>'Akses Internet'],								
								['route'=>'jenis_kelamin.index','name'=>'Jenis Kelamin'],								
								['route'=>'suplai_air.index','name'=>'Suplai Air'],								
							],
						],
					],
				],
				['route'=>'yayasan.index','name'=>'Data Yayasan','icon'=>'fa fa-building'],
				['route'=>'sekolah.','name'=>'Sekolah','icon'=>'fa fa-institution',
					'inGroup'=>[
						['route'=>'program.','name'=>'Program',
							'inGroup'=>
							[
								['route'=>'inkuisi.index','name'=>'Program Inkuisi'],
								['route'=>'layanan_khsusus.index','name'=>'Layanan Khusus']
							]
						],
						['route'=>'akreditasi.index','name'=>'Akreditasi Sekolah'],
						['route'=>'perizinan.index','name'=>'Perizinan Sekolah'],
						['route'=>'lokasi.index','name'=>'Lokasi Sekolah'],
						['route'=>'periodik.index','name'=>'Data Periodik Sekolah'],
						['route'=>'sanitasi.index','name'=>'Data Sanitasi'],
						['route'=>'siswa.index','name'=>'Data Siswa'],
						['route'=>'tambahan.index','name'=>'Data Tambahan'],
						// ['route'=>'massasigment','name'=>'Mass Asigment Sekolah'],
					]
				],
			],
		];
		return $menu[$level];
	}
	public function make($menu,$role = null,$prefix = null,$child = false)
	{
		$o = "";
		$lists = is_object($menu) ? $menu->lists($role) : $menu;
		foreach ($lists as $list) {
			if(is_array($list)){
				if(isset($list['inGroup'])){
					$inGroup = $list['inGroup'];
					unset($list['inGroup']);
					$active  = in_array( $list['route'],explode( '.',Route::currentRouteName() ) ) ? 'active expand':'';
					if(isset($list['icon']) ){ 
					 	$icon = "<i class='{$list['icon']}'></i> ";
					}else{
						$icon ="<i class='fa fa-circle-o text-blue'></i>"; 
					}
					$o.="<li class = 'treeview $active'>";
						$angle = $child ? "<i class='fa fa-angle-left pull-right'></i>" : "";
						$o.="<a href='#'>$icon<span class='title'>{$list['name']}</span> $angle</a>";
						$o.="<ul class='treeview-menu'>";
						$oldPrefix = $prefix;
						$prefix = (!is_null($prefix)) ? $prefix.'.'.$list['route'] : $list['route'];
						$prefix = str_replace('..', '.', $prefix);
						$o.= $this->make($inGroup,$role,$prefix,true);
						$prefix = $oldPrefix;
						$o.="</ul>";
					$o.="</li>";
				}else{
					$routeName = $role;
					$routeName.= !is_null($prefix) ? ".$prefix":".";
					$routeName.= "{$list['route']}";
					$link = route($routeName);
					if($child){
						$o.="<li><a href='$link'>";
					}else{
						$o.="<li><a href='$link'>";
					}
						$ic= isset($list['icon']) ? "<i class='{$list['icon']}'></i>" : "<i class='fa fa-circle-o text-orange'></i>"; 
						$o.="$ic <span class='title'> {$list['name']}</span>";
					$o.="</a></li>";
					
				}
			}
		}
		return $o;

	}
}