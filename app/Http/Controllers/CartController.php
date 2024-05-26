<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart; // opcional removendo erro na linha 12

class CartController extends Controller
{
    public function cartList()
    {
        $itens = Cart::getContent();
        dd($itens);
    }

    public function addCart(Request $request)
    {
        Cart::add([
            'id'         => $request->id,
            'name'       => $request->name,
            'price'      => $request->price,
            'quantity'   => $request->qtd,
            'attributes' => array(
                'image'  => $request->image
            )
        ]);
    }
}
