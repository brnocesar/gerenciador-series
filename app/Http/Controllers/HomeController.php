<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Serie;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use FlashMessages; 
    
    public function index()
    {
        $users        = User::all()->count();
        $activeUsers  = User::where('last_login', '>=', date("Y-m-d", time()))->count();
        $series       = Serie::all()->count();
        $episodios    = 0;
        $flashMessage = $this->getMessages();

        return view('home', compact('users', 'activeUsers', 'series', 'episodios', 'flashMessage'));
    }
}
