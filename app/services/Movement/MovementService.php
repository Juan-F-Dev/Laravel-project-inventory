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

    public function store(array $data) //: Movement
    {

        $transaction = $this->transaction($data);
        // return Movement::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $product = Movement::findOrFail($id);
        return $product->update($data);

    }

    public function transaction(array $data)
    {
        try {
            switch ($data['type']) {
                case Movement::MOVEMENT_TYPE_SALE:
                    dd('sale');
                    break;
                case Movement::MOVEMENT_TYPE_RESTOCK:
                    dd('Restock');
                    break;
                case Movement::MOVEMENT_TYPE_RETURN:
                    dd('return');
                    break;

                default:
                    # code...
                    break;
            }
        } catch (\Throwable $th) {
            return false;
        }

        return true;
    }
}
