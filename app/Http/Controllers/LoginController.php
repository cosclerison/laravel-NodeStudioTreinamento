<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ], [
            'email.required'    => "O Campo E-mail é obrigatório.",
            'email.email'       => "O E-mail não é válido.",
            'password.required' => "A Senha é obrigatória."
        ]);
    

        // Vai verificar se as credenciais existem no banco de dados
        if (Auth::attempt($credentials)) {
            // Adiciona um log ou dd para verificar as credenciais
            // dd($credentials);
            Log::info('Credenciais corretas', ['credentials' => $credentials]);
    
            $request->session()->regenerate();
    
            /**
             * Direciona o usuario para pagina atual antes de ser solicitado o login
             */
            return redirect()->intended('/admin/dashboard');
        } else {
            Log::warning('Credenciais inválidas', ['credentials' => $credentials]);
            return redirect()->back()->with("erro", "Usuário ou senha inválida!!!");
        }
    }
}
