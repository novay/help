<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use RepoBind;
abstract class Request extends FormRequest
{
    
    public function forbiddenResponse()
    {
    	if($this->ajax() && $this->wantsJson()){
    		return new JsonResponse(['message'=>'Forbidden Access'],403);
    	}else{
    		return view('errors')->withNumber('403');
    	}
    }
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson()) {
            return new JsonResponse(['errors'=>$errors], 422);
        }

        return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }

    public function getRepo($wild_card)
    {
        return RepoBind::getrepo($wild_card);
    }
}
