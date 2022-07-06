<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Like;
use Session;

class ProfiloController extends BaseController
{
    public function profilo() {
            //controllo accesso
            if(!Session::get('user_id'))
            {
                return redirect('login');
            }
            //leggiamo tutti i campi
            $user = User::find(Session::get('user_id'));
            $like = Like::where('user_id', Session::get('user_id'))->count();
            return view('profilo')->with('nome', $user->nome)
                                    ->with('cognome', $user->cognome)
                                    ->with('username', $user->username)
                                    ->with('email', $user->email)
                                    ->with('created_at', $user->created_at)
                                    ->with('updated_at', $user->updated_at)
                                    ->with('NumeroPreferiti', $like);
    }
    
    public function elimina() {
        //controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        User::find(Session::get('user_id'))->delete();
        return redirect('logout');
    }
}