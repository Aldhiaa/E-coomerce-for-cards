<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Cart;
use App\Models\Card;
use Illuminate\Http\Request; 
use App\Http\Requests;
class CartController extends Controller
{
    public function index()
    {
    
        // calculate cart total
        $tax = 0;
        $shipping = 0;
        $user_id=auth()->user()->id;
        $carts=Cart::Where('user_id',$user_id);
        dd($carts->name);
        return view('cart', compact('carts', 'tax', 'shipping'));
    }

    public function add(Request $request)
    {   
        $cart = Cart::updateOrCreate(
            ['user_id' => auth()->user()->id,'card_id'=> $request->id],
            
        );
        return back()->withSuccess('تم إضافة البطاقة إلى العربة بنجاح');
    }

    public function remove($id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();
        return back()->withSuccess('تم إزالة البطاقة من العربة بنجاح!');
    }
}
