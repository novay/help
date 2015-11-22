<?php namespace App\Providers\Contracts\UploadHelper;

use Illuminate\Support\Facades\Facade;
class UploadHelperFacade extends Facade
{
	protected static function getFacadeAccessor() { return 'UploadHelper'; }
}


