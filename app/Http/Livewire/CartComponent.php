<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        if($product->qty > 1){
            $qty = $product->qty - 1;
            Cart::update($rowId,$qty);
        }

    }

    public function deleteFromCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message' , ' Item has been Removed');
    }

    public function destroyCart()
    {
        Cart::destroy();
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
