<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Http\Requests\Account\UpdatePasswordAccountRequest;
use App\Model\Log;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    use FlashMessages;

    public function index()
    {
        $user         = auth()->user();
        $logs         = Log::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'desc')->take(10)->pluck('route', 'created_at')->toArray();
        $flashMessage = $this->getMessages();

        $logsTemporarios = Log::where('id', '>', 0)->orderBy('created_at', 'desc')->paginate(5);

        return view('account.index', compact('user', 'logs', 'logsTemporarios', 'flashMessage'));
    }


    public function editPassword()
    {
        return view('account.edit-password', ['user' => auth()->user()]);
    }


    public function updatePassword(UpdatePasswordAccountRequest $request)
    {
        try {

            User::find(auth()->user()->id)
                ->update([
                    'password' => Hash::make($request->new_password)
                ]);
    
            $this->flashMessage([trans('messages.account.password_updated')]);
            return redirect()->route('account.page.index');

        } catch (Exception $e) {

            $this->flashMessage([trans('messages.account.password_not_updated')]);
            return redirect()->back();
        }
    }
}
