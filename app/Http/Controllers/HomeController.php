<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use FlashMessages; 
    
    public function index()
    {
        $flashMessage = $this->getMessages();

        return view('home', compact('flashMessage'));
    }
}
