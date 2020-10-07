<?php

namespace Muthuram\ObsValidation;

class ObsValidation
{
    public function isEmailPresent($request)
    {
    	$email = $request->email;						
    	if($email)
    	{
    		return 'true';
    	}else{
    		return 'false';
    	}
    }
}
