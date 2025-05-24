<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 leading-tight pt-10">
            Add Products
        </h2>
    </x-slot>
    <section>
        <div class=" px-4 py-8 lg:py-16">
            <form action="{{ route("products.store") }}" method="POST" class="max-w-4xl m-auto bg-white shadow-xl p-10 rounded-lg">
                @include("products._form", ['product => new \App\Models\Product()])'])
                <button type="submit"
                    class="bg-primary focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
                    Add product
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
