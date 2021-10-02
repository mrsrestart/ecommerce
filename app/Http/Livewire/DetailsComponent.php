<?php

namespace App\Http\Livewire;

use App\Models\Product;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product_detail = Product::where('slug' , $this->slug)->first();
        $product_pup = Product::inRandomOrder()->limit(4)->get();
        $related_product = Product::where('category_id',$product_detail->category_id)->inRandomOrder()->limit(7)->get();
        return view('livewire.details-component',['product_detail' => $product_detail,'product_pup' => $product_pup,'related_product' => $related_product])->layout('layouts.base');
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id , $product_name ,1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message' , 'Item Added in Cart');
        return redirect()->route('product.cart');
    }
}
