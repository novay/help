<?php

namespace App\Providers\Contracts\UploadHelper;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;
use Config;

class UploadHelper 
{
    private $path;
    private $file;
    private $fileName;
    private $size;
    private $update;

    use AcceptableTrait;

    function __construct($size=1028) {
           $this->size = $size;
           $this->rules = Config::get('uploadHelper.validateFile');
    }
    public function setFile($file,$update = false)
    {
        if($file instanceof UploadedFile){
            $this->file = $file;
            return true;
        }
        if($this->update || $update === true){
            return true;
        }
        self::makeError("Tidak ada file yang di dikirim");    
        return false;
    }
    public function isUpdate()
    {
        $this->update = true;
    }
    public function setSize($size)
    {
         $this->size = $size;
    }
    public function setPath($path)
    {
        $this->path = $path;
    }
    public function fileNameGenerate()
    {
        $this->fileName = md5(date('Y-mm-dd : h:i:s')).uniqid().".{$this->file->guessExtension()}";
    }
    public function getFileName()
    {
        return $this->fileName;
    }
    private function getHumanFileSize($bytes, $decimals = 2)
    {
       $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
       $factor = floor((strlen($bytes) - 1) / 3);

       return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .
       @$size[$factor];
    }
    public function checkFile()
    {
        if($this->update && is_null($this->file) ){
            return true;
        }
        if (!$this->file->isValid()) {
            self::makeError("File tidak bisa diterima");
            return false;
        }
        
        if(!$this->validateWithRule()){
            return false;
        }
        if(!($this->file->getSize()/100) >= $this->size){
            $this->error['message'][]= "File tidak melewati batas 1MB";
            self::makeError("File tidak melewati batas " . $this->getHumanFileSize($this->size));
            return false;
        }
        return true;
        
    }
    private function makeError($error)
    {
        $errors = Session::has('errors') ?  Session::get('errors') : [];
        $errors[] = $error;
        Session::flash('errors',$errors);

    }
    public function upload()
    {
        self::fileNameGenerate();
        return $this->file->move($this->path,$this->fileName);
    }
}
