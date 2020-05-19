<?php

namespace App\Http\Controllers;

use App\Helpers\FlashMessages;
use App\Http\Requests\Autenticacao\StoreAutenticacaoRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutenticacaoController extends Controller
{
    use FlashMessages;

    public function index()
    {
        $flashMessage = $this->getMessages();

        return view('autenticacao.index', compact('flashMessage'));
    }

    public function entrar(Request $request)
    {
        if ( Auth::check() ) {

            $this->flashMessage([trans('messages.authentication.user_already_logged')]);
            return redirect()->route('home');
        }

        if ( !Auth::attempt($request->only('email', 'password')) ) {
            return redirect()->back()->withErrors('Usuário e/ou senha incorretos');
        }

        User::find(Auth::user()->id)->update(['last_login' => date(now())]);

        $this->flashMessage([trans('messages.authentication.success_login')]);
        return redirect()->route('home');
    }

    public function create()
    {
        return view('autenticacao.create');
    }

    public function store(StoreAutenticacaoRequest $request)
    {
        $credenciais = $request->except('_token');
        $credenciais['password'] = Hash::make($credenciais['password']);
        $credenciais['last_login'] = date(now());

        $user = User::create($credenciais);

        Auth::login($user);

        $this->flashMessage([trans('messages.authentication.user_created')]);
        return redirect()->route('home');
    }

    public function sair(Request $request)
    {
        Auth::logout();

        $this->flashMessage([trans('messages.authentication.session_closed')]);
        return redirect()->route('pagina_login');
    }
}
