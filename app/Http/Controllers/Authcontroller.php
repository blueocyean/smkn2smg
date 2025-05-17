<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Authcontroller extends Controller
{
    public function login() 
    {
        return view('auth.login');    
    }

    public function login_post (Request $request){
        $validator = validator :: make($request ->all(), [
            'identifier' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credential = $request->only('identifier','password');
        if(Auth::attempt()){
            dd (Auth :: user());

            // $user = Auth :: user();
            
            // return redirect()->route('dahboard');
        }
        return redirect()->back();
    }
}
