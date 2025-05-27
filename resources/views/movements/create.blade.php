<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black uppercase text-3xl text-gray-800 leading-tight pt-10">
            Add Movement
        </h2>
    </x-slot>
    <section>
        <div class="p-4 flex flex-col sm:flex-row gap-5 max-w-7xl m-auto">
            <form action="{{ route("movements.store") }}" method="POST"
                class="w-full m-auto bg-white shadow-2xl py-10 px-10 rounded-lg">
                @include("movements._form", ['$movement)'])
                <button type="submit"
                    class="bg-primary focus:ring-primary-200 hover:bg-primary-800 mt-4 inline-flex items-center rounded-lg px-5 py-2.5 text-center text-sm font-medium text-white focus:ring-4 sm:mt-6">
                    Add product
                </button>
            </form>
            <div class="w-full max-w-md bg-white shadow-2xl py-8 px-6 rounded-lg">
                <h2 class="text-xl font-bold border-b pb-2 mb-4 text-gray-700">Resumen del Movimiento</h2>
            
                <div class="text-sm text-gray-600 space-y-2">
                    <div class="flex justify-between">
                        <span>Fecha:</span>
                        <span>{{ now()->format('d/m/Y') }}</span>
                    </div>
            
                    <div class="flex justify-between">
                        <span>Tipo de movimiento:</span>
                        <span class="font-semibold text-gray-800">Entrada</span>
                        <!-- Puedes reemplazar dinámicamente -->
                    </div>
            
                    <div class="flex justify-between">
                        <span>Proveedor / Cliente:</span>
                        <span class="font-semibold text-gray-800">Nombre aquí</span>
                    </div>
                </div>
            
                <div class="mt-6">
                    <h3 class="text-sm font-bold text-gray-600 mb-2">Productos</h3>
                    <ul class="divide-y text-sm text-gray-700">
                        <li class="py-2 flex justify-between">
                            <span>Camisa x2</span>
                            <span>$40.00</span>
                        </li>
                        <li class="py-2 flex justify-between">
                            <span>Pantalón x1</span>
                            <span>$30.00</span>
                        </li>
                        <!-- Agrega productos dinámicamente -->
                    </ul>
                </div>
            
                <div class="border-t mt-4 pt-4 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span>Subtotal:</span>
                        <span>$70.00</span>
                    </div>
                    <div class="flex justify-between font-bold text-lg text-primary mt-2">
                        <span>Total:</span>
                        <span>$70.00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
