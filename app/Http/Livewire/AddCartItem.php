<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;

class AddCartItem extends Component
{
    public $product,$quantity;

    public $qty = 1;

    public function mount(Product $product)
    {
        $this->quantity = $this->product->quantity;
    }

    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }

    public function increment()
    {
        $this->qty = $this->qty + 1;
    }

    public function addItem()
    {
        Cart::add(['id' => $this->product->id,
         'name' => $this->product->name,
         'qty' => $this->qty,
         'price' => $this->product->price,
         'weight' => 550,
         ]);
    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
