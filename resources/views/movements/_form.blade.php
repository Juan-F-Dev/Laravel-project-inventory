<x-error></x-error>

<div class="w-full flex flex-col space-y-4">
    <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
        <div class="w-full sm:col-span-2">
            <label for="type" class=" block text-sm font-medium text-gray-900 ">
                Type
            </label>
            <select id="type" name="type" class="w-full rounded-xl capitalize">
                <option disabled selected="">Select type</option>
                <option value="sale" {{ old('type', $movement->type) == 'sale' ? 'selected' : '' }}>sale</option>
                <option value="restock" {{ old('type', $movement->type) == 'restock' ? 'selected' : '' }}>restock</option>
                <option value="return" {{ old('type', $movement->type) == 'return' ? 'selected' : '' }}>return</option>
            </select>
        </div>
        <livewire:product-search :selectedProductId="old('product_id')">
    </div>
    <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
        <div class="w-full sm:col-span-2">
            <label for="sale_point" class=" block text-sm font-medium text-gray-900 capitalize">
                sale point
            </label>
            <select id="sale_point" name="sale_point" class="w-full rounded-xl capitalize">
                <option disabled selected="">Select sale point</option>
                <option value="1" {{ old('sale_point', $movement->sale_point) == '1' ? 'selected' : '' }}>Sale 1</option>
                <option value="2" {{ old('sale_point', $movement->sale_point) == '2' ? 'selected' : '' }}>Sale 2</option>
                <option value="3" {{ old('sale_point', $movement->sale_point) == '3' ? 'selected' : '' }}>Sale 3</option>
            </select>
        </div>
        <div class="w-full">
            <label for="amount" class=" block text-sm font-medium text-gray-900 ">
                amount
            </label>
            <input type="number" name="amount" id="amount" value="{{ old('amount', $movement->amount ?? '') }}"
                class="w-full rounded-xl" placeholder="Movement amount" required />
        </div>
    </div>
</div>
