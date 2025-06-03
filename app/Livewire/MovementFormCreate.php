<?php

namespace App\Livewire;

use App\Models\Movement;
use App\Models\Product;
use Livewire\Component;
use NumberFormatter;

class MovementFormCreate extends Component
{
    public $movement;

    public $type = '';

    public $sale_point = '';
    public $amount = '';

    public $product;
    public $productName;
    public $total;

    public function mount(Product $product)
    {
        $this->product = old('product_id');

        if($this->product){
            $product = Product::find($this->product);
            $this->productName = $product->name;
        }
    }

    public function render()
    {
        return view('livewire.movement-form-create');
    }
}
