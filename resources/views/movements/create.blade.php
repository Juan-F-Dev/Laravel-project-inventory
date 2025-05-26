<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black uppercase text-3xl text-gray-800 leading-tight pt-10">
            Add Movement
        </h2>
    </x-slot>
    <section>
        <div class="p-4">
            <form action="{{ route("movements.store") }}" method="POST"
                class="max-w-7xl m-auto bg-white shadow-2xl py-10 px-10 rounded-lg">
                @include("movements._form", ['$movement)'])
                <button type="submit"
                    class="bg-primary focus:ring-primary-200 hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
                    Add product
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
