<?php

namespace App\Services\Product;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


class ProductService
{

    public function getAll(): LengthAwarePaginator
    {
        $query = Product::latest();
        return $query->paginate(Product::PAGINATE);
    }

    public function store(array $data): Product
    {
        return Product::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $product = Product::findOrFail($id);
        return $product->update($data);

    }
}
