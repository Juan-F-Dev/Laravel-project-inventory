@php
  $salePoints = [
      '1' => 'Sale Point 1',
      '2' => 'Sale Point 2',
      '3' => 'Sale Point 3',
  ];
@endphp

<div class="p-4 flex flex-col sm:flex-row gap-5 max-w-7xl m-auto">
  <form action="{{ route('movements.store') }}" method="POST"
    class="w-full m-auto bg-white shadow-2xl py-10 px-10 rounded-lg">
    @csrf
    <x-error></x-error>
    <div class="w-full flex flex-col space-y-4">
      <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
        <div class="w-full sm:col-span-2">
          <label for="type" class=" block text-sm font-medium text-gray-900 ">
            Type
          </label>
          <select wire:model.live='type' id="type" name="type" class="w-full rounded-xl capitalize">
            <option value="" disabled>Select type</option>
            <option value="sale">sale</option>
            <option value="restock">restock</option>
            <option value="return">return</option>
          </select>
        </div>
        <div class="relative w-full">
          <label for="product_id" class=" block text-sm font-medium text-gray-900 ">
            Product
          </label>

          <input wire:model.live="search" type="text" id='product_search' class="w-full rounded-xl"
            placeholder="Search Product..." autocomplete="off" required />


          <input type="hidden" name="product_id" value="{{ $selectedProductId }}">

          @if (!empty($results))
            <div class="absolute mt-2 w-full overflow-hidden rounded-md bg-white z-10 border shadow">
              @foreach ($results as $result)
                <div class="cursor-pointer py-2 px-3 hover:bg-slate-100"
                  wire:click="selectProduct({{ $result->id }}, '{{ addslashes($result->name) }}', {{ $result->price }})">
                  <p class="text-sm font-medium text-gray-600">{{ $result->name }}</p>
                </div>
              @endforeach
            </div>
          @endif
        </div>
      </div>
      <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
        <div class="w-full sm:col-span-2">
          <label for="sale_point" class=" block text-sm font-medium text-gray-900 capitalize">
            sale point
          </label>
          <select wire:model.live='sale_point' id="sale_point" name="sale_point" class="w-full rounded-xl capitalize">
            <option value="" disabled>Select sale point</option>
            <option value="1">Sale Point 1</option>
            <option value="2">Sale Point 2</option>
            <option value="3">Sale Point 3</option>
          </select>
        </div>
        <div class="w-full">
          <label for="amount" class=" block text-sm font-medium text-gray-900 ">
            amount
          </label>
          <input wire:model.live="amount" type="number" name="amount" id="amount"
            value="{{ old('amount', $movement->amount ?? '') }}" class="w-full rounded-xl" placeholder="Movement amount"
            required />
        </div>
      </div>
    </div>
    <button type="submit"
      class="bg-primary focus:ring-primary-200 hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
      Add product
    </button>
  </form>
  <div class="w-full max-w-md bg-white shadow-2xl py-8 px-6 rounded-lg">
    <h2 class="text-xl font-bold border-b pb-2 mb-4 text-gray-700">Movement Summary</h2>

    <div class="text-sm text-gray-600 space-y-2">
      <div class="flex justify-between">
        <span>Date:</span>
        <span>{{ now()->format('d/m/Y') }}</span>
      </div>

      <div class="flex justify-between capitalize">
        <span>Type of Movement:</span>
        <span class="font-semibold text-gray-800">{{ $type == '' ? 'Select a type' : $type }}</span>
        <!-- Puedes reemplazar dinámicamente -->
      </div>

      <div class="flex justify-between capitalize">
        <span>Sale Point</span>
        <span class="font-semibold text-gray-800">{{ $salePoints[$sale_point] ?? 'Select Sale Point' }}</span>
      </div>
    </div>

    <div class="mt-6">
      <h3 class="text-sm font-bold text-gray-600 mb-2">Products</h3>
      <ul class="divide-y text-sm text-gray-700">
        <li class="py-2 flex justify-between capitalize">
          @if ($selectedProductName)
            <span>{{ $selectedProductName }} x1</span>
          @else
            <span>Select a product</span>
          @endif
          <span>${{ $selectedProductPrice }}</span>
        </li>
      </ul>
    </div>
    <div class="border-t mt-4 pt-4 text-sm text-gray-700">
      <div class="flex justify-between font-bold text-lg text-primary mt-2">
        <span>Total: </span>
        <span> ${{ number_format($total, 0) }}</span>
      </div>
    </div>
  </div>
</div>
