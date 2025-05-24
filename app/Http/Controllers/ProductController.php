<?php

namespace App\Http\Controllers;
use App\Http\Requests\products\CreateProductRequest;
use App\Http\Requests\products\UpdateProductRequest;
use App\Models\Product;
use App\Services\Product\ProductService;

class ProductController extends Controller
{

public function __construct(protected ProductService $service) {}

    public function index()
    {
        $products = $this->service->getAll();
        return view('products.index', compact(['products']));
    }

    public function create()
    {
        $product = new Product();
        return view('products.create', compact(['product']));
    }

    public function store(CreateProductRequest $request)
    {
        $created = $this->service->store($request->validated());
        if ($created) { session()->flash('success', 'Product created successfully'); }

        return  redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact(['product']));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $updated = $this->service->update($product->id, $request->validated());
        if ($updated) { session()->flash('success', 'Product updated successfully'); }
        return redirect()->route('products.index', compact(['updated']));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
