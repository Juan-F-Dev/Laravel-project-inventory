<?php

namespace App\Services\Movement;
use App\Http\Requests\Movements\CreateMovementRequest;
use App\Models\Movement;
use App\Models\Product;
use DB;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Log;


class MovementService
{

    public function getAll(): LengthAwarePaginator
    {
        $query = Movement::latest();
        return $query->paginate(Movement::PAGINATE);
    }

    public function store(array $data) //: Movement
    {
        DB::beginTransaction();
        $transaction = $this->proccessTransaction($data);
        // return Movement::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $product = Movement::findOrFail($id);
        return $product->update($data);

    }

    public function proccessTransaction(array $data)
    {
        try {
            // ? create movement
            $movement = Movement::create([
                'type' => $data['type'],
                'amount' => $data['amount'],
                'sale_point' => $data['sale_point'],
                'product_id' => $data['product_id'],
            ]);

            // ?  Search Product to update
            $product = Product::findOrFail($data['product_id']);

            // ? Modification to the property amount of the product
            match ($movement->type) {
                Movement::MOVEMENT_TYPE_RESTOCK,
                Movement::MOVEMENT_TYPE_RETURN => $product->increment('amount', $movement->amount),

                Movement::MOVEMENT_TYPE_SALE => $product->decrement('amount', $movement->amount) ?: throw new Exception('insufficient stocks'),
            };

            // ? commit to the database
            DB::commit();

        } catch (\Throwable $th) {
            // ?
            DB::rollBack();
            Log::error('Failed movement' . $th->getMessage());
            return redirect()->back()->with('error' . $th->getMessage());
        }

        return redirect()->route('movements.index')->with('success','successfully created movement');
    }
}
