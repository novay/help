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
			'data'=>[
					[ 'route'=>'jenis_kelamin.index', 'name'=>'Data  Instansi ', 'icon'=> 'fa fa-building-o'],
					[ 'route'=>'jenis_kelamin.index', 'name'=>'Data Bantuan  ', 'icon'=> 'fa fa-cubes'],
					[ 'route'=>'jenis_kelamin.index', 'name'=>'Data Kriteria  ', 'icon'=> 'fa fa-tag'],
					[ 'route'=>'jenis_kelamin.index', 'name'=>'Data Indikator  ', 'icon'=> 'fa fa-star'],
					[ 'route'=>'jenis_kelamin.', 'name'=>'Data Region  ', 'icon'=> 'fa fa-globe',
						'inGroup'=>[
							[ 'route'=>'index', 'name'=>'Data Provinsi  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'index', 'name'=>'Data Kabupaten  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'index', 'name'=>'Data Kecamatan  ', 'icon'=> 'fa fa-map-marker'],
							[ 'route'=>'index', 'name'=>'Data Desa  ', 'icon'=> 'fa fa-map-marker'],
						]
					],
			]
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
					$icon = isset($list['icon']) ? "<i class='{$list['icon']}'></i> " : ""; 
					$o.="<li class = 'treeview $active'>";
						$o.="<a href='#'>$icon<span class='title'>{$list['name']}</span></a>";
						$o.="<ul class='treeview-menu'>";
						$oldPrefix = $prefix;
						$prefix = (!is_null($prefix)) ? $prefix.'.'.$list['route'] : $list['route'];
						$o.=$this->make($inGroup,$role,$prefix,true);
						$prefix = $oldPrefix;
						$o.="</ul>";
					$o.="</li>";
				}else{
					$routeName = $role;
					$routeName.= !is_null($prefix) ? ".$prefix":".";
					$routeName.= "{$list['route']}";
					$link = route($routeName);
					if($child){
						$o.="<li style='padding-left:5px;'><a href='$link' >";
					}else{
						$o.="<li><a href='$link' >";
					}
						$ic= isset($list['icon']) ? "<i class='{$list['icon']}'></i>" : ""; 
						$o.="$ic <span class='title'> {$list['name']}</span>";
					$o.="</a></li>";
				}
			}
		}
		return $o;

	}
}