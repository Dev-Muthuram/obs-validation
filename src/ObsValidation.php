<?php

namespace Muthuram\ObsValidation;
use Validator;
use Illuminate\Http\Request;
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


    public function isCompanyDomain($request)
    {
    	$validator = Validator::make($request->all(), [
            'companyName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);            
        }

    	$domain = $request->companyName;
    	$rules = ['email' => 'required|email|max:255|regex:/(.*)'. $domain .'\.com$/i',];
    	$messages = array(
 		'email.regex' => 'We appreciate your interest on using our System. However at the moment we offer this service only to '.$domain.' company!',);
    	// Where $rules is the array you pass on now
$validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);            
        }else
        {
        	return response()->json(['success'=>'data'],200);
        }
    }
}
