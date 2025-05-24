<x-error></x-error>

<div class="w-full flex flex-col space-y-4">
  <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
    <div class="w-full">
      <label for="code" class=" block text-sm font-medium text-gray-900 ">
        Code:
      </label>
      <div class="flex gap-1">
        <input class="w-full rounded-l-xl max-w-20 text-gray-400 border-gray-400" type="text" value="PRD_" disabled />
        <input type="text" name="code" id="code" value="{{ old('code', $product->code ?? '') }}"
          class="w-full rounded-r-xl" placeholder="product Code" required="" value="" />
      </div>
    </div>
    <div class="w-full">
      <label for="name" class=" block text-sm font-medium text-gray-900 ">
        Product Name:
      </label>
      <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}"
        class="w-full rounded-xl" placeholder="Type product name" required="" />
    </div>
  </div>
  <div class="w-full flex flex-col sm:flex-row gap-3 sm:gap-y-0 gap-y-3">
    <div class="w-full">
      <label for="ammount" class=" block text-sm font-medium text-gray-900 ">
        Ammount
      </label>
      <input type="number" name="ammount" id="ammount" value="{{ old('ammount', $product->ammount ?? '') }}"
        class="w-full rounded-xl" placeholder="Product Ammount" required="" />
    </div>
    <div class="w-full">
      <label for="price" class=" block text-sm font-medium text-gray-900 ">
        Price
      </label>
      <input type="number" name="price" id="price" min="0"
        value="{{ old('price', $product->price ?? '') }}" class="w-full rounded-xl" placeholder="$2999"
        required="" />
    </div>
  </div>
  <div class="w-full sm:col-span-2">
    <label for="unit" class=" block text-sm font-medium text-gray-900 ">
      Unit
    </label>
    <select id="unit" name="unit" class="w-full rounded-xl">
      <option disabled selected="">Select Unit</option>
      <option value="und" {{ old('unit', $product->unit) == 'und' ? 'selected' : '' }}>unit (und)</option>
      <option value="lbs" {{ old('unit', $product->unit) == 'lbs' ? 'selected' : '' }}>pounds (lbs)</option>
      <option value="kg" {{ old('unit', $product->unit) == 'kg' ? 'selected' : '' }}>Kilograms (kg)</option>
    </select>
  </div>
</div>
