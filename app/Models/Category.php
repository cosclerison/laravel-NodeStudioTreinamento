<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categoryes';  // Especifica a tabela 'categoryes'

    protected $fillable = ['name', 'description'];

    public function produtos()
    {
        // Uma categoria pode possuir muitos produtos
        return $this->hasMany(Produto::class, 'id_category', 'id');
    }
}
