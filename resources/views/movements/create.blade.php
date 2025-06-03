<x-app-layout>
  <x-slot name="header">
    <h2 class="font-black uppercase text-3xl text-gray-800 leading-tight pt-10">
      Add Movement
    </h2>
  </x-slot>
  <section>
    @if (session('error'))
      <div class="absolute bottom-5 right-0 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
        <strong>Error:</strong> {{ session('error') }}
      </div>
    @endif
    <livewire:invoice-form>
  </section>
</x-app-layout>
