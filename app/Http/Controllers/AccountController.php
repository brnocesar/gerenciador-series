<?php

namespace App\Http\Controllers;

use App\Model\Log;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    // receber quantidade do paginate
    public function index()
    {
        $user = auth()->user();
        $lastLogs = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->take(15)->pluck('route', 'created_at')->toArray();
        $logs = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(5);

        return view('account.index', compact('user', 'lastLogs', 'logs'));
    }


    
}
