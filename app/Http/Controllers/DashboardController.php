<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * [Esta função seria para ja iniciar o metodo middleware
     * na construção do controller] 
     */
    // public function __construct()
    // {
    //     modo 01
    //     $this->middleware('auth')->only(['index']); // Seta quais função necessita de login
    //     modo 02
    //     $this->middleware('auth')->except(['index']); // Seta quais função não necessita de login
    // }

    public function index()
    {
        return view('admin.dashboard');
    }
}
