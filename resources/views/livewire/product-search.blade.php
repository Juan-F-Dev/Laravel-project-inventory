<div class="relative w-full">
    <label for="product_id" class=" block text-sm font-medium text-gray-900 ">
        Product
    </label>

    <input
        wire:model.live="search"
        type="text"
        id='product_search'
        class="w-full rounded-xl"
        placeholder="Search Product..."
        autocomplete="off" />

    <input type="hidden" name="product_id" value="{{ $selectedProductId }}">

    @if (!empty($results))
        <div class="absolute mt-2 w-full overflow-hidden rounded-md bg-white z-10 border shadow">
            @foreach ($results as $result)
                <div class="cursor-pointer py-2 px-3 hover:bg-slate-100"
                    wire:click="selectProduct({{ $result->id }}, '{{ addslashes($result->name) }}')">
                    <p class="text-sm font-medium text-gray-600">{{ $result->name }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
