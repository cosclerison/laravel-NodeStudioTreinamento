<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        // Vai verificar se as credenciais existem no banco de dados
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            /**
             * Direciona o usuario para pagina atual antes de ser solicitado o login
             */
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with("error", "Usuário ou senha inválida!!!");
        }

    }
}
