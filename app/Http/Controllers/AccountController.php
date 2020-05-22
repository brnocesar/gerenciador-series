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
        // dd($user);
        $logs = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(5);
        // dd($logs);

        return view('account.index', compact('user', 'logs'));
    }
}
