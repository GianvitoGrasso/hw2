<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Session;

class RegisterController extends BaseController {


    public function do_register() {

        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        //validazione dati
        if(strlen(request('nome')) == 0 || strlen(request('cognome')) == 0  || strlen(request('username')) == 0 
            || strlen(request('email')) == 0 || strlen(request('password')) == 0 || strlen(request('conferma_password')) == 0)
        {
            Session::put('error','empty_fields');
            return redirect('register')->withInput();
        } 
        else if (User::where('username', request('username'))->first())
        {
            Session::put('error','usernamenonvalido');
            return redirect('register')->withInput();
        } 
        else if (User::where('email', request('email'))->first())
        {
            Session::put('error','emailnonvalida');
            return redirect('register')->withInput();
        }
        else if (strlen(request('password')) < 8)
        {
            Session::put('error','passwordcorta');
            return redirect('register')->withInput();
        }
        else if (request('password') != request('conferma_password'))
        {
            Session::put('error','passworderrata');
            return redirect('register')->withInput();
        }
        
        //creazione utente
        $user = new User;
        $user->nome = request('nome');
        $user->cognome = request('cognome');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = password_hash(request('password'), PASSWORD_BCRYPT);
        $user->save();
        //login
        Session::put('user_id', $user->id);
        //redirect alla home
        return redirect('home');
    }
    
    //funzione richiamata dalla route che rimanda alla home oppure errore
    public function register_form() {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        else 
        {
            $error = Session::get('error');
            Session::forget('error');
            return view('register')->with('error', $error);
        }
    }
}

?>