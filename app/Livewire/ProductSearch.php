<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSearch extends Component
{

    public $search;
    public $selectedProductId = null;
    public $selectedProductName = '';

    public function selectProduct($id, $name)
    {
        $this->selectedProductId = $id;
        $this->selectedProductName = $name;
        $this->search = $name;
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
        return view('livewire.product-search', compact('results'));
    }

    public function mount()
    {
        $this->selectedProductId = old('product_id');
        if ($this->selectedProductId) {
            $product = Product::find($this->selectedProductId);
            $this->selectedProductName = $product?->name ?? '';
            $this->search = $this->selectedProductName;
        }
    }
}
