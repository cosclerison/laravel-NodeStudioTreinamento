<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // atribuindo o nome da tabela caso o ORM não encontre o mapeamento da mesma
    protected $table = 'produtos';
}
