<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class InvoiceForm extends Component
{

    public $movement;
    public $product;

    public $type = '';

    public $sale_point = '';
    public $amount = 0;

    public $productName;
    public $selectedProductPrice = 0;
    public $total;

    public $search;
    public $selectedProductId = null;
    public $selectedProductName = '';

    public function selectProduct($id, $name, $price)
    {
        $this->selectedProductId = $id;
        $this->selectedProductName = $name;
        $this->selectedProductPrice = $price;
        $this->search = $name;
        $this->calculateTotal();

    }

    public function updatedAmount($value)
    {
        $this->calculateTotal();
    }
    public function calculateTotal()
    {
        $amount = is_numeric($this->amount) ? (float) $this->amount : 0;
        $price = is_numeric($this->selectedProductPrice) ? (float) $this->selectedProductPrice : 0;

        $this->total = $price * $amount;
    }

    public function updatedSearch($value)
    {
        $this->selectedProductId = null;
        $this->selectedProductName = '';
    }
    public function render()
    {
        $results = [];

        if (strlen($this->search) > 1 && !$this->selectedProductId) {
            $results = Product::where('name', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();
        }
        return view('livewire.invoice-form', compact('results'));
    }
    public function mount()
    {
        $this->type = old('type', $this->movement->type ?? '');
        $this->sale_point = old('sale_point', $this->movement->sale_point ?? '');
        $this->amount = old('amount', $this->movement->amount ?? '');


        $this->selectedProductId = old('product_id');
        if ($this->selectedProductId) {
            $product = Product::find($this->selectedProductId);
            $this->selectedProductName = $product?->name ?? '';
            $this->search = $this->selectedProductName;
            $this->selectedProductPrice = $product->price;
        }

        $this->product = old('product_id');

        if ($this->product) {
            $product = Product::find($this->product);
            $this->productName = $product->name;
        }
    }
}
