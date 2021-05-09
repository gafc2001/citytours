<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('usuario.login');
    }
    public function login()
    {
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'address' => 'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return 'Sesión iniciada';
            /*return redirect()->route('pag');*/        
        }
        return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput(request(['email']));
    }
}
