{{-- Mostrar errores generales --}}

@csrf
@if ($errors->any())
    <div class="absolute bottom-5 sm:top-5 right-5">
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
