<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function do_login() {

        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        //validazione dati
        if(strlen(request('username')) == 0 || strlen(request('password')) == 0)
        {
            Session::put('error','empty_fields');
            return redirect('login')->withInput();
        }
        $user = User::where('username', request('username'))->first();
        if (!$user || !password_verify(request('password'), $user->password) )
        {
            Session::put('error','wrong');
            return redirect('login')->withInput();
        }
        //login
        Session::put('user_id', $user->id);
        //redirect alla home
        return redirect('home');
    }
    
    public function login_form() {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        else 
        {
            $error = Session::get('error');
            Session::forget('error');
            return view('login')->with('error', $error);
        }
    }
    public function logout() {
        // Elimina dati di sessione
        Session::flush();
        return redirect('login'); 
     }
}
