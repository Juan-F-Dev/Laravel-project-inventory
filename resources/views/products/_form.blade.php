{{-- Mostrar errores generales --}}

@csrf
@if ($errors->any())
    <div class="absolute top-5 right-5">
        <ul class="space-y-2">
            @foreach ($errors->all() as $error)
                <li class="py1 rounded bg-red-100 px-3 text-red-700">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (isset($product) && $product->exists)
    @method('PUT')
@endif

<div class="grid gap-4 sm:grid-cols-2 sm:gap-6 shadow-2xl rounded-xl p-6 bg-white dark:bg-gray-800">
    <div>
        <label for="code" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
            Code:
        </label>
        <input type="text" name="code" id="code" value="{{ old('code', $product->code ?? '') }}"
            class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
            placeholder="product Code" required="" value="" />
    </div>
    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
            Product Name:
        </label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}"
            class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
            placeholder="Type product name" required="" />
    </div>
    <div class="w-full">
        <label for="ammount" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
            Ammount
        </label>
        <input type="number" name="ammount" id="ammount" value="{{ old('ammount', $product->ammount ?? '') }}"
            class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
            placeholder="Product Ammount" required="" />
    </div>
    <div class="w-full">
        <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
            Price
        </label>
        <input type="number" name="price" id="price" min="0" value="{{ old('price', $product->price ?? '') }}"
            class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
            placeholder="$2999" required="" />
    </div>
    <div class="sm:col-span-2">
        <label for="unit" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
            Unit
        </label>
        <select id="unit" name="unit"
            class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400">
            <option disabled selected="">Select Unit</option>
            <option value="und" {{old('unit', $product->unit) == 'und' ? 'selected' : ''  }}>unit (und)</option>
            <option value="lbs" {{old('unit', $product->unit) == 'lbs' ? 'selected' : ''  }}>pounds (lbs)</option>
            <option value="kg" {{ old('unit', $product->unit) == 'kg' ? 'selected' : '' }}>Kilograms (kg)</option>
        </select>
    </div>
</div>
