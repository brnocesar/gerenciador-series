<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $flash_message = [
            trans('messages.danger'),
            trans('messages.info'),
            trans('messages.success'),
            trans('messages.warning'),
        ];
        
        return view('home', compact('flash_message'));
    }
}
