<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
class ShopComponenet extends Component
{

    public $sorting;
    public $pageSize;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pageSize = '12';
    }
    use WithPagination;
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id , $product_name ,1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message' , 'Item Added in Cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {

        if($this->sorting == 'date' ){
            $products = Product::orderBy('created_at' , 'DESC')->paginate($this->pageSize);

        }elseif ($this->sorting == 'price'){
            $products = Product::orderBy('regular_price' , 'ASC')->paginate($this->pageSize);

        }elseif ($this->sorting == 'price-desc'){
            $products = Product::orderBy('regular_price' , 'DESC')->paginate($this->pageSize);

        }else{
            $products = Product::paginate($this->pageSize);
        }


        $categories = Category::all();
        return view('livewire.shop-componenet' , ['products' => $products , 'categories' => $categories])->layout('layouts.base');
    }
}
