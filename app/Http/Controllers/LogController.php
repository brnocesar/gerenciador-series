<?php

namespace App\Http\Controllers;

use App\Model\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::where([
            ['id', '>', 0],
            ['user_id', '=', auth()->user()->id]
        ])->orderBy('created_at', 'desc')->paginate(20);

        return view('account.page-logs', compact('logs'));
    }


    public function all()
    {
        $logs = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(20);

        return view('account.page-logs', compact('logs'));
    }
}
