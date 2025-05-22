@extends("layouts.layout")
@section("title", "Create Products")

@section("content")
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
                Add a new product
            </h2>
            <form action="{{ route("products.store") }}" method="POST">
                @include("products._form", ['product => new \App\Models\Product()])'])
                <button type="submit"
                    class="bg-primary focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
                    Add product
                </button>

            </form>
        </div>
    </section>
@endsection()
