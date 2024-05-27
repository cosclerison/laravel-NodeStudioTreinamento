<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $usuarios = User::all()->count();

        // Gráfico 1 - Usuários
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total'),
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        // Preparando array
        foreach ($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        // Formatar dados nas variaveis para enviar para o frontend
        $userLabel  = "'Comparativo de cadastros de usuários'";
        $userTotal  = implode(',', $total);
        $userAno    = implode(',', $ano);

        
        // Gráfico 1 - Usuários
        $categoryData = Category::with('produtos')->get();
        
        // Preparando array
        foreach ($categoryData as $category) {
            $catName[]  = "'" . $category->name . "'";
            $catTotal[] = $category->produtos->count();
            // $catTotal[] = Produto::where('id_category', $category->id)->count();
        }
        
        // Formatar dados nas variaveis para enviar para o frontend
        $categoryName   = implode(',', $catName);
        $categoryTotal  = implode(',', $catTotal);

        return view('admin.dashboard', compact(
            'usuarios',
            'userLabel',
            'userTotal',
            'userAno',
            'categoryName',
            'categoryTotal',
        ));
    }
}
