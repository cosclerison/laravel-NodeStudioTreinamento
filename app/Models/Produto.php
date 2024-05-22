<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // atribuindo o nome da tabela caso o ORM não encontre o mapeamento da mesma
    protected $table = 'produtos';

    public function user()
    {
        // Este pertence a (User) com a chave estrangeira id_user
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function category()
    {
        // Este pertence a (User) com a chave estrangeira id_user
        return $this->belongsTo(Category::class, 'id_category');
    }

}
