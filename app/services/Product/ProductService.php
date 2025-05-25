<?php

namespace App\Services\Product;
use App\Models\Product;
use Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


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
        $product->ammount = $data["ammount"];
        $product->unit = $data["unit"];
        $product->price = $data["price"];


        return $product->save();
    }

    public function update(int $id, array $data): bool
    {
        $product = Product::findOrFail($id);
        return $product->update($data);

    }
}
