<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

class AddCartItem extends Component
{
    public $product,$quantity;

    public $qty = 1;

    public $options = [
        'color_id' => null,
        'size_i' => null
    ];

    public function mount(Product $product)
    {
        $this->quantity = $this->product->quantity;
        $this->options['image'] = Storage::url($this->product->images()->first()->url);
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
         'options' => $this->options
         ]);

         $this->emitTo('dropdown-cart','render');

    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
