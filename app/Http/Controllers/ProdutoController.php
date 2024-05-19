<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        return "<h1>Index</h1>";
    }

    public function show($id = 0) {
        return "Show: <strong>" .  $id . "</strong>";
    }
}
