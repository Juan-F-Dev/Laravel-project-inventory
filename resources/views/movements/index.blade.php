<x-app-layout>
  <x-slot name="header">
    <h2 class="font-black uppercase text-3xl text-gray-800 leading-tight pt-10">
      Movements
    </h2>
      <a href="{{ route('movements.create') }}"
        class="my-2 inline-block rounded border border-gray-300 px-4 py-1 font-black transition-all duration-200 hover:bg-primary  hover:text-white">
        Create Movement
      </a>
  </x-slot>

</x-app-layout>
