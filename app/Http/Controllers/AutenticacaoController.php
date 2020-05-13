<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutenticacaoController extends Controller
{
    public function index()
    {
        return view('autenticacao.index');
    }

    public function entrar(Request $request)
    {
        if ( Auth::check() ) {

            $request->session()->flash('mensagem', "Usuário " . Auth::user()->name . " já está logado");
            return redirect()->route('listar_series');
        }

        if ( !Auth::attempt($request->only('email', 'password')) ) {
            return redirect()->back()->withErrors('Usuário e/ou senha incorretos');
        }

        $request->session()->flash('mensagem', "Usuário " . Auth::user()->name . " logado");
        return redirect()->route('listar_series');
    }

    public function create()
    {
        return view('autenticacao.create');
    }

    public function store(Request $request)
    {
        $credenciais = $request->except('_token');
        $credenciais['password'] = Hash::make($credenciais['password']);

        $user = User::create($credenciais);

        Auth::login($user);

        $request->session()->flash('mensagem', "Usuário " . Auth::user()->name . " criado");
        return redirect()->route('listar_series');
    }

    public function sair(Request $request)
    {
        Auth::logout();

        return redirect()->route('pagina_login');
    }
}
