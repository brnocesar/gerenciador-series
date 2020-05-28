<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Model\Log;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    use FlashMessages;

    public function index()
    {
        $user         = auth()->user();
        $logs         = Log::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'desc')->take(15)->pluck('route', 'created_at')->toArray();
        $flashMessage = $this->getMessages();

        $logsTemporarios         = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(5);

        return view('account.index', compact('user', 'logs', 'logsTemporarios', 'flashMessage'));
    }


    
}
