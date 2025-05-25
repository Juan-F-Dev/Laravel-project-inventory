<?php

namespace App\Services\Movement;
use App\Models\Movement;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


class MovementService
{

    public function getAll(): LengthAwarePaginator
    {
        $query = Movement::latest();
        return $query->paginate(Movement::PAGINATE);
    }

    public function store(array $data): Movement
    {
        return Movement::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $product = Movement::findOrFail($id);
        return $product->update($data);

    }
}
