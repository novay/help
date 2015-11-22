<?php 
namespace App\Providers\Contracts\UploadHelper;
trait AcceptableTrait {
	protected $allowedType;
	protected $rules;
	private function rule($value)
	{
		return $this->rules[$value]['rule'];
	}
	public function allowedFileType()
	{
		$this->allowedType = func_get_args();
	}
	public function validateWithRule()
	{
		if(count($this->allowedType) > 0 && is_array($this->allowedType)){
			foreach ($this->allowedType as $type) {
				if (is_callable($this->rule($type)) ){
					if(!call_user_func_array($this->rule($type),[$this->file])){
						$this->makeError($this->rules[$type]['message']);
						return false;
					}
					return true;
				}
			}
		}
	}
}
