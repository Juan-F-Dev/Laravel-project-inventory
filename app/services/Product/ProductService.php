<?php

namespace App\Services\Product;
use App\Models\Product;
use Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Log;


class ProductService
{

    public function getAll(): LengthAwarePaginator
    {
        $query = Product::latest();
        return $query->paginate(Product::PAGINATE);
    }

    public function store(array $data)
    {
        $product = new Product();
        $product->code = 'PRD_' . $data["code"];
        $product->name = $data["name"];
        $product->amount = $data["amount"];
        $product->unit = $data["unit"];
        $product->price = $data["price"];

        try {
            $created = $product->save();
        } catch (\Throwable $th) {
            $created = false;
            Log::error($th->getMessage());
        }

        if ($created) session()->flash('success', 'Product created successfully');

        return $created;
    }

    public function update(int $id, array $data): bool
    {
        $product = Product::findOrFail($id);
        $product->code = 'PRD_'. $data['code'];
        $created = $product->update();

        return $created;

    }
}
