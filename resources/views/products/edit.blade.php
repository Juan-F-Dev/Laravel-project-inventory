<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 leading-tight pt-10">
            Add Products
        </h2>
    </x-slot>
    <section >
        <div class="px-4 py-8 md:p-0 ">
            <form action="{{ route("products.update", $product) }}" method="POST"
                class="max-w-7xl m-auto bg-white shadow-xl p-10 rounded-lg">
                @include("products._form", ['product' => $product])
                <button type="submit"
                    class="bg-primary focus:ring-primary-200  hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
                    Edit Product
                </button>

            </form>
        </div>
    </section>
</x-app-layout>
