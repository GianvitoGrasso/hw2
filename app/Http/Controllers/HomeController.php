<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Like;
use Session;

class HomeController extends BaseController
{
    public function home() {
        //controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        //leggiamo lo username
        $user = User::find(Session::get('user_id'));
        return view('home')->with('username', $user->username);
    }
    
    //funziona
    public function list() {
        //controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return $user->likes;
    }
    
    //funziona
    public function cerca($contenuto) {

        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://www.thesportsdb.com/api/v1/json/2/searchplayers.php?p=".$contenuto);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            curl_close($curl);
            return $result;
    }

    //non cancella
    public function cancellaList() {
        //controllo accesso
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $user = Session::get('user_id');
        Like::where('user_id', $user)->delete();  
    }

    public function like() {
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $user = Session::get('user_id');
        $like = new Like;
        $like->user_id = $user;
        $like->img = request('image');
        $like->title = request('par');
        $like->save();
        Session::put('like_id', $like->id);
        return $user->like;
    }

    public function unLike() {
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        Like::find(Session::get('like_id'))->delete();
    }

    public function disLike() {
        if(!Session::get('user_id'))
        {
            return redirect('login');
        }
        $user = Session::get('user_id');
        Like::where('user_id', $user)->where('img', request('image'))->where('title', request('par'))->delete();
    }
}
